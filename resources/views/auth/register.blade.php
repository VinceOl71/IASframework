<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />
            <div style="position: relative;">
                <x-text-input id="password" class="block mt-1 w-full"
                    type="password"
                    name="password"
                    required
                    autocomplete="new-password"
                    oninput="checkStrength(this.value)" />

                <button type="button"
                        onclick="togglePassword()"
                        style="position:absolute; right:10px; top:5px;">
                    👁
                </button>
            </div>
            <div class="mt-2">
                <div style="height:8px; background:#ddd; border-radius:5px;">
                    <div id="strength-bar" style="height:8px; width:0%; border-radius:5px;"></div>
                </div>
                <small id="strength-text" style="display:block; margin-top:5px;"></small>
            </div>
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                          type="password"
                          name="password_confirmation"
                          required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
               href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>

    <script>
        function togglePassword() {
            const password = document.getElementById('password');
            password.type = password.type === 'password' ? 'text' : 'password';
        }

        function checkStrength(password) {
            const strengthBar = document.getElementById('strength-bar');
            const strengthText = document.getElementById('strength-text');

            let strength = 0;

            if (password.length >= 8) strength += 1;
            if (/[A-Z]/.test(password)) strength += 1;
            if (/[a-z]/.test(password)) strength += 1;
            if (/[0-9]/.test(password)) strength += 1;
            if (/[\W]/.test(password)) strength += 1;

            switch(strength) {
                case 0:
                case 1:
                    strengthBar.style.width = '20%';
                    strengthBar.style.background = 'red';
                    strengthText.innerText = 'Very Weak';
                    break;
                case 2:
                    strengthBar.style.width = '40%';
                    strengthBar.style.background = 'orange';
                    strengthText.innerText = 'Weak';
                    break;
                case 3:
                    strengthBar.style.width = '60%';
                    strengthBar.style.background = 'yellow';
                    strengthText.innerText = 'Medium';
                    break;
                case 4:
                    strengthBar.style.width = '80%';
                    strengthBar.style.background = 'lightgreen';
                    strengthText.innerText = 'Strong';
                    break;
                case 5:
                    strengthBar.style.width = '100%';
                    strengthBar.style.background = 'green';
                    strengthText.innerText = 'Very Strong';
                    break;
            }
        }
    </script>
</x-guest-layout>
