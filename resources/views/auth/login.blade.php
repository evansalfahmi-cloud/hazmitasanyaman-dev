<x-guest-layout>

    <form method="POST" action="{{ route('login') }}" class="hazmi-login-form">

        @csrf

        <!-- Email -->
        <div class="mb-4">

            <label
                for="email"
                class="form-label fw-semibold hazmi-login-label"
            >
                Email
            </label>

            <input
                id="email"
                type="email"
                name="email"
                value="{{ old('email') }}"
                class="form-control hazmi-login-input"
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
                class="form-label fw-semibold hazmi-login-label"
            >
                Password
            </label>

            <input
                id="password"
                type="password"
                name="password"
                class="form-control hazmi-login-input"
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
                class="form-check-label hazmi-login-remember"
                for="remember_me"
            >
                Remember Me
            </label>

        </div>

        <!-- Action -->
        <div class="hazmi-login-action mb-4">

            @if (Route::has('password.request'))

                <a
                    href="{{ route('password.request') }}"
                    class="hazmi-forgot-password"
                >
                    Lupa Password?
                </a>

            @endif

            <button
                type="submit"
                class="btn hazmi-login-button"
            >
                Login
            </button>

        </div>

        <!-- Register Customer -->
        <div class="text-center border-top pt-4">

            <p class="text-muted mb-3">
                Belum memiliki akun ?
            </p>

            <a
                href="{{ route('register') }}"
                class="btn btn-outline-secondary w-100"
            >
                <i class="fa-solid fa-user-plus me-2"></i>
                Daftar Akun 
            </a>

        </div>

    </form>

</x-guest-layout>
