<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Factura;
use App\Models\Articulo;
use App\Models\Paciente;
use App\Models\Detalle;
use Illuminate\Support\Facades\Artisan;

class Facturas extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $key, $numero_factura, $id_paciente, $tipo, $tax=12, $fecha;//Articulos
    public $id_articulo, $detalle_cantidad, $precio_venta, $precio_compra, $taxiva, $subtotal, $itemtotal;//Detalle
    public $search;
    public $pacientes, $paciente, $articulos;
    public $orderProducts = [];
    public $action = 1;
    public $updateMode = false;

    public function render()
    {
        $this->articulos = Articulo::all();
        $this->pacientes = Paciente::all();
		if ($this->selected_id > 0){
            $this->paciente = Paciente::find($this->selected_id);
            $this->id_paciente = $this->paciente->id;
            return view('livewire.facturas.view', [
                'articulos' => $this->articulos,
                'pacientes' => $this->id_paciente,
                'orderProducts' => $this->orderProducts,
            ]);
        }else{
            return view('livewire.facturas.view', [
                'articulos' => $this->articulos,
                'pacientes' => $this->pacientes,
                'orderProducts' => $this->orderProducts,
            ]);
        }
    }
	public function doAction($action){
        $this->selected_id = $action;
    }
    private function resetInput()
    {		
		$this->id_articulo = '';
		$this->detalle_cantidad = null;
        $this->precio_compra = null;
		$this->precio_venta = null;
        
    }
    public function addProduct(){
        if($this->id_articulo == '' || $this->detalle_cantidad == ''|| $this->precio_compra == '' || $this->precio_venta == '' ){
            $this->emit('msg-error', 'Ingrese todos los campos para agregar un producto.');
        }
        else{
            $articulo = Articulo::find($this->id_articulo);
            $descripcion = $articulo->descripcion;
            $this->itemtotal = floatval($this->detalle_cantidad) * floatval($this->precio_compra);
            $this->subtotal = floatval($this->subtotal) * floatval($this->itemtotal);
            $this->taxiva = (floatval($this->subtotal) * floatval($this->tax))/100;
            $this->total = floatval($this->subtotal) * floatval($this->taxiva);
            $orderProducts = array (
                'id_articulo' => $this->id_articulo,
                'descripcion' => $descripcion,
                'detalle_cantidad' => $this->detalle_cantidad,
                'precio_compra' => $this->precio_compra,
                'precio_venta' => $this->precio_venta,
                'itemtotal' => $this->itemtotal,
            );
            $this->orderProducts[] = $orderProducts;
            $this->emit('msgok', 'Agregado con éxito');
            $this->resetInput();
        }
    }
    public function removeItem($key)
    {
        $this->subtotal = $this->subtotal - $this->orderProducts[$key]['itemtotal'];
        $this->taxiva = (floatval($this->subtotal) * floatval($this->tax))/100;
        $this->total = floatval($this->subtotal) + floatval($this->taxiva);
        unset($this->orderProducts[$key]);
        $this->emit('msgok', 'Eliminado con éxito');
    }
    public function cancel()
    {
        $this->resetInput();
        $this->updateMode = false;
    }

    public function storeOrder()
    {
        $this->validate([
		'numero_factura' => 'required',
        'id_paciente' => 'required',
		'tipo' => 'required',
		'fecha' => 'required',
        ]);

        $order = Factura::create([ 
			'id_paciente' => $this-> id_paciente,
            'id_usuario' => $this-> id_usuario,
			'tipo' => $this-> tipo,
            'numero_factura' => $this-> numero_factura,
			'fecha' => $this-> fecha,
            'total' => $this-> total,
            'tax' => $this-> taxiva,
        ]);
        foreach($this->orderProducts as $key => $articulo)
        {
            $results = array(
                "id_factura" => $order->id,
                "id_articulo" => $articulo['id_articulo'],
                "detalle_cantidad" => $articulo['detalle_cantidad'],
                "precio_compra" => $articulo['precio_compra'],
                "precio_venta" => $articulo['precio_venta'],
                "created_at" => now(),
                "updated_at" => now()
            );
            Detalle::insert($results);
        }
        $this->emit('msgok', 'Compra creada con éxito');
        foreach($this->orderProducts as $key => $articulo)
        {
            $item = Articulo::find($articulo['id_articulo']);
            $stock = $item->stock + $articulo['detalle_cantidad'];
            $item->update([
                'stock' => $stock,
                'precio_compra' => $articulo['precio_compra'],
                'precio_venta' => $articulo['precio_venta'],
                
                
            ]);
        }
        
		session()->flash('message', 'Actualizado.');
        return redirect()->route('livewire.facturas.view');
    }

    public function edit($id)
    {
        $record = Factura::findOrFail($id);

        $this->selected_id = $id; 
		$this->numero_factura = $record-> numero_factura;
		$this->id_paciente = $record-> id_paciente;
		$this->tipo = $record-> tipo;
		$this->fecha = $record-> fecha;
		
        $this->updateMode = true;
    }

    public function update()
    {
        $this->validate([
		'numero_factura' => 'required',
		'tipo' => 'required',
		'fecha' => 'required',
        ]);

        if ($this->selected_id) {
			$record = Factura::find($this->selected_id);
            $record->update([ 
			'numero_factura' => $this-> numero_factura,
			'id_paciente' => $this-> id_paciente,
			'tipo' => $this-> tipo,
			'fecha' => $this-> fecha
            ]);

            $this->resetInput();
            $this->updateMode = false;
			session()->flash('message', 'Factura Successfully updated.');
        }
    }

    public function destroy($id)
    {
        if ($id) {
            $record = Factura::where('id', $id);
            $record->delete();
        }
    }
}
