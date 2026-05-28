<x-guest-layout>

    <form method="POST" action="{{ route('login') }}">

        @csrf

        <!-- Email -->
        <div class="mb-4">

            <label
                for="email"
                class="form-label fw-semibold"
                style="color:#5C3A2E;"
            >
                Email
            </label>

            <input
                id="email"
                type="email"
                name="email"
                value="{{ old('email') }}"
                class="form-control"
                required
                autofocus
            >

            @error('email')
                <div class="text-danger small mt-1">
                    {{ $message }}
                </div>
            @enderror

        </div>

        <!-- Password -->
        <div class="mb-4">

            <label
                for="password"
                class="form-label fw-semibold"
                style="color:#5C3A2E;"
            >
                Password
            </label>

            <input
                id="password"
                type="password"
                name="password"
                class="form-control"
                required
            >

            @error('password')
                <div class="text-danger small mt-1">
                    {{ $message }}
                </div>
            @enderror

        </div>

        <!-- Remember Me -->
        <div class="form-check mb-4">

            <input
                class="form-check-input"
                type="checkbox"
                name="remember"
                id="remember_me"
            >

            <label
                class="form-check-label"
                for="remember_me"
            >
                Remember Me
            </label>

        </div>

        <!-- Action -->
        <div class="d-flex justify-content-between align-items-center">

            @if (Route::has('password.request'))

                <a
                    href="{{ route('password.request') }}"
                    class="text-decoration-none"
                    style="color:#9B5A3C;"
                >
                    Lupa Password?
                </a>

            @endif

            <button
                type="submit"
                class="btn text-white"
                style="background-color:#9B5A3C;"
            >
                Login
            </button>

        </div>

    </form>

</x-guest-layout>