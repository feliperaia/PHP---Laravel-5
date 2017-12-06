@extends('principal')
@Section('title', 'Editar Contas')

@section('content')
<h1>Editar Contas - {{ $contas_pagar->id}}</h1>
<form action="{{ action('ContasPagarController@update',$contas_pagar->id ) }}" method="POST">
	<input type="hidden" name="_token" value="{{{ csrf_token() }}}">
	<input type="hidden" name="update" value="update">
	<div class="form-group">
		<label>Descrição:</label>
		<input type="text" name="descricao" class="form-control" value="{{ $contas_pagar->descricao}}">
	</div>
	<div class="form-group">
		<label>Valor:</label>
		<input type="text" name="valor" class="form-control" value="{{$contas_pagar->valor}}">
	</div>
	<button type="submit" class="btn btn-success">Alterar</button>
</form>
@stop