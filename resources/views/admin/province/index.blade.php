@extends('layouts.dashboard')
@section('title', 'Provinsi')
@section('content')
    <section class="sm:p-5">
        <h2 class="mb-4 text-2xl font-bold">Data Provinsi</h2>
        <div class="mx-auto rondexl ">
            <!-- Start coding here -->
            <div class="bg-white shadow-md ">
                <div class="flex flex-col items-center justify-between p-4 space-y-3 md:flex-row md:space-y-0 md:space-x-4">
                    <div class="w-full md:w-1/2">
                        <form class="flex items-center">
                            <label for="simple-search" class="sr-only">Search</label>
                            <div class="relative w-full">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                    <svg aria-hidden="true" class="w-5 h-5 text-gray-500 " fill="currentColor"
                                        viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <input type="text" id="simple-search"
                                    class="block w-full p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-green-500 focus:border-green-500 \"
                                    placeholder="Search"
                                    required="">
                            </div>
                        </form>
                    </div>
                    <div
                        class="flex flex-col items-stretch justify-end flex-shrink-0 w-full space-y-2 md:w-auto md:flex-row md:space-y-0 md:items-center md:space-x-3">
                        <!-- Modal toggle -->
                        <div class="flex justify-center ">
                            <button id="defaultModalButton" data-modal-toggle="defaultModal"
                                class="block text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center"
                                type="button">
                                Tambah Provinsi
                            </button>
                        </div>
                        @include('admin.province.create')
                    </div>
                </div>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm text-left text-gray-500 ">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 ">
                            <tr>
                                <th scope="col" class="px-4 py-3">Foto</th>
                                <th scope="col" class="px-4 py-3">Nama</th>
                                <th scope="col" class="px-4 py-3">Deskripsi</th>
                                <th scope="col" class="px-4 py-3">
                                    <span class="sr-only">Actions</span>
                                </th>
                            </tr>
                        </thead>
                        <tbody class="align-center">
                            @forelse ($provinces as $province)
                                <tr class="border-b ">
                                    <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap">
                                        <img class="w-24 h-16 rounded-lg"
                                            src="{{ asset('storage/province/' . $province->foto_url) }}"
                                            alt="Foto Provinsi {{ $province->nama }}">
                                    </th>
                                    <td scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap">
                                        {{ $province->nama }}
                                    </td>
                                    <td scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap">
                                        {{ Str::limit($province->deskripsi, 50) }}
                                    </td>
                                    <td>
                                        <div class="flex items-center justify-end h-full gap-1 px-4 py-3">
                                            <button type="button" id="readProductButton"
                                                data-modal-toggle="readProductModal{{ $province->id }}"
                                                class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                                                Lihat
                                            </button>
                                            @include('admin.province.show')
                                            <button type="button" id="updateProductButton"
                                                data-modal-toggle="updateProductModal{{ $province->id }}"
                                                class="text-white inline-flex items-center bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                                                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor"
                                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z">
                                                    </path>
                                                    <path fill-rule="evenodd"
                                                        d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                                <span class="hidden">Edit</span>
                                            </button>
                                            @include('admin.province.edit')
                                            <form action="{{ route('admin.province.destroy', $province->id) }}"
                                                method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class="inline-flex items-center text-white bg-red-600 hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd"
                                                            d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                                            clip-rule="evenodd"></path>
                                                    </svg>
                                                    <span class="hidden">Hapus</span>
                                                </button>
                                            </form>
                                        </div>
                                    </td>

                                </tr>
                            @empty
                                <tr>
                                    <div class="mx-24 text-center border-2 border-dashed rounded-xl p-14">Data tidak
                                        ditemukan
                                    </div>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                {!! $province->links() !!}
            </div>
        </div>
    </section>
@endsection
