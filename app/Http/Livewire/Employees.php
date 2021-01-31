<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Employee;

class Employees extends Component
{

    public $employees;
    public $employeeId, $nama, $nip, $jabatan;
    public $isOpen = 0;

    public function render()
    {
        $this -> employees = Employee::all();
        return view('livewire.employees');
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
                'nama' => 'required',
                'nip' => 'required',
                'jabatan' => 'required',
            ]
        );

        Employee::updateOrCreate([ 'id' => $this-> employeeId], [
            'nama' => $this->nama,
            'nip' => $this->nip,
            'jabatan' => $this->jabatan
        ]);

        $this->hideModal();

        $this-> employeeId = '';
        $this-> nama = '';
        $this-> nip = '';
        $this-> jabatan = '';

    }

    public function edit ($id){
        // dd ($id); clear

        $employee  = Employee::findOrFail($id);
        // dd ($employee -> Nama);
        // mengisi variabel kosong
        $this -> employeeId = $id;
        $this -> nama = $employee -> Nama ;
        $this -> nip = $employee -> NIP;
        $this -> jabatan = $employee -> Jabatan;

        // dd ($this->nama);
        $this -> showModal();
    }

    public function delete ($id) {
        Employee::find($id)->delete();
    }
} 
