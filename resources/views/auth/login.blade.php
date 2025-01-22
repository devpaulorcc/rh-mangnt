<x-layout-guest page-title="Login">

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-4">
    
                <!-- logo -->
                <div class="text-center mb-5">
                    <img src="{{ asset('assets/images/logo.png') }}" alt="Logo" width="200px">
                </div>
    
                <!-- login form -->
                <div class="card p-5">
    
                    <form action="{{ route('login') }}" method="post">

                        @csrf
    
                        <div class="mb-3">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email">
                            @error('email')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
    
                        <div class="mb-3">
                            <label for="password">Senha</label>
                            <input type="password" class="form-control" id="password" name="password">
                            @error('password')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
    
                        <div class="d-flex justify-content-between align-items-center">
                            <a href="{{ route('password.request') }}">Esqueceu a sua senha?</a>
                            <button type="submit" class="btn btn-primary px-4">Entrar</button>
                        </div>
    
                    </form>

                    @if(session('status'))
                        <div class="alert alert-success mt-3 text-center">
                            {{ session('status') }}
                        </div>
                    @endif
    
                </div>
    
            </div>
        </div>
    </div>

</x-layout-guest>
