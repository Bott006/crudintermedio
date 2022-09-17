@section('title', __('Doctores'))
<div class="container-fluid">
	<div class="row justify-content-center">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<div style="display: flex; justify-content: space-between; align-items: center;">
						<div class="float-left">
							<h4><i class="fab fa-laravel text-info"></i>
							Doctore Listing </h4>
						</div>
						<div wire:poll.60s>
							<code><h5>{{ now()->format('H:i:s') }} UTC</h5></code>
						</div>
						@if (session()->has('message'))
						<div wire:poll.4s class="btn btn-sm btn-success" style="margin-top:0px; margin-bottom:0px;"> {{ session('message') }} </div>
						@endif
						<div>
							<input wire:model='keyWord' type="text" class="form-control" name="search" id="search" placeholder="Search Doctores">
						</div>
						<div class="btn btn-sm btn-info" data-toggle="modal" data-target="#createDataModal">
						<i class="fa fa-plus"></i>  Add Doctores
						</div>
					</div>
				</div>
				
				<div class="card-body">
						@include('livewire.doctores.create')
						@include('livewire.doctores.update')
				<div class="table-responsive">
					<table class="table table-bordered table-sm">
						<thead class="thead">
							<tr> 
								<td>#</td> 
								<th>Sucursal</th>
								<th>Clave</th>
								<th>Doctor</th>
								<th>Paterno</th>
								<th>Materno</th>
								<th>Nombre</th>
								<th>Direccion</th>
								<th>Especialidad1</th>
								<th>Especialidad2</th>
								<th>Fec Alta</th>
								<th>Pacientes Mes</th>
								<th>Pacientes Acum</th>
								<th>Importe Mes</th>
								<th>Importe Acum</th>
								<th>Centro</th>
								<th>Tels</th>
								<th>Estado</th>
								<th>Municipio</th>
								<th>Localidad</th>
								<th>Cp</th>
								<th>Colonia</th>
								<th>Fecha Act</th>
								<th>Fecha Sync</th>
								<th>Flag Sucursales</th>
								<th>Eliminar</th>
								<th>Cedprof</th>
								<th>Fecnac</th>
								<th>Sexo</th>
								<th>Email</th>
								<td>ACTIONS</td>
							</tr>
						</thead>
						<tbody>
							@foreach($doctores as $row)
							<tr>
								<td>{{ $loop->iteration }}</td> 
								<td>{{ $row->sucursal }}</td>
								<td>{{ $row->clave }}</td>
								<td>{{ $row->doctor }}</td>
								<td>{{ $row->Paterno }}</td>
								<td>{{ $row->Materno }}</td>
								<td>{{ $row->Nombre }}</td>
								<td>{{ $row->Direccion }}</td>
								<td>{{ $row->Especialidad1 }}</td>
								<td>{{ $row->Especialidad2 }}</td>
								<td>{{ $row->Fec_alta }}</td>
								<td>{{ $row->Pacientes_Mes }}</td>
								<td>{{ $row->Pacientes_Acum }}</td>
								<td>{{ $row->Importe_mes }}</td>
								<td>{{ $row->Importe_Acum }}</td>
								<td>{{ $row->Centro }}</td>
								<td>{{ $row->Tels }}</td>
								<td>{{ $row->Estado }}</td>
								<td>{{ $row->Municipio }}</td>
								<td>{{ $row->Localidad }}</td>
								<td>{{ $row->cp }}</td>
								<td>{{ $row->Colonia }}</td>
								<td>{{ $row->fecha_act }}</td>
								<td>{{ $row->fecha_sync }}</td>
								<td>{{ $row->flag_sucursales }}</td>
								<td>{{ $row->eliminar }}</td>
								<td>{{ $row->CedProf }}</td>
								<td>{{ $row->FecNac }}</td>
								<td>{{ $row->Sexo }}</td>
								<td>{{ $row->email }}</td>
								<td width="90">
								<div class="btn-group">
									<button type="button" class="btn btn-info btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Actions
									</button>
									<div class="dropdown-menu dropdown-menu-right">
									<a data-toggle="modal" data-target="#updateModal" class="dropdown-item" wire:click="edit({{$row->id}})"><i class="fa fa-edit"></i> Edit </a>							 
									<a class="dropdown-item" onclick="confirm('Confirm Delete Doctore id {{$row->id}}? \nDeleted Doctores cannot be recovered!')||event.stopImmediatePropagation()" wire:click="destroy({{$row->id}})"><i class="fa fa-trash"></i> Delete </a>   
									</div>
								</div>
								</td>
							@endforeach
						</tbody>
					</table>						
					{{ $doctores->links() }}
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
