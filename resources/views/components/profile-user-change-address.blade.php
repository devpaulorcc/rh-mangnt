<div class="col-6">
    <div class="border p-5 shadow-sm">
        <form action="{{ route('user.profile.update-user-address') }}" method="post">

            @csrf

            <h3>Change user address</h3>

            <hr>

            <div class="mb-3">
                <label for="address" class="form-label">Address</label>
                <input type="text" name="address" id="address" class="form-control" value="{{ old('address', $colaborator->detail->address) }}">
                @error('address')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="d-flex gap-3">

                <div class="mb-3">
                    <label for="zip_code" class="form-label">Zip code</label>
                    <input type="text" name="zip_code" id="zip_code" class="form-control" value="{{ old('zip_code', $colaborator->detail->zip_code) }}">
                    @error('zip_code')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="city" class="form-label">City</label>
                    <input type="text" name="city" id="city" class="form-control" value="{{ old('city', $colaborator->detail->city) }}">
                    @error('city')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

            </div>

            <div class="mb-3">
                <label for="phone" class="form-label">Phone</label>
                <input type="text" name="phone" id="phone" class="form-control" value="{{ old('phone', $colaborator->detail->phone) }}">
                @error('phone')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-primary">Update user address</button>
            </div>

        </form>

        @if(session('success_change_address'))
            <div class="alert alert-success mt-3">
                {{ session('success_change_address') }}
            </div>
        @endif
    </div>
</div>