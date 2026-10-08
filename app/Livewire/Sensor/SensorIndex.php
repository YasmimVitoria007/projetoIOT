<?php

namespace App\Livewire\Sensor;

use App\Models\Sensor;
use Livewire\Component;

class SensorIndex extends Component
{
    public function delete($id)
    {
        $sensor = Sensor::find($id);

        if ($sensor) {
            $sensor->delete();
            session()->flash('success', 'Excluído com sucesso!');
        }
    }
    
    public function render()
    {
        $sensors = Sensor::all();
        return view('livewire.sensor.sensor-index', compact('sensors'));

    }
    public function status($id){

    $sensor = Sensor::find($id);
    $sensor->status = !$sensor->status;
    $sensor->save();
    }
}
