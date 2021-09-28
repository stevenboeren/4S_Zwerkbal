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

    <h1>Nieuw Team</h1>
	<form action="{{ route('teams.store') }}" method="POST">
		@csrf
		<div class="form-group">
			<label for="name">Naam team:</label>
			<input type="text" id="name" name="name" class="form-control">
		</div>
		<div class="form-group">
			<label for="sort">Soort:</label>
			<select name="sort" id="sort" class="form-control">
				<option value="School">School</option>
				<option value="Country">Country</option>
				<option value="Commerical">Commerical</option>
			</select>
		</div>
		<div class="form-group">
			<label for="country">Herkomst:</label>
			<input type="text" id="country" name="country" class="form-control">
		</div>
		<button type="submit">Opslaan</button>
	</form>
@endsection
