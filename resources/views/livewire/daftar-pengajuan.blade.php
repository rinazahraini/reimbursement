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
                    <a href="{{route('admin.dashboard')}}"
                        class="box-border inline-block mx-5 text-right text-indigo-900 no-underline bg-transparent cursor-pointer hover:text-blue-700 focus:no-underline">
                        Home
                    </a>
                    <a href="{{ route('admin.keluar') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                        class="box-border inline-flex items-center h-10 px-4 text-base text-center text-indigo-900 no-underline align-middle bg-transparent border border-gray-300 rounded cursor-pointer select-none hover:bg-gray-50 hover:text-blue-700 focus:shadow-xs focus:no-underline">
                        Log out
                    </a>
                    <form id="logout-form" action="{{ route('admin.keluar') }}" method="POST" style="display: none;">
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
            <div class="flex flex-col">
                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            User
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Jenis Klaim
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Claim Biaya
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Biaya Approved
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Status
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Tanggal Kwitansi
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Verifikasi
                                        </th>
                                        <th scope="col" class="relative px-6 py-3">
                                            <span class="sr-only">Edit</span>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    @foreach ($pengajuan as $item)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <div class="flex-shrink-0 h-10 w-10">
                                                    <img class="h-10 w-10 rounded-full"
                                                        src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=4&w=256&h=256&q=60"
                                                        alt="">
                                                </div>
                                                <div class="ml-4">
                                                    <div class="text-sm font-medium text-gray-900">
                                                        {{$item->user_id}}
                                                    </div>
                                                    <div class="text-sm text-gray-500">
                                                        {{$item->email}}
                                                    </div>
                                                    <div class="text-sm text-gray-500">
                                                        {{$item->nik}}
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900">{{$item->nama_kategori}}</div>
                                            <div class="text-sm text-gray-500">{{$item->nama_rincian}}</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900">@currency($item->claim_biaya)</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900">@currency($item->biaya_approve)</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900">
                                                @if ($item->claim_status == 'y')
                                                <div style="padding-top: 0.1em; padding-bottom: 0.1rem"
                                                    class="text-sm px-3 bg-green-200 text-green-800 rounded-full">
                                                    Finish</div>
                                                @else
                                                <div style="padding-top: 0.1em; padding-bottom: 0.1rem"
                                                    class="text-sm px-3 bg-red-200 text-red-800 rounded-full">
                                                    Running</div>
                                                @endif</h3>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                            {{ Date::parse($item->tgl_kwitansi)->format('d F Y') }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                            <a href="{{ asset('storage/'.$item->upload_kwitansi) }}" target="_blank"
                                                type="button"
                                                class="block py-1 mb-1 text-sm font-small leading-normal text-center text-white transition duration-200 bg-blue-800 rounded hover:bg-blue-900">Kwitansi</a>
                                            <a wire:click="detail({{$item->id}})" type="button"
                                                class="block py-1 mb-1 text-sm font-small leading-normal text-center text-white transition duration-200 bg-blue-800 rounded hover:bg-blue-900"
                                                onclick="toggleModal('modal-example-regular')">cek</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            @include('livewire.detail')
        </div>
    </section>
</div>
