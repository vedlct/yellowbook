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
                        <h2 style="color: #989898;"><b>All Menu</b></h2>
                        <a style="float:right;cursor: pointer" href="{{route('menu.addMenu')}}" class="btn btn-info">Add Menu</a>
                    </div>

                    <div class="table table-responsive">
                        <table id="menuInfo" class="table table-hover"  >
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Type</th>
                                <th>Parent Menu</th>
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

        $(document).ready(function() {
            var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
            table =  $('#menuInfo').DataTable({
                processing: true,
                serverSide: true,
                stateSave: true,
                "ajax":{
                    "url": "{!! route('menu.showinfo') !!}",
                    "type": "POST",
                    data:function (d){
                        d._token="{{csrf_token()}}";
                    },
                },
                columns: [

                    { data: 'menuName', name: 'menu.menuName' },
                    { data: 'menuType', name: 'menu.menuType' },
                    { data: 'parentMenu', name: 'parentMenu' },
                    { data: 'menuStatus', name: 'menu.menuStatus' },
                    { data: 'orderNumber', name: 'orderNumber' },
                    { data: 'insertedBy', name: 'menu.insertedBy' },
                    { data: 'lastModifiedBy', name: 'menu.lastModifiedBy' },
                    { data: 'lastModifiedDate', name: 'menu.lastModifiedDate' },

                    { "data": function(data){
                        return '<a style="cursor: pointer; color: #4881ecfa" data-panel-id="'+data.menuId+'"onclick="editMenu(this)"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>';},
                        "orderable": false, "searchable":false, "name":"action" }


                ],

            });

        });

        function editMenu(x) {
            btn = $(x).data('panel-id');
            var url = '{{route("menu.edit", ":id") }}';
            //alert(url);
            var newUrl=url.replace(':id', btn);
            window.location.href = newUrl;
        }

    </script>
@endsection