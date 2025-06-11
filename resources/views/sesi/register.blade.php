@extends('layouts/regis')

@section('konten')
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="card shadow p-4" style="width: 100%; max-width: 400px;">
            <h2 class="text-center mb-4">Register</h2>
            <form action="/sesi/create" method="POST">
                @csrf
                <div class="mb3">
                    <label for="name" class="form-label">Nama</label>
                    <input type="text" value="{{ Session::get('name') }}" name="name" class="form-control">
                </div>
                <div class="mb3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" value="{{ Session::get ('email') }}"name="email" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control">
                </div>
                <div class="mb-3 d-grid">
                    <button type="submit" class="btn btn-primary">Register</button>
                </div>
        </form>
    </div>
@endsection