@extends('layouts.app')

@section('content')

<div class="container mt-4">

    <div class="card shadow">

        <div class="card-header bg-primary text-white">
            <h4>Data Produk Dimsum</h4>
        </div>

        <div class="card-body">

            <a href="/tambah" class="btn btn-success mb-3">
                + Tambah Produk
            </a>

            <table class="table table-bordered table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>No</th>
                        <th>Nama Produk</th>
                        <th>Harga</th>
                        <th>Stok</th>
                        <th width="200">Aksi</th>
                    </tr>
                </thead>

                <tbody>

                    <tr>
                        <td>1</td>
                        <td>Dimsum Ayam</td>
                        <td>Rp 15.000</td>
                        <td>50</td>
                        <td>
                            <a href="/edit" class="btn btn-warning btn-sm">
                                Edit
                            </a>

                            <button class="btn btn-danger btn-sm">
                                Hapus
                            </button>
                        </td>
                    </tr>

                    <tr>
                        <td>2</td>
                        <td>Dimsum Udang</td>
                        <td>Rp 18.000</td>
                        <td>40</td>
                        <td>
                            <a href="/edit" class="btn btn-warning btn-sm">
                                Edit
                            </a>

                            <button class="btn btn-danger btn-sm">
                                Hapus
                            </button>
                        </td>
                    </tr>

                    <tr>
                        <td>3</td>
                        <td>Dimsum Keju</td>
                        <td>Rp 20.000</td>
                        <td>30</td>
                        <td>
                            <a href="/edit" class="btn btn-warning btn-sm">
                                Edit
                            </a>

                            <button class="btn btn-danger btn-sm">
                                Hapus
                            </button>
                        </td>
                    </tr>

                </tbody>

            </table>

        </div>

    </div>

</div>

@endsection