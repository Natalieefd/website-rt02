@extends('layouts.global')

@section('content')
@include('components.header')
@include('components.navbar')
<section class="flex flex-col bg-grey pt-10 pb-20 px-20 gap-4 ">
<p class="text-4xl text-center uppercase text-primary pb-10 font-poppins font-semibold">Wilayah RT 02</p>
    <div class="flex flex-row justify-center items-center gap-28">
        <div class="w-2/4 lg:w-7/12">
            <img src="{{ asset('assets/peta-wilayah-rt-02.jpg') }}" alt="" class="rounded-2xl shadow-xl">
        </div>
        <div class="w-2/4 lg:w-8/12">
            <a href="https://www.google.com/maps/@-0.3090067,117.2947128,116m/data=!3m1!1e3?entry=ttu">
                <img src="{{ asset('assets/google-maps-rt002.png') }}" alt="" class="w-4/5 lg:w-11/12 rounded-lg shadow-xl">
            </a>
        </div>
    </div>
</section>
@include('components.footer')
@endsection
