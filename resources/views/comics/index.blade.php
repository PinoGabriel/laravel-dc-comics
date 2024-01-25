@extends('layouts.app')

@section('content')
    <section id="myCards">
        <div class="container position-relative d-flex flex-wrap py-5">
            <div class="seriesAbsolute position-absolute text-white">CURRENT SERIES</div>
            @foreach ($products as $item)
                <div class="myCard">
                    <img class="myImgThumb" src={{ $item->thumb }} alt="">
                    <p class="text-white pt-2">{{ strtoupper($item->title) }}</p>
                    <a href="{{ route('comics.show', $item->id) }}">Mostra dettagli</a>
                </div>
            @endforeach
        </div>
    </section>
@endsection
