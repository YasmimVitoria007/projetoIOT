<?php

namespace App\Livewire\Sensor;

use App\Models\Sensor;
use Livewire\Component;

class SensorEdit extends Component
{
    public $ambiente_id;
    public $codigo;
    public $tipo;
    public $descricao;
    public $status;
    public $sensor_id;

    public function mount($id){
        $sensor = Sensor::find($id);

        if($sensor == null){
            session()->flash('success', 'Não encontrado');
            return redirect()->route('sensor.index');
        }

        $this->codigo = $sensor->codigo;
        $this->descricao = $sensor->descricao;
        $this->tipo = $sensor->tipo;
        $this->status = $sensor->status;
        $this->ambiente_id= $sensor->ambiente_id;
        $this->sensor_id= $sensor->id;
    }

    public function update(){
        $sensor = Sensor::find($this->ambiente_id);

        $sensor -> codigo = $this-> codigo;
        $sensor -> descricao = $this-> descricao;
        $sensor -> status= $this-> status;
        $sensor -> ambiente_id = $this-> ambiente_id;
        $sensor -> descricao = $this-> descricao;

        $sensor->save();

        session()->flash('success', 'Atualizado com sucesso');
        return redirect()->route('sensor.index');

    }

    public function delete($id){
    $sensor = Sensor::find($id);

    if ($sensor == null) {
        session()->flash('error', 'Sensor não encontrado');
        return;
    }

    $sensor->delete();
    session()->flash('success', 'Sensor excluído');
}
    public function render()
    {
        return view('livewire.sensor.sensor-edit');
    }
}
