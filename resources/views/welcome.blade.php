@extends('layouts.app')
@section('title', 'Beranda')
@section('content')
    <section class="mb-8">
        <div class="flex items-center justify-center h-[70vh] md:min-h-screen px-4 mx-auto hero rounded-b-3xl z-10"
            style="background-image: url({{ asset('hero-image.png') }});background-repeat: no-repeat; background-size: cover;">
            <div class="flex flex-col items-center justify-center gap-8 pt-24">
                <h1 class="text-4xl font-bold text-center text-white md:text-6xl ">Jelajahi Budaya Indonesia dari Sabang
                    Sampai Merauke
                </h1>
                <span
                    class="flex items-center justify-center gap-3 text-center bg-[#78C4AC] py-3 px-6 rounded-3xl text-white font-bold">
                    <a class="" href="#">Cari Provinsi</a>
                    <img src="{{ asset('search-icon.svg') }}" alt="">
                </span>
            </div>
        </div>
    </section>
    <section class="container px-4">
        <h3 class="mb-3 font-bold text-[#17495E] text-3xl md:text-4xl">Provinsi di Indonesia</h3>
        <input type="text" class="w-full px-4 py-3 mb-3 text-lg md:px-8 md:py-4 rounded-3xl" placeholder="Cari Provinsi">
        <div class="flex pb-8 overflow-x-scroll md:overflow-x-hidden gap-x-4">
            @foreach ($provinces as $province)
                <div class="flex-shrink-0 w-full p-4 bg-white shadow-xl md:flex-shrink card rounded-3xl">
                    <a href="{{ route('province.show', $province->id) }}">
                        <img src="{{ asset('storage/province/' . $province->foto_url) }} "
                            class="object-cover h-72 rounded-3xl" alt="">
                        <h1 class="font-bold text-3xl text-[#80B8D0] py-2 ">{{ $province->nama }}</h1>
                        <p>{{ Str::limit($province->deskripsi, 40) }}</p>
                    </a>
                </div>
            @endforeach
        </div>
        <a href="{{ route('province.index') }}" class="text-[#72CF7B] font-bold text-center text-lg block underline">Lihat
            Semua</a>
    </section>
    <section class="container px-4 mt-16">
        <h3 class="font-bold text-[#17495E] text-3xl mb-4">Artikel</h3>
        <div class="flex gap-5 pb-8 overflow-x-scroll md:overflow-x-hidden md:grid md:grid-cols-2 cards">
            <div class="flex flex-col flex-shrink-0 w-full gap-4 p-4 bg-white shadow-xl card rounded-3xl">
                <img class="object-cover w-full h-48 rounded-3xl" src="{{ 'artikel1.png' }}" alt="">
                <div class="flex flex-col gap-3">
                    <div class="flex items-center gap-2 text-sm">
                        <img src="{{ asset('date.svg') }}" alt="">
                        <span> 4 juli 2023 </span>
                    </div>
                    <div class="">
                        <h3 class="text-3xl font-bold">10 Rekomendasi wisata di Indonesia</h3>
                        <p class="text-sm">
                            1. Danau Toba di Sumatera Utara
                            2. Tanjung Kelayang di Bangka Belitung
                            3. Mandalika di Nusa Tenggara Barat...
                        </p>
                    </div>
                </div>
            </div>
            <div class="flex flex-col flex-shrink-0 w-full gap-4 p-4 bg-white shadow-xl card rounded-3xl">
                <img class="object-cover w-full h-48 rounded-3xl" src="{{ 'artikel1.png' }}" alt="">
                <div class="flex flex-col gap-3">
                    <div class="flex items-center gap-2 text-sm">
                        <img src="{{ asset('date.svg') }}" alt="">
                        <span> 4 juli 2023 </span>
                    </div>
                    <div class="">
                        <h3 class="text-3xl font-bold">Jelajah Kuliner Jateng & Jogja</h3>
                        <p class="text-sm">
                            Jawa Tengah dan Yogyakarta harus segera masuk dalam daftar destinasi wisata kuliner terbaik
                            versimu, Sob! Kekayaan budaya menyatu dalam sajian kuliner khasnya. Citarasa yang ti..
                        </p>
                    </div>
                </div>
            </div>
            <div class="flex flex-col flex-shrink-0 w-full gap-4 p-4 bg-white shadow-xl card rounded-3xl">
                <img class="object-cover w-full h-48 rounded-3xl" src="{{ 'artikel1.png' }}" alt="">
                <div class="flex flex-col gap-3">
                    <div class="flex items-center gap-2 text-sm">
                        <img src="{{ asset('date.svg') }}" alt="">
                        <span> 4 juli 2023 </span>
                    </div>
                    <div class="">
                        <h3 class="text-3xl font-bold">Pakaian Adat: Arti, Contoh, dan Fungsinya</h3>
                        <p class="text-sm">
                            Pakaian ini juga digunakan untuk memperingati perayaan hari besar, menunjukkan atau menentukan
                            pera..
                        </p>
                    </div>
                </div>
            </div>
            <div class="flex flex-col flex-shrink-0 w-full gap-4 p-4 bg-white shadow-xl card rounded-3xl">
                <img class="object-cover w-full h-48 rounded-3xl" src="{{ 'artikel1.png' }}" alt="">
                <div class="flex flex-col gap-3">
                    <div class="flex items-center gap-2 text-sm">
                        <img src="{{ asset('date.svg') }}" alt="">
                        <span> 4 juli 2023 </span>
                    </div>
                    <div class="">
                        <h3 class="text-3xl font-bold">Filosofi Tari Pendet Berdasarkan Sejarah Budaya Bali!</h3>
                        <p class="text-sm">
                            Tarian ini konon untuk menyambut turunnya para dewa ke bumi. Tari Pendet merupakan hasil karya
                            seorang master...
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <a href="" class="text-[#72CF7B] font-bold text-center text-lg block underline">Lihat Semua</a>
    </section>
    <section class="container px-4 mt-16">
        <div class="flex items-center justify-between">
            <div>
                <h3 class="font-bold text-[#17495E] mb-4 text-3xl">Galeri</h3>
            </div>
        </div>
        <div class="grid justify-center grid-cols-2 gap-4 md:grid-cols-3">
            @foreach ($cultures as $culture)
                <div class="">
                    <img class="object-cover w-full h-56 rounded-xl"
                        src="{{ asset('storage/culture/' . $culture->foto_url) }}" alt="" class="w-full">
                </div>
            @endforeach
        </div>
    </section>
@endsection
