
@extends('layouts.app')

@section('title', 'Add Client')

@section('content')
    <h1>Add Client</h1>

    <form action="{{ route('client.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="admin_id">Assign to Admin</label>
            <select name="admin_id" id="admin_id" class="form-control" required>
                @foreach($admins as $admin)
                    <option value="{{ $admin->id }}">{{ $admin->names }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-success">Add Client</button>
    </form>
@endsection
