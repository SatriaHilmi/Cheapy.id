@extends('layouts.app')

@section('title', $title)

@section('addon-css')
<link rel="stylesheet" href="{{ url('assets/modules/datatables/datatables.min.css') }}">
<link rel="stylesheet" href="{{ url('assets/modules/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ url('assets/modules/izitoast/css/iziToast.min.css') }}">
@endsection

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>{{ $title }}</h1>
        </div>

        <div class="section-body">
            <h2 class="section-title">
                {{ $title }}
            </h2>
            <p class="section-lead">
                Daftar pembelian yang sudah dilakukan.
            </p>

            <div class="card">
            <div class="card-header">
    <a href="{{ route('purchases.create') }}" class="btn btn-icon icon-left btn-primary"><i class="fas fa-plus"></i> Tambah</a>
</div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="myTable">
                            <thead>                                 
                                <tr>
                                    <th class="text-center">#</th>
                                    <th>Kode Pembelian</th>
                                    <th>Supplier</th>
                                    <th>Produk</th>
                                    <th>Jumlah</th>
                                    <th>Harga Pembelian</th>
                                    <th>Tanggal</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($items as $index => $item)
                                    <tr>
                                        <td class="text-center">{{ $index + 1 }}</td>
                                        <td>{{ $item->purchase_code }}</td>
                                        <td>{{ $item->supplier->name }}</td>
                                        <td>{{ $item->product->name }}</td>
                                        <td>{{ $item->quantity }}</td>
                                        <td>{{ number_format($item->purchase_price, 0,',',',') }}</td>
                                        <td>{{ date('d-m-Y', strtotime($item->created_at)) }}</td>
                                        <td class="text-center">
                                            <div class="btn-group" role="group">
                                                <!-- <a href="{{ route('purchases.show', $item->purchase_code) }}" class="btn btn-primary btn-icon icon-left">
                                                    <i class="fas fa-eye"></i> Lihat
                                                </a> -->
                                                <a href="{{ route('purchases.edit', $item->id) }}" class="btn btn-success btn-icon icon-left">
                                                    <i class="fas fa-edit"></i> Edit
                                                </a>
                                                <form action="{{ route('purchases.destroy', $item->id) }}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit" class="btn btn-danger btn-icon icon-left btn-delete">
                                                        <i class="fas fa-trash-alt"></i> Hapus
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="8" class="text-center">
                                            Belum ada data pembelian.
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection

@section('addon-script')
<script src="{{ url('assets/modules/sweetalert/sweetalert.min.js') }}"></script>
<script src="{{ url('assets/modules/datatables/datatables.min.js') }}"></script>
<script src="{{ url('assets/modules/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ url('assets/modules/izitoast/js/iziToast.min.js') }}"></script>
<script src="{{ url('js/my_datatables.js')}}"></script>
<script src="{{ url('js/my_sweetalert.js')}}"></script>
@endsection