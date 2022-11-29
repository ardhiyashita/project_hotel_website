@extends('layouts/master')

@section('title', 'Tambah Satuan')

@section('heading')
    
@endsection

@section('content')

<!-- Page Heading -->
<form action="{{ route('satuan.add.save') }}" method="POST" enctype="multipart/form-data">
@csrf
<h1 class="h3 mb-2 text-gray-800">Tambah Master Data Satuan</h1>

<div class="row">
    <!-- DataTales Example -->
    <div class="col-lg-8 col-xlg-9 col-md-7">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Detail Master Data Satuan</h6>
            </div>
            <div class="card-body">
                        <div class="form-group">
                            <label for="example-email" class="col-md-12">Satuan</label>
                            <div class="col-md-12">
                                <input type="text" placeholder="Eg. Kilogram, Hektogram" value=""
                                    class="form-control ps-0 form-control-line" name="satuan"
                                    id="satuan" required>
                            </div>
                            @error('satuan')
                                <div class="alert alert-danger" role="alert">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="example-email" class="col-md-12">Singkatan</label>
                            <div class="col-md-12">
                                <input type="text" placeholder="Eg. kg, hg" value=""
                                    class="form-control ps-0 form-control-line" name="singkatan"
                                    id="singkatan" required>
                            </div>
                            @error('singkatan')
                                <div class="alert alert-danger" role="alert">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <button type="submit" class="btn btn-success mx-auto mx-md-0 text-white">Simpan
                                    Penambahan</button>
                                <a href="{{ route('satuan.index') }}" class="btn btn-info mx-auto mx-md-0 text-white">Kembali</a>
                            </div>
                        </div>
            </div>
        </div>
    </div>
</div>
</form>
@endsection
