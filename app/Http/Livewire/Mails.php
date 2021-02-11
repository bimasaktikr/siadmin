<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Mail;

class Mails extends Component
{
    public $mails;
    public $mailId, $jenis, $nomor, $lampiran, $perihal, $tanggal, $tujuan, $isi;
    public $isOpen = 0;

    public function render()
    {
        $this -> mails = Mail::all();
        return view('livewire.mails');
    }

    public function showModal(){
        $this -> isOpen = true ;
    }

    public function hideModal(){
        $this -> isOpen = false ;
    }

    public function store() {
        $this -> validate(
            [
                'jenis' => 'required',
                'nomor' => 'required',
                'lampiran' => 'required',
                'perihal' => 'required',
                'tanggal' => 'required',
                'tujuan' => 'required',
                'isi' => 'required',
            ]

        );

        Mail::updateOrCreate([ 'id' => $this-> mailId], [
            'jenis' => $this->jenis,
            'nomor' => $this->nomor,
            'lampiran' => $this->lampiran,
            'perihal' => $this->perihal,
            'tanggal' => $this->tanggal,
            'tujuan' => $this->tujuan,
            'isi' => $this->isi,
        ]);

        $this->hideModal();

        $this-> mailId = '';
        $this-> jenis = '';
        $this-> nomor = '';
        $this-> lampiran = '';
        $this-> perihal = '';
        $this-> tanggal = '';
        $this-> tujuan = '';
        $this-> isi = '';

    }

    public function edit ($id){
        // dd ($id); clear

        $mail  = Mail::findOrFail($id);
        // dd ($employee -> Nama);
        // mengisi variabel kosong
        $this -> mailId = $id;
        $this-> jenis = $mail -> jenis;
        $this-> nomor = $mail -> nomor;
        $this-> lampiran = $mail -> lampiran;
        $this-> perihal = $mail -> perihal;
        $this-> tanggal = $mail -> tanggal;
        $this-> tujuan = $mail -> tujuan;
        $this-> isi = $mail -> isi;
       

        // dd ($this->nama);
        $this -> showModal();
    }

    public function delete ($id) {
        Mail::find($id)->delete();
    }
}
