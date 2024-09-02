<?php
namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Admin;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        $clients = Client::all();
        return view('client.index', compact('clients'));
    }

    public function create()
    {
        $admins = Admin::all();
        return view('client.create', compact('admins'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'admin_id' => 'required|exists:admins,id',
        ]);

        Client::create($request->all());

        return redirect()->route('client.index')->with('success', 'Client created successfully.');
    }

    public function edit(Client $client)
    {
        $admins = Admin::all();
        return view('client.edit', compact('client', 'admins'));
    }

    public function update(Request $request, Client $client)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'admin_id' => 'required|exists:admins,id',
        ]);

        $client->update($request->all());

        return redirect()->route('client.index')->with('success', 'Client updated successfully.');
    }

    public function destroy(Client $client)
    {
        $client->delete();

        return redirect()->route('client.index')->with('success', 'Client deleted successfully.');
    }
}
