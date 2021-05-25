@extends('templates/template')

<!-- Style -->
@section('style')
<link href="{{ asset('css/home.css') }}" rel="stylesheet">
@endsection


<!-- @section('title', 'Home') -->

<!-- Style -->
@section('style')
<link href="{{ asset('css/about.css') }}" rel="stylesheet">
@endsection


@section('content')

<main>
    <section class="banner">
        <div>
            <h1>ABOUT US</h1>
        </div>
    </section>
    <section class="introduction">
        <div>
            <p>
                StarFlight International &copy; was founded in 2000 based on the vision of Steve Weidig to be able to visit space.
                After tinkering in his garage for 16 years and the evolution of technology, the dream of a lifetime became a reality and
                you can purchase your tickets today to see what we imagined for you.
            </p>
        </div>
    </section>
    <section class="profiles">
        <div>
            <ul>
                <li>
                    <div class="profile-card">
                        <img src="" alt="">
                        <h4>Steve Weidig</h4>
                        <p>The original Elon Musk from Luxembourg, pioneer of cryptocurrency, he became a billionaire the year he turned 18. He built his first spaceship out of tuna cans and duct tape. A true visionnaire.</p>
                    </div>
                </li>
                <div>
                    <p>Accompanying him were his crew of madlads and misfits, ready to do anything it would take to make this project come to fruition: killing, spying or stealing. Real pirates those people.</p>
                </div>
                <li>
                    <div class="profile-card">
                        <img src="" alt="">
                        <h4>Yuliia Sotnichenko</h4>
                        <p>Had to leave her native Ukraine after strangling a mafia boss because she wasn’t in a good mood.</p>
                    </div>
                </li>
                <li>
                    <div class="profile-card">
                        <img src="" alt="">
                        <h4>Viktor Chitaev</h4>
                        <p>Raised by wolves in the depths of the Oural, his dream was to leave this god awful planet.</p>
                    </div>
                </li>
                <li>
                    <div class="profile-card">
                        <img src="" alt="">
                        <h4>Ivan Santos</h4>
                        <p>Consecrated “Dance King” of the Cape Verde Islands for 10 years in a row since age 6, it seemed natural he needed a new challenge.</p>
                    </div>
                </li>
                <li>
                    <div class="profile-card">
                        <img src="" alt="">
                        <h4>Maxime Severino</h4>
                        <p>Just another random white guy.</p>
                    </div>
                </li>
            </ul>
        </div>
    </section>
</main>

@endsection
