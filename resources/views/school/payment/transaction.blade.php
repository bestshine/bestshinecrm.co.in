@extends('layouts.app')

<!-- styles -->
@section('styles')
    <style type="text/css">
        .transaction-box{
            border: 1px solid #ddd;
            padding: 10px;
        }
        .trans-title{
            text-align: center;
        }
        .trans-cnt{
            text-align: center;
            font-weight: bold;
        }
    </style>
@stop

@section('content')
<div class="app-content content container-fluid">
    <div class="content-wrapper">

        <div class="card">
            <div class="card-header">
                <h4 class="card-title">SCHOOL PAYMENT TRANSACTION</h4>
                <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
            </div>

            <div class="card-body collapse in">
                <div class="card-block card-dashboard">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <div class="transaction-box">
                            <h5 class="trans-title">TRANSACTION STATUS</h5>
                            <hr>
                            <div class="trans-cnt">
                                <p>Transaction ID - {{ $paymentData->txnid }}</p>
                                <p>Amount - {{ $paymentData->net_amount_debit }}</p>
                                <p>Payment Mode - {{ $paymentData->mode }}</p>
                                <p>Status - {{ $paymentData->status }}</p>
                            </div>
                        </div>                        
                    </div>
                    <div class="col-md-2"></div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

<!-- scripts -->
@section('scripts')
    <!-- role.js -->
    <!-- <script src="{{ asset('js/role/role.js') }}"></script> -->
    <script type="text/javascript">
        $(document).ready(function() {      

        });               
    </script>
@stop
