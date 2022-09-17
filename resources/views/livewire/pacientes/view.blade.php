@section('title', __('Pacientes'))
@extends('layouts.app')
<div class="row justify-content-center">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<div style="display: flex; justify-content: space-between; align-items: center;">
						
						<div wire:poll.60s>
							<code><h5>{{ now()->format('H:i:s') }} UTC</h5></code>
						</div>
						@if (session()->has('message'))
						<div wire:poll.4s class="btn btn-sm btn-success" style="margin-top:0px; margin-bottom:0px;"> {{ session('message') }} </div>
						@endif
						
						<div class="btn btn-sm btn-info" data-toggle="modal" data-target="#createDataModal">
						<i class="fa fa-plus"></i>  Add Pacientes
						</div>
					</div>
				</div>
				
				<div class="card-body">
						@include('livewire.pacientes.create')
						@include('livewire.pacientes.update')
				<div class="table-responsive">
					<table id="pacientes" class="table table-striped" style="width:100%">
						<thead class="bg-primary text-white">
							<tr> 
								<td>#</td> 
								<th scope="col">Sucursal</th>
								<th scope="col">Clave</th>
								<th scope="col">Paciente</th>
								<th scope="col">Paterno</th>
								<th scope="col">Materno</th>
								<th scope="col">Nombre</th>
								<th scope="col">Fecnac</th>
								<th scope="col">Sexo</th>
								<th scope="col">Calle</th>
								<th scope="col">Numero</th>
								<th scope="col">Rfc</th>
								<th scope="col">Estudios</th>
								<th scope="col">Ult Solicitud</th>
								<th scope="col">Fec Alta</th>
								<th scope="col">Importe</th>
								<th scope="col">Importe Acum</th>
								<th scope="col">Saldo</th>
								<th scope="col">Empresaant</th>
								<th scope="col">Suc Empresa</th>
								<th scope="col">Empresa</th>
								<th scope="col">Foraneo</th>
								<th scope="col">Descuento</th>
								<th scope="col">Titular</th>
								<th scope="col">Estado</th>
								<th scope="col">Municipio</th>
								<th scope="col">Localidad</th>
								<th scope="col">Cp</th>
								<th scope="col">Colonia</th>
								<th scope="col">Credencial</th>
								<th scope="col">Numcredencial</th>
								<th scope="col">Telefono</th>
								<th scope="col">Numempleado</th>
								<th scope="col">Pais</th>
								<th scope="col">Cliente</th>
								<th scope="col">Email</th>
								<th scope="col">Fecha Act</th>
								<th scope="col">Fecha Sync</th>
								<th scope="col">Flag Sucursales</th>
								<th scope="col">Eliminar</th>
								<th scope="col">Enviarwhatsapp</th>
								<td scope="col">ACTIONS</td>
							</tr>
						</thead>
						<tbody>
							@foreach($pacientes as $row)
							<tr>
								<td>{{ $loop->iteration }}</td> 
								<td>{{ $row->sucursal }}</td>
								<td>{{ $row->Clave }}</td>
								<td>{{ $row->Paciente }}</td>
								<td>{{ $row->Paterno }}</td>
								<td>{{ $row->Materno }}</td>
								<td>{{ $row->Nombre }}</td>
								<td>{{ $row->FecNac }}</td>
								<td>{{ $row->Sexo }}</td>
								<td>{{ $row->Calle }}</td>
								<td>{{ $row->Numero }}</td>
								<td>{{ $row->Rfc }}</td>
								<td>{{ $row->Estudios }}</td>
								<td>{{ $row->Ult_solicitud }}</td>
								<td>{{ $row->Fec_alta }}</td>
								<td>{{ $row->Importe }}</td>
								<td>{{ $row->Importe_Acum }}</td>
								<td>{{ $row->Saldo }}</td>
								<td>{{ $row->EmpresaAnt }}</td>
								<td>{{ $row->suc_empresa }}</td>
								<td>{{ $row->Empresa }}</td>
								<td>{{ $row->Foraneo }}</td>
								<td>{{ $row->Descuento }}</td>
								<td>{{ $row->Titular }}</td>
								<td>{{ $row->Estado }}</td>
								<td>{{ $row->Municipio }}</td>
								<td>{{ $row->Localidad }}</td>
								<td>{{ $row->Cp }}</td>
								<td>{{ $row->Colonia }}</td>
								<td>{{ $row->Credencial }}</td>
								<td>{{ $row->NumCredencial }}</td>
								<td>{{ $row->Telefono }}</td>
								<td>{{ $row->NumEmpleado }}</td>
								<td>{{ $row->Pais }}</td>
								<td>{{ $row->cliente }}</td>
								<td>{{ $row->email }}</td>
								<td>{{ $row->fecha_act }}</td>
								<td>{{ $row->fecha_sync }}</td>
								<td>{{ $row->flag_sucursales }}</td>
								<td>{{ $row->eliminar }}</td>
								<td>{{ $row->enviarwhatsapp }}</td>
								<td>
								{{-- <div class="btn-group">
									<button type="button" class="btn btn-info btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Actions
									</button>
									<div class="dropdown-menu dropdown-menu-right"> --}}
									
										<a data-toggle="modal" data-target="#updateModal" class="dropdown-item" wire:click="edit({{$row->id}})"><i class="fa fa-edit"></i> Edit </a>							 
									    <a class="dropdown-item" onclick="confirm('Confirm Delete Paciente id {{$row->id}}? \nDeleted Pacientes cannot be recovered!')||event.stopImmediatePropagation()" wire:click="destroy({{$row->id}})"><i class="fa fa-trash"></i> Delete </a>   
									
									{{-- </div>
								</div> --}}
								</td>
							@endforeach
						</tbody>
					</table>						
					{{ $pacientes->links() }}
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@section('js')
    <script> console.log('Hi!'); </script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function () {
           $('#pacientes').DataTable({
           "lengthMenu": [[5,10,50,-1], [5,10,50,"All"]]
        });
    });
</script>
@stop
