@extends('layouts.admin')

@section('content')
    <div class="header bg-primary pb-6">
        <div class="container-fluid">
            <div class="header-body">
                <div class="row align-items-center py-4">
                    <div class="col-lg-6 col-7">
                        <h6 class="h2 text-white d-inline-block mb-0">Strażacy</h6>
                        <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                <li class="breadcrumb-item" aria-current="page">Strażacy</li>
                                <li class="breadcrumb-item active" aria-current="page">Dodaj</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <form class="container mt-3" method="POST" action="{{route('firefighter.store')}}">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label class="text-muted" for="name">Imię</label>
                    <input type="text" name="name" id="name" value="{{old('name')}}" class="form-control" placeholder="Jan">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label class="text-muted" for="second_name">Drugie imię</label>
                    <input type="text" name="second_name" id="second_name" value="{{old('second_name')}}" class="form-control" placeholder="Andrzej">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label class="text-muted" for="surname">Nazwisko</label>
                    <input type="text" name="surname" id="surname" value="{{old('surname')}}" class="form-control" placeholder="Kowalski">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-select">
                    <label class="text-muted" for="sex">Płeć</label>
                    <select name="sex" id="sex" class="form-control">
                        <option value="1">Mężczyzna</option>
                        <option value="2">Kobieta</option>
                    </select>
                </div>
            </div>


        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label class="text-muted" for="birth_date">Data urodzenia</label>
                    <input type="date" name="birth_date" id="birth_date" value="{{old('birth_date')}}" class="form-control">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label class="text-muted" for="birth_city">Miejsce urodzenia</label>
                    <input type="text" name="birth_city" id="birth_city" value="{{old('birth_city')}}" class="form-control" placeholder="Warszawa">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label class="text-muted" for="fathers_name">Imię ojca</label>
                    <input type="fathers_name" name="fathers_name" id="fathers_name" value="{{old('fathers_name')}}" class="form-control" placeholder="Zbigniew">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label class="text-muted" for="pesel">PESEL</label>
                    <input type="text" name="pesel" id="pesel" value="{{old('second_name')}}" class="form-control" placeholder="11223344556">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label class="text-muted" for="id_number">Seria i nr. dowodu osobistego</label>
                    <input type="text" name="id_number" id="id_number" value="{{old('id_number')}}" class="form-control" placeholder="XYZ 123456">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-select">
                    <label class="text-muted" for="education">Wykształcenie</label>
                    <select name="education" id="education" class="form-control">
                        <option value="1">Podstawowe</option>
                        <option value="2">Średnie</option>
                        <option value="3">Zawodowe</option>
                        <option value="4">Wyższe</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <input type="submit" name="submit" id="submit" class="btn btn-dark" value="Dodaj">
                </div>
            </div>
        </div>
    </form>
@endsection
