@extends('layouts/master')

@section('title', 'Tambah Produk')

@section('heading')
    
@endsection

@section('content')

<!-- Page Heading -->
<form action="{{ route('produk-savetambah') }}" method="POST" enctype="multipart/form-data">
@csrf

<div class="row" style="display: flex; justify-content: center;">
    <!-- DataTales Example -->
    <div class="col-lg-8 col-xlg-9 col-md-7">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Tambah List</h6>
            </div>
            <div class="card-body">
                        <div class="form-group">
                            <label for="example-email" class="col-md-12">Train Code</label>
                            <div class="col-md-12">
                                <input type="text" placeholder="Ex: MBL-231101" value=""
                                    class="form-control ps-0 form-control-line" name="train_code"
                                    id="train_code">
                            </div>
                            @error('train_code')
                                <div class="alert alert-danger" role="alert">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="col-md-12 mb-0">Train Date</label>
                            <div class="col-md-12">
                                <input type="date" value="" placeholder="Minyak eceran"
                                    class="form-control ps-0 form-control-line" name="train_date" 
                                    id="train_date">
                            </div>
                            @error('train_date')
                                <div class="alert alert-danger" role="alert">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="col-md-12 mb-0">Clean</label>
                            <div class="col-md-12">
                                <input type="number" placeholder="Ex: 100" value=""
                                    class="form-control ps-0 form-control-line" name="clean" 
                                    id="clean">
                            </div>
                            @error('clean')
                                <div class="alert alert-danger" role="alert">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="col-md-12 mb-0">Soil</label>
                            <div class="col-md-12">
                                <input type="number" placeholder="Ex: 100" value=""
                                    class="form-control ps-0 form-control-line" name="soil" 
                                    id="soil">
                            </div>
                            @error('soil')
                                <div class="alert alert-danger" role="alert">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="col-md-12 mb-0">Stain</label>
                            <div class="col-md-12">
                                <input type="number" placeholder="Ex: 100" value=""
                                    class="form-control ps-0 form-control-line" name="stain" 
                                    id="stain">
                            </div>
                            @error('stain')
                                <div class="alert alert-danger" role="alert">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="col-md-12 mb-0">Torn</label>
                            <div class="col-md-12">
                                <input type="number" placeholder="Ex: 100" value=""
                                    class="form-control ps-0 form-control-line" name="torn" 
                                    id="torn">
                            </div>
                            @error('torn')
                                <div class="alert alert-danger" role="alert">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="col-md-12 mb-0">Train Status</label>
                            <div class="col-md-12">
                                <input type="text" value="" placeholder="Ex: Done"
                                    class="form-control ps-0 form-control-line" name="train_status" 
                                    id="train_status">
                            </div>
                            @error('train_status')
                                <div class="alert alert-danger" role="alert">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="col-md-12 mb-0">Delivery Status</label>
                            <div class="col-md-12">
                                <input type="text" value="" placeholder="Ex: Pending"
                                    class="form-control ps-0 form-control-line" name="delivery_status" 
                                    id="delivery_status">
                            </div>
                            @error('delivery_status')
                                <div class="alert alert-danger" role="alert">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <button type="submit" class="btn btn-success mx-auto mx-md-0 text-white">Simpan
                                    Penambahan</button>
                                <a href="{{ route('hotel_transaction_list') }}" class="btn btn-info mx-auto mx-md-0 text-white">Kembali</a>
                            </div>
                        </div>
            </div>
        </div>
    </div>
</div>
</form>
@endsection
