@extends('layouts.app')

@section('title', 'Client List')

@section('content')
    <div class="d-flex justify-content-between align-items-center">
        <h1>Clients</h1>
        <a href="{{ route('client.create') }}" class="btn btn-primary">Add Client</a>
    </div>

    <table class="table table-striped mt-4">
        <thead>
            <tr>
                <th>Name</th>
                <th>Code</th>
                <th>Admin</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($clients as $client)
                <tr>
                    <td>{{ $client->name }}</td>
                    <td>{{ $client->code }}</td>
                    <td>{{ optional($client->admin)->names}}</td> <!-- Safely handle null admin -->
                    <td>
                        <a href="{{ route('client.edit', $client->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('client.destroy', $client->id) }}" method="POST" style="display:inline;">
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
