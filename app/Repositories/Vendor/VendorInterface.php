<?php 

namespace App\Repositories\Vendor;

interface VendorInterface {

    /* ------------------- All Vendors Page --------------------------- */

    /**
     * Get all Vendors
     *
     */
    public function getAllVendors();

    /**
     * Edit Vendor
     *
     * @param $id number
     */
    public function editVendor($id);

    /**
     * Update Vendor
     *
     * @param $input array
     */
    public function updateVendor($input);

    /**
     * Activate Vendor
     *
     * @param $input array
     */
    public function activateVendor($input);

    /**
     * Deactivate Vendor
     *
     * @param $input array
     */
    public function deactivateVendor($input);

    /**
     * Delete Vendor
     *
     * @param $input array
     */
    public function deleteVendor($input);
    
    /* ------------------- Add Vendors Page --------------------------- */

    /**
     * Store new Vendor form data.
     *
     * @param $input array
     */
    public function storeNewVendor($input);  
}

?>