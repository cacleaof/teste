@extends('adminlte::page')

@section('title', 'Nova Recarga')

@section('content_header')
    <h1>Fazer Retirada</h1>

    <ol class='breadcrumb'>
    	<li><a ref="">Dashboard</a></li>
    	<li><a ref="">Saldo</a></li>
    	<li><a ref="">Retirada</a></li>
    </ol>
@stop

@section('content')
	<div class="box">
		<div class="box-header">
			<h3>Fazer Retirada</h3>
		</div>
		<div class="box-body">
			 @include('admin.includes.alerts')

				<form method="POST" action="{{ route('withdraw.store') }}">
					{!! csrf_field() !!}

					<div class="form-group">
						<input type="texto" name="value" placeholder="valor Retirada" class "form-control">
					</div>
					<div class="form-group">
						<button type="submit" class "btn btn-success"->Sacar</button>
				</form>
		</div>
	</div>
@stop