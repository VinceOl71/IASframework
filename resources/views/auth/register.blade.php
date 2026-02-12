<x-guest-layout>
    <div class="min-h-screen flex items-center justify-center bg-gray-100 py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-md w-full bg-white p-8 rounded-2xl shadow-lg">

            <h2 class="text-3xl font-bold text-indigo-600 mb-6 text-center">Create Your Account</h2>

            <!-- Session Status -->
            <x-auth-session-status class="mb-4 text-green-600 text-sm text-center" :status="session('status')" />

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <!-- Name -->
                <div class="mb-4">
                    <x-input-label for="name" :value="__('Name')" class="block text-gray-700 mb-1" />
                    <x-text-input id="name"
                                  class="block w-full border-gray-300 rounded-lg shadow-sm focus:ring-indigo-200 focus:ring focus:border-indigo-500"
                                  type="text"
                                  name="name"
                                  :value="old('name')"
                                  required
                                  autofocus />
                    <x-input-error :messages="$errors->get('name')" class="mt-2 text-red-500 text-sm" />
                </div>

                <!-- Email -->
                <div class="mb-4">
                    <x-input-label for="email" :value="__('Email')" class="block text-gray-700 mb-1" />
                    <x-text-input id="email"
                                  class="block w-full border-gray-300 rounded-lg shadow-sm focus:ring-indigo-200 focus:ring focus:border-indigo-500"
                                  type="email"
                                  name="email"
                                  :value="old('email')"
                                  required
                                  autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2 text-red-500 text-sm" />
                </div>

                <!-- Password -->
                <div class="mb-4">
                    <x-input-label for="password" :value="__('Password')" class="block text-gray-700 mb-1" />

                    <div class="relative">
                        <input id="password"
                               type="password"
                               name="password"
                               required
                               autocomplete="new-password"
                               class="block w-full pr-10 border-gray-300 rounded-lg shadow-sm focus:ring-indigo-200 focus:ring focus:border-indigo-500"
                               oninput="checkStrength(this.value)" />

                        <button type="button"
                                onclick="togglePassword()"
                                class="absolute inset-y-0 right-0 pr-3 flex items-center text-gray-500 hover:text-gray-700">
                            👁
                        </button>
                    </div>

                    <!-- Password Strength Bar -->
                    <div class="mt-2 h-2 w-full bg-gray-200 rounded">
                        <div id="strength-bar" class="h-2 w-0 rounded transition-all"></div>
                    </div>
                    <p id="strength-text" class="text-sm mt-1 text-gray-600"></p>

                    <x-input-error :messages="$errors->get('password')" class="mt-2 text-red-500 text-sm" />
                </div>

                <!-- Confirm Password -->
                <div class="mb-4">
                    <x-input-label for="password_confirmation" :value="__('Confirm Password')" class="block text-gray-700 mb-1" />
                    <x-text-input id="password_confirmation"
                                  class="block w-full border-gray-300 rounded-lg shadow-sm focus:ring-indigo-200 focus:ring focus:border-indigo-500"
                                  type="password"
                                  name="password_confirmation"
                                  required
                                  autocomplete="new-password" />
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2 text-red-500 text-sm" />
                </div>

                <!-- Actions -->
                <div class="flex flex-col sm:flex-row sm:items-center justify-between mt-6">
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 mb-3 sm:mb-0"
                       href="{{ route('login') }}">
                        {{ __('Already registered? Login') }}
                    </a>

                    <x-primary-button class="w-full sm:w-auto bg-indigo-600 hover:bg-indigo-700 py-2 px-6 rounded-lg text-white font-semibold">
                        {{ __('Register') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>

    <script>
    function togglePassword() {
        const pwd = document.getElementById('password');
        pwd.type = pwd.type === 'password' ? 'text' : 'password';
    }

    function checkStrength(password) {
        const bar = document.getElementById('strength-bar');
        const text = document.getElementById('strength-text');

        let score = 0;
        if (password.length >= 8) score++;
        if (/[A-Z]/.test(password)) score++;
        if (/[a-z]/.test(password)) score++;
        if (/\d/.test(password)) score++;
        if (/[^A-Za-z0-9]/.test(password)) score++;

        switch(score) {
            case 0:
            case 1:
            case 2:
                bar.style.width = '25%';
                bar.style.backgroundColor = 'red';
                text.textContent = 'Weak';
                text.className = 'text-red-500 text-sm mt-1';
                break;
            case 3:
            case 4:
                bar.style.width = '75%';
                bar.style.backgroundColor = 'orange';
                text.textContent = 'Medium';
                text.className = 'text-orange-500 text-sm mt-1';
                break;
            case 5:
                bar.style.width = '100%';
                bar.style.backgroundColor = 'green';
                text.textContent = 'Strong';
                text.className = 'text-green-500 text-sm mt-1';
                break;
        }
    }
    </script>
</x-guest-layout>
