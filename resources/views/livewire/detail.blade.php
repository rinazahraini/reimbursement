<div>
    <div wire:ignore.self
        class="hidden overflow-x-hidden overflow-y-aut fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center"
        id="modal-example-regular">
        <div class="relative w-auto my-6 mx-auto max-w-3xl">
            <!--content-->
            <div
                class="border-0 rounded-lg shadow-lg relative flex flex-col w-full bg-white outline-none focus:outline-none">
                <!--header-->
                <div class="flex items-start justify-between p-5 border-b border-solid border-gray-200 rounded-t">
                    <h3 class="text-3xl font-semibold">Verifikasi Reimbursement</h3>
                    <button
                        class="p-1 ml-auto bg-transparent border-0 text-gray-300 float-right text-3xl leading-none font-semibold outline-none focus:outline-none"
                        onclick="toggleModal('modal-example-regular')">
                        <span class="bg-transparent h-6 w-6 text-2xl block outline-none focus:outline-none"></span>
                    </button>
                </div>
                <div class="relative p-6 flex-auto">
                    <div class="relative">
                        <label class="absolute px-2 ml-2 -mt-3 font-medium text-gray-600 bg-white">ID Pengajuan</label>
                        <div
                            class="block w-full px-4 py-4 mt-2 text-base placeholder-gray-400 bg-white border border-gray-300 rounded-md focus:outline-none focus:border-black">
                            {{$pengajuan_id}}</div>
                    </div>
                    <div class="grid grid-cols-3 gap-3">
                        <div class="relative">
                            <label class="absolute px-2 ml-2 -mt-3 font-medium text-gray-600 bg-white">Nama</label>
                            <div
                                class="block w-full px-4 py-4 mt-2 text-base placeholder-gray-400 bg-white border border-gray-300 rounded-md focus:outline-none focus:border-black">
                                {{$name}}</div>
                        </div>
                        <div class="relative">
                            <label class="absolute px-2 ml-2 -mt-3 font-medium text-gray-600 bg-white">NIK</label>
                            <div
                                class="block w-full px-4 py-4 mt-2 text-base placeholder-gray-400 bg-white border border-gray-300 rounded-md focus:outline-none focus:border-black">
                                {{$nik}}</div>
                        </div>
                        <div class="relative">
                            <label class="absolute px-2 ml-2 -mt-3 font-medium text-gray-600 bg-white">Email</label>
                            <div
                                class="block w-full px-4 py-4 mt-2 text-base placeholder-gray-400 bg-white border border-gray-300 rounded-md focus:outline-none focus:border-black">
                                {{$email}}</div>
                        </div>
                    </div>
                    <div class="grid grid-cols-2 gap-2">
                        <div class="relative">
                            <label class="absolute px-2 ml-2 -mt-3 font-medium text-gray-600 bg-white">Jenis Klaim</label>
                            <div
                                class="block w-full px-4 py-4 mt-2 text-base placeholder-gray-400 bg-white border border-gray-300 rounded-md focus:outline-none focus:border-black">
                                {{$nama_kategori}}
                            </div>
                        </div>
                        <div class="relative">
                            <label class="absolute px-2 ml-2 -mt-3 font-medium text-gray-600 bg-white">Untuk Pembayaran</label>
                            <div
                                class="block w-full px-4 py-4 mt-2 text-base placeholder-gray-400 bg-white border border-gray-300 rounded-md focus:outline-none focus:border-black">
                                {{$nama_rincian}}</div>
                        </div>
                    </div>
                    <div class="relative">
                        <label class="absolute px-2 ml-2 -mt-3 font-medium text-gray-600 bg-white">Deskripsi</label>
                        <div
                            class="block w-full px-4 py-4 mt-2 text-base placeholder-gray-400 bg-white border border-gray-300 rounded-md focus:outline-none focus:border-black">
                            {{$deskripsi}}</div>
                    </div>
                    <div class="relative">
                        <label class="absolute px-2 ml-2 -mt-3 font-medium text-gray-600 bg-white">Tanggal Kwitansi</label>
                        <div
                            class="block w-full px-4 py-4 mt-2 text-base placeholder-gray-400 bg-white border border-gray-300 rounded-md focus:outline-none focus:border-black">
                            {{ Date::parse($tgl_kwitansi)->format('d F Y') }}</div>
                    </div>
                    <div class="relative">
                        <label class="absolute px-2 ml-2 -mt-3 font-medium text-gray-600 bg-white">Jumlah Kwitansi</label>
                        <div
                            class="block w-full px-4 py-4 mt-2 text-base placeholder-gray-400 bg-white border border-gray-300 rounded-md focus:outline-none focus:border-black">
                            @currency($claim_biaya)</div>
                    </div>
                    <div class="relative">
                        <label class="absolute px-2 ml-2 -mt-3 font-medium text-gray-600 bg-white">Biaya Approve</label>
                        <input wire:model="biaya_approve" type="text"
                            class="block w-full px-4 py-4 mt-2 text-base placeholder-gray-400 bg-white border border-gray-300 rounded-md focus:outline-none focus:border-black">
                    </div>
                </div>
                <div class="flex items-center justify-end p-6 border-t border-solid border-gray-200 rounded-b">
                    <button
                        class="text-purple-500 background-transparent font-bold uppercase px-6 py-2 text-sm outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
                        type="button" onclick="toggleModal('modal-example-regular')">
                        Batal
                    </button>
                    <button wire:click.prevent="update()"
                        class="bg-purple-500 text-white active:bg-purple-600 font-bold uppercase text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
                        type="submit">
                        Ajukan
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div wire:ignore.self class="hidden opacity-25 fixed inset-0 z-40 bg-black" id="modal-example-regular-backdrop">
    </div>

    <script type="text/javascript">
        function toggleModal(modalID) {
            document.getElementById(modalID).classList.toggle("hidden");
            document
                .getElementById(modalID + "-backdrop")
                .classList.toggle("hidden");
            document.getElementById(modalID).classList.toggle("flex");
            document.getElementById(modalID + "-backdrop").classList.toggle("flex");
        }

    </script>
</div>
