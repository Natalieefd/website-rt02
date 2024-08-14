
@extends('layouts.global')

@section('content')
    @include('components.header')
    @include('components.navbar')
    <section class="flex flex-col justify-center items-center pt-10 bg-grey font-poppinspy-32 px-10 text-sm font-semibold text-primary">
        <p class="font-poppins font-semibold text-4xl uppercase pb-10">Program Kerja KKN</p>
        <div class="flex animate-[slide_ 2s_linear_infinite]">
            <div class="grid grid-cols-3 gap-10 pb-10">
            @foreach ($kknunmul as $kkn)
                <div class="flex flex-col justify-evenly items-center w-80 bg-secondary p-5 rounded-2xl shadow-xl text-center text-xl uppercase">
                    <img src="{{ asset("assets/$kkn->fotoProker") }}" class="rounded-md items-center">
                    <p class="text-base font-poppins font-semibold  pt-5">{{ $kkn->namaProker }}</p>
                    <p class="text-sm font-poppins font-medium pt-24>Penanggung Jawab</p>
                    <p class="text-sm font-poppins font-medium pt-2">{{ $kkn->pj }}</p>
                </div>
            @endforeach
            </div>
        </div>
    </section>
    @include('components.footer')
@endsection
