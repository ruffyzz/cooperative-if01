@extends('layouts.main')

@section('content')
    <div class="row justify-content-center mt-5">
        <div class="col-md-4">
            <main class="form-registrasi">
                <form action="/register" method="POST">
                    <h1 class="h3 mb-3 fw-normal text-center">Form Registrasi</h1>
                    @csrf
                    <div class="form-floating mb-3">
                        <input type="text" name="name"
                            class="form-control @error('name') is-invalid
                        @enderror" id="name"
                            placeholder="name" value="{{ old('name') }}">
                        <label for="name">Nama Anda</label>
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating mb-3">
                        <input type="email" name="email"
                            class="form-control @error('email') is-invalid
                        @enderror" id="email"
                            placeholder="name@example.com" value="{{ old('email') }}">
                        <label for="floatingInput">Email address</label>
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" name="password"
                            class="form-control @error('password') is-invalid
                        @enderror"
                            id="password" placeholder="Password">
                        <label for="password">Password</label>
                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="d-grid gap-2">
                        <button class="btn btn-lg btn-primary" type="submit">Simpan</button>
                    </div>
                </form>
            </main>
        </div>
    </div>
@endsection
