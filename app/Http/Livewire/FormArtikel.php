<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Artikel;


class FormArtikel extends Component
{
    public $judul;
    public $deskripsi;

    public function render()
    {
        return view('livewire.form-artikel');
    }
    //metode simpan data pada form 
    public function simpan()
    {
        $artikel = Artikel::create([
            'judul' => $this->judul,
            'deskripsi' => $this->deskripsi,
        ]);

        //reset form judul & artikel
        $this->resetInput();

        //trigger, pada metode indexArtikel di controller livewire Artikel
        $this->emit('indexArtikel', $artikel);
    }

    public function resetInput()
    {
        $this->judul = null;
        $this->deskripsi = null;
    }
}
