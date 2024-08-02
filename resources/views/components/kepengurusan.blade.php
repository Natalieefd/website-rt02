<div class="bg-grey flex flex-col justify-center items-center">
    <p class="text-4xl font-poppins font-semibold uppercase pt-10 pb-5 text-primary">struktur kepengurusan</p>
    <div class="flex">
        @foreach ($anggotaKepengurusan as $kepengurusan)
            <div class="m-10 gird grid-col-3 uppercase text-sm">
                <div class="flex flex-col rounded-xl shadow-lg bg-secondary p-5 justify-center items-center font-poppins text-primary">
                    <img src="{{ asset("assets/$kepengurusan->fotoAnggota") }}" alt="" class="rounded-lg h-64 pt-5 pb-2 px-5">
                    <div class="text-center pb-5">
                        <p class="text-3xl font-poppins font-semibold">{{ $kepengurusan->namaAnggota }}</p>
                        <p class="text-lg font-poppins font-medium">{{ $kepengurusan->jabatanAnggota }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
