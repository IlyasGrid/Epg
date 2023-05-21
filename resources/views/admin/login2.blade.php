<x-adminlayout>
    <div class="container">
        <div class="row d-flex justify-content-center mt-5">
            <div class="col-lg-4 col-md-6 col-sm-8">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title text-center">Admin Login</h4>
                        @if (session('status') === 'verification')
                            <div class="alert alert-info" role="alert">
                                A verification code has been sent to your email. Please enter the code below to reset
                                your password.
                            </div>
                            <form action="/admin/reset-password" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="verification_code" class="form-label">Verification Code</label>
                                    <input type="text" name="verification_code" id="verification_code"
                                        class="form-control" required>
                                </div>
                                @error('verification_code')
                                    <p class="text-danger m-5">{{ $message }}</p>
                                @enderror
                                <div class="text-center">
                                    <button type="submit" class="btn btn-outline-primary">Verify Code</button>
                                </div>
                            </form>
                        @elseif (session('status') === 'password-reset')
                            <div class="alert alert-success" role="alert">
                                Your password has been reset successfully. Please login with your new password.
                            </div>
                        @else
                            <form action="/admin/login" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" name="password" id="password" class="form-control" required>
                                </div>
                                @error('password')
                                    <p class="text-danger m-5">{{ $message }}</p>
                                @enderror
                                <div class="text-center">
                                    <button type="submit" class="btn btn-outline-primary">Login</button>
                                </div>
                            </form>
                            <div class="text-center mt-3">
                                <form action="/admin/send-verification-code" method="POST">
                                    @csrf
                                <button class="btn btn-outline-secondary">Forgot Password?</button>
                            </form>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-adminlayout>
