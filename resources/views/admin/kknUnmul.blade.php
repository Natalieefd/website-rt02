@extends('layouts.global')

@section('content')
    <section class="flex w-screen h-max">
        @include('admin.sidebar')
        <div class="bg-grey w-screen h-screen flex flex-col">
            <div class="flex items-center px-10 pt-10 pb-5 gap-4">
                <svg class="w-14 h-14 text-primary dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                    <path fill-rule="evenodd" d="M3 6a2 2 0 0 1 2-2h5.532a2 2 0 0 1 1.536.72l1.9 2.28H3V6Zm0 3v10a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V9H3Z" clip-rule="evenodd"/>
                </svg>
                <p class="text-4xl font-poppins text-left font-semibold uppercase text-primary">Data KKN Unmul</p>
            </div>
            <div class="bg-primary h-1 mx-2 rounded-2xl mb-12"></div>

            <div class="flex gap-16 px-5 pl-12">
                <div class="flex flex-col gap-5">
                    @if ($kknunmulCount == 0)
                    <div
                        class="flex flex-col bg-secondary rounded-lg px-10 py-5 w-56 h-56 justify-center items-center font-poppins text-center gap-2">
                        <p class="font-bold uppercase">belum ada data</p>
                    </div>
                    <a class="bg-secondary rounded-md p-2 flex flex-row justify-center items-center gap-2"
                        href="{{ route('admin.dashboard.addkknunmul') }}">
                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                            viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M10.779 17.779 4.36 19.918 6.5 13.5m4.279 4.279 8.364-8.643a3.027 3.027 0 0 0-2.14-5.165 3.03 3.03 0 0 0-2.14.886L6.5 13.5m4.279 4.279L6.499 13.5m2.14 2.14 6.213-6.504M12.75 7.04 17 11.28" />
                        </svg>
                        <p class="font-semibold uppercase">tambah</p>
                    </a>
                </div>
                <div class="flex flex-col justify-center items-center uppercase text-sm gap-5">
                    @else
                    <div
                        class="flex flex-col bg-secondary rounded-lg px-10 py-5 w-56 h-56 justify-center items-center font-poppins text-center gap-2">
                        <p class="font-bold uppercase">data kkn unmul</p>
                        <p class="font-semibold text-7xl">{{ $kknunmulCount }}</p>
                    </div>
                    <a class="bg-secondary rounded-md p-2 flex flex-row justify-center items-center gap-2"
                        href="{{ route('admin.dashboard.addkknunmul') }}">
                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                            viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M10.779 17.779 4.36 19.918 6.5 13.5m4.279 4.279 8.364-8.643a3.027 3.027 0 0 0-2.14-5.165 3.03 3.03 0 0 0-2.14.886L6.5 13.5m4.279 4.279L6.499 13.5m2.14 2.14 6.213-6.504M12.75 7.04 17 11.28" />
                        </svg>
                        <p class="font-semibold uppercase">tambah</p>
                    </a>
                </div>
                <div class="flex flex-col justify-center items-center uppercase text-sm gap-5">
                    @foreach ($kknunmul as $kkn)
                    <div class="flex bg-secondary w-full h-fit py-5 pl-5 gap-5 rounded-lg justify-center items-center">
                        <img src="{{ asset("assets/$kkn->fotoProker") }}" alt="" class="h-32 rounded-lg">
                            <div class="flex flex-col justify-center items-star gap-2t w-72">
                                <p class="text-3xl font-poppins font-semibold">{{ $kkn->namaProker }}</p>
                                <p class="text-lg font-poppins font-medium">{{ $kkn->pj }}</p>
                            </div>
                            <div class="flex flex-col p-10 gap-5 uppercase font-semibold">
                                <a class="bg-red-700 rounded-md p-2 flex flex-row justify-center items-center"
                                    href="{{ route('admin.dashboard.deletekknunmul', $kkn->id) }}">
                                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                        viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M5 7h14m-9 3v8m4-8v8M10 3h4a1 1 0 0 1 1 1v3H9V4a1 1 0 0 1 1-1ZM6 7h12v13a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7Z" />
                                    </svg>
                                    <p>hapus</p>
                                </a>
                                <a class="bg-yellow-1 rounded-md p-2 flex flex-row justify-center items-center"
                                    href="{{ route('admin.dashboard.editkknunmul', $kkn->id) }}">
                                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                        viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2"
                                            d="m14.304 4.844 2.852 2.852M7 7H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-4.5m2.409-9.91a2.017 2.017 0 0 1 0 2.853l-6.844 6.844L8 14l.713-3.565 6.844-6.844a2.015 2.015 0 0 1 2.852 0Z" />
                                        </svg>
                                        <p>edit</p>
                                    </a>
                                </div>
                            </div>
                            @endforeach
                            @endif
                        </div>
            </div>
    </section>
@endsection
