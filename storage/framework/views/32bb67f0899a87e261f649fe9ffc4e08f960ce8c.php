<?php $__env->startSection('title', __('Facturas')); ?>
<!--Facturación-->
<?php if($selected_id > 0): ?>
<div class="row">
	<div class="col-12 grid-margin">
		<div class="card">
			<div class="row">
				<div class="col-md-6">
					<div class="card-body">
						<h5>Nombre del paciente: <?php echo e($pacientes->Nombre); ?></h5>
						<button type="button" wire:click="doAction(0)" class="btn btn-outline-secondary btn-rounded btn-icon float-right"><i class="fas fa-trash text-danger"></i></button>
						<p class="ml-5">Telefono: <strong><?php echo e($pacientes->Telefono); ?></strong></p>
						<p class="ml-5">Email: <strong><?php echo e($pacientes->email); ?></strong></p>
					</div>
				</div>
				<div class="col-md-6">
					<div class="card-body mb-3">
						<label><strong>Factura:</strong></label>
						<select id="tipo" class="form-control" wire:model="tipo">
							<option value="Elegir">--Seleccione--</option>
							<option value="Factura">--FACTURA--</option>
							<option value="Recibo">--RECIBO--</option>
						</select>
						<div class="col-md-6">
							<label>Fecha de compra</label>
							<input type="date" class="form-control" wire:model="fecha">
						</div>
						<div class="col-md-6">
							<label>Numero de Documento</label>
							<input type="date" class="form-control" wire:model="numero_factura">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php else: ?>
<div class="row">
	<div class="col-12 grid-margin">
		<div class="card">
			<div class="row">
				<div class="col-md-6">
					<div class="card-body">
						<label>Seleccione un paciente</label>
						<select class="form-control" wire:model.lazy="selected_id">
							<option value="Elegir">--Seleccione--</option>
							<?php $__currentLoopData = $pacientes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $paciente): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<option value="<?php echo e($paciente->id); ?>"><?php echo e($paciente->Nombre); ?></option>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</select>
					</div>
				</div>
				<div class="col-md-6">
					<div class="card-body">
						
					</div>
				</div>
			</div>
		</div>    
	</div>
</div>
<?php endif; ?>

<div class="form-control">
	<div class="row">
		<div class="col-md-5">
			<div class="form-group" wire:ignore>
				<label><strong>Busca Articulo</strong></label>
				<select class="form-control" wire:model="id_articulo">
					<option value="Elegir">--Seleccione--</option>
					<?php $__currentLoopData = $articulos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $articulo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<option value="<?php echo e($articulo->id); ?>"><?php echo e($articulo->descripcion); ?></option>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</select>
			</div>
		</div>    
		<div class="col-md-2">
			<div class="form-group">
				<label><strong>Cantidad:</strong></label>
				<input type="number" wire:model="detalle_cantidad" class="form-control" placeholder="Cantidad">
			</div>
		</div>
		<div class="col-md-2">
			<div class="form-group">
				<label><strong>Precio:</strong></label>
				<input type="number" wire:model="precio_compra" class="form-control" placeholder="Precio">
			</div>
		</div>
		<div class="col-md-2">
			<div class="form-group">
				<label><strong>Precio:</strong></label>
				<input type="number" wire:model="precio_venta" class="form-control" placeholder="Precio">
			</div>
		</div>
		<div class="col-md-1">
			<div class="form-group">
				<button wire:click.prevent="addProduct()" class="btn btn-primary">Agregar</button>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-12">
			<div class="card px-2">
				<div class="card-body">
					<div class="container-fluid mt-5">
						<div class="table-responsive w-100">
							<table class="table">
								<thead>
									<tr>
										<th>#</th>
										<th>Descripción</th>
										<th class="text-right">Cantidad</th>
										<th class="text-right">Precio compra</th>
										<th class="text-right">Precio venta</th>
										<th class="text-right">Subotal</th>
										<th class="text-right">Acciones</th>
									</tr>
								</thead>
								<tbody>
									<?php $__currentLoopData = $orderProducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $articulo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<tr class="text-center" wire:key="<?php echo e($key); ?>">
										<td class="text-left"><?php echo e($key + 1); ?></td>
										<td class="text-left"><?php echo e($articulo['descripcion']); ?></td>
										<td><?php echo e($articulo['detalle_cantidad']); ?></td>
										<td><?php echo e($articulo['precio_compra']); ?></td>
										<td><?php echo e($articulo['precio_venta']); ?></td>
										<td><?php echo e($articulo['itemtotal']); ?></td>
										<td>
											<button class="btn-danger" wire:click.prevent="removeItem(<?php echo e($key); ?>)">X</button>
										</td>
									</tr>
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								</tbody>
							</table>
						</div>
					</div>
					<div class="container-fluid"> 
						<p>Subtotal: $<?php echo e($subtotal); ?></p>
						
					</div>
				</div>
			</div>	
		</div>
	</div>
</div>
<div class="form-group">
	<a href="route('livewire.facturas.view')"></a>
	<button type="submit" class="btn btn-primary" wire:click.prevent="storeOrder()">Guardar</button>
</div>
    

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\vicen\Documents\Laravel\crudintermedio\resources\views/livewire/facturas/view.blade.php ENDPATH**/ ?>