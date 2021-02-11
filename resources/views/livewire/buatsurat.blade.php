<!-- This example requires Tailwind CSS v2.0+ -->
<div class="fixed z-10 inset-0 overflow-y-auto">
  <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
    <!--
      Background overlay, show/hide based on modal state.

      Entering: "ease-out duration-300"
        From: "opacity-0"
        To: "opacity-100"
      Leaving: "ease-in duration-200"
        From: "opacity-100"
        To: "opacity-0"
    -->
    <div class="fixed inset-0 transition-opacity" aria-hidden="true">
      <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
    </div>

    <!-- This element is to trick the browser into centering the modal contents. -->
    <span class="hidden sm:inline-block sm:align-middle sm:w-screen" aria-hidden="true">&#8203;</span>
   
    <!--
      Modal panel, show/hide based on modal state.

      Entering: "ease-out duration-300"
        From: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
        To: "opacity-100 translate-y-0 sm:scale-100"
      Leaving: "ease-in duration-200"
        From: "opacity-100 translate-y-0 sm:scale-100"
        To: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
    -->
    <div class="flex flex-row bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:w-screen sm:w-full sm:h-screen" role="dialog" aria-modal="true" aria-labelledby="modal-headline">
    <form class="w-1/2"> 
        <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
            <div class="justify-items-end">
                <div>
                  <h1 class="font-bold text-center mb-4">Tambah Surat</h1>
                </div>
            </div>

            
            <!--  Form Input Surat -->
            <div class="grid grid-cols-3 gap-2">
                    
                    <div class="mb-2">
                        <label for="nomor" class="block">Nomor Surat</label>
                        <input wire:model="nomor" type="text" name="nomor" class="shadow appearance-none border rounded w-full py-2 px-3 text-black" placeholder="Masukkan Nomor Surat">
                    </div>
                    <div class="mb-2">
                        <label for="jenis" class="block">Jenis Surat</label>
                        <input wire:model="jenis" type="text" name="jenis" class="shadow appearance-none border rounded w-full py-2 px-3 text-black" placeholder="Masukkan Jenis Surat">
                    </div>
                    <div class="mb-2">
                        <label for="tanggal" class="block">Tanggal Surat</label>
                        <input wire:model="tanggal" type="text" name="tanggal" class="shadow appearance-none border rounded w-full py-2 px-3 text-black" placeholder="Masukkan Jabatan Pegawai">
                    </div>
                    <div class="mb-2">
                        <label for="perihal" class="block">Perihal Surat</label>
                        <input wire:model="perihal" type="text" name="perihal" class="shadow appearance-none border rounded w-full py-2 px-3 text-black" placeholder="Masukkan Jabatan Pegawai">
                    </div>
                    <div class="mb-2">
                        <label for="lampiran" class="block">Lampiran Surat</label>
                        <input wire:model="lampiran" type="text" name="lampiran" class="shadow appearance-none border rounded w-full py-2 px-3 text-black" placeholder="Masukkan Jabatan Pegawai">
                    </div>
                    <div class="mb-2">
                        <label for="tujuan" class="block">Tujuan Surat</label>
                        <input wire:model="tujuan" type="text" name="tujuan" class="shadow appearance-none border rounded w-full py-2 px-3 text-black" placeholder="Masukkan Jabatan Pegawai">
                    </div> <div class="mb-2">
                        <label for="isi" class="block">Isi Surat</label>
                        <input wire:model="isi" type="text" name="isi" class="shadow appearance-none border rounded w-full py-2 px-3 text-black" placeholder="Masukkan Jabatan Pegawai">
                    </div>
            </div>
            <!-- END FORM  -->
        </div>
        
        <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
            <button wire:click.prevent="store()" type="button" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-green-600 text-base font-medium text-white hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:ml-3 sm:w-auto sm:text-sm">
            Submit
            </button>
            <button wire:click="hideModal()" type="button" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
            Cancel
            </button>
        </div>
    </form>
    <div class="w-1/2 bg-blue-100 flex">
        <div class= "grid grid-cols-3 grid-rows-6 gap-2 w-full">
            <div class=" grid grid-cols-5 bg-white rounded-md col-span-3">
                <div>
                    <img src= {{ URL::to ("/img/bpslogo.png") }} alt="bps">
                </div>
                <div class="col-span-4">
                    <p class="mt-8 text-xl italic font-black">BADAN PUSAT STATISTIK</p>
                    <p class="text-xl italic font-black">KABUPATEN SUPIORI</p>
                </div>
            </div>

            <div class="grid grid-cols-5 bg-white rounded-md col-span-3 rounded-md">
                <div class="grid grid-cols-3 grid-rows-3 col-span-3 ">
                    <div class="w-1/3">Nomor</div>
                    <div class="w-1/12">:</div>
                    <div> {{$nomor}} </div>
                    <div>Lampiran</div>
                    <div>:</div>
                    <div>{{ $lampiran }}</div>
                    <div>Perihal</div>
                    <div>:</div>
                    <div>{{ $perihal }}</div>

                </div>
                <div class="col-span-2 ">
                    <p> Sorendidori, 10 Februari 2021</p>
                   
                </div>
            
            </div>
            <div class="bg-red-100 rounded-md">3</div>
            <div class="bg-red-100 rounded-md">4</div>
            <div class="bg-red-100 rounded-md">5</div>
        </div>
    </div>
    </div>
  </div>
</div>