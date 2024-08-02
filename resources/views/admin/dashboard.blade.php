@extends('layouts.global')

@section('content')
<div class="w-full h-full flex">
    @include('admin.sidebar')
    <div class="w-full h-screen flex bg-grey">
        <div>
            <p>User</p>
        </div>
        <div>
            <p>Kegiatan</p>
        </div>
        <div>
            <p>Penduduk</p>
        </div>
    </div>
</div>
@endsection
