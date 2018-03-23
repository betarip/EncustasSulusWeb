@extends('layout')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">

				@if (count($Encuestadores) > 0)
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Encuestadores
                        </div>
                        
                        <div class="panel-body">
                            <table class="table table-striped task-table">

                                <!-- Table Headings -->
                                <thead>
                                    <th>Identificador</th>
                                    <th>Encuestador</th>
                                    <th>Fecha en Sistema</th>
                                    <th>&nbsp;</th>
                                </thead>

                                <!-- Table Body -->
                                <tbody>
                                    @foreach ($Encuestadores as $Encuestador)
                                        <tr>
                                            <!-- Task Name -->
                                            <td class="table-text">
                                                <div>{{ $Encuestador->id_encuestador }}  </div>
                                            </td>

                                            <td class="table-text">
                                                <div>{{ $Encuestador->nombre }} {{ $Encuestador->app1}} {{ $Encuestador->app2 }} </div>
                                            </td>

                                            <td class="table-text">
                                                <div>{{ $Encuestador->created_at }} </div>
                                            </td>

                                            <td>
                                                <!-- TODO: Delete Button -->
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                @endif
			
		</div>
	</div>
</div>
@endsection