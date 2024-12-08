@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Contacts</h1>
    <a href="{{ route('contacts.create') }}" class="btn btn-primary mb-3" data-bs-toggle="tooltip" data-bs-placement="top" title="Only if you are logged in.">New Contact</a>

    <div class="list-group">
        @foreach ($contacts as $contact)
            <div class="list-group-item d-flex justify-content-between align-items-center">
                <div>
                    <strong>{{ $contact->name }}</strong> - 
                    {{ $contact->contact }} - 
                    <a href="mailto:{{ $contact->email }}">{{ $contact->email }}</a>
                </div>

                <!-- <div>
                    <a href="{{ route('contacts.show', $contact->id) }}" class="btn btn-info btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Only if you are logged in.">Details</a>
                    <a href="{{ route('contacts.edit', $contact->id) }}" class="btn btn-warning btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Only if you are logged in.">Edit</a>
                    
                    <form action="{{ route('contacts.destroy', $contact->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Only if you are logged in." onclick="return confirm('Are you sure you want to delete this contact?')">Delete</button>
                    </form>
                </div> -->

                <div>
                    <a href="{{ route('contacts.show', $contact->id) }}" 
                    class="btn btn-info btn-sm @guest disabled @endguest" 
                    data-bs-toggle="tooltip" 
                    data-bs-placement="top" 
                    title="@guest Faça login para acessar esta funcionalidade @else Visualizar detalhes @endguest">
                        Details
                    </a>

                    <a href="{{ route('contacts.edit', $contact->id) }}" 
                    class="btn btn-warning btn-sm @guest disabled @endguest" 
                    data-bs-toggle="tooltip" 
                    data-bs-placement="top" 
                    title="@guest Faça login para acessar esta funcionalidade @else Editar contato @endguest">
                        Edit
                    </a>

                    <form action="{{ route('contacts.destroy', $contact->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" 
                                class="btn btn-danger btn-sm @guest disabled @endguest" 
                                data-bs-toggle="tooltip" 
                                data-bs-placement="top" 
                                title="@guest Faça login para acessar esta funcionalidade @else Deletar contato @endguest"
                                @guest disabled @endguest
                                onclick="return confirm('Are you sure you want to delete this contact?')">
                            Delete
                        </button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
