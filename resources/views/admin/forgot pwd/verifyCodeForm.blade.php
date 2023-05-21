<x-adminLayout>
    <div class="container">
        <div class="row d-flex justify-content-center mt-5">
            <div class="col-lg-4 col-md-6 col-sm-8">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title text-center">Verification Code</h4>
                        <form action="/admin/verificationCode" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="Code" class="form-label">Code</label>
                                <input type="Code" name="Code" id="Code" class="form-control" required>
                            </div>
                            @error('Code')
                                <p class="text-danger  m-5  ">{{ $message }}</p>
                            @enderror
                            <div class="text-center">
                                <button type="submit" class="btn btn-outline-primary">submit</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-adminLayout>
