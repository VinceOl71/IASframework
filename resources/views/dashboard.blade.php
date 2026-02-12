@extends('layouts.app')

@section('content')
    <div class="bg-white p-8 rounded-xl shadow-lg">
        <h2 class="text-3xl font-bold text-indigo-600 mb-4">Dashboard</h2>
        <p class="text-gray-700">Welcome, {{ Auth::user()->name }}! You are logged in.</p>

        <div class="mt-6">
            <a href="{{ route('profile.edit') }}" class="bg-indigo-600 text-white px-6 py-3 rounded-lg hover:bg-indigo-700 transition">
                Edit Profile
            </a>
        </div>
    </div>
@endsection
