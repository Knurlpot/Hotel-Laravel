@extends('layouts.app')

@section('content')

{{-- HERO SECTION --}}
<section class="hero">
    <nav class="navbar">
        <div class="logo">POSEIDONIAN</div>
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/rooms">Rooms</a></li>
            <li><button class="logout">Log Out</button></li>
        </ul>
    </nav>

    <div class="hero-content">
        <h1>POSEIDONIAN</h1>
        <p>Your Home away from Home.</p>
    </div>

    {{-- SEARCH BAR --}}
    <div class="search-bar">
        <div>
            <label>Check in</label>
            <input type="date">
        </div>
        <div>
            <label>Check out</label>
            <input type="date">
        </div>
        <div>
            <label>Room</label>
            <select>
                <option>Single</option>
                <option>Double</option>
                <option>Suite</option>
            </select>
        </div>
        <button class="search-btn">🔍</button>
    </div>
</section>

{{-- ROOMS & SUITES --}}
<section class="rooms">
    <small>Raising comfort to the highest level.</small>
    <h2>Rooms & Suites</h2>

    <div class="room-cards">

        {{-- SINGLE --}}
        <div class="room-card">
            <img src="{{ asset('images/single.jpg') }}">
            <div class="overlay">
                <h3>Single</h3>
                <p>₱ 1,309 / night</p>
                <a href="/rooms/single">Book Now →</a>
            </div>
        </div>

        {{-- DOUBLE --}}
        <div class="room-card">
            <img src="{{ asset('images/double.jpg') }}">
            <div class="overlay">
                <h3>Double</h3>
                <p>₱ 3,309 / night</p>
                <a href="/rooms/double">Book Now →</a>
            </div>
        </div>

        {{-- SUITE --}}
        <div class="room-card">
            <img src="{{ asset('images/suite.jpg') }}">
            <div class="overlay">
                <h3>Suite</h3>
                <p>₱ 5,309 / night</p>
                <a href="/rooms/suite">Book Now →</a>
            </div>
        </div>

    </div>
</section>

{{-- INSPIRED SECTION --}}
<section class="inspired">
    <h2>Inspired by the Sea. Designed for Comfort.</h2>

    <img src="{{ asset('images/inspired.jpg') }}">

    <p>
        Poseidonian Hotel is a contemporary coastal retreat created for travelers
        who value comfort, style, and seamless service.
    </p>
</section>

{{-- TESTIMONIAL --}}
<section class="testimonial">
    <h4>Alexander Hamilton</h4>
    <small>Founding Father of the United States</small>

    <blockquote>
        “A calm and relaxing stay by the sea. The room was spotless, modern,
        and very comfortable—exactly what I needed.”
    </blockquote>
</section>

@endsection
