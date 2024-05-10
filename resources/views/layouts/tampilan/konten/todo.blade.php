@extends('layouts.tampilan.parent')
@section('title', 'Halaman Home')

@section('content')
<div class="container">
    <div class="row">
        <div class="card mt-3 col-12">
            <div class="card-body">
                <h1 class="card-title fs-4">ToDo List</h1>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createModal">
                    Add Activty
                </button>
                @include('layouts.tampilan.konten.create-modal')
            </div>
        </div>
    </div>

    <div class="row">
        <!-- Card untuk Aktivitas 1 -->
        @foreach ($todo as $row)
        <div class="col-md-4 col-sm-6 col-12 mt-3">
            <div class="card h-100"> <!-- Menambahkan tinggi penuh -->
                <div class="card-body">
                    <h2 class="card-title fs-5 text-uppercase">{{$row->name}}</h2>
                    <p class="card-text">Aktivitas #{{$loop->iteration}}</p>
                    <h4 class="card-text">Status: {{$row->proses}}</h4>
                    <p class="card-text">Deadline: {{$row->date}}</p> <!-- Tambahkan format tanggal -->
                </div>

                <div>
                    <div class="d-flex justify-content-around m-3"> <!-- Membuat tombol sejajar dan memberi jarak -->
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#updateModal">Update</button>
                        @include('layouts.tampilan.konten.update-modal')
                        <form action="{{route('task.destroy', $row->id)}}" method="post" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger"><i class="bi bi-trash"></i></button>
                        </form>
                    </div>
                </div>

            </div>
        </div>

        @endforeach



    </div>
</div>
@endsection