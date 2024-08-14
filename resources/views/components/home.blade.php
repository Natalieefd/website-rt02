
@extends('layouts.global')

@section('content')
    @include('components.header')
    @include('components.navbar')
    {{-- <-- profile --> --}}
    <section class="bg-grey py-10 px-20 gap-4">
        <div class="flex flex-col justify-items-start">
            <p class="text-center text-xl font-poppins text-primary font-semibold">RT 02 merupakan salah satu dari 13 RT yang ada di Desa Tanah Datar, dan berada di wilayah utara Desa Tanah Datar bersama dengan RT 01, RT 03, RT 04, dan RT 05.
                <br><br>Luas wilayah RT 02 sekitar + 203 HA, wilayah barat laut berbatasan dengan Desa Badak Mekar, wilayah timur laut berbatasan dengan Desa Batu-batu, wilayah barat
                daya berbatasan dengan RT 01, wilayah tenggara berbatasan dengan RT 03. Berikut detail wilayah dan titik google maps RT 02
            </p>
        </div>
    </section>
    {{-- <-- wilayah --> --}}
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
    {{-- <-- visi misi --> --}}

<div class="flex gap-10 bg-grey text-primary pb-20 px-20 shadow-md">
    <div class="flex flex-col justify-center">
        <p class="text-4xl font-poppins font-semibold uppercase text-center pb-10">visi dan misi</p>
        <div class="flex justify-center gap-10">
            <div class="bg-secondary w-2/4 rounded-xl shadow-md">
                <p class="pt-12 text-4xl uppercase text-center font-bold">visi</p>
                <p class="px-16 pt-6 pb-10 text-base font-medium">
                    1. SEHAT, mengandung arti sehat jasmani dan Rohani. Masyarakat
                    <br>yang sehat jasmani dan Rohani merupakan modal utama untuk meraih
                    <br>tujuan hidup yaitu sejahtera lahir dan batin, bahagia dunia dan
                    <br>akhirat,<br><br>
                    2. CERDAS; meruapakan modal utama untuk mencapai tujuan hidup,
                    <br>masyarakat yang cerdas akan mudah meraih cita-cita hidup dan
                    <br>tidak gampang terpengaruh hal-hal yang negatif dan melahirkan
                    <br>gagasan yang cemerlang untuk mencapai tujuan masyarakat yang
                    <br>sejahtera. Sebaliknya masyarakat yang tidak cerdas akan mudah
                    <br>diperalat dibohongi dan kemiskinan sehingga tujuan sejahtera
                    <br>akan sulit diraih.
                    <br><br>
                    3. MAJU,
                    <br><br>
                    4. MANDIRI,
                    <br><br>
                    5. SEJAHTERA: Artinya tercukupinya kebutuhan dasar hidup bagi
                    <br>masyarakat berupa:
                    <br><br>
                    - Pangan, sandang, papan. Ini merupakan modal dasar untuk
                    <br>menjadi masyarakat yang sejahtera, maka perlu kiranya
                    <br>pemberdayaan masyarakat dibidang kebutuhan sandang pangan
                    <br>dan papan;
                    <br><br>
                    - Kesehatan Masyarakat yang sehat baik jasmani maupun rohani
                    <br>merupakan modal dasar meraih tujuan hidup bahagia sejahtera
                    <br>lahir dan batin, bahagia dunia dan akhirat,
                    <br><br>
                    - Pendidikan dan menjadi modal dasar hidup untuk menuju cita-
                    <br>cita masyarakat yang sejahtera yang disebut masyarakat madani,
                </p>
            </div>

            <div class="bg-secondary w-2/4 rounded-xl shadow-md">
                <p class="pt-12 text-4xl uppercase text-center font-bold">misi</p>
                <p class="px-16 pt-6 pb-10 text-base font-medium">
                    1. Meningkatkan pembangunan insfastruktur yang mendukung perekonomian
                    <br>desa, seperti jalan jembatan serta infrastruktur strategis lainnya;
                    <br><br>
                    2. Meningkatkan pembanguna dibidang kesehatan untuk mendorong derajat
                    <br>kesehatan masyarakat agar dapat bekerja lebih<br>
                    optimal dan memiliki harapan hidup yang lebih panjang,
                    <br><br>
                    3. Meningkatkan pembangunan dibidang pendidikan untuk mendorong
                    <br>peningkatan kualitas sumber daya manusia agar
                    <br>memiliki kecerdasan dan daya saing yang lebih baik,
                    <br><br>
                    4. Meningkatkan pembangunan ekonomi dengan mendorong semakin tumbuh
                    <br>dan berkembangannya pembangunan di bidang pertanian dalam arti
                    <br>luas, industri, perdagangan dan pariwisata;
                    <br><br>
                    5. Menciptakan tata kelola pemerintahan yang baik (good Governance)
                    <br>berdasarkan demokratisasi, transparansi, penegakan
                    <br>hukum, berkeadilan, kesetaraan gender dan mengutamakan pelayanan
                    <br>prima kepada masyarakat,
                    <br><br>
                    6. Meningkatkan Kualitas Kehidupan Beragama, Sosial Budaya dan
                    <br>Ketentraman Masyarakat Dalam Kehidupan Sehari-hari;
                    <br><br>
                    7. Meningkatkan Kerjasama dan Gotong Royong Dalam Bermasyarakat yang
                    <br>Berazaskan Kekeluargaan.
                </p>
            </div>
        </div>
    </div>
</div>
{{-- <-- kepengurusan --> --}}
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
    {{-- <-- kegiatan --> --}}
    <section class="flex flex-col justify-center items-center pt-10 bg-grey font-poppinspy-32 px-10 text-sm font-semibold text-primary">
        <p class="font-poppins font-semibold text-4xl uppercase pb-10">kegiatan rt 02</p>
        <div class="flex animate-[slide_ 2s_linear_infinite]">
            <div class="grid grid-cols-3 gap-10 pb-10">
                @foreach ($kegiatan as $kg)
                <div class="flex flex-col justify-evenly items-center w-80 bg-secondary p-5 rounded-2xl shadow-xl text-center text-xl uppercase">
                    <img src="{{ asset("assets/$kg->fotoKegiatan") }}" class="rounded-md items-center">
                    <p class="text-base font-poppins font-medium pt-5">{{ $kg->namaKegiatan }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    @include('components.footer')
@endsection
