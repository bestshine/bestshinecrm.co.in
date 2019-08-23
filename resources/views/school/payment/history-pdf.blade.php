<!doctype html>
<html lang="en">

<style>
.tabletr{
    width:100%;
    margin-left:20%;    
}
.tableth{
    text-align:center;
    /*width:160px;*/
    border:1px solid #ddd;
}
.tablewth{
    text-align:right;
}
.tablewthc{
    text-align: center;
}

</style>
    
<table style="height:10%"> 
    <tr >
        <td><img src="http://bestshineeduapp.com/tuttee/images/logo.png"></td>         
    </tr>    
</table> 
<hr width="100%;" style="color:#ddd;">
<!-- <ul style="list-style:none;width: 80%;margin: 0 auto;padding: 0;">
    <div style="float: left;">
        <li style="list-style:none;font-size: 13px;"><b>BESTSHINE EDUCATION CAMPUS PVT LID</b></li> 
        <li style="list-style:none;margin-top:2px;font-size: 13px;"><b>EMAIL</b> : info@bestshineeduapp.com</li> 
        <li style="list-style:none;margin-top:2px;font-size: 13px;"><b>CONTACT NO</b> : 4343242343</li> 
        <li style="list-style:none;margin-top:2px;font-size: 13px;"><b>ADDRESS</b> : DSDSA</li> 
    </div>
    <div style="float: right;">
        @php $school = App\Models\School::find($history->school_id); @endphp
        <li style="list-style:none;margin-top:2px;font-size: 13px;"><b>{{ $school->school_name }}</b></li> 
        <li style="list-style:none;margin-top:2px;font-size: 13px;"><b>EMAIL</b> : {{ $school->email }}</li> 
        <li style="list-style:none;margin-top:2px;font-size: 13px;"><b>CONTACT NO</b> : {{ $school->contact_no }}</li> 
        <li style="list-style:none;margin-top:2px;font-size: 13px;"><b>ADDRESS</b> : {{ $school->address }}</li>
        <li style="list-style:none;margin-top:2px;font-size: 13px;"><b>PAID DATE</b> : {{ $history->payment_date }}</li> 
    </div>
    <div style="clear: both;"></div>        
</ul>
<br> -->

<ul style="list-style:none;width: 80%;margin: 0 auto;padding: 0;">
    <div>
        <li style="list-style:none;font-size: 13px;"><b>BESTSHINE EDUCATION CAMPUS PVT LID</b></li> 
        <li style="list-style:none;margin-top:2px;font-size: 13px;"><b>EMAIL</b> : info@bestshineeduapp.com</li> 
        <li style="list-style:none;margin-top:2px;font-size: 13px;"><b>CONTACT NO</b> : 4343242343</li> 
        <li style="list-style:none;margin-top:2px;font-size: 13px;"><b>ADDRESS</b> : DSDSA</li> 
    </div>     
</ul>
<br>

<ul style="list-style:none;width: 80%;margin: 0 auto;padding: 0;">
    <div>
        @php $school = App\Models\School::find($history->school_id); @endphp
        <li style="list-style:none;margin-top:2px;font-size: 13px;"><b>{{ $school->school_name }}</b></li> 
        <li style="list-style:none;margin-top:2px;font-size: 13px;"><b>EMAIL</b> : {{ $school->email }}</li> 
        <li style="list-style:none;margin-top:2px;font-size: 13px;"><b>CONTACT NO</b> : {{ $school->contact_no }}</li> 
        <li style="list-style:none;margin-top:2px;font-size: 13px;"><b>ADDRESS</b> : {{ $school->address }}</li>
        <li style="list-style:none;margin-top:2px;font-size: 13px;"><b>PAID DATE</b> : {{ $history->payment_date }}</li> 
    </div>        
</ul>
<br>

<h3 style="text-align: center;margin: 0px;">PAYMENT RECEIPT</h3>
<br>
<section>
<table class="table" width="80%" style="margin: 0 auto;">
<tr class="tabletr" style="background-color:#ddd;">
    <th class="tableth">S NO</th>
    <th class="tableth">DESCRIPTION</th>
    <th class="tableth">AMOUNT</th>
</tr>
<tr class="tabletr">
    <td class="tableth">1</td>
<td class="tableth"> INSTALLATION AMOUNT</td>
<td class="tableth">{{ $history->paid_installation_amount }}</td>
</tr>  
<tr class="tabletr">
    <td class="tableth">2</td>
<td class="tableth"> MONTHLY FEE ({{ $history->paid_month }})</td>
<td class="tableth">{{ $history->paid_monthly_fees_amount }}</td>
</tr>  

<tr class="tabletr">
<td class="tableth">3</td>
<td class="tableth">OTHER CHARGES</td>
<td class="tableth">{{ $history->other_charges_amount }}</td>
</tr>

<tr class="tabletr">
<td></td>
@php $subTotal = $history->paid_installation_amount + $history->paid_monthly_fees_amount + $history->other_charges_amount; @endphp
<td class="tablewth">SUBTOTAL</td>
<td class="tablewthc">{{ $subTotal }}</td>
</tr>  
<tr class="tabletr">
<td></td>
<td class="tablewth">GST</td>
<td class="tablewthc">{{ $history->gst_amount }}</td>
</tr>
<tr class="tabletr">
<td></td>
@php $grandTotal = $subTotal + $history->gst_amount; @endphp
<td class="tablewth">TOTAL</td>
<td class="tablewthc"><b>{{ $grandTotal }}</b></td>
</tr>  
</table>    
</section>    

       <footer >
<!--         <div style="right: 20%;position: absolute;" >
            <span >Signature:<span><br>
            <span >Date: </span><br>
        </div> -->
    </footer>
    


</html>
