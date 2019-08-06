@extends('layouts.main')
@section('header')

    <style>
        /*th.dt-center, td.dt-center { text-align: center; }*/
        table{font-size: 15px}
        .container-fluid {padding: 15px  5px;}
    </style>
@endsection
@section('content')

    <!-- Page Header-->
    <div class="row">
        <div class="col-lg-12">
            <div class="card" style="margin-left: 10px; border-radius: 10px;">

                <div class="card-body" style="padding: 1%;">

                    <div align="center" style="margin-bottom: 3%;">
                        <h2 style="color: #989898;"><b>All Category</b></h2>
                        <a style="float:right;cursor: pointer" href="{{route('category.addCategory')}}" class="btn btn-info">Add Category</a>
                    </div>

                    <div class="table table-responsive">
                        <table id="menuInfo" class="table table-hover"  >
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Type</th>
                                <th>Parent Category</th>
                                <th>Status</th>
                                <th>Order number</th>
                                <th>inserted By</th>
                                <th>Modified By</th>
                                <th>Modified Date</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>


                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection
@section('foot-js')
    <script src="{{url('public/assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <script>

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $(document).ready(function() {
            var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
            table =  $('#menuInfo').DataTable({
                processing: true,
                serverSide: true,
                stateSave: true,
                "ajax":{
                    "url": "{!! route('category.showinfo') !!}",
                    "type": "POST",
                    data:function (d){
                        d._token="{{csrf_token()}}";
                    },
                },
                columns: [

                    { data: 'categoryName', name: 'categoryName' },
                    { data: 'categoryType', name: 'categoryType' },
                    { data: 'parentCategory', name: 'parentCategory' },
                    { data: 'categoryStatus', name: 'categoryStatus' },
                    { data: 'orderNumber', name: 'orderNumber' },
                    { data: 'insertedBy', name: 'insertedBy' },
                    { data: 'lastModifiedBy', name: 'lastModifiedBy' },
                    { data: 'lastModifiedDate', name: 'lastModifiedDate' },

                    { "data": function(data){
                        return '<a style="cursor: pointer; color: #4881ecfa" data-panel-id="'+data.categoryId+'"onclick="editCategory(this)"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>' +
                            '&nbsp;&nbsp;<a style="cursor: pointer; color: #4881ecfa" data-panel-id="'+data.categoryId+'"onclick="deleteCategory(this)"><i class="fa fa-trash-o" aria-hidden="true"></i></a>';},
                        "orderable": false, "searchable":false, "name":"action" }


                ],

            });

        });

        function editCategory(x) {
            btn = $(x).data('panel-id');
            var url = '{{route("category.edit", ":id") }}';
            //alert(url);
            var newUrl=url.replace(':id', btn);
            window.location.href = newUrl;
        }
        function deleteCategory(x)
        {


            $.confirm({
                title: 'Confirm!',
                content: 'Are you sure To delete this?',
                icon: 'fa fa-warning',
                type: 'red',
                typeAnimated: true,
                buttons: {
                    tryAgain: {
                        text: 'Yes',
                        btnClass: 'btn-red',
                        action: function(){
                            var id = $(x).data('panel-id');
                            $.ajax({
                                type: "POST",
                                url: '{{route('category.delete')}}',
                                data: {id: id,},
                                success: function (data) {
                                    $.alert({
                                        title: 'Success!',
                                        type: 'green',
                                        content: 'Category Deleted successfully',
                                        buttons: {
                                            tryAgain: {
                                                text: 'Ok',
                                                btnClass: 'btn-green',
                                                action: function () {
                                                    table.ajax.reload();
                                                }
                                            }
                                        }
                                    });
                                },
                            });
                        }
                    },
                    No: function () {
                    },
                }
            });

        }

    </script>
@endsection