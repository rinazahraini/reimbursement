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

        <div class="flex items-center justify-center w-full h-full px-8 py-32 lg:w-3/4 lg:px-0">
            @foreach ($pengajuan as $item)
            <div class="w-full max-w-lg mx-auto">
                <h1 class="text-gray-600 font-medium text-2xl border-b border-gray-300 pb-2.5 mb-2.5">
                    {{$item->pengajuan_id}}</h1>
                <div class="box-border flex items-start text-gray-900 border-solid">
                    @if ($item->claim_status == 'y')
                    <div
                        class="flex items-center justify-center w-12 h-12 leading-7 bg-green-600 border-0 border-gray-200 rounded-full">
                        <p class="box-border m-0 text-xl text-white border-solid">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4">
                                </path>
                            </svg>
                        </p>
                    </div>
                    @else
                    <div
                        class="flex items-center justify-center w-12 h-12 leading-7 bg-red-600 border-0 border-gray-200 rounded-full">
                        <p class="box-border m-0 text-xl text-white border-solid">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4">
                                </path>
                            </svg>
                        </p>
                    </div>
                    @endif
                    
                    <div class="flex-1 ml-6 leading-7 border-0 border-gray-200">
                        <h3
                            class="box-border m-0 text-lg font-semibold leading-tight tracking-tight text-black border-solid sm:text-xl md:text-2xl">
                            @if ($item->claim_status == 'y')
                            Finish
                            @else
                            Running
                            @endif</h3>
                        <p class="box-border mt-2 text-base leading-normal text-gray-900 border-solid">
                            Detail</p>
                        <div class="relative">
                            <label class="absolute px-2 ml-2 -mt-3 font-medium text-gray-600 bg-white">Jenis
                                Klaim</label>
                            <div
                                class="block w-full px-4 py-4 mt-2 text-base placeholder-gray-400 bg-white border border-gray-300 rounded-md focus:outline-none focus:border-black">
                                {{$item->nama_kategori}}
                            </div>
                        </div>
                        <div class="relative">
                            <label class="absolute px-2 ml-2 -mt-3 font-medium text-gray-600 bg-white">Untuk
                                Pembayaran</label>
                            <div
                                class="block w-full px-4 py-4 mt-2 text-base placeholder-gray-400 bg-white border border-gray-300 rounded-md focus:outline-none focus:border-black">
                                {{$item->nama_rincian}}</div>
                        </div>
                        <div class="relative">
                            <label class="absolute px-2 ml-2 -mt-3 font-medium text-gray-600 bg-white">Tanggal
                                Kwitansi</label>
                            <div
                                class="block w-full px-4 py-4 mt-2 text-base placeholder-gray-400 bg-white border border-gray-300 rounded-md focus:outline-none focus:border-black">
                                {{ Date::parse($item->tgl_kwitansi)->format('d F Y') }}</div>
                        </div>
                        <div class="relative">
                            <label class="absolute px-2 ml-2 -mt-3 font-medium text-gray-600 bg-white">Jumlah
                                Kwitansi</label>
                            <div
                                class="block w-full px-4 py-4 mt-2 text-base placeholder-gray-400 bg-white border border-gray-300 rounded-md focus:outline-none focus:border-black">
                                @currency($item->claim_biaya)</div>
                        </div>
                        <div class="relative">
                            <label class="absolute px-2 ml-2 -mt-3 font-medium text-gray-600 bg-white">Biaya
                                Approve</label>
                            <div
                                class="block w-full px-4 py-4 mt-2 text-base placeholder-gray-400 bg-white border border-gray-300 rounded-md focus:outline-none focus:border-black">
                                @currency($item->biaya_approve)</div>
                        </div>
                        <div class="relative">
                            <label class="absolute px-2 ml-2 -mt-3 font-medium text-gray-600 bg-white">Claim ID</label>
                            @if ($item->claim_id)
                            <div
                            class="block w-full px-4 py-4 mt-2 text-base placeholder-gray-400 bg-white border border-gray-300 rounded-md focus:outline-none focus:border-black">
                            {{$item->claim_id}}</div>
                            @else
                            <div
                            class="block w-full px-4 py-4 mt-2 text-base placeholder-gray-400 bg-white border border-gray-300 rounded-md focus:outline-none focus:border-black">
                            --</div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </section>
</div>
