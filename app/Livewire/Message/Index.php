<?php

namespace App\Livewire\Message;

use App\Models\Message;
use Livewire\Component;
use Livewire\WithoutUrlPagination;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination, WithoutUrlPagination;
    public $page = "Message", $shortby ="id", $short = "DESC", $search = "";

    public function clearShort()
    {
        $this->shortby ="id";
        $this->short = "DESC";
    }

    public function deleteAll()
    {
        $messages = Message::all();
        foreach($messages as $message){
            $message->delete();
        }    
    }


    public function render()
    {
        return view('livewire.message.index',[
            'messages' => Message::search('name', $this->search)->orderBy($this->shortby, $this->short)->paginate(12),
        ]);
    }
}
