

@extends('layout')

@section('nav')
    <nav>
        <a href="/">Home</a>
        <a href="/tournaments" >Toernooien</a>
        <a href="/teams" >Teams</a>
        <a href="/players" class="active">Spelers</a>
    </nav>
@endsection

@section('content')

    <h1>Speler</h1>
    <a href="{{ route('players.create') }}">+ nieuwe speler</a>
    <table class="table">
        <tr>
            <th>Naam</th>
            <th>Type</th>
            <th>Team</th>
        </tr>
        @foreach($players as $player)
            <tr>
                <td>{{ $player->name }}</td>
                <td>{{ $player->type }}</td>
                <td>{{ $player->team->name }}</td>
            </tr>
        @endforeach
    </table>
    
@endsection