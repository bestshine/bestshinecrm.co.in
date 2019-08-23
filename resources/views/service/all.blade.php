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
                <h4 class="card-title">SERVICE AGREEMENT</h4>
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
                    <h5>UPLOAD FORM</h5>
                    <hr>
                    <form method="post" class="service-docs-form" enctype="multipart/form-data" action="{{ route('serviceDocumentCreate') }}">
                        <!-- CSRF field -->
                        {{csrf_field()}}
                        <div class="row">
                            <div class="col-md-4">
                                <!-- Country -->
                                <div class="form-group">
                                    <label>School</label>
                                    <select class="form-control" name="school" id="school">
                                        <option value=""> ---Select School--- </option>
                                        @foreach($schools as $school)
                                            @if (Request::old('school') == $school->id)
                                                <option value="{{$school->id}}" selected>{{$school->school_name}}</option>
                                            @else
                                                <option value="{{$school->id}}">{{$school->school_name}}</option>
                                            @endif
                                        @endforeach 
                                    </select>                                    
                                    <span class="school-validate"></span> 
                                    @if ($errors->has('school'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('school') }}</strong>
                                        </span>
                                    @endif                            
                                </div>                                                         
                            </div>   
                            
                            <div class="col-md-4">
                                <!-- Company Website Address -->
                                <div class="form-group">
                                    <label for="zip_file" class="control-label">Zip Document</label>
                                    <input id="zip-file" type="file" class="form-control" name="zip_file" autofocus>

                                    <span class="zip-file-validate"></span> 
                                    @if ($errors->has('zip_file'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('zip_file') }}</strong>
                                        </span>
                                    @endif
                                </div>                             
                            </div>      

                            <div class="col-md-4"></div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <!-- Upload Document -->
                                    <button class="btn btn-info btn-flat" type="button" id="upload-document"><i class="icon-upload"></i> Upload Document</button>
                                </div>                            
                            </div>                            
                        </div>
                    </form>
                    <hr>
                    <table id="service-list" class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                              <th>S No</th>
                              <th>School Name</th>
                              <th>Document</th>
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
            initializeServiceListDatatable(false);

            // upload document
            $(document).on("click","#upload-document",function() {
                var formError = false;
                var school = $('#school').val();
                if(school == ""){
                    $('.school-validate').html('The school field is required.');
                    $('.school-validate').addClass('field-error');
                    formError = true;
                }else{
                    $('.school-validate').html('');
                    $('.school-validate').removeClass('field-error');
                } 

                var zipFile = $('#zip-file').val();
                if(zipFile == ""){
                    $('.zip-file-validate').html('The file field is required.');
                    $('.zip-file-validate').addClass('field-error');
                    formError = true;
                }else{
                    $('.zip-file-validate').html('');
                    $('.zip-file-validate').removeClass('field-error');
                }                                                                                         

                if(formError == false){
                    $('.service-docs-form').submit()                    
                }                
            });

            // edit schools
            $(document).on("click",".document-download",function() {
                var doc = $(this).attr('data-doc');
                var url = "{{ asset('service/document/')}}";
                var redirectURL = url+'/'+doc;
                window.location.href = redirectURL;
            });

            // delete document
            $(document).on("click",".document-delete",function() {
                var id = $(this).attr('data-id');

                swal({
                    title: 'Are you sure?',
                    text: 'You will not be able to recover this document!',
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
                        url: "{{ route('deleteServiceDocument') }}",
                        data:{
                            _token:$('input[name=_token]').val(),
                            id:id
                        },
                        beforeSend: function() {
                            $('.loading').css("display","block");
                        },                        
                        success: function(data){
                            $('.loading').css("display","none");
                            swal('Deleted!','Document has been deleted.','success');   
                            initializeServiceListDatatable(true);                      
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
        function initializeServiceListDatatable(destroy){
            var serviceListTable = $('#service-list').dataTable( { 
                "responsive": true,
                "lengthMenu": [10, 25, 50, 75, 100 ],
                "pageLength": 10,                
                "paging": true,
                "destroy": destroy,
                "searching": true,
                "info": true,
                "processing": false,
                "serverSide": false,
                "ajax":"{{ route('getServiceData') }}",
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
                            return row.school.school_name;
                        }
                    },
                    {    
                        "targets": 2,                        
                        "render": function( data, type, row ) {
                            return row.documents;
                        }
                    },                                                           
                    { 
                        "targets": 3,                         
                        "render": function( data, type, row ) {
                            var actions = '<button type="button" class="btn btn-primary btn-flat document-download" data-id="'+row.id+'" data-doc="'+row.documents+'"><i class="icon-download"></i></button> <button type="button" class="btn btn-danger btn-flat document-delete" data-id="'+row.id+'"><i class="icon-trash"></i></button>';
                            return actions;
                        }
                    } 
                ],
                "language": { "emptyTable": "<span style='font-style:italic'>No services found.</span>" }
            });                 
        }                      
    </script>
@stop
