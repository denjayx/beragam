@extends('layouts.dashboard')

@section('content')
    <!-- Main modal -->
    <div class="p-4 bg-white rounded-lg sm:p-5 " id="updateProductModal">
        <!-- Modal header -->
        <div class="flex items-center justify-between pb-4 mb-4 border-b rounded-t sm:mb-5">
            <h3 class="text-lg font-semibold text-gray-900 ">
                Tambah Budaya
            </h3>
        </div>
        <!-- Modal body -->
        <form action="{{ route('budaya.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="grid gap-4 mb-4 sm:grid-cols-2">
                <div>
                    <label for="prov_id" class="block mb-2 text-sm font-medium text-gray-900 ">Provinsi</label>
                    <select id="prov_id" name="prov_id"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                        @foreach ($provinsis as $provinsi)
                            <option value="{{ $provinsi->id }}">{{ $provinsi->nama }}</option>
                        @endforeach
                    </select>
                    @error('prov_id')
                        <span class="text-red-600">{{ $message }}</span>
                    @enderror
                </div>
                <div>
                    <label for="kat_id" class="block mb-2 text-sm font-medium text-gray-900 ">Kategori</label>
                    <select id="kat_id" name="kat_id"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                        @foreach ($kategoris as $kategori)
                            <option value="{{ $kategori->id }}">{{ $kategori->nama }}</option>
                        @endforeach
                    </select>
                    @error('kat_id')
                        <span class="text-red-600">{{ $message }}</span>
                    @enderror
                </div>
                <div>
                    <label for="nama" class="block mb-2 text-sm font-medium text-gray-900 ">Nama Budaya</label>
                    <input type="text" name="nama" id="nama"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5"
                        placeholder="Nama budaya sesuai kategori">
                </div>
                <div>
                    <label for="foto" class="block mb-2 text-sm font-medium text-gray-900 ">Upload Foto</label>
                    <input type="file" name="foto_url" id="foto"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5"
                        placeholder="">
                </div>
                <div class="sm:col-span-2">
                    <label for="deksripsi" class="block mb-2 text-sm font-medium text-gray-900 ">Deskripsi</label>
                    <textarea id="deksripsi" name="deskripsi" rows="5"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                        placeholder="Deskripsi budaya sesuai kategori yang dipilih"></textarea>
                </div>
            </div>
            <div class="flex items-center space-x-4">
                <button type="submit"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                    Tambah
                </button>
                {{-- <button type="button"
                    class="text-red-600 inline-flex items-center hover:text-white border border-red-600 hover:bg-red-600 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                    <svg class="w-5 h-5 mr-1 -ml-1" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                            clip-rule="evenodd"></path>
                    </svg>
                    Delete
                </button> --}}
            </div>
        </form>
    </div>
@endsection
