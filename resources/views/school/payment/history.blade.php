@extends('layouts.app')

<!-- styles -->
@section('styles')
    <link href="{{ asset('css/datatables/jquery.dataTables.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/datatables/responsive.dataTables.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/datatables-custom.css') }}" rel="stylesheet">
@stop

@section('content')
<div class="app-content content container-fluid">
    <div class="content-wrapper">

        <div class="card" id="school_slug" slug="{{ $school_slug }}"> 
            <div class="card-header">
                <h4 class="card-title">SCHOOL PAYMENT HISTORY</h4>
                <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
            </div>

            <div class="card-body collapse in">
                <div class="card-block card-dashboard">
                    <table id="school-payment-history-list" class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                              <th>S NO</th>
                              <th>Txn ID</th>
                              <th>Total Paid Amount</th>
                              <th>Mode</th>
                              <th>Status</th>
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
    <script type="text/javascript">
        $(document).ready(function() {      
            // call datatables 
            initializeSchoolPaymentHistoryListDatatable();

            // download pdf
            $(document).on("click",".download-pdf",function() {
                var id = $(this).attr("data-id");
                var redirectURL = "{{ route('downloadHistoryPDF',null) }}"+'/'+id;
                window.location.href = redirectURL;
                console.log(redirectURL);
            });            
        });

        // initialize datatables
        function initializeSchoolPaymentHistoryListDatatable(){
            var schoolPaymentHistoryListTable = $('#school-payment-history-list').dataTable( { 
                "responsive": true,
                "lengthMenu": [10, 25, 50, 75, 100 ],
                "pageLength": 10,                
                "paging": true,
                "searching": true,
                "info": true,
                "processing": false,
                "serverSide": false,
                "ajax": {
                    "url": "{{ route('getSchoolPaymentHistoryData') }}",
                    "data": function ( d ) {
                        d.school_slug = $("#school_slug").attr('slug');
                    }
                },        
                // "ajax":"{{ route('getSchoolPaymentHistoryData') }}",
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
                            return row.txnid;
                        }
                    },
                    {    
                        "targets": 2,                        
                        "render": function( data, type, row ) {
                            return row.total_paid_amount;
                        }
                    },
                    {    
                        "targets": 3,                        
                        "render": function( data, type, row ) {
                            return row.payment_mode;
                        }
                    },                                         
                    {   
                        "targets": 4,                         
                        "render": function( data, type, row ) {                         
                            return row.status;
                        }
                    },
                    {   
                        "targets": 5,                         
                        "render": function( data, type, row ) {
                            var actions = '<button type="button" class="btn btn-primary btn-flat history-view" data-id="'+row.id+'"><i class="icon-eye"></i></button> <button type="button" class="btn btn-danger btn-flat download-pdf" data-id="'+row.id+'"><i class="icon-download"></i></button>';
                            return actions;

                        }
                    }                    
                ],
                "language": { "emptyTable": "<span style='font-style:italic'>No history found.</span>" }
            });                 
        }                       
    </script>
@stop
