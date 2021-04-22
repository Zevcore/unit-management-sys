@extends('layouts.app')

@section('content')
    <form class="my-5" method="POST" action="{{route('register')}}">
    @csrf
        <div class="form-column shadow-sm p-5 mb-5 bg-white rounded">
            <h1 class="lead">Zarejestruj <span class="text-primary">nowe</span> konto!</h1>
            <div class="form-floating mb-3">
                <input id="username" type="text" name="username" class="form-control" value="{{ old('username') }}" placeholder="Nazwa użytkownika">
                <label for="username">Nazwa użytkownika</label>
            </div>
            <div class="form-floating mb-3">
                <input id="email" type="email" name="email" class="form-control" value="{{ old('email') }}" placeholder="Adres e-mail">
                <label for="email">Adres e-mail</label>
            </div>
            <div class="form-floating mb-3">
                <input id="password" type="password" name="password" class="form-control" placeholder="Hasło">
                <label for="password">Hasło</label>
            </div>
            <div class="form-floating mb-3">
                <input id="password_confirmation" type="password" name="password_confirmation" class="form-control" placeholder="Powtórz hasło">
                <label for="password_confirmation">Powtórz hasło</label>
            </div>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="row p-1">
                <input class="btn btn-primary" type="submit" name="submit" class="form-control" value="Zarejestruj się!">
            </div>
            <hr>
            <a href="{{route('login')}}" class="my-5">Masz już konto?</a>
        </div>

    </form>
@endsection
