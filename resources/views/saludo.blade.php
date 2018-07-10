
@extends('layout')

@section('content')


	<h1>Welcome to Tijuana</h1>
	&nbsp;
	@empty($nick)

	
		<h2>
		Bienvenido {{ $name }} No tienes apodo.
		</h2>
	
	@else

		<h2>	
		Bienvenido {{ $name }} tu apodo es: {{ $nick }}
		</h2>
	@endempty

@endsection
