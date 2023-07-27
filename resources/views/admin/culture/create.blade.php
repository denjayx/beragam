<!-- Main modal -->
<div id="defaultModal" tabindex="-1" aria-hidden="true"
    class="fixed top-0 left-0 right-0 z-50 items-center justify-center hidden w-full pt-10 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
    <div class="relative w-full h-full max-w-2xl p-4 md:h-auto">
        <!-- Modal content -->
        <div class="relative p-4 bg-white rounded-lg shadow sm:p-5">
            <!-- Modal header -->
            <div
                class="flex items-center justify-between pb-4 mb-4 font-semibold text-gray-900 border-b rounded-t sm:mb-text-lg ">
                Tambah Budaya
                </h3>
                <button type="button"
                    class=" text-red-400 bg-red-50 hover:bg-red-200 hover:text-red-900 rounded-lg text-sm p-1.5 inline-flex"
                    data-modal-toggle="defaultModal">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <form action="{{ route('admin.culture.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="grid gap-4 mb-4 sm:grid-cols-2">
                    <div>
                        <label for="province" class="block mb-2 text-sm font-medium text-gray-900">Pilih
                            Provinsi</label>
                        <select id="province" name="prov_id"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                            @foreach ($provinces as $province)
                                <option value="{{ $province->id }}">{{ $province->nama }}</option>
                            @endforeach
                        </select>
                        @error('prov_id')
                            <span class="text-red-600">{{ $message }}</span>
                        @enderror
                    </div>
                    <div>
                        <label for="category" class="block mb-2 text-sm font-medium text-gray-900">Pilih
                            Kategori</label>
                        <select id="category" name="cat_id"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->nama }}</option>
                            @endforeach
                        </select>
                        @error('cat_id')
                            <span class="text-red-600">{{ $message }}</span>
                        @enderror
                    </div>
                    <div>
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 ">Nama Budaya</label>
                        <input name="nama" type="text" id="name"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-600 focus:border-green-600 block w-full p-2.5"
                            placeholder="Cth. Yogyakarta">
                    </div>

                    <div>
                        <label class="block mb-2 text-sm font-medium text-gray-900" for="foto_provinsi">Upload
                            file</label>
                        <input name="foto_url"
                            class="block w-full text-sm rounded-lg cursor-pointer bg-gray-50 focus:outline-none "
                            aria-describedby="foto_provinsi" id="foto_provinsi" type="file">
                        <div class="mt-1 text-sm text-gray-500 " id="foto_prvinsi">Upload Foto
                            Ikonik Provinsi</div>

                    </div>
                    <div class="sm:col-span-2">
                        <label for="deskripsi" class="block mb-2 text-sm font-medium text-gray-900 ">Deskripsi</label>
                        <textarea name="deskripsi" id="deskripsi" rows="5"
                            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-green-500 focus:border-green-500"
                            placeholder="Tuliskan deskripsi provinsis..."></textarea>
                    </div>
                </div>
                <div class="flex items-center space-x-4">
                    <button type="submit"
                        class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                        Tambah
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
