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
                <h4 class="card-title">EMPLOYEE LIST</h4>
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

                    <!-- Add New Employer -->
                    <a href="{{ route('addNewEmployer') }}" class="btn btn-success btn-flat" id="add-button-show"><i class="icon-plus"></i> Add Employee</a>

                    <table id="employer-list" class="table table-striped table-bordered" cellspacing="0" width="100%" data-edit="{{ route('editEmployer',null)}}">
                        <thead>
                            <tr>
                              <th>S No</th>
                              <th>Emp ID</th>
                              <th>Name</th>
                              <th>Email</th>
                              <th>Contact No</th>
                              <th>Status</th>
                              <th>Activate/Deactivate</th>
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
            initializeEmployerListDatatable();

            // activate (or) deactivate employers
            $(document).on("click",".employer-ad",function() {
                var id = $(this).attr('data-id');
                var action = $(this).attr('data-action');
                var actionRoute = (action == "activate") ? "{{ route('activateEmployer') }}" : "{{ route('deactivateEmployer') }}";

                $.ajax({
                    type: "POST",
                    async: false,
                    url: actionRoute,
                    data:{
                        _token:$('input[name=_token]').val(),
                        id:id
                    },
                    beforeSend: function() {
                        $('.loading').css("display","block");
                    },                    
                    success: function(data){
                        $('.loading').css("display","none");
                        reinitializeEmployerListDatatable(); 
                        // show success message
                        $('.custom-error-box strong').html('');
                        $('.custom-error-box').css('display','none');

                        $('.custom-success-box strong').html(data.result);                             
                        $('.custom-success-box').css('display','block');
                        setTimeout(function(){ $(".custom-success-box").fadeOut(); }, 2000);
                    },
                    error: function (data) { 
                        console.log('Server Error');

                        $('.custom-success-box strong').html('');
                        $('.custom-success-box').css('display','none');

                        $('.custom-error-box strong').html('Server Error Please Wait...');
                        $('.custom-error-box').css('display','block');                        
                    }                    
                });
            });

            // edit employers
            $(document).on("click",".employer-edit",function() {
                var id = $(this).attr('data-id');
                var url = $('#employer-list').attr('data-edit');
                var redirectURL = url+'/'+id;
                window.location.href = redirectURL;
            });             

            // delete employers
            $(document).on("click",".employer-delete",function() {
                var id = $(this).attr('data-id');

                swal({
                    title: 'Are you sure?',
                    text: 'You will not be able to recover this employer!',
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!',
                    closeOnConfirm: false
                },
                function() {
                    $.ajax({
                        type: "POST",
                        async: false,
                        url: "{{ route('deleteEmployer') }}",
                        data:{
                            _token:$('input[name=_token]').val(),
                            id:id
                        },
                        beforeSend: function() {
                            $('.loading').css("display","block");
                        },                        
                        success: function(data){
                            $('.loading').css("display","none");
                            swal('Deleted!','Employer has been deleted.','success');   
                            reinitializeEmployerListDatatable();                      
                            // show success message
                            $('.custom-error-box strong').html('');
                            $('.custom-error-box').css('display','none');

                            $('.custom-success-box strong').html(data.result);                             
                            $('.custom-success-box').css('display','block');
                            setTimeout(function(){ $(".custom-success-box").fadeOut(); }, 2000);
                        },
                        error: function (data) { 
                            console.log('Server Error');

                            $('.custom-success-box strong').html('');
                            $('.custom-success-box').css('display','none');

                            $('.custom-error-box strong').html('Server Error Please Wait...');
                            $('.custom-error-box').css('display','block');                        
                        }
                    });
                });
            }); 
        });
        
        // initialize datatables
        function initializeEmployerListDatatable(){
            var employerListTable = $('#employer-list').dataTable( { 
                "responsive": true,
                "lengthMenu": [10, 25, 50, 75, 100 ],
                "pageLength": 10,                
                "paging": true,
                "searching": true,
                "info": true,
                "processing": false,
                "serverSide": false,
                "ajax":"{{ route('getEmployersData') }}",
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
                            return row.emp_id;
                        }
                    },
                    {    
                        "targets": 2,                        
                        "render": function( data, type, row ) {
                            return row.full_name;
                        }
                    },
                    {    
                        "targets": 3,                        
                        "render": function( data, type, row ) {
                            return row.email;
                        }
                    },
                    {    
                        "targets": 4,                        
                        "render": function( data, type, row ) {
                            return row.contact_no;
                        }
                    },                                                            
                    { 
                        "targets": 5,                          
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
                        "targets": 6,                         
                        "render": function( data, type, row ) {
                            if(row.status == 1){
                                var action = 'deactivate';
                                var lab = 'Deactivate';
                            }else{
                                var action = 'activate';
                                var lab = 'Activate';
                            }   
                            var but = '<button type="button" class="btn btn-info employer-ad" data-action="'+action+'"  data-id="'+row.id+'">'+lab+'</button>';                         
                            return but;
                        }
                    },
                    { 
                        "targets": 7,                         
                        "render": function( data, type, row ) {
                            var actions = '<button type="button" class="btn btn-primary btn-flat employer-edit" data-id="'+row.id+'"><i class="icon-edit"></i></button> <button type="button" class="btn btn-danger btn-flat employer-delete" data-id="'+row.id+'"><i class="icon-trash"></i></button>';
                            return actions;
                        }
                    } 
                ],
                "language": { "emptyTable": "<span style='font-style:italic'>No employers found.</span>" }
            });                 
        }

        // reinitialize datatables
        function reinitializeEmployerListDatatable(){
            var employerListTable = $('#employer-list').dataTable( { 
                "destroy": true,
                "responsive": true,
                "lengthMenu": [10, 25, 50, 75, 100 ],
                "pageLength": 10,                
                "paging": true,
                "searching": true,
                "info": true,
                "processing": false,
                "serverSide": false,
                "ajax":"{{ route('getEmployersData') }}",
                "fnRowCallback" : function(nRow, aData, iDisplayIndex){
                    $("td:first", nRow).html(iDisplayIndex +1);
                    return nRow;
                },                             
                "columnDefs": [
                    {   
                        "targets": 0,
                        "render": function( data, type, row ) {
                            return true;
                        },
                    },
                    {    
                        "targets": 1,                        
                        "render": function( data, type, row ) {
                            return row.emp_id;
                        }
                    },
                    {    
                        "targets": 2,                        
                        "render": function( data, type, row ) {
                            return row.full_name;
                        }
                    },
                    {    
                        "targets": 3,                        
                        "render": function( data, type, row ) {
                            return row.email;
                        }
                    },
                    {    
                        "targets": 4,                        
                        "render": function( data, type, row ) {
                            return row.contact_no;
                        }
                    },                                                            
                    { 
                        "targets": 5,                          
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
                        "targets": 6,                         
                        "render": function( data, type, row ) {
                            if(row.status == 1){
                                var action = 'deactivate';
                                var lab = 'Deactivate';
                            }else{
                                var action = 'activate';
                                var lab = 'Activate';
                            }   
                            var but = '<button type="button" class="btn btn-info employer-ad" data-action="'+action+'"  data-id="'+row.id+'">'+lab+'</button>';                         
                            return but;
                        }
                    },
                    { 
                        "targets": 7,                         
                        "render": function( data, type, row ) {
                            var actions = '<button type="button" class="btn btn-primary btn-flat employer-edit" data-id="'+row.id+'"><i class="icon-edit"></i></button> <button type="button" class="btn btn-danger btn-flat employer-delete" data-id="'+row.id+'"><i class="icon-trash"></i></button>';
                            return actions;
                        }
                    }       
                ],
                "language": { "emptyTable": "<span style='font-style:italic'>No employers found.</span>" }
            });                
        }        
    </script>
@stop
