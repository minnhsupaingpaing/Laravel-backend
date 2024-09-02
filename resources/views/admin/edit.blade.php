
@extends('layouts.app')

@section('title', 'Edit Admin')

@section('content')
    <h1>Edit Admin</h1>

    <form action="{{ route('admin.update', $admin->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="names">Name</label>
            <input type="text" name="names" id="names" class="form-control" value="{{ $admin->admin_name }}" required>
        </div>

        <div class="form-group">
            <label for="role">Role</label>
            <select name="role" id="role" class="form-control" required>
                <option value="Super" {{ $admin->role == 'Super' ? 'selected' : '' }}>Super</option>
                <option value="Admin" {{ $admin->role == 'Admin' ? 'selected' : '' }}>Admin</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Update Admin</button>
    </form>
@endsection
