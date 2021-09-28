@extends('layout')

@section('nav')
    <nav>
        <a href="/">Home</a>
        <a href="/tournaments">Toernooien</a>
        <a href="/teams" class="active">Teams</a>
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

    <h1>Team aanpassen</h1>
	<form action="{{ route('teams.update', $team) }}" method="POST">
		@csrf
        @method('PUT')
		<div class="form-group">
			<label for="name">Naam team:</label>
			<input type="text" id="name" name="name" class="form-control" value="{{ $team->name }}">
		</div>
        <div class="form-group">
			<label for="sort">Soort:</label>
			<select name="sort" id="sort" class="form-control">
				<option value="School" @if($team->sort == "School") selected @endif >School</option>
				<option value="Country" @if($team->sort == "Country") selected @endif >Country</option>
				<option value="Commerical" @if($team->sort == "Commerical") selected @endif >Commerical</option>
			</select>
		</div>
		<div class="form-group">
			<label for="country">Herkomst:</label>
			<input type="text" id="country" name="country" class="form-control" value="{{ $team->country }}">
		</div>
		<button type="submit">Opslaan</button>
	</form>
@endsection
