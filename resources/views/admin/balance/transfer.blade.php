@extends('adminlte::page')

@section('title', 'Transferir Saldo')

@section('content_header')
    <h1>Fazer Transferencia entre Usuários</h1>

    <ol class='breadcrumb'>
    	<li><a ref="">Dashboard</a></li>
    	<li><a ref="">Saldo</a></li>
    	<li><a ref="">Transferir</a></li>
    </ol>
@stop

@section('content')
	<div class="box">
		<div class="box-header">
			<h3>Transferir Saldo</h3>
		</div>
		<div class="box-body">
			@include('admin.includes.alerts')

				<form method="POST" action="{{ route('confirm.transfer') }}">
					{!! csrf_field() !!}

					<div class="form-group">
						<input type="texto" name="sender" placeholder="Informar quem vai receber a Transferencia" class="form-control">
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-success"->Proxima Etapa</button>
					</div>
				</form>
		</div>
	</div>
@stop