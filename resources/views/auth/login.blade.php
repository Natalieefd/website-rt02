@extends('layouts.global')
@section('content')

<div class="flex justify-center items-center bg-primary h-screen font-poppins font-normal text-sm">
    <div class="bg-grey rounded-lg border-2 border-secondary pt-12 pb-6 px-20">
        <form action="{{ route('login.action') }}" method="post" class="w-full">
            @csrf
            @if (session('error'))
                <div class="mb-6">
                    <div class="p-2 rounded-sm bg-red-100 ring-1 ring-red">
                        <p class="text-red">
                            {{ session('error') }}
                        </p>
                    </div>
                </div>
            @endif
            <div class="relative mb-6">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3.5 pointer-events-none">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="#254336" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                    </svg>
                </div>
                <input type="text" name="username" placeholder="Username"
                    class="w-full pl-12 pr-4 py-2 bg-slate-50 rounded-sm ring-1 ring-slate-300 ring-primary focus:outline-none focus:ring-secondary">
            </div>
            <div class="relative mb-6">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3.5 pointer-events-none">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="#254336" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 1 0-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 0 0 2.25-2.25v-6.75a2.25 2.25 0 0 0-2.25-2.25H6.75a2.25 2.25 0 0 0-2.25 2.25v6.75a2.25 2.25 0 0 0 2.25 2.25Z" />
                    </svg>
                </div>
                <input type="password" name="password" placeholder="Password"
                    class="w-full pl-12 pr-4 py-2 bg-slate-50 rounded-sm ring-1 ring-slate-300 ring-primary focus:outline-none focus:ring-secondary">
            </div>
            <button type="submit"
                class="w-full h-auto p-2 mb-2 text-grey bg-pink rounded-md flex justify-center items-center bg-secondary hover:bg-primary">
                Login
            </button>
            <a href="{{ route('home') }}" class="w-full h-auto p-2 text-grey bg-pink rounded-md flex justify-center items-center bg-secondary hover:bg-primary">
                Cancel
            </a>
        </form>
    </div>
</div>

@endSection
