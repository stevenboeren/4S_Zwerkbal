@extends('layout')

@section('nav')
    <nav>
        <a href="/" class="active">Home</a>
        <a href="/tournaments" >Toernooien</a>
        <a href="/teams">Teams</a>
        <a href="/players">Spelers</a>
    </nav>
@endsection

@section('content')

    <h1>Eerstvolgende Toernooi</h1>
    <p>Kom ook Zwerkbal spelen op het volgende toernooi!</p>

    <div class="dashboard-upcoming">
        <div class="flex flex-row-between">
            <div class="border text-center">
                <span>{{ $tournaments->name }}</span>
                <p>{{ $tournaments->date }} vanaf {{ $tournaments->starttijd }}</p>
            </div>
            <div class="border">
                <img class="img-dashboard" src="img/snitch.png" alt="">
            </div>
        </div>
    </div>
    
    
@endsection