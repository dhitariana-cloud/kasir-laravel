@extends('layouts.app')

@section('content')

<div class="container mt-4">
    <div class="card">
        <div class="card-header bg-success text-white">
            Tambah Produk
        </div>

        <div class="card-body">

            <form>

                <div class="mb-3">
                    <label>Nama Produk</label>
                    <input type="text" class="form-control">
                </div>

                <div class="mb-3">
                    <label>Harga</label>
                    <input type="number" class="form-control">
                </div>

                <div class="mb-3">
                    <label>Stok</label>
                    <input type="number" class="form-control">
                </div>

                <button class="btn btn-success">
                    Simpan
                </button>
@if ($errors->any())
<div class="alert alert-danger">
    {{ $errors->first() }}
</div>
@endif
            <form action="/simpan" method="POST">
@csrf

        </div>
    </div>
</div>

@endsection