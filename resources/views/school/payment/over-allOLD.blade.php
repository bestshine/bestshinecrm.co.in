@extends('layouts.app')

<!-- styles -->
@section('styles')
    <link href="{{ asset('css/datatables/jquery.dataTables.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/datatables/responsive.dataTables.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/datatables-custom.css') }}" rel="stylesheet">
    <link href="{{ asset('css/sweetalert/sweetalert.css') }}" rel="stylesheet">
@stop

@section('content')
<div class="app-content content container-fluid">
    <div class="content-wrapper">

        <!-- show role added success -->
        <div class="alert alert-success alert-dismissable fade in custom-success-box" style="display: none;">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong></strong>
        </div>

        <!-- show role added error -->
        <div class="alert alert-danger alert-dismissable fade in custom-error-box" style="display: none;">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong></strong>
        </div>

        <div class="card">
            <div class="card-header">
                <h4 class="card-title">OVER ALL PAYMENT LIST</h4>
                <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
                <div class="heading-elements">
                    <ul class="list-inline mb-0">
                        <li><a data-action="reload"><i class="icon-reload"></i></a></li>
                        <li><a data-action="expand"><i class="icon-expand2"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="card-body collapse in">
                <div class="card-block card-dashboard">
                    <table id="school-overall-payment-list" class="table table-striped table-bordered" cellspacing="0" width="100%" data-edit="{{ route('editVendor',null)}}">
                        <thead>
                            <tr>
                              <th>S NO</th>
                              <th>School Name</th>
                              <th>Installation Total Amount</th>
                              <th>Balance Installation Amount</th>
                              <th>Balance Monthly Fee Amount</th>
                              <th>Actions</th>
                            </tr>
                        </thead>                        
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<!-- scripts -->
@section('scripts')
    <script src="{{ asset('js/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('js/datatables/dataTables.responsive.js') }}"></script>
    <script src="{{ asset('js/sweetalert/sweetalert.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            
            // call datatables 
            initializeSchoolOverAllPaymentListDatatable();

            // edit vendors
            $(document).on("click",".vendor-edit",function() {
                var id = $(this).attr('data-id');
                var url = $('#vendor-list').attr('data-edit');
                var redirectURL = url+'/'+id;
                window.location.href = redirectURL;
            });                          
        });
        
        // initialize datatables
        function initializeSchoolOverAllPaymentListDatatable(){
            var SchoolOverAllPaymentListTable = $('#school-overall-payment-list').dataTable( { 
                "responsive": true,
                "lengthMenu": [10, 25, 50, 75, 100 ],
                "pageLength": 10,                
                "paging": true,
                "searching": true,
                "info": true,
                "processing": false,
                "serverSide": false,
                "ajax":"{{ route('getSchoolOverAllPaymentData') }}",
                "fnRowCallback" : function(nRow, aData, iDisplayIndex){
                    $("td:first", nRow).html(iDisplayIndex +1);
                    return nRow;
                },                             
                "columnDefs": [
                    {   
                        "targets": 0,
                        "render": function( data, type, row ) {
                            return true;
                        }
                    },
                    {    
                        "targets": 1,                        
                        "render": function( data, type, row ) {
                            return row.name;
                        }
                    },
                    {    
                        "targets": 2,                        
                        "render": function( data, type, row ) {
                            return row.website;
                        }
                    },
                    {    
                        "targets": 3,                        
                        "render": function( data, type, row ) {
                            return row.product_details;
                        }
                    },                                         
                    { 
                        "targets": 4,                          
                        "render": function( data, type, row ) {
                            if(row.status == 1){
                                var label = '<i class="icon-check check_green"></i>';
                            }else{
                                var label = '<i class="icon-close check_red"></i>';
                            }
                            return label;
                        }
                    },
                    {   
                        "targets": 5,                         
                        "render": function( data, type, row ) {
                            if(row.status == 1){
                                var action = 'deactivate';
                                var lab = 'Deactivate';
                            }else{
                                var action = 'activate';
                                var lab = 'Activate';
                            }   
                            var but = '<button type="button" class="btn btn-info vendor-ad" data-action="'+action+'"  data-id="'+row.id+'">'+lab+'</button>';                         
                            return but;
                        }
                    },                    
                    { 
                        "targets": 6,                         
                        "render": function( data, type, row ) {
                            var actions = '<button type="button" class="btn btn-primary btn-flat vendor-edit" data-id="'+row.id+'"><i class="icon-edit"></i></button> <button type="button" class="btn btn-danger btn-flat vendor-delete" data-id="'+row.id+'"><i class="icon-trash"></i></button>';
                            return actions;
                        }
                    }                                                                                                   
                ],
                "language": { "emptyTable": "<span style='font-style:italic'>No vendors found.</span>" }
            });                 
        }

        // reinitialize datatables
        function reinitializeSchoolOverAllPaymentListDatatable(){
            var SchoolOverAllPaymentListTable = $('#school-overall-payment-list').dataTable( {             
                "destroy": true,
                "responsive": true,
                "lengthMenu": [10, 25, 50, 75, 100 ],
                "pageLength": 10,                
                "paging": true,
                "searching": true,
                "info": true,
                "processing": false,
                "serverSide": false,
                "ajax":"{{ route('getSchoolOverAllPaymentData') }}",
                "fnRowCallback" : function(nRow, aData, iDisplayIndex){
                    $("td:first", nRow).html(iDisplayIndex +1);
                    return nRow;
                },                             
                "columnDefs": [
                    {   
                        "targets": 0,
                        "render": function( data, type, row ) {
                            return true;
                        }
                    },
                    {    
                        "targets": 1,                        
                        "render": function( data, type, row ) {
                            return row.name;
                        }
                    },
                    {    
                        "targets": 2,                        
                        "render": function( data, type, row ) {
                            return row.website;
                        }
                    },
                    {    
                        "targets": 3,                        
                        "render": function( data, type, row ) {
                            return row.product_details;
                        }
                    },                                         
                    { 
                        "targets": 4,                          
                        "render": function( data, type, row ) {
                            if(row.status == 1){
                                var label = '<i class="icon-check check_green"></i>';
                            }else{
                                var label = '<i class="icon-close check_red"></i>';
                            }
                            return label;
                        }
                    },
                    {   
                        "targets": 5,                         
                        "render": function( data, type, row ) {
                            if(row.status == 1){
                                var action = 'deactivate';
                                var lab = 'Deactivate';
                            }else{
                                var action = 'activate';
                                var lab = 'Activate';
                            }   
                            var but = '<button type="button" class="btn btn-info vendor-ad" data-action="'+action+'"  data-id="'+row.id+'">'+lab+'</button>';                         
                            return but;
                        }
                    },                    
                    { 
                        "targets": 6,                         
                        "render": function( data, type, row ) {
                            var actions = '<button type="button" class="btn btn-danger btn-flat vendor-delete" data-id="'+row.id+'"><i class="icon-trash"></i></button>';
                            return actions;
                        }
                    }                                                                                                   
                ],
                "language": { "emptyTable": "<span style='font-style:italic'>No vendors found.</span>" }
            });                
        }        
    </script>
@stop
