<x-adminlayout>
    <div class="container">
        <div class="row d-flex justify-content-center mt-5">
            <div class="col-lg-4 col-md-6 col-sm-8">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title text-center">Admin Login</h4>
                        <form action="/admin/login" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" name="password" id="password" class="form-control" required>
                            </div>
                            @error('password')
                                <p class="text-danger  m-5  ">{{ $message }}</p>
                            @enderror
                            <div class="text-center">
                                <button type="submit" class="btn btn-outline-primary">Login</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-adminlayout>
