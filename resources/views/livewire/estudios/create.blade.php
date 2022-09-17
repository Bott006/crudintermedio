<!-- Modal -->
<div wire:ignore.self class="modal fade" id="createDataModal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="createDataModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createDataModalLabel">Create New Estudio</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true close-btn">×</span>
                </button>
            </div>
           <div class="modal-body">
				<form>
            <div class="form-group">
                <label for="Nombre"></label>
                <input wire:model="Nombre" type="text" class="form-control" id="Nombre" placeholder="Nombre">@error('Nombre') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="Clave"></label>
                <input wire:model="Clave" type="text" class="form-control" id="Clave" placeholder="Clave">@error('Clave') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="depto"></label>
                <input wire:model="depto" type="text" class="form-control" id="depto" placeholder="Depto">@error('depto') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="Abreviatura"></label>
                <input wire:model="Abreviatura" type="text" class="form-control" id="Abreviatura" placeholder="Abreviatura">@error('Abreviatura') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="Tomas"></label>
                <input wire:model="Tomas" type="text" class="form-control" id="Tomas" placeholder="Tomas">@error('Tomas') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="Frecuencia"></label>
                <input wire:model="Frecuencia" type="text" class="form-control" id="Frecuencia" placeholder="Frecuencia">@error('Frecuencia') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="Tipoformato"></label>
                <input wire:model="Tipoformato" type="text" class="form-control" id="Tipoformato" placeholder="Tipoformato">@error('Tipoformato') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="Notas"></label>
                <input wire:model="Notas" type="text" class="form-control" id="Notas" placeholder="Notas">@error('Notas') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="TiempoProceso"></label>
                <input wire:model="TiempoProceso" type="text" class="form-control" id="TiempoProceso" placeholder="Tiempoproceso">@error('TiempoProceso') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="TipoMuestra"></label>
                <input wire:model="TipoMuestra" type="text" class="form-control" id="TipoMuestra" placeholder="Tipomuestra">@error('TipoMuestra') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="Instrucciones"></label>
                <input wire:model="Instrucciones" type="text" class="form-control" id="Instrucciones" placeholder="Instrucciones">@error('Instrucciones') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="DatosTecnicos"></label>
                <input wire:model="DatosTecnicos" type="text" class="form-control" id="DatosTecnicos" placeholder="Datostecnicos">@error('DatosTecnicos') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="Encabezado"></label>
                <input wire:model="Encabezado" type="text" class="form-control" id="Encabezado" placeholder="Encabezado">@error('Encabezado') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="Tubo"></label>
                <input wire:model="Tubo" type="text" class="form-control" id="Tubo" placeholder="Tubo">@error('Tubo') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="Noaplicadescuento"></label>
                <input wire:model="Noaplicadescuento" type="text" class="form-control" id="Noaplicadescuento" placeholder="Noaplicadescuento">@error('Noaplicadescuento') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="esperfil"></label>
                <input wire:model="esperfil" type="text" class="form-control" id="esperfil" placeholder="Esperfil">@error('esperfil') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="sucursal"></label>
                <input wire:model="sucursal" type="text" class="form-control" id="sucursal" placeholder="Sucursal">@error('sucursal') <span class="error text-danger">{{ $message }}</span> @enderror
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
                <label for="SucProceso"></label>
                <input wire:model="SucProceso" type="text" class="form-control" id="SucProceso" placeholder="Sucproceso">@error('SucProceso') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary close-btn" data-dismiss="modal">Close</button>
                <button type="button" wire:click.prevent="store()" class="btn btn-primary close-modal">Save</button>
            </div>
        </div>
    </div>
</div>
