<x-guest-layout>
    <div class="min-h-screen flex items-center justify-center bg-gray-100 py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-md w-full bg-white p-8 rounded-2xl shadow-lg">

            <h2 class="text-2xl font-bold text-gray-800 mb-6 text-center">Reset Password</h2>

            <form method="POST" action="{{ route('password.store') }}">
                @csrf

                <!-- Password Reset Token -->
                <input type="hidden" name="token" value="{{ $request->route('token') }}">

                <!-- Email Address -->
                <div class="mb-4">
                    <x-input-label for="email" :value="__('Email')" class="block text-gray-700 mb-1" />
                    <x-text-input id="email"
                                  class="block mt-1 w-full border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500"
                                  type="email" name="email"
                                  :value="old('email', $request->email)"
                                  required autofocus autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2 text-red-500 text-sm" />
                </div>

                <!-- Password -->
                <div class="mb-4">
                    <x-input-label for="password" :value="__('Password')" class="block text-gray-700 mb-1" />
                    <x-text-input id="password"
                                  class="block mt-1 w-full border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500"
                                  type="password"
                                  name="password"
                                  required autocomplete="new-password" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2 text-red-500 text-sm" />
                </div>

                <!-- Confirm Password -->
                <div class="mb-4">
                    <x-input-label for="password_confirmation" :value="__('Confirm Password')" class="block text-gray-700 mb-1" />
                    <x-text-input id="password_confirmation"
                                  class="block mt-1 w-full border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500"
                                  type="password"
                                  name="password_confirmation"
                                  required autocomplete="new-password" />
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2 text-red-500 text-sm" />
                </div>

                <!-- Submit Button -->
                <div class="flex justify-end mt-6">
                    <x-primary-button class="w-full sm:w-auto bg-indigo-600 hover:bg-indigo-700 py-2 px-6 rounded-lg text-white font-semibold">
                        {{ __('Reset Password') }}
                    </x-primary-button>
                </div>

            </form>

        </div>
    </div>
</x-guest-layout>
