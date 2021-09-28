@extends('layout')

@section('nav')
    <nav>
        <a href="/" class="active">Home</a>
        <a href="/tournaments">Toernooien</a>
        <a href="/teams">Teams</a>
        <a href="/players">Spelers</a>
    </nav>
@endsection

@section('content')

    <h1>Dashboard</h1>
    <p>Zwerkbal (Engels: Quidditch) is een sport voor tovenaars uit de Harry Potterboeken van Joanne Rowling. In de wereld van Harry Potter is Zwerkbal een populaire sport: veel mensen praten erover mee en zijn zeer enthousiast als er een groot toernooi wordt gespeeld. Ook heeft iedere heks of tovenaar wel een favoriet Zwerkbalteam. Het idee van Zwerkbal lijkt te zijn gebaseerd op het non-fictieve horseball.</p>

    <div class="flex flex-row-between">
        <div class="dashboard-stats flex flex-column-between">
            <div class="border text-center">
                <p>Aantal aankomende toernooien:</p>
                <span>5</span>
            </div>
            <div class="border text-center">
                <p>Totaal aantal teams:</p>
                <span>26</span>
            </div>
        </div>
        <div class="border">
            <img class="img-dashboard" src="img/snitch.png" alt="">
        </div>
    </div>

@endsection