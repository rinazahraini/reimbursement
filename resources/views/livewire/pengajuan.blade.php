<div>
    <section class="box-border relative block w-full py-6 leading-10 text-center text-indigo-900 bg-white md:py-8">
        <div class="w-full px-4 mx-auto leading-10 text-center md:px-4 lg:px-6 max-w-7xl">
            <div class="box-border flex flex-col flex-wrap items-center justify-between text-indigo-900 md:flex-row">
                <div
                    class="relative z-10 flex items-center w-auto px-4 leading-10 lg:flex-grow-0 lg:flex-shrink-0 lg:text-left">
                    <a href="#_"
                        class="box-border inline-block font-sans text-2xl font-bold text-left text-indigo-900 no-underline bg-transparent cursor-pointer focus:no-underline">
                        Reimbursement.
                    </a>
                </div>
                <div
                    class="relative left-0 z-0 flex justify-center w-full px-4 mt-4 space-x-6 font-medium leading-10 md:mt-0 md:absolute lg:space-x-8 md:flex-grow-0 md:text-left lg:text-center">
                </div>
                <div
                    class="relative px-4 mt-2 font-medium leading-10 md:flex-grow-0 md:flex-shrink-0 md:mt-0 md:text-right lg:flex-grow-0 lg:flex-shrink-0">
                    <a href="{{route('home')}}"
                        class="box-border inline-block mx-5 text-right text-indigo-900 no-underline bg-transparent cursor-pointer hover:text-blue-700 focus:no-underline">
                        Home
                    </a>
                    <a href="{{route('status')}}"
                        class="box-border inline-block mx-5 text-right text-indigo-900 no-underline bg-transparent cursor-pointer hover:text-blue-700 focus:no-underline">
                        Status
                    </a>
                    <a href="{{ route('keluar') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="box-border inline-flex items-center h-10 px-4 text-base text-center text-indigo-900 no-underline align-middle bg-transparent border border-gray-300 rounded cursor-pointer select-none hover:bg-gray-50 hover:text-blue-700 focus:shadow-xs focus:no-underline">
                        Log out
                    </a>
                    <form id="logout-form" action="{{ route('keluar') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </section>
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
            <div class="w-full max-w-lg mx-auto">
                <h1 class="text-gray-600 font-medium text-2xl border-b border-gray-300 pb-2.5 mb-2.5">Data Karyawan</h1>

                @foreach ($user as $item)
                <div class="box-border flex items-start text-gray-900 border-solid">
                    <div
                        class="flex items-center justify-center w-12 h-12 leading-7 bg-blue-600 border-0 border-gray-200 rounded-full">
                        <p class="box-border m-0 text-xl text-white border-solid">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4">
                                </path>
                            </svg>
                        </p>
                    </div>
                    <div class="flex-1 ml-6 leading-7 border-0 border-gray-200">
                        <h3
                            class="box-border m-0 text-lg font-semibold leading-tight tracking-tight text-black border-solid sm:text-xl md:text-2xl">
                            ID User</h3>
                        <p class="box-border mt-2 text-base leading-normal text-gray-900 border-solid">
                            {{$item->user_id}}</p>
                    </div>
                </div>
                <div class="box-border flex items-start text-gray-900 border-solid">
                    <div
                        class="flex items-center justify-center w-12 h-12 leading-7 bg-blue-600 border-0 border-gray-200 rounded-full">
                        <p class="box-border m-0 text-xl text-white border-solid">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4">
                                </path>
                            </svg>
                        </p>
                    </div>
                    <div class="flex-1 ml-6 leading-7 border-0 border-gray-200">
                        <h3
                            class="box-border m-0 text-lg font-semibold leading-tight tracking-tight text-black border-solid sm:text-xl md:text-2xl">
                            NIK</h3>
                        <p class="box-border mt-2 text-base leading-normal text-gray-900 border-solid">
                            {{$item->nik}}</p>
                    </div>
                </div>
                <div class="box-border flex items-start text-gray-900 border-solid">
                    <div
                        class="flex items-center justify-center w-12 h-12 leading-7 bg-blue-600 border-0 border-gray-200 rounded-full">
                        <p class="box-border m-0 text-xl text-white border-solid">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4">
                                </path>
                            </svg>
                        </p>
                    </div>
                    <div class="flex-1 ml-6 leading-7 border-0 border-gray-200">
                        <h3
                            class="box-border m-0 text-lg font-semibold leading-tight tracking-tight text-black border-solid sm:text-xl md:text-2xl">
                            Nama Lengkap</h3>
                        <p class="box-border mt-2 text-base leading-normal text-gray-900 border-solid">
                            {{$item->name}}</p>
                    </div>
                </div>
                @endforeach

                <h1 class="text-gray-600 font-medium text-2xl border-b border-gray-300 pb-2.5 mb-2.5"></h1>
                <h1 class="text-gray-600 font-medium text-2xl border-b border-gray-300 pb-2.5 mb-2.5">Total Klaim Anda
                    Tahun 2021</h1>
                <div class="box-border flex items-start text-gray-900 border-solid">
                    <div
                        class="flex items-center justify-center w-12 h-12 leading-7 bg-blue-600 border-0 border-gray-200 rounded-full">
                        <p class="box-border m-0 text-xl text-white border-solid">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4">
                                </path>
                            </svg>
                        </p>
                    </div>
                    <div class="flex-1 ml-6 leading-7 border-0 border-gray-200">
                        <h3
                            class="box-border m-0 text-lg font-semibold leading-tight tracking-tight text-black border-solid sm:text-xl md:text-2xl">
                            Total Klaim</h3>
                        <p class="box-border mt-2 text-base leading-normal text-gray-900 border-solid">
                            @currency($pengajuan)</p>
                    </div>
                </div>

            </div>
            <div class="w-full max-w-sm mx-auto">
                <h1 class="text-gray-600 font-medium text-2xl border-b border-gray-300 pb-2.5 mb-2.5">Form
                    Reimbursement</h1>

                
                <div class="relative flex flex-col-reverse mb-5">
                    @if (session()->has('message'))
                    <div class="flex justify">
                        <div class="flex items-center px-6 py-6 text-green-700 bg-green-100 rounded">
                            <span><svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 " fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg></span>
                            <p class="ml-2 text-medium">{{ session('message') }}</p>
                        </div>
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
                    <label for="date" class="mb-2 font-medium text-gray-500 peer-focus:text-blue-600">Jenis
                        Klaim</label>
                </div>

                <div class="relative flex flex-col-reverse mb-5">
                    <select wire:model="rincian_id"
                        class="border-gray-300 focus:border-blue-600 peer border rounded-md px-3.5 py-3 focus:outline-none focus:ring-2 focus:ring-offset-1 focus:ring-blue-600 focus:ring-opacity-0 caret-blue-600">
                        <option value="">Pilih</option>
                        @foreach ($rincian as $item)
                        <option value="{{ $item->rincian_id }}">{{ $item->nama_rincian }}</option>
                        @endforeach
                    </select>
                    <label for="date" class="mb-2 font-medium text-gray-500 peer-focus:text-blue-600">Untuk
                        Pembayaran</label>
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
                    <label for="date" class="mb-2 font-medium text-gray-500 peer-focus:text-blue-600">Tanggal
                        Kwitansi</label>
                </div>

                <div class="relative flex flex-col-reverse mb-5">
                    <input type="text" wire:model="claim_biaya"
                        class="border-gray-300 focus:border-blue-600 peer border rounded-md px-3.5 py-3 focus:outline-none focus:ring-2 focus:ring-offset-1 focus:ring-blue-600 focus:ring-opacity-0 caret-blue-600">
                    <label for="text" class="mb-2 font-medium text-gray-500 peer-focus:text-blue-600">Jumlah
                        Kwitansi</label>
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
