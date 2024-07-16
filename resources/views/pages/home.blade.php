@extends('layouts.app')

@section('main-content')
    <section class="bg-black">
        <div>
            @foreach($data as $dato)
                <img src="{{ $dato['thumb'] }}" alt="digital-comics">
                <h2>
                    {{ $dato['title'] }}
                </h2>
            @endforeach
        </div>
    </section>
    <section class="bg-blue">
        <div class="container around">
            <article>
                <img src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}" alt="digital-comics">
                <p>DIGITAL COMICS</p>
                <img src="{{ Vite::asset('resources/img/buy-comics-merchandise.png') }}" alt="merchandise">
                <p>DC MERCHANDISE</p>
                <img src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png') }}" alt="subscriptions">
                <p>SUBSCRIPTION</p>
                <img src="{{ Vite::asset('resources/img/buy-comics-shop-locator.png') }}" alt="shop">
                <p>COMIC SHOP LOCATOR</p>
                <img src="{{ Vite::asset('resources/img/buy-dc-power-visa.svg') }}" alt="power">
                <p>DC POWER VISA</p>
            </article>
        </div>
    </section>
@endsection