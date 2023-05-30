@extends('layouts.app-master')


@section('title')
    Data Barang
@endsection

@section('content-header')
        <div class="col">
            <h3> 
                Selamat Datang {{ Auth::user()->name }} di Aplikasi Inventaris Barang     
            </h3>
        </div><!-- /.col -->
@endsection

@section('content')
<div class="container">
     <!-- /.row -->
     <div class="card">
      <!-- /.card-header -->
      <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>ID</th>
              <th>Kode Barang</th>
              <th>Nama Barang</th>
              <th>Jumlah</th>
              <th>Gambar</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($barang as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->kode_barang }}</td>
                        <td>{{ $item->nama_barang }}</td>
                        <td>{{ $item->jumlah }}</td>
                        <td><img src="{{ asset('storage/' . $item->image) }}" alt="" width="100px"></td>
                    </tr>
                    @endforeach
          </tbody>
        </table>
      </div>
      <!-- /.card-body -->
    </div>
      <!-- /.row -->
</div>
@endsection

