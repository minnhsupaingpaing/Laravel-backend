
@extends('layouts.app')

@section('title', 'Add Admin')

@section('content')
    <h1>Add Admin</h1>

    <form action="{{ route('admin.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="names">Name</label>
            <input type="text" name="names" id="names" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="role">Role</label>
            <select name="role" id="role" class="form-control" required>
                <option value="Super">Super</option>
                <option value="Admin">Admin</option>
            </select>
        </div>

        <button type="submit" class="btn btn-success">Add Admin</button>
    </form>
@endsection
