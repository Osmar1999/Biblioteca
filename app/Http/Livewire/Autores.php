<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Autore;

class Autores extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $autor_nombre;
    public $updateMode = false;

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';
        return view('livewire.autores.view', [
            'autores' => Autore::latest()
						->orWhere('autor_nombre', 'LIKE', $keyWord)
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
		$this->autor_nombre = null;
    }

    public function store()
    {
        $this->validate([
		'autor_nombre' => 'required',
        ]);

        Autore::create([ 
			'autor_nombre' => $this-> autor_nombre
        ]);
        
        $this->resetInput();
		$this->emit('closeModal');
		session()->flash('message', 'Autore Successfully created.');
    }

    public function edit($id)
    {
        $record = Autore::findOrFail($id);

        $this->selected_id = $id; 
		$this->autor_nombre = $record-> autor_nombre;
		
        $this->updateMode = true;
    }

    public function update()
    {
        $this->validate([
		'autor_nombre' => 'required',
        ]);

        if ($this->selected_id) {
			$record = Autore::find($this->selected_id);
            $record->update([ 
			'autor_nombre' => $this-> autor_nombre
            ]);

            $this->resetInput();
            $this->updateMode = false;
			session()->flash('message', 'Autore Successfully updated.');
        }
    }

    public function destroy($id)
    {
        if ($id) {
            $record = Autore::where('id', $id);
            $record->delete();
        }
    }
}
