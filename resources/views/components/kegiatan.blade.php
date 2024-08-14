@extends('layouts.global')

@section('content')
@include('components.header')
@include('components.navbar')
<section class="flex flex-col justify-center items-center pt-10 bg-grey font-poppinspy-32 px-10 text-sm font-semibold text-primary">
    <p class="font-poppins font-semibold text-4xl uppercase pb-10">kegiatan rt 02</p>
    <div class="flex animate-[slide_ 2s_linear_infinite]">
        <div class="grid grid-cols-3 gap-10 pb-10">
        @foreach ($kegiatan as $kg)
            <div class="flex flex-col justify-evenly items-center max-w-sm w-full rounded-lg shadow dark:bg-gray-800 p-4 md:p-6 bg-secondary text-center text-xl uppercase">
                <img src="{{ asset("assets/$kg->fotoKegiatan") }}" class="rounded-md items-center">
                <p class="text-base font-poppins font-semibold pt-5">{{ $kg->namaKegiatan }}</p>
            </div>
        @endforeach
        </div>
    </div>
</section>

@include('components.footer')
@endsection
