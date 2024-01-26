@extends('layouts.app')

@section('content')
    <section id="myCards">
        <div class="container position-relative d-flex flex-wrap py-5">
            <div class="seriesAbsolute position-absolute text-white">CURRENT SERIES</div>
            @foreach ($products as $item)
                <div class="myCard">
                    <img class="myImgThumb" src={{ $item->thumb }} alt="">
                    <p class="text-white pt-2">{{ strtoupper($item->title) }}</p>
                    <div class="d-flex">
                        <a class="btn btn-success" href="{{ route('comics.show', $item->id) }}">Details</a>
                        <a class="btn btn-primary mx-2" href="{{ route('comics.edit', $item->id) }}">Edit</a>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="container d-flex justify-content-center p-4 newComic">
            <div>
                <a href="{{ route('comics.create') }}">Crea il tuo fumetto</a>
            </div>
        </div>
    </section>
@endsection
