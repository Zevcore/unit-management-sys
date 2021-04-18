@extends('layouts.app')

@section('content')

    <div class="p-5">
        <h1 class="">Unit Management System</h1>
        <h3 class="text-muted">System Zarządzania Jednostką Ochotniczej Straży Pożarnej</h3>
    </div>
    <div class="row">
        <p class="lead" style="text-align: justify">Celem projektu UMS jest przeniesienie danych w jedno cyfrowe miejsce pozwalające na bezproblemowe
            zarządzania jednostką ochotniczej straży pożarnej. Do tej pory wszystkie dane były przechowywane
            w formie papierowej co znacznie utrudniało odnalezienie konkretnej informacji. System jest przejrzysty
            i łatwy w obsłudze. Wyposażony jest w alerty, które poinformują głowę jednostki o np.
            kończących się badaniach okresowych, recertyfikacji kursów PP czy badaniach technicznych.</p>
    </div>
    <div class="d-flex flex-row p-3">
        <a class="m-3 p-3 btn btn-primary" href="{{route('login')}}">Zaloguj się!</a>
        <a class="m-3 p-3 btn btn-success" href="{{route('register')}}">Dołącz już teraz!</a>
    </div>
@endsection
