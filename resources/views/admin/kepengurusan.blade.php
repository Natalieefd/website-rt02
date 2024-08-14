@extends('layouts.global')

@section('content')
<section class="flex w-screen h-max">
    @include('admin.sidebar')
    <div class="bg-grey w-screen h-max flex flex-col">
        <div class="flex items-center px-10 pt-10 pb-5 gap-4">
            <svg class="w-14 h-14 text-primary dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                <path fill-rule="evenodd" d="M12 6a3.5 3.5 0 1 0 0 7 3.5 3.5 0 0 0 0-7Zm-1.5 8a4 4 0 0 0-4 4 2 2 0 0 0 2 2h7a2 2 0 0 0 2-2 4 4 0 0 0-4-4h-3Zm6.82-3.096a5.51 5.51 0 0 0-2.797-6.293 3.5 3.5 0 1 1 2.796 6.292ZM19.5 18h.5a2 2 0 0 0 2-2 4 4 0 0 0-4-4h-1.1a5.503 5.503 0 0 1-.471.762A5.998 5.998 0 0 1 19.5 18ZM4 7.5a3.5 3.5 0 0 1 5.477-2.889 5.5 5.5 0 0 0-2.796 6.293A3.501 3.501 0 0 1 4 7.5ZM7.1 12H6a4 4 0 0 0-4 4 2 2 0 0 0 2 2h.5a5.998 5.998 0 0 1 3.071-5.238A5.505 5.505 0 0 1 7.1 12Z" clip-rule="evenodd"/>
            </svg>
            <p class="text-4xl font-poppins text-left font-semibold uppercase text-primary">data struktur kepengurusan</p>
        </div>
        <div class="bg-primary h-1 mx-2 rounded-2xl mb-12"></div>
    <div class="flex gap-16 px-5 pl-12">
        <div class="flex flex-col gap-5">
            @if ($kepengurusanCount == 0)
            <div
                class="flex flex-col bg-secondary rounded-lg px-10 py-5 w-56 h-56 justify-center items-center font-poppins text-center gap-2">
                <p class="font-bold uppercase">belum ada data</p>
            </div>
            <a href="{{ route('admin.dashboard.addKepengurusan') }}" class="bg-secondary rounded-md p-2 flex flex-row justify-center items-center gap-2">
                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.779 17.779 4.36 19.918 6.5 13.5m4.279 4.279 8.364-8.643a3.027 3.027 0 0 0-2.14-5.165 3.03 3.03 0 0 0-2.14.886L6.5 13.5m4.279 4.279L6.499 13.5m2.14 2.14 6.213-6.504M12.75 7.04 17 11.28"/>
                </svg>
                <p class="font-semibold uppercase">tambah</p>
            </a>
            @else
            <div class="flex flex-col bg-secondary rounded-lg px-10  w-56 h-56 justify-center items-center font-poppins text-center gap-2">
                <p class="font-bold uppercase">Total<br>data Anggota<br>Kepengurusan</p>
                <p class="font-semibold text-7xl">{{ $kepengurusanCount }}</p>
            </div>
            <a href="{{ route('admin.dashboard.addKepengurusan') }}" class="bg-secondary rounded-md p-2 flex flex-row justify-center items-center gap-2">
                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.779 17.779 4.36 19.918 6.5 13.5m4.279 4.279 8.364-8.643a3.027 3.027 0 0 0-2.14-5.165 3.03 3.03 0 0 0-2.14.886L6.5 13.5m4.279 4.279L6.499 13.5m2.14 2.14 6.213-6.504M12.75 7.04 17 11.28"/>
                </svg>
                <p class="font-semibold uppercase">tambah</p>
            </a>
        </div>
        <div class="flex flex-col justify-evenly uppercase text-sm gap-5">
            @foreach ($anggotaKepengurusan as $kepengurusan)
            <div class="flex bg-secondary w-full h-fit py-5 mb-5 pl-5 gap-5 rounded-lg justify-center items-center">
                <img src="{{ asset("assets/$kepengurusan->fotoAnggota") }}" alt="" class="h-32 rounded-lg">
                <div class="flex flex-col justify-center items-center w-72">
                    <p class="text-3xl font-poppins font-semibold">{{ $kepengurusan->namaAnggota }}</p>
                    <p class="text-lg font-poppins font-medium">{{ $kepengurusan->jabatanAnggota }}</p>
                </div>
                <div class="flex flex-col p-10 gap-5 font-semibold">
                    <a class="bg-red-700 rounded-md p-2 flex flex-row justify-center items-center"
                        onclick="return confirm('Yakin ingin menghapus data ini?')"
                        href="{{ route('admin.dashboard.deleteKepengurusan', $kepengurusan->id) }}">
                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 7h14m-9 3v8m4-8v8M10 3h4a1 1 0 0 1 1 1v3H9V4a1 1 0 0 1 1-1ZM6 7h12v13a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7Z"/>
                        </svg>
                        <p class="uppercase">hapus</p>
                    </a>
                    <a class="bg-yellow-1 rounded-md p-2 flex flex-row justify-center items-center"
                    href="{{ route('admin.dashboard.editKepengurusan', $kepengurusan->id) }}">
                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m14.304 4.844 2.852 2.852M7 7H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-4.5m2.409-9.91a2.017 2.017 0 0 1 0 2.853l-6.844 6.844L8 14l.713-3.565 6.844-6.844a2.015 2.015 0 0 1 2.852 0Z"/>
                        </svg>
                        <p>edit</p>
                    </a>
                </div>
            </div>
            @endforeach
            @endif
        </div>
    </div>
</div>
@endsection
