<?php $__env->startSection('title', __('Pacientes')); ?>

<div class="row justify-content-center">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<div style="display: flex; justify-content: space-between; align-items: center;">
						
						<div wire:poll.60s>
							<code><h5><?php echo e(now()->format('H:i:s')); ?> UTC</h5></code>
						</div>
						<?php if(session()->has('message')): ?>
						<div wire:poll.4s class="btn btn-sm btn-success" style="margin-top:0px; margin-bottom:0px;"> <?php echo e(session('message')); ?> </div>
						<?php endif; ?>
						
						<div class="btn btn-sm btn-info" data-toggle="modal" data-target="#createDataModal">
						<i class="fa fa-plus"></i>  Add Pacientes
						</div>
					</div>
				</div>
				
				<div class="card-body">
						<?php echo $__env->make('livewire.pacientes.create', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
						<?php echo $__env->make('livewire.pacientes.update', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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
							<?php $__currentLoopData = $pacientes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<tr>
								<td><?php echo e($loop->iteration); ?></td> 
								<td><?php echo e($row->sucursal); ?></td>
								<td><?php echo e($row->Clave); ?></td>
								<td><?php echo e($row->Paciente); ?></td>
								<td><?php echo e($row->Paterno); ?></td>
								<td><?php echo e($row->Materno); ?></td>
								<td><?php echo e($row->Nombre); ?></td>
								<td><?php echo e($row->FecNac); ?></td>
								<td><?php echo e($row->Sexo); ?></td>
								<td><?php echo e($row->Calle); ?></td>
								<td><?php echo e($row->Numero); ?></td>
								<td><?php echo e($row->Rfc); ?></td>
								<td><?php echo e($row->Estudios); ?></td>
								<td><?php echo e($row->Ult_solicitud); ?></td>
								<td><?php echo e($row->Fec_alta); ?></td>
								<td><?php echo e($row->Importe); ?></td>
								<td><?php echo e($row->Importe_Acum); ?></td>
								<td><?php echo e($row->Saldo); ?></td>
								<td><?php echo e($row->EmpresaAnt); ?></td>
								<td><?php echo e($row->suc_empresa); ?></td>
								<td><?php echo e($row->Empresa); ?></td>
								<td><?php echo e($row->Foraneo); ?></td>
								<td><?php echo e($row->Descuento); ?></td>
								<td><?php echo e($row->Titular); ?></td>
								<td><?php echo e($row->Estado); ?></td>
								<td><?php echo e($row->Municipio); ?></td>
								<td><?php echo e($row->Localidad); ?></td>
								<td><?php echo e($row->Cp); ?></td>
								<td><?php echo e($row->Colonia); ?></td>
								<td><?php echo e($row->Credencial); ?></td>
								<td><?php echo e($row->NumCredencial); ?></td>
								<td><?php echo e($row->Telefono); ?></td>
								<td><?php echo e($row->NumEmpleado); ?></td>
								<td><?php echo e($row->Pais); ?></td>
								<td><?php echo e($row->cliente); ?></td>
								<td><?php echo e($row->email); ?></td>
								<td><?php echo e($row->fecha_act); ?></td>
								<td><?php echo e($row->fecha_sync); ?></td>
								<td><?php echo e($row->flag_sucursales); ?></td>
								<td><?php echo e($row->eliminar); ?></td>
								<td><?php echo e($row->enviarwhatsapp); ?></td>
								<td>
								
									
										<a data-toggle="modal" data-target="#updateModal" class="dropdown-item" wire:click="edit(<?php echo e($row->id); ?>)"><i class="fa fa-edit"></i> Edit </a>							 
									    <a class="dropdown-item" onclick="confirm('Confirm Delete Paciente id <?php echo e($row->id); ?>? \nDeleted Pacientes cannot be recovered!')||event.stopImmediatePropagation()" wire:click="destroy(<?php echo e($row->id); ?>)"><i class="fa fa-trash"></i> Delete </a>   
									
									
								</td>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</tbody>
					</table>						
					<?php echo e($pacientes->links()); ?>

					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php $__env->startSection('js'); ?>
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\vicen\Documents\Laravel\crudintermedio\resources\views/livewire/pacientes/view.blade.php ENDPATH**/ ?>