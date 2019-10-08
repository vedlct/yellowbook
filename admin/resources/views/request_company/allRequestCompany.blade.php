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
                        <h2 style="color: #989898;"><b>All Request Company</b></h2>
                        {{--<a style="float:right;cursor: pointer" href="#" class="btn btn-info">Add Company</a>--}}
                    </div>

                    <div class="table table-responsive">
                        <table id="menuInfo" class="table table-hover"  >
                            <thead>
                            <tr>
                                <th>Company Name</th>

                                <th>Category</th>
                                <th>Phone Number</th>
                                <th>Email</th>
                                <th>Status</th>
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
                    "url": "{!! route('request_company.showinfo') !!}",
                    "type": "POST",
                    data:function (d){
                        d._token="{{csrf_token()}}";
                    },
                },
                columns: [

                    { data: 'companyName', name: 'companyName' },
                    { data: 'categoryName', name: 'categoryName' },
                    { data: 'phone', name: 'phone' },
                    { data: 'email', name: 'email' },
                    { "data": function(data){

                        if(data.status==1){
                            return '<input type="checkbox" id="checkbox"  data-panel-id="'+data.companyId+'"onclick="checkstatus(this)" checked></input>'
                        }else{
                            return '<input type="checkbox" id="checkbox"  data-panel-id="'+data.companyId+'"onclick="checkstatus(this)" unchecked></input>'
                        }

                    },
                        "orderable": false, "searchable":false, "name":"action" },


//                    { data: 'insertedBy', name: 'insertedBy' },
//                    { data: 'lastModifiedBy', name: 'lastModifiedBy' },
//                    { data: 'lastModifiedDate', name: 'lastModifiedDate' },

                    { "data": function(data){
                        return '<a style="cursor: pointer; color: #4881ecfa" data-panel-id="'+data.companyId+'"onclick="editCompany(this)"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>' +
                            '&nbsp;&nbsp;<a style="cursor: pointer; color: #4881ecfa" data-panel-id="'+data.companyId+'"onclick="deleteCompany(this)"><i class="fa fa-trash-o" aria-hidden="true"></i></a>';},
                        "orderable": false, "searchable":false, "name":"action" }


                ],

            });

        });

        function checkstatus(x) {
            btn = $(x).data('panel-id');

            if ($('#checkbox').is(':checked')){
                location.reload(true);
                $.ajax({
                    type: 'POST',
                    url: "{!! route('request_company.statuschecked') !!}",
                    cache: false,
                    data: {_token: "{{csrf_token()}}",'id': btn},
                    success: function (data) {
//                    console.log(data);

                    }
                });

            }else {
//
                $.ajax({
                    type: 'POST',
                    url: "{!! route('request_company.statusunchecked') !!}",
                    cache: false,
                    data: {_token: "{{csrf_token()}}",'id': btn},
                    success: function (data) {
//                    console.log(data);


                    }
                });
            }

        }

        function editCompany(x) {
            btn = $(x).data('panel-id');
            var url = '{{route("company.edit", ":id") }}';
            //alert(url);
            var newUrl=url.replace(':id', btn);
            window.location.href = newUrl;
        }
        function deleteCompany(x)
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
                                url: '{{route('company.delete')}}',
                                data: {id: id,},
                                success: function (data) {
                                    $.alert({
                                        title: 'Success!',
                                        type: 'green',
                                        content: 'Comapny Deleted successfully',
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