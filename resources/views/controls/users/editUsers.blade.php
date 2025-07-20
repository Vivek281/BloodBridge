@extends('backend.layouts.master')
@section('title', 'Users')
@section('content')

<div class="container">
    <form method="POST" action="{{ route('users.update', $user->id) }}">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Full Name</label>
            <input type="text" class="form-control" name="name" id="name" aria-describedby="nameHelp" value="{{ old('name', $user->name) }}">
            @error('name')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" value="{{ old('email', $user->email) }}">
            @error('email')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" name="password" id="password">
            @error('password')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="password_confirmation" class="form-label">Confirm Password</label>
            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">Phone</label>
            <input type="tel" class="form-control" name="phone" id="phone" value="{{ old('phone', $user->phone) }}">
            @error('phone')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="blood_group" class="form-label">Blood Group</label>
            <input type="text" class="form-control" name="blood_group" id="blood_group" value="{{ old('blood_group', $user->blood_group) }}">
            @error('blood_group')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="location" class="form-label">Location</label>
            <input type="text" class="form-control" name="location" id="location" value="{{ old('location', $user->location) }}">
            @error('location')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="role" class="form-label">Register as</label>
            <select class="form-select" id="role" name="role" required>
                <option selected disabled value="">Choose...</option>
                <option value="donor" {{ old('role', $user->role) == 'donor' ? 'selected' : '' }}>Donor</option>
                <option value="recipient" {{ old('role', $user->role) == 'recipient' ? 'selected' : '' }}>Recipient</option>
            </select>
            @error('role')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="is_available" name="is_available" value="1" {{ old('is_available', $user->is_available) ? 'checked' : '' }}>
            <label class="form-check-label" for="is_available">Is Available</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@endsection