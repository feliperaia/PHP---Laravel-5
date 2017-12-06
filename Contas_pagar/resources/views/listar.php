<h1>Lista de Contas Pagar</h1>
<table>
	<tr>
		<td>ID</td>
		<td>Descrição</td>
		<td>Valor</td>
		<td>Editar</td>
	</tr>
<?php foreach ($contas_pagar as $value) { ?>
   	<tr>
		<td><?php echo $value->id; ?></td>
		<td><?php echo $value->descricao; ?></td>
		<td><?php echo $value->valor; ?></td>
		<td><a class="btn btn-small btn-info" href="{{ action("ContasPagarController@editar", $value->id)}}">Editar</a></td>
	</tr>
<?php } ?>
</table>