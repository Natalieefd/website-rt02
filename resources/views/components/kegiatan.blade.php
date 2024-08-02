<section class="flex flex-col justify-center items-center  bg-grey font-poppinspy-32 px-10 text-sm font-semibold text-primary">
    <p class="font-poppins font-semibold text-4xl uppercase pb-10">kegiatan rt 02</p>
    <div class="flex animate-[slide_ 2s_linear_infinite]">
        <div class="grid grid-cols-3 gap-10 pb-10">
        @foreach ($kegiatan as $kg)
            <div class="flex flex-col justify-evenly items-center w-80 bg-secondary p-5 rounded-2xl shadow-xl text-center text-xl uppercase">
                <img src="{{ asset("assets/$kg->fotoKegiatan") }}" class="rounded-sm items-center">
                <p class="text-base font-poppins font-medium pt-5">{{ $kg->namaKegiatan }}</p>
            </div>
        @endforeach
        </div>
    </div>
</section>
