<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Depto;

class Deptos extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $sucursal, $Clave, $Depto, $fecha_act, $fecha_sync, $flag_sucursales, $eliminar;
    public $updateMode = false;

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';
        return view('livewire.deptos.view', [
            'deptos' => Depto::latest()
						->orWhere('sucursal', 'LIKE', $keyWord)
						->orWhere('Clave', 'LIKE', $keyWord)
						->orWhere('Depto', 'LIKE', $keyWord)
						->orWhere('fecha_act', 'LIKE', $keyWord)
						->orWhere('fecha_sync', 'LIKE', $keyWord)
						->orWhere('flag_sucursales', 'LIKE', $keyWord)
						->orWhere('eliminar', 'LIKE', $keyWord)
						->paginate(10),
        ]);
    }
	
    public function cancel()
    {
        $this->resetInput();
        $this->updateMode = false;
    }
	
    private function resetInput()
    {		
		$this->sucursal = null;
		$this->Clave = null;
		$this->Depto = null;
		$this->fecha_act = null;
		$this->fecha_sync = null;
		$this->flag_sucursales = null;
		$this->eliminar = null;
    }

    public function store()
    {
        $this->validate([
		'sucursal' => 'required',
		'Clave' => 'required',
		'eliminar' => 'required',
        ]);

        Depto::create([ 
			'sucursal' => $this-> sucursal,
			'Clave' => $this-> Clave,
			'Depto' => $this-> Depto,
			'fecha_act' => $this-> fecha_act,
			'fecha_sync' => $this-> fecha_sync,
			'flag_sucursales' => $this-> flag_sucursales,
			'eliminar' => $this-> eliminar
        ]);
        
        $this->resetInput();
		$this->emit('closeModal');
		session()->flash('message', 'Depto Successfully created.');
    }

    public function edit($id)
    {
        $record = Depto::findOrFail($id);

        $this->selected_id = $id; 
		$this->sucursal = $record-> sucursal;
		$this->Clave = $record-> Clave;
		$this->Depto = $record-> Depto;
		$this->fecha_act = $record-> fecha_act;
		$this->fecha_sync = $record-> fecha_sync;
		$this->flag_sucursales = $record-> flag_sucursales;
		$this->eliminar = $record-> eliminar;
		
        $this->updateMode = true;
    }

    public function update()
    {
        $this->validate([
		'sucursal' => 'required',
		'Clave' => 'required',
		'eliminar' => 'required',
        ]);

        if ($this->selected_id) {
			$record = Depto::find($this->selected_id);
            $record->update([ 
			'sucursal' => $this-> sucursal,
			'Clave' => $this-> Clave,
			'Depto' => $this-> Depto,
			'fecha_act' => $this-> fecha_act,
			'fecha_sync' => $this-> fecha_sync,
			'flag_sucursales' => $this-> flag_sucursales,
			'eliminar' => $this-> eliminar
            ]);

            $this->resetInput();
            $this->updateMode = false;
			session()->flash('message', 'Depto Successfully updated.');
        }
    }

    public function destroy($id)
    {
        if ($id) {
            $record = Depto::where('id', $id);
            $record->delete();
        }
    }
}
