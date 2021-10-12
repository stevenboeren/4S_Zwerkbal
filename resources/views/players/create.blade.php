@extends('layout')

@section('nav')
    <nav>
        <a href="/">Home</a>
        <a href="/tournaments">Toernooien</a>
        <a href="/teams" >Teams</a>
        <a href="/players" class="active">Spelers</a>
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

    <h1>Nieuw Team</h1>
	<form action="{{ route('players.store') }}" method="POST">
		@csrf
		<div class="form-group">
			<label for="name">Naam speler:</label>
			<input type="text" id="name" name="name" class="form-control">
		</div>
		<div class="form-group">
			<label for="type">Soort:</label>
			<select name="type" id="type" class="form-control">
				<option value="Seeker">Seeker</option>
				<option value="Beater">Beater</option>
				<option value="Chaser">Chaser</option>
			</select>
		</div>
		<div class="form-group">
			<label for="team_id">Team Id:</label>
			<select name="team_id" id="team_id" class="form-control">
				@foreach($teams as $team)
				<option value="{{$team->id}}" @if($team->id == $team->team_id) selected @endif>{{$team->name}}</option>
				@endforeach
			</select>
		</div>
		<button type="submit">Opslaan</button>
	</form>
@endsection
