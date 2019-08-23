<?php

namespace App\Repositories\Vendor;

use App\Repositories\Vendor\VendorInterface as VendorInterface;
use App\Models\Vendor;
use App\User;
use Event;

class VendorRepository implements VendorInterface
{   

    /**
     * Vendor instance
     *
     * @var model instance
     * @access protected
     */    
    protected $vendor; 

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    function __construct(Vendor $vendor) {
        $this->vendor = $vendor;
    }   
    
    /* ------------------- All Vendors Page --------------------------- */

    /**
     * Get all vendors.
     *
     * @return array $vendors
     */
    public function getAllVendors()
    {   
        $vendors = $this->vendor::where('is_deleted',0)->get();
        return $vendors;
    }

    /**
     * Activate vendor
     *
     * @param $input array
     * @return string
     */
    public function activateVendor($input){
        $vendor = $this->vendor::find($input['id']);
        $vendor->status = 1;
        $vendor->update();
        return 'Vendor has been activated successfully...';
    }

    /**
     * Deactivate vendor
     *
     * @param $input array
     * @return string
     */
    public function deactivateVendor($input){
        $vendor = $this->vendor::find($input['id']);
        $vendor->status = 0;
        $vendor->update();        
        return 'Vendor has been deactivated successfully...';
    }

    /**
     * Delete vendor
     *
     * @param $input array
     * @return string
     */
    public function deleteVendor($input){
        $vendor = $this->vendor::find($input['id']);
        $vendor->is_deleted = 1;
        $vendor->update();        
        return 'Vendor has been deleted successfully...';
    }    

    /* ------------------- Add Vendors Page --------------------------- */

    /**
     * Store new vendor form data.
     *
     * @param $input array
     * @return $msg array
     */
    public function storeNewVendor($input)
    {   
        $this->vendor->name = $input['company_name'];        
        $this->vendor->website = $input['website_address'];           
        $this->vendor->product_details = $input['product_details'];           
        $status = (isset($input['status'])?$input['status']:0);
        $this->vendor->status = $status;
        $this->vendor->is_deleted = 0;
        $this->vendor->save();        

        // vendor added successfull
        $msg['status'] = 1;
        $msg['msg'] = 'Vendor Added Successfully...';                      
        return $msg;
    }

    /* ------------------- Edit Vendors Page --------------------------- */

    /**
     * Edit Vendor
     *
     * @param $id number
     * @return $edit object
     */
    public function editVendor($id){
        $vendor = $this->vendor::find($id);
        return $vendor;
    }

    /**
     * Update Vendor
     *
     * @param $input array
     * @return string
     */     
    public function updateVendor($input){
        $vendor = $this->vendor::find($input['id']);
        $vendor->name = $input['company_name'];        
        $vendor->website = $input['website_address'];           
        $vendor->product_details = $input['product_details'];           
        $vendor->update();

        // vendor updated successfull
        $msg['status'] = 1;
        $msg['msg'] = 'Vendor Updated Successfully...';                      
        return $msg;        
    }                         
}

?>