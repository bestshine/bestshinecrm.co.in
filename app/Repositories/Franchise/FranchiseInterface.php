<?php 

namespace App\Repositories\Franchise;

interface FranchiseInterface {
    
    /* ------------------- Add Franchises Page --------------------------- */

    /**
     * Get activated vendors.
     *
     */
    public function getActivatedVendors(); 

    /**
     * Get activated states.
     *
     */
    public function getActivatedStates(); 

    /**
     * Store new Franchise form data.
     *
     * @param $input array
     */
    public function storeNewFranchise($input);  

    /**
     * Store new region form data.
     *
     * @param $input array
     */
    public function storeNewRegion($input);  

    /**
     * Store new region form data.
     *
     * @param $input array
     */
    public function getRegionData($input);    

    /**
     * Store new zone form data.
     *
     * @param $input array
     */
    public function storeNewZone($input);  

    /**
     * Store new zone form data.
     *
     * @param $input array
     */
    public function getZoneData($input); 

    /**
     * Store new district form data.
     *
     * @param $input array
     */
    public function storeNewDistrict($input);  

    /**
     * Store new district form data.
     *
     * @param $input array
     */
    public function getDistrictData($input); 

    /**
     * Store new taluk form data.
     *
     * @param $input array
     */
    public function storeNewTaluk($input);  

    /**
     * Store new taluk form data.
     *
     * @param $input array
     */
    public function getTalukData($input);            
}

?>