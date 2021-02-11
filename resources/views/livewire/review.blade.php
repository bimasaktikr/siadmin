<div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div>
                    <button wire:click="showModal()" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-8 rounded">
                        Tambah Surat
                    </button>
                        @if($isOpen)
                            @include('livewire.buatsurat')
                        @endif
                    </div>
                <table class="table-fixed w-full">
                    <thead class="bg-gray-500">
                        <tr>
                        <th class="px-4 py-8 text-center">Nomor</th>
                        <th class="px-4 py-8 text-center">Jenis Surat</th>
                        <th class="px-4 py-8 text-center">Tanggal</th>
                        <th class="px-4 py-8 text-center">Perihal</th>
                        <th class="px-4 py-8 text-center">Lampiran</th>
                        <th class="px-4 py-8 text-center">Tujuan</th>
                        <th class="px-4 py-8 text-center">Isi</th>
                        <th class="px-4 py-8 text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($mails as $mail)
                        <tr>
                            <td class="px-4 py-4 text-center">{{ $mail -> nomor}}</td>
                            <td class="px-4 py-4 text-center">{{ $mail -> jenis}}</td>
                            <td class="px-4 py-4 text-center">{{ $mail -> tanggal}}</td>
                            <td class="px-4 py-4 text-center">{{ $mail -> perihal}}</td>
                            <td class="px-4 py-4 text-center">{{ $mail -> lampiran}}</td>
                            <td class="px-4 py-4 text-center">{{ $mail -> tujuan}}</td>
                            <td class="px-4 py-4 text-center">{{ $mail -> isi}}</td>
                            <td class="px-4 py-4 text-center">
                                <button wire:click="edit( {{$mail -> id}} )" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-4 rounded">
                                    Edit
                                </button>
                                <button wire:click="delete( {{$mail -> id}} )" class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-4 rounded">
                                    Delete
                                </button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    </table>
                </div>