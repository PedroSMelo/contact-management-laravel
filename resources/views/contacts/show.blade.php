@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Contact Details</h1>
        <div class="card">
            <div class="card-body">
                <p><strong>Name:</strong> {{ $contact->name }}</p>
                <p><strong>Contact:</strong> {{ $contact->contact }}</p>
                <p><strong>Email:</strong> {{ $contact->email }}</p>
                <a href="{{ route('contacts.edit', $contact) }}" class="btn btn-warning">Edit</a>
                <form action="{{ route('contacts.destroy', $contact) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
        </div>
    </div>
@endsection
