@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6">
    <h2 class="text-2xl font-bold mb-4">Edit Profile</h2>

    @if(session('status') === 'profile-updated')
        <div class="bg-green-100 text-green-800 p-2 rounded mb-4">
            Profile updated successfully!
        </div>
    @endif

    <form method="POST" action="{{ route('profile.update') }}">
        @csrf
        @method('PATCH')

        <!-- Name -->
        <div class="mb-4">
            <label for="name" class="block font-semibold">Name</label>
            <input type="text" id="name" name="name" value="{{ old('name', $user->name) }}"
                   class="border p-2 w-full rounded @error('name') border-red-500 @enderror">
            @error('name')
                <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Email -->
        <div class="mb-4">
            <label for="email" class="block font-semibold">Email</label>
            <input type="email" id="email" name="email" value="{{ old('email', $user->email) }}"
                   class="border p-2 w-full rounded @error('email') border-red-500 @enderror">
            @error('email')
                <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Password -->
        <div class="mb-4">
            <label for="password" class="block font-semibold">New Password (optional)</label>
            <input type="password" id="password" name="password"
                   class="border p-2 w-full rounded @error('password') border-red-500 @enderror">
            @error('password')
                <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Password Confirmation -->
        <div class="mb-4">
            <label for="password_confirmation" class="block font-semibold">Confirm Password</label>
            <input type="password" id="password_confirmation" name="password_confirmation"
                   class="border p-2 w-full rounded">
        </div>

        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
            Update Profile
        </button>
    </form>

    <hr class="my-6">

    <!-- Delete Account -->
    <form method="POST" action="{{ route('profile.destroy') }}">
        @csrf
        @method('DELETE')
        <div class="mb-4">
            <label for="password_delete" class="block font-semibold text-red-700">Confirm Password to Delete Account</label>
            <input type="password" id="password_delete" name="password"
                   class="border p-2 w-full rounded @error('password') border-red-500 @enderror">
            @error('password')
                <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>
        <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600">
            Delete Account
        </button>
    </form>
</div>
@endsection
