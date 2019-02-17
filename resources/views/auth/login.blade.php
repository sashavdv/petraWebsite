@extends('layouts.app')

@section('content')
    <section id="login">
        <div class="ui container">
            <h1>Login</h1>
            <form method="post" class="ui form" action="{{ route('login') }}">
                @csrf
                <div class="field">
                    <label for="email">Email</label>
                    <input id="email" name="email" value="{{ old('email') }}" required autofocus>
                </div>
                <div class="field">
                    <label for="password">Password</label>
                    <input id="password" name="password" type="password">
                </div>

                <div class="field">
                    <div class="ui checkbox">
                        <input name="remember" id="remember" type="checkbox" tabindex="0" class="hidden" {{ old('remember') ? 'checked' : '' }}>
                        <label>Onthoudt mij</label>
                    </div>
                </div>
                <button class="ui button" type="submit">Aanmelden</button>
            </form>
        </div>
    </section>
@endsection

@section('scripts')
    <script>
        $('.ui.checkbox')
            .checkbox()
        ;
    </script>
@endsection
