@extends('layouts.dashboard')
@section('content')
    <!-- Main modal -->
    <div class="p-4 bg-white rounded-lg sm:p-5 " id="updateProductModal">
        <!-- Modal header -->
        <div class="flex items-center justify-between pb-4 mb-4 border-b rounded-t sm:mb-5">
            <h3 class="text-lg font-semibold text-gray-900 ">
                Update Product
            </h3>
        </div>
        <!-- Modal body -->
        <form action="{{ route('provinsi.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="grid gap-4 mb-4 sm:grid-cols-2">
                <div>
                    <label for="nama" class="block mb-2 text-sm font-medium text-gray-900 ">Nama provinsi</label>
                    <input type="text" name="nama" id="nama"
                        class="block w-full p-2 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-600 focus:border-blue-600"
                        placeholder="Masukkan nama provinsi">
                </div>
                <div>

                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="multiple_files">Unggah
                        Foto</label>
                    <input name="foto_url"
                        class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none"
                        type="file">

                </div>
                <div class="sm:col-span-2">
                    <label for="deskripsi" class="block mb-2 text-sm font-medium text-gray-900 ">Deskripsi</label>
                    <textarea id="deskripsi" name="deskripsi" rows="5"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                        placeholder="Deskripsi provinsi sesuaing dipilih"></textarea>
                </div>
            </div>
            <div class="flex items-center space-x-4">
                <button type="submit"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                    Tambah
                </button>
            </div>
        </form>
    </div>
@endsection
