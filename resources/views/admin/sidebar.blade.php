<div class="w-1/5 bg-primary">
    <div class="fixed h-full p-4 flex flex-col justify-between font-poppins">
        <div class="flex flex-row justify-center items-center mb-5 gap-2">
            <img src="{{ asset('assets/logo-desa-tanah-datar.png') }}" alt="" class="w-16">
            <div class="text-grey">
                <p class="uppercase font-semibold sm:text-xs lg:text-sm">desa tanah datar</p>
                <p class="uppercase font-semibold sm:text-xs lg:text-sm">rt 002</p>
            </div>
        </div>
        <div class="w-fill text-grey">
            <a href="{{ route('admin.dashboard') }}"
                class="flex gap-4 items-center p-4 fill-grey rounded-md hover:bg-secondary transition ease-out duration-150">
                <svg class="w-6 h-6 text-grey dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M5 3a2 2 0 0 0-2 2v2a2 2 0 0 0 2 2h4a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2H5Zm14 18a2 2 0 0 0 2-2v-2a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v2a2 2 0 0 0 2 2h4ZM5 11a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h4a2 2 0 0 0 2-2v-6a2 2 0 0 0-2-2H5Zm14 2a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h4Z"/>
                </svg>
                <p class="text-lg font-medium text-grey">Dashboard</p>
            </a>
            <a href="{{ route('admin.user') }}"
                class="flex gap-4 items-center p-4 fill-grey rounded-md hover:bg-secondary  transition ease-out duration-150">
                <svg class="w-6 h-6 text-grey dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                    <path fill-rule="evenodd" d="M12 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4h-4Z" clip-rule="evenodd"/>
                </svg>
                <p class="text-lg font-medium text-grey">User</p>
            </a>
            <a href="{{ route('admin.kepengurusan') }}"
                class="flex gap-4 items-center p-4 fill-grey rounded-md hover:bg-secondary  transition ease-out duration-150">
                <svg class="w-6 h-6 text-grey dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                    <path fill-rule="evenodd" d="M12 6a3.5 3.5 0 1 0 0 7 3.5 3.5 0 0 0 0-7Zm-1.5 8a4 4 0 0 0-4 4 2 2 0 0 0 2 2h7a2 2 0 0 0 2-2 4 4 0 0 0-4-4h-3Zm6.82-3.096a5.51 5.51 0 0 0-2.797-6.293 3.5 3.5 0 1 1 2.796 6.292ZM19.5 18h.5a2 2 0 0 0 2-2 4 4 0 0 0-4-4h-1.1a5.503 5.503 0 0 1-.471.762A5.998 5.998 0 0 1 19.5 18ZM4 7.5a3.5 3.5 0 0 1 5.477-2.889 5.5 5.5 0 0 0-2.796 6.293A3.501 3.501 0 0 1 4 7.5ZM7.1 12H6a4 4 0 0 0-4 4 2 2 0 0 0 2 2h.5a5.998 5.998 0 0 1 3.071-5.238A5.505 5.505 0 0 1 7.1 12Z" clip-rule="evenodd"/>
                </svg>
                <p class="text-lg font-medium text-grey">Kepengurusan</p>
            </a>
            <a href="{{ route('admin.penduduk') }}"
                class="flex gap-4 items-center p-4 fill-grey rounded-md hover:bg-secondary  transition ease-out duration-150">
                <svg class="w-6 h-6 text-grey dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                    <path fill-rule="evenodd" d="M8 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4H6Zm7.25-2.095c.478-.86.75-1.85.75-2.905a5.973 5.973 0 0 0-.75-2.906 4 4 0 1 1 0 5.811ZM15.466 20c.34-.588.535-1.271.535-2v-1a5.978 5.978 0 0 0-1.528-4H18a4 4 0 0 1 4 4v1a2 2 0 0 1-2 2h-4.535Z" clip-rule="evenodd"/>
                </svg>
                <p class="text-lg font-medium text-grey">Penduduk</p>
            </a>
            <a href="{{ route('admin.kegiatan') }}"
                class="flex gap-4 items-center p-4 fill-grey rounded-md hover:bg-secondary  transition ease-out duration-150">
                <svg class="w-6 h-6 text-grey dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                    <path fill-rule="evenodd" d="M13 10a1 1 0 0 1 1-1h.01a1 1 0 1 1 0 2H14a1 1 0 0 1-1-1Z" clip-rule="evenodd"/>
                    <path fill-rule="evenodd" d="M2 6a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v12c0 .556-.227 1.06-.593 1.422A.999.999 0 0 1 20.5 20H4a2.002 2.002 0 0 1-2-2V6Zm6.892 12 3.833-5.356-3.99-4.322a1 1 0 0 0-1.549.097L4 12.879V6h16v9.95l-3.257-3.619a1 1 0 0 0-1.557.088L11.2 18H8.892Z" clip-rule="evenodd"/>
                </svg>
                <p class="text-lg font-medium text-grey">Kegiatan</p>
            </a>
            <a href="{{ route('admin.kknunmul') }}"
                class="flex gap-4 items-center p-4 fill-grey rounded-md hover:bg-secondary  transition ease-out duration-150">
                <svg class="w-6 h-6 text-grey dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                    <path fill-rule="evenodd" d="M3 6a2 2 0 0 1 2-2h5.532a2 2 0 0 1 1.536.72l1.9 2.28H3V6Zm0 3v10a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V9H3Z" clip-rule="evenodd"/>
                </svg>
                <p class="text-lg font-medium text-grey">KKN Unmul</p>
            </a>
        </div>
        <div>
            <a href="{{ route('home') }}"
                class="flex gap-4 items-center p-4 fill-grey rounded-md hover:bg-secondary  transition ease-out duration-150">
                <svg class="w-6 h-6 text-grey dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H8m12 0-4 4m4-4-4-4M9 4H7a3 3 0 0 0-3 3v10a3 3 0 0 0 3 3h2"/>
                </svg>
                <p class="text-lg font-medium text-grey">Log Out</p>
            </a>
        </div>
    </div>
</div>
