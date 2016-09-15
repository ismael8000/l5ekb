
@extends('layouts.app')

@section('page-title')
- Usuários
@stop

@section('content')

    <h1>Este Conteudo esta vindo da view</h1>

	<table class="table table-bordered table-striped">
	
		<thead>
			<tr>
				<th>ID</th>

				<th>Nome</th>

				<th>Idade</th>

				<th>E-mail</th>
			</tr>
		</thead>

		<tbody>

			@foreach($users as $user)
		<tr>
			<td>{{ $user->id }}</td>
			<td>{{ $user->name }}</td>
			<td>{{ $user->age }}</td>
			<td>{{ $user->email }}</td>
		
		</tr>
	    	@endforeach()
		
		</tbody>

	</table>
    
@stop

    
