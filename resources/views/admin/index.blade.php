
@extends('layouts.app')

@section('title', 'Admin List')

@section('content')
    <div class="d-flex justify-content-between align-items-center">
        <h1>Admins</h1>
        <a href="{{ route('admin.create') }}" class="btn btn-primary">Add Admin</a>
    </div>

    <table class="table table-striped mt-4">
        <thead>
            <tr>
                <th>Name</th>
                <th>Code</th>
                <th>Role</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($admins as $admin)
                <tr>
                    <td>{{ $admin->names }}</td>
                    <td>{{ $admin->code }}</td>
                    <td>{{ $admin->role }}</td>
                    <td>
                        <a href="{{ route('admin.edit', $admin->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('admin.destroy', $admin->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
