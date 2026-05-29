@extends('layouts.app')

@section('content')

<div class="container mt-5">

    <div class="card shadow">

        <div class="card-header bg-primary text-white">
            Data Produk
        </div>

        <div class="card-body">

            <table class="table table-bordered">

                <tr>
                    <th>No</th>
                    <th>Nama Produk</th>
                    <th>Harga</th>
                    <th>Stok</th>
                </tr>

                <tr>
                    <td>1</td>
                    <td>Dimsum Ayam</td>
                    <td>15000</td>
                    <td>50</td>
                </tr>

            </table>

        </div>

    </div>

</div>

@endsection