@extends('layouts.global')
@section('content')
    <div class="relative flex items-center h-screen bg-primary">
        <img src="{{ asset('assets/rt02.jpeg') }}" alt="" class="absolute right-0 h-screen bg-cover">
        <div class="absolute right-0 w-screen h-full bg-primary bg-opacity-30"></div>
        <h1 class="absolute right-32 uppercase text-8xl font-bold text-grey">edit<br>data<br>penduduk</h1>
        <div class="absolute font-poppins top-0 p-8 shadow-md w-fit h-full px-24 bg-primary justify-center">
            <form action="{{ route('admin.dashboard.updatePenduduk', $penduduk->id) }}" method="get" class="pt-36" enctype="multipart/form-data">
                @csrf
                @if (session('error'))
                    <div class="mb-6">
                        <div class="p-2 rounded-sm bg-red-100 ring-1 ring-red-500">
                            <p class="text-red-500 text-xs">
                                {{ session('error') }}
                            </p>
                        </div>
                    </div>
                @endif
                @if (session('success'))
                    <div class="mb-6">
                        <div class="p-2 rounded-sm bg-green-100 ring-1 ring-green-500">
                            <p class="text-green-500">
                                {{ session('success') }}
                            </p>
                        </div>
                    </div>
                @endif
                <div class="relative mb-5">
                    <label for="" class="capitalize font-medium text-quaternary px-2">Penduduk Perempuan</label>
                    <input type="text" name="perempuan" placeholder="{{ $penduduk->perempuan }}"
                        class="w-full pl-4 pr-4 py-2 mt-2 bg-grey rounded-sm ring-1 ring-quaternary focus:outline-none focus:ring-pribg-primary">
                    @error('perempuan')
                        <p class="text-red">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
                <div class="relative mb-5">
                    <label for="" class="capitalize font-medium text-quaternary px-2">Penduduk Laki-Laki</label>
                    <input type="text" name="lakilaki" placeholder="{{ $penduduk->lakilaki }}"
                        class="w-full pl-4 pr-4 px-2 mt-2 bg-grey rounded-sm ring-1 ring-quaternary focus:outline-none focus:ring-pribg-primary">
                    @error('lakilaki')
                        <p class="text-red">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
                <button type="submit" onclick="alert('Data penduduk berhasil diedit')"
                    class="w-full h-auto py-2 mb-4 text-primary font-medium bg-quaternary rounded-md flex justify-center items-center hover:bg-teritary">
                    Submit
                </button>
                <a href="{{ route('admin.penduduk') }}" class="w-full h-auto p-2 text-primary font-medium rounded-md flex justify-center items-center bg-quaternary hover:bg-teritary">
                    Cancel
                </a>
            </form>
        </div>
    </div>
@endsection
