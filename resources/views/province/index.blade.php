@extends('layouts.app')
@section('title', 'Provinsi')
@section('content')
    <section class="container px-4 mt-24">
        <h3 class="mb-3 font-bold text-[#17495E] text-3xl md:text-4xl">Provinsi di Indonesia</h3>
        <input type="text" class="w-full px-4 py-3 mb-3 text-lg md:px-8 md:py-4 rounded-3xl" placeholder="Cari Provinsi">
        <div class="grid grid-cols-1 pb-8 md:gap-4 md:grid-cols-4 gap-y-4">
            @foreach ($provinces as $province)
                <div class="flex justify-between w-full gap-4 p-4 bg-white shadow-xl md:flex-col card rounded-3xl">
                    <img src="{{ asset('storage/province/' . $province->foto_url) }} "
                        class="object-cover w-24 h-24 md:h-72 md:w-full rounded-xl" alt="">
                    <a class="" href="{{ route('province.show', $province->id) }}">
                        <h1 class="font-bold text-3xl text-[#80B8D0] py-2 ">{{ $province->nama }}</h1>
                        <p>{{ Str::limit($province->deskripsi, 40) }}</p>
                    </a>
                </div>
            @endforeach
        </div>
    </section>
@endsection
