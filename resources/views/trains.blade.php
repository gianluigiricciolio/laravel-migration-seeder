@extends('layouts.app')

@section('page-title')
    Trains
@endsection
@section('trains')
    <section>
        <div class="container py-4 mt-4">
            <h3>Miglior prezzo garantito</h3>
            <p> Con noi prenoti al prezzo più basso.
                E se proprio ne trovi uno inferiore altrove, ti rimborsiamo la
                differenza.</p>

            {{-- <img src="{{ Vite::asset('resources/img/logo.jpg') }}" alt="pic"> --}}
            <ul class="list-unstyled py-4 d-flex flex-wrap justify-content-between gap-2">
                @foreach ($trains as $train)
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <li class="py-3">

                                <h5 class="fw-semibold py-2">{{ $train->azienda }}</h5>
                                <div>Partenza: {{ $train->stazione_di_partenza }}</div>
                                <div>Arrivo: {{ $train->stazione_di_arrivo }}</div>
                                {{-- per creare un data leggibile uso libreria carbon (namespace) --}}
                                <div>Data partenza:
                                    {{ \Carbon\Carbon::parse($train->data_di_partenza)->format('d/m/Y') }}
                                </div>
                                {{-- per creare un data leggibile uso libreria carbon (namespace) --}}
                                <div>Data arrivo:
                                    {{ \Carbon\Carbon::parse($train->data_di_arrivo)->format('d/m/Y') }}
                                </div>

                                <div>Orario partenza: {{ \Carbon\Carbon::parse($train->orario_di_partenza)->format('H.i') }}
                                </div>
                                <div>Orario arrivo: {{ \Carbon\Carbon::parse($train->orario_di_arrivo)->format('H.i') }}
                                </div>
                                <div>Codice treno: {{ $train->codice_treno }}</div>
                            </li>
                            <a href="#" class="btn btn-success">Seleziona </a>
                        </div>
                    </div>
                @endforeach

            </ul>
            <div class="d-flex justify-content-center">
                <a href="#" class="btn btn-success">TORNA SU</a>
            </div>

        </div>
    </section>
@endsection
