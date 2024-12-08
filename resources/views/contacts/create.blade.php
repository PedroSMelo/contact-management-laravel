@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Create New Contact</h1>
    
    <div class="card">
        <div class="card-body">
            <form action="{{ route('contacts.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" required>
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="contact" class="form-label">Contact</label>
                    <input type="text" 
                        name="contact" 
                        id="contact" 
                        class="form-control @error('contact') is-invalid @enderror" 
                        value="{{ old('contact') }}" 
                        required 
                        placeholder="912345678"
                        pattern="9\d{8}" 
                        title="The phone number must have 9 digits and start with 9."
                        maxlength="9">
                    @error('contact')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required>
                    @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Create Contact</button>
            </form>
        </div>
    </div>
</div>
@endsection
