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
                {!! Form::open(['action' => 'EncuestadorController@store', 'method' => 'POST', 'class'=>'form-horizontal']) !!}
                    <div class="form-group">
                        <label class="col-md-4 control-label">{!! Form::label('nombre','Nombre') !!}</label>
                        <div class="col-md-6">
                          {!! Form::text('nombre','',['class'=> 'form-control','placeholder'=> 'Nombre']) !!} 
                        </div>

                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label">{!! Form::label('apellidoPaterno','Apellido Paterno') !!}</label>
                        <div class="col-md-6">
                            {!! Form::text('apellidoPaterno','',['class'=> 'form-control','placeholder'=> 'Apellido Paterno']) !!}  
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label"> {!! Form::label('apellidoMaterno','Apellido Materno') !!}</label>
                        <div class="col-md-6">
                        {!! Form::text('apellidoMaterno','',['class'=> 'form-control','placeholder'=> 'Apellido Materno']) !!}
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label"> {!! Form::label('municipio','Municipio') !!}</label>
                        <div class="col-md-6">
                        {!! Form::text('municipio','',['class'=> 'form-control','placeholder'=> 'Municipio']) !!}
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label">{!! Form::label('telefono','Telefono') !!}</label>
                        <div class="col-md-6">
                          {!! Form::text('telefono','',['class'=> 'form-control','placeholder'=> 'Telefono']) !!} 
                        </div>

                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label">{!! Form::label('cve_elector','Clave Elector') !!}</label>
                        <div class="col-md-6">
                          {!! Form::text('cve_elector','',['class'=> 'form-control','placeholder'=> 'Clave Elector']) !!} 
                        </div>

                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label">{!! Form::label('curp','CURP') !!}</label>
                        <div class="col-md-6">
                          {!! Form::text('curp','',['class'=> 'form-control','placeholder'=> 'CURP']) !!} 
                        </div>

                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label">{!! Form::label('cp','Código Postal') !!}</label>
                        <div class="col-md-6">
                          {!! Form::text('cp','',['class'=> 'form-control','placeholder'=> 'Código postal']) !!} 
                        </div>

                    </div>

                    
                    <div class="form-group">
                        <label class="col-md-4 control-label">{!! Form::label('cve_estado','Clave del Estado') !!}</label>
                        <div class="col-md-6">
                          {!! Form::text('cve_estado','',['class'=> 'form-control','placeholder'=> 'Clave del Estado']) !!} 
                        </div>

                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label">{!! Form::label('cve_municipio','Clave del Municipio') !!}</label>
                        <div class="col-md-6">
                          {!! Form::text('cve_municipio','',['class'=> 'form-control','placeholder'=> 'Clave del Municipio']) !!} 
                        </div>

                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label">{!! Form::label('cve_seccion','Clave de la Sección') !!}</label>
                        <div class="col-md-6">
                          {!! Form::text('cve_seccion','',['class'=> 'form-control','placeholder'=> 'Clave de la Sección']) !!} 
                        </div>

                    </div>

                    
                    


                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                           
                             {!! Form::submit('Registrar', ['class' => 'btn btn-primary']) !!}
                        </div>
                    </div>

                  

                   
                {!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection