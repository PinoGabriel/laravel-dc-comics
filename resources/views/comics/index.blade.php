@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h2>Fumetti</h2>
        </div>
        <div class="row">
            @foreach ($products as $item)
                <div class="col-3">
                    <div class="card" style="width: 18rem;">
                        <img src="{{ $item->thumb }}" class="card-img-top" alt="{{ $item->title }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $item->title }}</h5>
                            <p class="card-text">{{ $item->price }}</p>
                            <a href="#" class="btn btn-primary">Mostra dettagli</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
