@extends('layouts.main')

@section('content')
<div class="container mt-5">
            <div class="card p-2 ">
                <div class="card-body text-center">
                    <div class="row justify-content-center mt-5">
                        <div class="col-md-4">
                            @if (session()->Has('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('success') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            @endif

                            @if (session()->Has('loginError'))
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    {{ session('loginError') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            @endif
                            <main class="form-signin">
                                <form action="/login" method="POST">
                                    @csrf
                                    <h1 class="h3 mb-3 fw-normal text-center">Please Login</h1>

                                    <div class="form-floating mb-3">
                                        <input type="email" name="email"
                                            class="form-control @error('email') is-invalid
                                        @enderror" id="email"
                                            placeholder="name@example.com" value="{{ old('email') }}" autofocus required>
                                        <label for="email">Email address</label>
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
                                            id="password" placeholder="Password" required>
                                        <label for="password">Password</label>
                                        @error('password')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="d-grid gap-2">
                                        <button class="btn btn-lg btn-primary" type="submit">Login</button>
                                    </div>
                                    <small class="d-blok text-center mt-3">Belum Registrasi? <a href="/register">Registrasi Sekarang!</a>
                                    </small>
                                </form>
                            </main>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
