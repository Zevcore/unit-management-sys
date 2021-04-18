@extends('layouts.app')

@section('content')
    <form class="my-5" method="POST" action="{{route('register')}}">
    @csrf
        <div class="form-column shadow-sm p-5 mb-5 bg-white rounded">
            <h1 class="lead">Zarejestruj <span class="text-primary">swoją</span> jednostkę!</h1>
            <div class="form-floating mb-3">
                <input id="name" type="text" name="name" class="form-control" value="{{ old('name') }}" placeholder="Nazwa jednostki">
                <label for="name">Nazwa jednostki</label>
            </div>
            <div class="form-floating mb-3">
                <input id="address" type="text" name="address" class="form-control" value="{{ old('address') }}" placeholder="Adres jednostki">
                <label for="address">Adres jednostki</label>
            </div>
            <div class="form-floating mb-3">
                <input id="nip" type="text" name="nip" class="form-control" value="{{ old('nip') }}" placeholder="1234567890">
                <label for="nip">NIP</label>
            </div>
            <div class="form-floating mb-3">
                <input id="regon" type="text" name="regon" class="form-control" value="{{ old('regon') }}" placeholder="123456789">
                <label for="regon">REGON</label>
            </div>
            <div class="form-floating mb-3">
                <input id="user" type="text" name="user" class="form-control" value="{{ old('user') }}" placeholder="Nazwa użytkownika">
                <label for="user">Nazwa użytkownika</label>
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
            <a href="{{route('login')}}" class="my-5">Masz już konto?</a>
            <div class="row p-1">
                <input class="btn btn-primary" type="submit" name="submit" class="form-control" value="Zarejestruj się!">
            </div>
        </div>

    </form>
@endsection
