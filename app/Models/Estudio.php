<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudio extends Model
{
	use HasFactory;
	
    public $timestamps = true;

    protected $table = 'estudios';

    protected $fillable = ['Nombre','Clave','depto','Abreviatura','Tomas','Frecuencia','Tipoformato','Notas','TiempoProceso','TipoMuestra','Instrucciones','DatosTecnicos','Encabezado','Tubo','Noaplicadescuento','esperfil','sucursal','fecha_act','fecha_sync','flag_sucursales','eliminar','SucProceso'];
	
}
