<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{
	use HasFactory;
	
    public $timestamps = true;

    protected $table = 'articulos';

    protected $fillable = ['codigo','descripcion','cantidad','precio'];
	
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function detalles()
    {
        return $this->hasMany('App\Models\Detalle', 'id_articulo', 'id');
    }
    
}
