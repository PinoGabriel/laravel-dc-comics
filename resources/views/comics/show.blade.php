@extends('layouts.app')

@section('content')
    <div id="underJumbo"></div>
    <div class="position-absolute container px-10">
        <div class="thumbAbsolute">
            <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
        </div>
    </div>
    <div class="container px-10 pt-3">
        <div class="row">
            <div class="col-8 pb-1">
                <h2>{{ strtoupper($comic->title) }}</h1>
                    <div class="greenCol row text-white">
                        <div class="col-8 shadow">
                            <div class="d-flex justify-content-between">
                                <article>US. Price ${{ $comic->price }}</article>
                                <article>AVAILABLE</article>
                            </div>
                        </div>
                        <div class="col-4 d-flex justify-content-center">
                            <article>Check Availability</article>
                        </div>
                    </div>
                    <p class="pt-3">{{ $comic->description }}</p>
            </div>
            <div class="col-4 d-flex flex-column">
                <h5 class="text-end">ADVERTAISMENT</h5>
                <img src="/assets/images/adv.jpg" alt="">
            </div>
        </div>
    </div>

    <div class="container text-center pt-4">
        <a class="toHome" href="{{ route('comics.index') }}">TORNA ALLA HOME</a>
    </div>
@endsection
