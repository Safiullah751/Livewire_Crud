<?php

namespace App\Livewire;
use App\Models\Form as ModelsForm;
use Livewire\Component;

class Form extends Component
{
    public $selected_id;
    public $name;
    public $email;
    public $message;




    public function submit(){

        $this->validate([
            'name'=> 'required|string',
            'email'=>'required|email',
            'message'=>'required|string|'
          ]);

            ModelsForm::create([
                'name'=>$this->name,
                'email'=>$this->email,
                'message'=>$this->message
            ]);
            $this->reset();



    }

    public function edit($id){
      $record= ModelsForm::findOrFail($id);
      $this->selected_id = $id;
      $this->name = $record->name;
      $this->email = $record->email;
      $this->message = $record->message;


    }

    public function update(){
        $this->validate([
            'name'=> 'required|string',
            'email'=>'required|email',
            'message'=>'required|string|'
          ]);
           if($this->selected_id){
            $record = ModelsForm::find($this->selected_id);
            $record->update([
              'name'=>$this->name,
              'email'=>$this->email,
              'message'=>$this->message,
          ]);
           $this->reset();

        }

    }
    public function delete($id){
        ModelsForm::find($id)->delete();
  }
    public function render()
    {
        return view('livewire.form',[
            'Forms'=>ModelsForm::all(),
        ]);
    }
}
