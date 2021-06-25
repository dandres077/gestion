<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Paises;

class PaisesComponent extends Component
{
    use WithPagination;

    public $pais_id, $nombre;
    public $view = 'create';


    public function render()
    {      

        return view('livewire.paises-component', [
            'paises' => Paises::orderBy('id', 'desc')->paginate(8)
        ]);
    }

    public function store()
    {
        $this->validate(['nombre'=>'required']);

        $pais = Paises::create([
            'nombre' => $this->nombre,
        ]);

        $this->edit($pais->id);

        session()->flash('success', 'Bravo ! Votre article a été enregistré.');


    }

    public function edit($id)
    {
        $pais = Paises::find($id);

        $this->pais_id = $pais->id;
        $this->nombre = $pais->nombre;

        $this->view = 'edit';
    }


    public function update()
    {
        $this->validate(['nombre'=>'required']);

        $pais = Paises::find($this->pais_id);

        $pais->update([
            'nombre' => $this->nombre,
        ]);

        $this->default();
    }

    public function destroy($id)
    {
        Paises::destroy($id);
    }

    public function default()
    {
        $this->nombre = '';

        $this->view = 'create';
    }
}
