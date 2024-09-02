<?php 
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;

    protected $fillable = ['names', 'code', 'client_id', 'role'];

    public function clients()
    {
        return $this->hasMany(Client::class);
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($admin) {
            if (empty($admin->code)) {
                $admin->code = str_pad(rand(0, 999999), 6, '0', STR_PAD_LEFT);
            }
        });
    }
}
