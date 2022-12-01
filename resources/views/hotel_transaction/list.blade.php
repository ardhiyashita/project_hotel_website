@extends('layouts/master')

@section('title', 'Transaction List')

@section('heading')
    
@endsection

@section('content')
        <!-- DataTables Example -->
        <div class="card shadow mb-4">
            <div class="card-header d-sm-flex align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary d-flex">Hotel Trasaction</h6>
                <div class="btn-group">
                    <button type="button" id="deleteAllChecked" disabled onclick="nonAktifkan()" class="d-none d-sm-inline-block btn btn-m btn-danger shadow-sm mb-3" style="float: right;">
                        <i class="fas fa-trash-alt fa-sm text-white-50"></i>  Hapus Pilihan</button>
                    <a href="{{ route('hotel_transaction_add') }}" class="d-none d-sm-inline-block btn btn-m btn-info shadow-sm mb-3 mr-2" style="float: right;">
                        + Tambah List</a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="table" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th><input type="checkbox" id="head_cb"></th>
                                <th class="border-top-0" style="text-align: center">No</th>
                                <th class="border-top-0" style="text-align: center">Train Code</th>
                                <th class="border-top-0" style="text-align: center">Train Date</th>
                                <th class="border-top-0" style="text-align: center">Clean</th>
                                <th class="border-top-0" style="text-align: center">Soil</th>
                                <th class="border-top-0" style="text-align: center">Stain</th>
                                <th class="border-top-0" style="text-align: center">Torn</th>
                                <th class="border-top-0" style="text-align: center">Train Status</th>
                                <th class="border-top-0" style="text-align: center">Delivery Status</th>
                                <th class="border-top-0" style="text-align: center">Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th></th>
                                <th class="border-top-0" style="text-align: center">No</th>
                                <th class="border-top-0" style="text-align: center">Train Code</th>
                                <th class="border-top-0" style="text-align: center">Train Date</th>
                                <th class="border-top-0" style="text-align: center">Clean</th>
                                <th class="border-top-0" style="text-align: center">Soil</th>
                                <th class="border-top-0" style="text-align: center">Stain</th>
                                <th class="border-top-0" style="text-align: center">Torn</th>
                                <th class="border-top-0" style="text-align: center">Train Status</th>
                                <th class="border-top-0" style="text-align: center">Delivery Status</th>
                                <th class="border-top-0" style="text-align: center">Action</th>
                            </tr>
                        </tfoot>
                        <tbody>
                        @foreach($list as $item)
                            <tr>
                                <td><input type="checkbox" class="cb_child" value="{{ $item->id }}"></td>
                                <td>{{ $loop->index + 1}}</td>
                                <td>{{ $item->train_code }}</td>
                                <td>{{ $item->train_date }}</td>
                                <td>{{ $item->clean }}</td>
                                <td>{{ $item->soil }}</td>
                                <td>{{ $item->stain }}</td>
                                <td>{{ $item->torn }}</td>
                                <td>{{ $item->train_status }}</td>
                                <td>{{ $item->delivery_status }}</td>
                                <td width="160px">
                                    <form action="" method="POST">
                                        <div class="" role="group" aria-label="Basic example">
                                        @csrf
                                        <a type="button" class="btn btn-success" href="">Edit</a>
                                        <button type="submit" class="btn btn-danger"
                                            onclick="return confirm('apakah kamu yakin menghapus data ini ?')">Hapus</button>
                                        </div>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="d-flex justify-content-center">
            </div>
            </div>
        </div>

        @section('js')
        <script src="{{ asset('assets/datatables/datatables.min.js') }}"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $('#table').DataTable();
            });

            let isChecked = 0;
            const table = $('#table').DataTable({
                "processing": true,
                "order": [[ 1, 'asc']],     
                    

                columnDefs: [
                {
                    "targets": 0,
                    "class":"text-nowrap",
                    "sortable": false,
                },
                {
                    "targets": 10,
                    "sortable": false,
                },
                ]
            })

            // JQUERY DETECT CHECKED CHECKBOX
            // $(this)->elemen yang dimaksud untuk diambil atau digunakan
            $("#head_cb").on('click', function(){
                var isChecked = $('#head_cb').prop('checked')
                $('.cb_child').prop('checked', isChecked)
                
                // STEP PER STEP
                // if($(this).prop('checked') == true){
                //     $('.cb_child').prop('checked', true)
                // }else{
                //     $('.cb_child').prop('checked', false)
                // }

                $('#deleteAllChecked').prop('disabled', !isChecked)
            })

            $('#table tbody').on('click', '.cb_child', function(){                
                if($(this).prop('checked') != true){
                    $('#head_cb').prop('checked', false)
                }

                let allChecked = $('#table tbody .cb_child:checked')
                let button_non_aktif_status = (allChecked.length>0)
                $('#deleteAllChecked').prop('disabled', !button_non_aktif_status)
            })

            function nonAktifkan(){
                let checkbox_terpilih = $('#table tbody .cb_child:checked')
                let all_ids = []
                $.each(checkbox_terpilih, function(index,elm){
                    all_ids.push(elm.value);
                })
                $.ajax({
                    url: "{{ route('produk-delete-checked') }}",
                    method: 'post',
                    data: {ids:all_ids},
                    success:function(){
                        location.reload(true);
                    }
                })
            }
        </script>
            
        @endsection
@endsection