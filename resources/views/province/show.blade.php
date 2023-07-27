@extends('layouts.app')
@section('title', 'Provinsi')
@section('content')
    <section class="py-2 -mt-32 ">
        <div class="hero flex justify-center items-center mx-auto h-[550px] overflow-x-hidden px-4 "
            style="background-image: url({{ asset('storage/province/' . $province->foto_url) }});background-repeat: no-repeat; background-size: cover;">
        </div>
        <section class="container px-4 py-8 mx-auto deskripsi">
            <h2 class="text-5xl font-extrabold text-[#17495E] font-poppins">{{ $province->nama }}</h2>
            <hr>
            <div class="flex gap-5 py-4">
                <p class="text-lg text-justify font-poppins">{{ $province->deskripsi }}</p>
                <img src="../assets/img/keraton.png" alt="">
            </div>
            <div class="grid grid-cols-2 gap-4">
                @foreach ($cultures as $culture)
                    <div class="flex flex-col gap-4 p-8 bg-white rounded-3xl">
                        <h4 class="text-3xl font-extrabold text-[#17495E] font-poppins">
                            {{ $culture->categories->nama . ' ' . $province->nama }}</h4>
                        <div class="flex flex-col w-full gap-4">
                            <img class="object-cover w-full h-64 rounded-xl"
                                src="{{ asset('storage/culture/' . $culture->foto_url) }}" alt="">
                            <p>{{ $culture->deskripsi }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
    </section>
@endsection
