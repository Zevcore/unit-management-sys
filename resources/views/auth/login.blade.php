@extends('layouts.app')

@section('content')
    <form class="my-5" method="POST" action="{{route('login')}}">
    @csrf
        <div class="form-column shadow-sm p-5 mb-5 bg-white rounded">
            <h1 class="lead">Zarządzaj <span class="text-primary">jednostką!</span></h1>
            <div class="form-floating mb-3">
                <input id="email" type="email" name="email" class="form-control" value="{{ old('email') }}" placeholder="Adres e-mail">
                <label for="email">Adres e-mail</label>
            </div>
            <div class="form-floating mb-3">
                <input id="password" type="password" name="password" class="form-control" placeholder="Hasło">
                <label for="password">Hasło</label>
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
            @if(Route::has('password.request'))
                <a href="{{route('password.request')}}" class="my-5">Zapomniałeś/-aś hasła?</a>
            @endif
            <div class="row p-1">
                <input class="btn btn-primary" type="submit" name="submit" class="form-control" value="Zaloguj się!">
            </div>
        </div>

    </form>
@endsection
