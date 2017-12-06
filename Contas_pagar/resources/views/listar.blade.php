@extends('principal')
@Section('title', 'Listagem de Contas')

@section('content')
<script type="text/javascript">
	function apagar(url){
		if(window.confirm('Deseja realmente a apagar')){
			window.location = url;
		}
	}

	$(function()
{
	 $( "#q" ).autocomplete({
	  source: "/contas/autocomplete",
	  minLength: 3,
	  select: function(event, ui) {
	  	$('#q').val(ui.item.value);
	  }
	});
});
</script>

<h1>Lista de Contas Pagar</h1>
@if(old('insert'))
	<div class="alert alert-success">
		<strong>Cadastrado com Sucesso</strong>
	</div>
@endif
@if(old('update'))
	<div class="alert alert-success">
		<strong>Alterado com Sucesso</strong>
	</div>
@endif

{{ Form::open(['action' => ['ContasPagarController@autocomplete'], 'method' => 'GET']) }}
    {{ Form::text('q', '', ['id' =>  'q', 'placeholder' =>  'Digite a Descricao'])}}
    {{ Form::submit('Pesquisar', array('class' => 'button expand')) }}
{{ Form::close() }}


<table width="100%" class="table table-striped table-bordered table-hover">
	<tr>
		<td>ID</td>
		<td>Descrição</td>
		<td>Valor</td>
		<td>Editar</td>
		<td>Apagar</td>
	</tr>
@foreach($contas_pagar as $c)
   	<tr>
		<td>{{$c->id}}</td>
		<td>{{$c->descricao}}</td>
		<td>{{$c->valor}}</td>
		<td><a class="btn btn-small btn-info" href="{{ action('ContasPagarController@editar', $c->id)}}">Editar</a></td>
		<td><a class="btn btn-small btn-danger" onclick="apagar('{{ action('ContasPagarController@apagar', $c->id)}}')" href="#">Apagar</a></td>
	</tr>
@endforeach
</table>
@stop