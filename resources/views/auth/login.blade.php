<x-guest-layout>

    <form method="POST" action="{{ route('login') }}">

        @csrf

        <!-- Email -->
        <div class="mb-5">

            <label class="block mb-2 text-sm font-semibold text-[#5C3A2E]">

                Email

            </label>

            <input
                type="email"
                name="email"
                value="{{ old('email') }}"
                required
                autofocus
                class="w-full rounded-xl border border-[#D8C3B5] bg-white px-4 py-3 text-[#3A2A22] focus:border-[#B67C5A] focus:ring-[#B67C5A]"
            >

        </div>

        <!-- Password -->
        <div class="mb-5">

            <label class="block mb-2 text-sm font-semibold text-[#5C3A2E]">

                Password

            </label>

            <input
                type="password"
                name="password"
                required
                class="w-full rounded-xl border border-[#D8C3B5] bg-white px-4 py-3 text-[#3A2A22] focus:border-[#B67C5A] focus:ring-[#B67C5A]"
            >

        </div>

        <!-- Remember -->
        <div class="flex items-center mb-6">

            <input
                type="checkbox"
                name="remember"
                class="rounded border-[#D8C3B5] text-[#9B5A3C] focus:ring-[#B67C5A]"
            >

            <span class="ml-2 text-sm text-[#6B4E3D]">

                Remember me

            </span>

        </div>

        <!-- Actions -->
        <div class="flex items-center justify-between">

            @if (Route::has('password.request'))

                <a
                    class="text-sm text-[#9B5A3C] hover:text-[#D97A7A]"
                    href="{{ route('password.request') }}"
                >

                    Lupa Password?

                </a>

            @endif

            <button
                type="submit"
                class="bg-[#9B5A3C] hover:bg-[#D97A7A] text-white font-semibold px-6 py-3 rounded-xl transition duration-300"
            >

                LOGIN

            </button>

        </div>

    </form>

</x-guest-layout>