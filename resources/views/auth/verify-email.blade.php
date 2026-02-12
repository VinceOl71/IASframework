<x-guest-layout>
    <div class="min-h-screen flex items-center justify-center bg-gray-100 py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-md w-full bg-white p-8 rounded-2xl shadow-lg">

            <h2 class="text-2xl font-bold text-gray-800 mb-6 text-center">Verify Your Email</h2>

            <p class="mb-6 text-gray-600 text-center">
                Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn’t receive the email, we will gladly send you another.
            </p>

            @if (session('status') == 'verification-link-sent')
                <div class="mb-4 text-sm font-medium text-green-600 text-center">
                    {{ __('A new verification link has been sent to your email address.') }}
                </div>
            @endif

            <div class="flex flex-col sm:flex-row sm:justify-between gap-4 mt-6">
                <!-- Resend Verification Email -->
                <form method="POST" action="{{ route('verification.send') }}" class="w-full sm:w-auto">
                    @csrf
                    <x-primary-button class="w-full sm:w-auto bg-indigo-600 hover:bg-indigo-700 py-2 px-6 rounded-lg text-white font-semibold">
                        {{ __('Resend Verification Email') }}
                    </x-primary-button>
                </form>

                <!-- Logout -->
                <form method="POST" action="{{ route('logout') }}" class="w-full sm:w-auto flex justify-center">
                    @csrf
                    <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        {{ __('Log Out') }}
                    </button>
                </form>
            </div>

        </div>
    </div>
</x-guest-layout>
