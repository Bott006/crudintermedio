<!-- Modal -->
<div wire:ignore.self class="modal fade" id="updateModal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="updateModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
       <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updateModalLabel">Update Doctore</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span wire:click.prevent="cancel()" aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
					<input type="hidden" wire:model="selected_id">
            <div class="form-group">
                <label for="sucursal"></label>
                <input wire:model="sucursal" type="text" class="form-control" id="sucursal" placeholder="Sucursal">@error('sucursal') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="clave"></label>
                <input wire:model="clave" type="text" class="form-control" id="clave" placeholder="Clave">@error('clave') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="doctor"></label>
                <input wire:model="doctor" type="text" class="form-control" id="doctor" placeholder="Doctor">@error('doctor') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="Paterno"></label>
                <input wire:model="Paterno" type="text" class="form-control" id="Paterno" placeholder="Paterno">@error('Paterno') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="Materno"></label>
                <input wire:model="Materno" type="text" class="form-control" id="Materno" placeholder="Materno">@error('Materno') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="Nombre"></label>
                <input wire:model="Nombre" type="text" class="form-control" id="Nombre" placeholder="Nombre">@error('Nombre') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="Direccion"></label>
                <input wire:model="Direccion" type="text" class="form-control" id="Direccion" placeholder="Direccion">@error('Direccion') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="Especialidad1"></label>
                <input wire:model="Especialidad1" type="text" class="form-control" id="Especialidad1" placeholder="Especialidad1">@error('Especialidad1') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="Especialidad2"></label>
                <input wire:model="Especialidad2" type="text" class="form-control" id="Especialidad2" placeholder="Especialidad2">@error('Especialidad2') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="Fec_alta"></label>
                <input wire:model="Fec_alta" type="text" class="form-control" id="Fec_alta" placeholder="Fec Alta">@error('Fec_alta') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="Pacientes_Mes"></label>
                <input wire:model="Pacientes_Mes" type="text" class="form-control" id="Pacientes_Mes" placeholder="Pacientes Mes">@error('Pacientes_Mes') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="Pacientes_Acum"></label>
                <input wire:model="Pacientes_Acum" type="text" class="form-control" id="Pacientes_Acum" placeholder="Pacientes Acum">@error('Pacientes_Acum') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="Importe_mes"></label>
                <input wire:model="Importe_mes" type="text" class="form-control" id="Importe_mes" placeholder="Importe Mes">@error('Importe_mes') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="Importe_Acum"></label>
                <input wire:model="Importe_Acum" type="text" class="form-control" id="Importe_Acum" placeholder="Importe Acum">@error('Importe_Acum') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="Centro"></label>
                <input wire:model="Centro" type="text" class="form-control" id="Centro" placeholder="Centro">@error('Centro') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="Tels"></label>
                <input wire:model="Tels" type="text" class="form-control" id="Tels" placeholder="Tels">@error('Tels') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="Estado"></label>
                <input wire:model="Estado" type="text" class="form-control" id="Estado" placeholder="Estado">@error('Estado') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="Municipio"></label>
                <input wire:model="Municipio" type="text" class="form-control" id="Municipio" placeholder="Municipio">@error('Municipio') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="Localidad"></label>
                <input wire:model="Localidad" type="text" class="form-control" id="Localidad" placeholder="Localidad">@error('Localidad') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="cp"></label>
                <input wire:model="cp" type="text" class="form-control" id="cp" placeholder="Cp">@error('cp') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="Colonia"></label>
                <input wire:model="Colonia" type="text" class="form-control" id="Colonia" placeholder="Colonia">@error('Colonia') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="fecha_act"></label>
                <input wire:model="fecha_act" type="text" class="form-control" id="fecha_act" placeholder="Fecha Act">@error('fecha_act') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="fecha_sync"></label>
                <input wire:model="fecha_sync" type="text" class="form-control" id="fecha_sync" placeholder="Fecha Sync">@error('fecha_sync') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="flag_sucursales"></label>
                <input wire:model="flag_sucursales" type="text" class="form-control" id="flag_sucursales" placeholder="Flag Sucursales">@error('flag_sucursales') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="eliminar"></label>
                <input wire:model="eliminar" type="text" class="form-control" id="eliminar" placeholder="Eliminar">@error('eliminar') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="CedProf"></label>
                <input wire:model="CedProf" type="text" class="form-control" id="CedProf" placeholder="Cedprof">@error('CedProf') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="FecNac"></label>
                <input wire:model="FecNac" type="text" class="form-control" id="FecNac" placeholder="Fecnac">@error('FecNac') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="Sexo"></label>
                <input wire:model="Sexo" type="text" class="form-control" id="Sexo" placeholder="Sexo">@error('Sexo') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="email"></label>
                <input wire:model="email" type="text" class="form-control" id="email" placeholder="Email">@error('email') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" wire:click.prevent="cancel()" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" wire:click.prevent="update()" class="btn btn-primary" data-dismiss="modal">Save</button>
            </div>
       </div>
    </div>
</div>
