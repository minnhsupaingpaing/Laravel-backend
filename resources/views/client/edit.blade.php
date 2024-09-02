
@extends('layouts.app')

@section('title', 'Edit Client')

@section('content')
    <h1>Edit Client</h1>

    <form action="{{ route('client.update', $client->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $client->name }}" required>
        </div>

        <div class="form-group">
            <label for="admin_id">Assign to Admin</label>
            <select name="admin_id" id="admin_id" class="form-control" required>
                @foreach($admins as $admin)
                    <option value="{{ $admin->id }}" {{ $client->admin_id == $admin->id ? 'selected' : '' }}>{{ $admin->names }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Update Client</button>
    </form>
@endsection
