@extends('layouts.app-new')

@section('content')
    <section id="login">
        <div class="container">
            <h1>Login</h1>
            <form method="post" action="{{ route('login') }}">
                @csrf
                <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" name="email" value="{{ old('email') }}" required autofocus>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input id="password" name="password" type="password">
                </div>
                <div class="form-group">
                    <label>
                        <input id="remember" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Onthoudt mij
                    </label>
                </div>
                <button type="submit">Aanmelden</button>
            </form>
        </div>
    </section>
@endsection
