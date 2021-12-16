<div>
    <section class="relative flex items-center justify-center w-full h-full bg-white">
        <div class="relative hidden w-1/4 h-full bg-center bg-cover lg:block"></div>
        <div class="absolute top-0 left-0 hidden w-1/4 h-full bg-center bg-cover lg:block"
            style="background-image:url('https://cdn.devdojo.com/images/november2021/scenic.jpeg')">
            <div class="absolute inset-0 w-full h-full bg-gradient-to-b from-transparent to-gray-900"></div>
            <a href="#_" class="absolute bottom-0 left-0 flex items-center w-auto m-5 font-medium text-white group">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                        clip-rule="evenodd"></path>
                </svg>
                Return Home
                <span class="absolute overflow-hidden left-0 block pl-5 h-0.5 w-full bottom-0 -mb-0.5">
                    <span
                        class="absolute rounded-full bg-white duration-200 ease-in-out transition-all h-0.5 w-0 group-hover:w-full"></span>
                </span>
            </a>
        </div>

        <div class="flex items-center justify-center w-full h-full px-8 py-32 lg:w-3/4 sm:px-0">
            <div class="w-full max-w-sm mx-auto">
                <h1 class="text-gray-600 font-medium text-2xl border-b border-gray-300 pb-2.5 mb-2.5">Submission
                    Reimbursement</h1>

                    <div>
                        @if (session()->has('message'))
                            <div class="alert alert-success">
                                {{ session('message') }}
                            </div>
                        @endif
                    </div>

                <div class="relative flex flex-col-reverse mb-5">
                    <select wire:model="kategori_id"
                        class="border-gray-300 focus:border-blue-600 peer border rounded-md px-3.5 py-3 focus:outline-none focus:ring-2 focus:ring-offset-1 focus:ring-blue-600 focus:ring-opacity-0 caret-blue-600">
                        <option value="">Pilih</option>
                        @foreach ($kategori as $item)
                        <option value="{{ $item->kategori_id }}">{{ $item->nama_kategori }}</option>
                        @endforeach
                    </select>
                    <label for="date" class="mb-2 font-medium text-gray-500 peer-focus:text-blue-600">Jenis Klaim</label>
                </div>

                <div class="relative flex flex-col-reverse mb-5">
                    <select wire:model="rincian_id"
                        class="border-gray-300 focus:border-blue-600 peer border rounded-md px-3.5 py-3 focus:outline-none focus:ring-2 focus:ring-offset-1 focus:ring-blue-600 focus:ring-opacity-0 caret-blue-600">
                        <option value="">Pilih</option>
                        @foreach ($rincian as $item)
                        <option value="{{ $item->rincian_id }}">{{ $item->nama_rincian }}</option>
                        @endforeach
                    </select>
                    <label for="date" class="mb-2 font-medium text-gray-500 peer-focus:text-blue-600">Untuk Pembayaran</label>
                </div>

                <div class="relative flex flex-col-reverse mb-5">
                    <textarea wire:model="deskripsi" id="" cols="10" rows="5"
                        class="border-gray-300 focus:border-blue-600 peer border rounded-md px-3.5 py-3 focus:outline-none focus:ring-2 focus:ring-offset-1 focus:ring-blue-600 focus:ring-opacity-0 caret-blue-600"></textarea>
                    <label for="date" class="mb-2 font-medium text-gray-500 peer-focus:text-blue-600">Keterangan
                        (Optional)</label>
                </div>

                <div class="relative flex flex-col-reverse mb-5">
                    <input type="date" wire:model="tgl_kwitansi"
                        class="border-gray-300 focus:border-blue-600 peer border rounded-md px-3.5 py-3 focus:outline-none focus:ring-2 focus:ring-offset-1 focus:ring-blue-600 focus:ring-opacity-0 caret-blue-600">
                    <label for="date" class="mb-2 font-medium text-gray-500 peer-focus:text-blue-600">Tanggal Kwitansi</label>
                </div>

                <div class="relative flex flex-col-reverse mb-5">
                    <input type="text" wire:model="claim_biaya"
                        class="border-gray-300 focus:border-blue-600 peer border rounded-md px-3.5 py-3 focus:outline-none focus:ring-2 focus:ring-offset-1 focus:ring-blue-600 focus:ring-opacity-0 caret-blue-600">
                    <label for="text" class="mb-2 font-medium text-gray-500 peer-focus:text-blue-600">Jumlah Kwitansi</label>
                </div>

                <div class="relative flex flex-col-reverse mb-5">
                    <input type="file" wire:model="upload_kwitansi"
                        class="border-gray-300 focus:border-blue-600 peer border rounded-md px-3.5 py-3 focus:outline-none focus:ring-2 focus:ring-offset-1 focus:ring-blue-600 focus:ring-opacity-0 caret-blue-600">
                    <label for="file" class="mb-2 font-medium text-gray-500 peer-focus:text-blue-600">File
                        Upload (kwitansi)</label>
                </div>

                <div class="relative flex flex-col">
                    <a wire:click.prevent="store()"
                        class="w-full rounded bg-blue-600 hover:opacity-90 text-white py-3.5 px-2 text-center font-medium">Request
                        Reimbursement</a>
                </div>

            </div>
        </div>
    </section>
</div>
