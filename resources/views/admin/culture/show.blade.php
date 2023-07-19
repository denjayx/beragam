@foreach ($cultures as $culture)
    <div id="readProductModal{{ $culture->id }}" tabindex="-1" aria-hidden="true"
        class="fixed top-0 left-0 right-0 z-50 items-center justify-center hidden w-full overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-modal">
        <div class="relative max-w-2xl p-4 h-4/6">
            <!-- Modal content -->
            <div
                class="p-4 overflow-y-scroll bg-white rounded-lg shadow my-scrollbar max-h-[420px] sm:p-5">
                <!-- Modal header -->
                <div class="flex justify-between mb-4 rounded-t sm:mb-5">
                    <div class="flex flex-col w-full gap-4">
                        <img class="object-cover w-full rounded-lg h-60"
                            src="{{ asset('storage/culture/' . $culture->foto_url) }}"
                            alt="Foto {{ $culture->categories->nama }} Provinsi {{ $culture->provinces->nama }} - {{ $culture->nama }} ">
                        <div class="text-lg text-gray-900 md:text-xl">
                            <h3 class="font-semibold ">
                                {{ $culture->nama }}
                            </h3>
                        </div>
                    </div>
                </div>
                <dl>
                    <dt class="mb-2 font-semibold leading-none text-gray-900">Provinsi</dt>
                    <dd class="mb-4 font-light text-gray-500 sm:mb-5">{{ $culture->provinces->nama }}
                    </dd>
                    <dt class="mb-2 font-semibold leading-none text-gray-900">Detail</dt>
                    <dd class="mb-4 font-light text-gray-500 sm:mb-5">{{ $culture->deskripsi }}</dd>
                </dl>
            </div>
        </div>
    </div>
@endforeach
