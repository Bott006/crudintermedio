<!-- Modal -->
<div wire:ignore.self class="modal fade" id="createDataModal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="createDataModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createDataModalLabel">Create New Empresa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true close-btn">×</span>
                </button>
            </div>
           <div class="modal-body">
				<form>
            <div class="form-group">
                <label for="sucursal"></label>
                <input wire:model="sucursal" type="text" class="form-control" id="sucursal" placeholder="Sucursal">@error('sucursal') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="Clave"></label>
                <input wire:model="Clave" type="text" class="form-control" id="Clave" placeholder="Clave">@error('Clave') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="Nombre"></label>
                <input wire:model="Nombre" type="text" class="form-control" id="Nombre" placeholder="Nombre">@error('Nombre') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="cp"></label>
                <input wire:model="cp" type="text" class="form-control" id="cp" placeholder="Cp">@error('cp') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="tel1"></label>
                <input wire:model="tel1" type="text" class="form-control" id="tel1" placeholder="Tel1">@error('tel1') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="tel2"></label>
                <input wire:model="tel2" type="text" class="form-control" id="tel2" placeholder="Tel2">@error('tel2') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="Fec_convenio"></label>
                <input wire:model="Fec_convenio" type="text" class="form-control" id="Fec_convenio" placeholder="Fec Convenio">@error('Fec_convenio') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="tipo_tarifa"></label>
                <input wire:model="tipo_tarifa" type="text" class="form-control" id="tipo_tarifa" placeholder="Tipo Tarifa">@error('tipo_tarifa') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="contacto"></label>
                <input wire:model="contacto" type="text" class="form-control" id="contacto" placeholder="Contacto">@error('contacto') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="colonia"></label>
                <input wire:model="colonia" type="text" class="form-control" id="colonia" placeholder="Colonia">@error('colonia') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="descuento"></label>
                <input wire:model="descuento" type="text" class="form-control" id="descuento" placeholder="Descuento">@error('descuento') <span class="error text-danger">{{ $message }}</span> @enderror
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
                <label for="Importe_Mes"></label>
                <input wire:model="Importe_Mes" type="text" class="form-control" id="Importe_Mes" placeholder="Importe Mes">@error('Importe_Mes') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="Importe_Acum"></label>
                <input wire:model="Importe_Acum" type="text" class="form-control" id="Importe_Acum" placeholder="Importe Acum">@error('Importe_Acum') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="Saldo"></label>
                <input wire:model="Saldo" type="text" class="form-control" id="Saldo" placeholder="Saldo">@error('Saldo') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="rfc"></label>
                <input wire:model="rfc" type="text" class="form-control" id="rfc" placeholder="Rfc">@error('rfc') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="direccion"></label>
                <input wire:model="direccion" type="text" class="form-control" id="direccion" placeholder="Direccion">@error('direccion') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="Ciudad"></label>
                <input wire:model="Ciudad" type="text" class="form-control" id="Ciudad" placeholder="Ciudad">@error('Ciudad') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="Entidad"></label>
                <input wire:model="Entidad" type="text" class="form-control" id="Entidad" placeholder="Entidad">@error('Entidad') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="Tipo_Empresa"></label>
                <input wire:model="Tipo_Empresa" type="text" class="form-control" id="Tipo_Empresa" placeholder="Tipo Empresa">@error('Tipo_Empresa') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="Fecha_Corte"></label>
                <input wire:model="Fecha_Corte" type="text" class="form-control" id="Fecha_Corte" placeholder="Fecha Corte">@error('Fecha_Corte') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="dias_pago"></label>
                <input wire:model="dias_pago" type="text" class="form-control" id="dias_pago" placeholder="Dias Pago">@error('dias_pago') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="Acum_estudios"></label>
                <input wire:model="Acum_estudios" type="text" class="form-control" id="Acum_estudios" placeholder="Acum Estudios">@error('Acum_estudios') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="Cla_Ant"></label>
                <input wire:model="Cla_Ant" type="text" class="form-control" id="Cla_Ant" placeholder="Cla Ant">@error('Cla_Ant') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="UsaTarifaDe"></label>
                <input wire:model="UsaTarifaDe" type="text" class="form-control" id="UsaTarifaDe" placeholder="Usatarifade">@error('UsaTarifaDe') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="SiUsa"></label>
                <input wire:model="SiUsa" type="text" class="form-control" id="SiUsa" placeholder="Siusa">@error('SiUsa') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="numero"></label>
                <input wire:model="numero" type="text" class="form-control" id="numero" placeholder="Numero">@error('numero') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="pais"></label>
                <input wire:model="pais" type="text" class="form-control" id="pais" placeholder="Pais">@error('pais') <span class="error text-danger">{{ $message }}</span> @enderror
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

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary close-btn" data-dismiss="modal">Close</button>
                <button type="button" wire:click.prevent="store()" class="btn btn-primary close-modal">Save</button>
            </div>
        </div>
    </div>
</div>
