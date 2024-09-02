<div id="auth">
    <div class="row h-100">
        <div class="col-lg-5 col-12">
            <div id="auth-left">
                <div class="auth-logo">
                    <a href="#"><img src="{{ asset('./assets/compiled/svg/logo.svg') }}" alt="Logo" /></a>
                </div>
                <h1 class="auth-title">Log in.</h1>
                @if (session()->has('error'))
                    <div class="text-danger">{{ session('error') }}</div>
                @endif
                <form wire:submit.prevent="login">
                    <div class="form-group position-relative has-icon-left mb-4">
                        <input type="email" class="form-control form-control-xl" placeholder="Email"
                            wire:model="email" id="email" required />
                        <div class="form-control-icon">
                            <i class="bi bi-envelope"></i>
                        </div>
                    </div>
                    <div class="form-group position-relative has-icon-left mb-4">
                        <input type="password" class="form-control form-control-xl" placeholder="Password"
                            wire:model="password" id="password" required />
                        <div class="form-control-icon">
                            <i class="bi bi-shield-lock"></i>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block btn-lg shadow-lg mt-5">
                        Log in
                    </button>
                </form>
                <div class="text-center mt-5 text-lg fs-4">
                    <p class="text-gray-600">
                        Don't have an account?
                        <a href="/admin/register" class="font-bold">Sign up</a>.
                    </p>
                </div>
            </div>
        </div>
        <div class="col-lg-7 d-none d-lg-block">
            <div id="auth-right"></div>
        </div>
    </div>
</div>
