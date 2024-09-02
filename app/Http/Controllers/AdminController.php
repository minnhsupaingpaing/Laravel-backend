<?php
namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $admins = Admin::all();
        return view('admin.index', compact('admins'));
    }

    public function create()
    {
        return view('admin.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'names' => 'required|string|max:255',
            'role' => 'required|in:Super,Admin',
        ]);

        Admin::create($request->all());

        return redirect()->route('admin.index')->with('success', 'Admin created successfully.');
    }

    public function edit(Admin $admin)
    {
        return view('admin.edit', compact('admin'));
    }

    public function update(Request $request, Admin $admin)
    {
        $request->validate([
            'names' => 'required|string|max:255',
            'role' => 'required|in:Super,Admin',
        ]);

        $admin->update($request->all());

        return redirect()->route('admin.index')->with('success', 'Admin updated successfully.');
    }

    public function destroy(Admin $admin)
    {
        $admin->delete();

        return redirect()->route('admin.index')->with('success', 'Admin deleted successfully.');
    }
}
