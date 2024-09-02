<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'code', 'password'];

    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($client) {
            if (empty($client->code)) {
                $client->code = 'Client_' . str_pad(rand(0, 999999), 6, '0', STR_PAD_LEFT);
            }
            if (empty($client->password)) {
                $client->password = str_pad(rand(0, 999999), 6, '0', STR_PAD_LEFT);
            }
        });
    }
}
