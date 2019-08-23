<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Vendor\VendorInterface as VendorInterface;

class VendorController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(VendorInterface $vendor)
    {   
        $this->vendor = $vendor;
        $this->middleware('auth');
    }  

    /**
     * Show the vendor page.
     *
     * @return \Illuminate\Http\Response
     */
    public function vendor()
    {	
        return view('vendor.all');
    } 

    /**
     * Get all vendors.
     *
     * @return array $data
     */
    public function getVendorsData()
    {   
        $data = [];
        $vendors = $this->vendor->getAllVendors();
        $data['data'] = $vendors;
        return $data;        
    }

    /**
     * Show the vendor form create page.
     *
     * @return \Illuminate\Http\Response
     */
    public function addNewVendor()
    {	
        return view('vendor.create');
    } 

    /**
     * Show the vendor form create page.
     *
     * @return \Illuminate\Http\Response
     */
    public function storeNewVendor(Request $request)
    {	
        $input = $request->all();
        $response = $this->vendor->storeNewVendor($input);
        return response()->json($response);         
    } 

    /**
     * Show the vendor form edit page.
     *
     * @return \Illuminate\Http\Response
     */
    public function editVendor($id)
    {   
        $edit = $this->vendor->editVendor($id);
        return view('vendor.edit',compact('edit'));      
    } 

    /**
     * update vendor.
     *
     * @return \Illuminate\Http\Response
     */
    public function updateVendor(Request $request)
    {   
        $input = $request->all();
        $response = $this->vendor->updateVendor($input);
        return response()->json($response);          
    }     

    /**
     * Activate vendor.
     *
     * @param $request array
     * @return json $response
     */
    public function activateVendor(Request $request)
    {   
        $input = $request->all();
        $response = $this->vendor->activateVendor($input);
        return response()->json(['result'=>$response]);    
    }

    /**
     * Deactivate vendor.
     *
     * @param $request array
     * @return json $response
     */
    public function deactivateVendor(Request $request)
    {   
        $input = $request->all();
        $response = $this->vendor->deactivateVendor($input);
        return response()->json(['result'=>$response]);          
    }           

    /**
     * Delete vendor.
     *
     * @param $request array
     * @return json $response
     */
    public function deleteVendor(Request $request)
    {   
        $input = $request->all();
        $response = $this->vendor->deleteVendor($input);
        return response()->json(['result'=>$response]);          
    }  
}
