@extends('layouts.admin')

@section('content')
    <div class="header bg-primary pb-6">
        <div class="container-fluid">
            <div class="header-body">
                <div class="row align-items-center py-4">
                    <div class="col-lg-6 col-7">
                        <h6 class="h2 text-white d-inline-block mb-0">Default</h6>
                        <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="#">Dashboards</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Default</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-lg-6 col-5 text-right">
                        <a href="#" class="btn btn-sm btn-neutral">New</a>
                        <a href="#" class="btn btn-sm btn-neutral">Filters</a>
                    </div>
                </div>
                <form class="my-5" method="POST" action="{{route('unit.store')}}">
                    @csrf
                    <div class="form-column shadow-sm p-5 mb-5 bg-white rounded">
                        <h1 class="lead">Uzupełnij <span class="text-primary">dane</span> jednostki OSP</h1>
                        <div class="form-floating mb-3">
                            <label for="street">Ulica</label>
                            <input id="street" type="text" name="street" class="form-control" value="{{ old('street') }}" placeholder="Warszawska">
                        </div>
                        <div class="form-floating mb-3">
                            <label for="number">Numer budynku</label>
                            <input id="number" type="text" name="number" class="form-control" value="{{ old('number') }}" placeholder="28A">
                        </div>
                        <div class="form-floating mb-3">
                            <label for="postcode">Kod pocztowy</label>
                            <input id="postcode" type="text" name="postcode" class="form-control" value="{{ old('postcode') }}" placeholder="05-400">
                        </div>
                        <div class="form-floating mb-3">
                            <label for="city">Miasto</label>
                            <input id="city" type="text" name="city" class="form-control" value="{{ old('city') }}" placeholder="Warszawa">
                        </div>
                        <div class="form-floating mb-3">
                            <label for="nip">NIP</label>
                            <input id="nip" type="text" name="nip" class="form-control" value="{{ old('nip') }}" placeholder="1234567890">
                        </div>
                        <div class="form-floating mb-3">
                            <label for="regon">REGON</label>
                            <input id="regon" type="text" name="regon" class="form-control" value="{{ old('regon') }}" placeholder="123456789">
                        </div>
                        <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
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
                            <input class="btn btn-primary" type="submit" name="submit" class="form-control" value="Zapisz!">
                        </div>
                    </div>
                </form>
        </div>
    </div>
@endsection
