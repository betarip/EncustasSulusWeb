@extends('layout')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Nuevo encuestador</div>
				<div class="panel-body">
                @include('partials/errors')
                @include('partials/messages')
                {!! Form::open(['action' => 'EncuestadorController@store', 'method' => 'POST']) !!}
                    <div class="form-group">
                        {!! Form::label('nombre','Nombre') !!}
                        {!! Form::text('nombre','',['class'=> 'form-control','placeholder'=> 'Nombre']) !!}
                    </div>
                    
                    <div class="form-group">
                        {!! Form::label('apellidoPaterno','Apellido Paterno') !!}
                        {!! Form::text('apellidoPaterno','',['class'=> 'form-control','placeholder'=> 'Apellido Paterno']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('apellidoMaterno','Apellido Materno') !!}
                        {!! Form::text('apellidoMaterno','',['class'=> 'form-control','placeholder'=> 'Apellido Materno']) !!}
                    </div>
                    {!! Form::submit('Registrar', ['class' => 'btn btn-primary']) !!}
                {!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection