<x-guest-layout>

    <form
        method="POST"
        action="{{ route('register') }}"
        class="hazmi-login-form"
    >

        @csrf

        <!-- Nama -->
        <div class="mb-4">

            <label
                for="name"
                class="form-label fw-semibold hazmi-login-label"
            >
                Nama Lengkap
            </label>

            <input
                id="name"
                type="text"
                name="name"
                value="{{ old('name') }}"
                class="form-control hazmi-login-input"
                required
                autofocus
            >

            @error('name')
                <div class="text-danger small mt-1">
                    {{ $message }}
                </div>
            @enderror

        </div>

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

        <!-- Konfirmasi Password -->
        <div class="mb-4">

            <label
                for="password_confirmation"
                class="form-label fw-semibold hazmi-login-label"
            >
                Konfirmasi Password
            </label>

            <input
                id="password_confirmation"
                type="password"
                name="password_confirmation"
                class="form-control hazmi-login-input"
                required
            >

            @error('password_confirmation')
                <div class="text-danger small mt-1">
                    {{ $message }}
                </div>
            @enderror

        </div>

        <!-- Action -->
        <div class="hazmi-login-action">

            <a
                href="{{ route('login') }}"
                class="hazmi-forgot-password"
            >
                Sudah punya akun?
            </a>

            <button
                type="submit"
                class="btn hazmi-login-button"
            >
                Daftar
            </button>

        </div>

    </form>

</x-guest-layout>