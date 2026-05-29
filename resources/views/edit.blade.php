@extends('layouts.app')

@section('content')

<div class="container mt-4">
    <div class="card">
        <div class="card-header bg-warning text-dark">
            Edit Produk
        </div>

        <div class="card-body">

            <form>

                <div class="mb-3">
                    <label>Nama Produk</label>
                    <input type="text" class="form-control"
                    value="Dimsum Ayam">
                </div>

                <div class="mb-3">
                    <label>Harga</label>
                    <input type="number" class="form-control"
                    value="15000">
                </div>

                <div class="mb-3">
                    <label>Stok</label>
                    <input type="number" class="form-control"
                    value="50">
                </div>

                <button class="btn btn-warning">
                    Update
                </button>

            </form>

        </div>
    </div>
</div>

@endsection