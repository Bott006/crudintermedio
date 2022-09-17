<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Articulo;

class Articulos extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $codigo, $descripcion, $cantidad, $precio;
    public $updateMode = false;

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';
        return view('livewire.articulos.view', [
            'articulos' => Articulo::latest()
						->orWhere('codigo', 'LIKE', $keyWord)
						->orWhere('descripcion', 'LIKE', $keyWord)
						->orWhere('cantidad', 'LIKE', $keyWord)
						->orWhere('precio', 'LIKE', $keyWord)
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
		$this->codigo = null;
		$this->descripcion = null;
		$this->cantidad = null;
		$this->precio = null;
    }

    public function store()
    {
        $this->validate([
		'codigo' => 'required',
		'descripcion' => 'required',
		'cantidad' => 'required',
		'precio' => 'required',
        ]);

        Articulo::create([ 
			'codigo' => $this-> codigo,
			'descripcion' => $this-> descripcion,
			'cantidad' => $this-> cantidad,
			'precio' => $this-> precio
        ]);
        
        $this->resetInput();
		$this->emit('closeModal');
		session()->flash('message', 'Articulo Successfully created.');
    }

    public function edit($id)
    {
        $record = Articulo::findOrFail($id);

        $this->selected_id = $id; 
		$this->codigo = $record-> codigo;
		$this->descripcion = $record-> descripcion;
		$this->cantidad = $record-> cantidad;
		$this->precio = $record-> precio;
		
        $this->updateMode = true;
    }

    public function update()
    {
        $this->validate([
		'codigo' => 'required',
		'descripcion' => 'required',
		'cantidad' => 'required',
		'precio' => 'required',
        ]);

        if ($this->selected_id) {
			$record = Articulo::find($this->selected_id);
            $record->update([ 
			'codigo' => $this-> codigo,
			'descripcion' => $this-> descripcion,
			'cantidad' => $this-> cantidad,
			'precio' => $this-> precio
            ]);

            $this->resetInput();
            $this->updateMode = false;
			session()->flash('message', 'Articulo Successfully updated.');
        }
    }

    public function destroy($id)
    {
        if ($id) {
            $record = Articulo::where('id', $id);
            $record->delete();
        }
    }
}
