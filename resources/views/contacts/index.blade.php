@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Contacts</h1>
    <a href="{{ route('contacts.create') }}" class="btn btn-primary mb-3">New Contact</a>

    <div class="list-group">
        @foreach ($contacts as $contact)
            <div class="list-group-item d-flex justify-content-between align-items-center">
                <div>
                    <strong>{{ $contact->name }}</strong> - 
                    {{ $contact->contact }} - 
                    <a href="mailto:{{ $contact->email }}">{{ $contact->email }}</a>
                </div>

                <div>
                    <a href="{{ route('contacts.show', $contact->id) }}" class="btn btn-info btn-sm">Details</a>
                    <a href="{{ route('contacts.edit', $contact->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    
                    <form action="{{ route('contacts.destroy', $contact->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this contact?')">Delete</button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
