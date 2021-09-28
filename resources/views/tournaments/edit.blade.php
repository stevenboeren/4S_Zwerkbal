@extends('layout')

@section('nav')
    <nav>
        <a href="/">Home</a>
        <a href="/tournaments" class="active">Toernooien</a>
        <a href="/teams">Teams</a>
        <a href="/players">Spelers</a>
    </nav>
@endsection

@section('content')
    <!-- Error validatie -->
	@if($errors->any())
		<ul class="errors">@foreach($errors->all() as $error)
			<li>{{$error}}</li>
			@endforeach
		</ul>
	@endif

    <h1>Toernooi aanpassen</h1>
	<form action="{{ route('tournaments.update', $tournament) }}" method="POST">
		@csrf
        @method('PUT')
		<div class="form-group">
			<label for="name">Naam toernooi</label>
			<input type="text" id="name" name="name" class="form-control" value="{{ $tournament->name }}">
		</div>
        <div class="form-group">
			<label for="date">Datum toernooi:</label>
			<input type="date" id="date" name="date" class="form-control" value="{{ $tournament->date }}">
		</div>
		<div class="form-group">
			<label for="starttijd">Starttijd toernooi:</label>
			<input type="time" id="starttijd" name="starttijd" class="form-control" value="{{ $tournament->starttijd }}">
		</div>
		<button type="submit">Opslaan</button>
	</form>
@endsection
