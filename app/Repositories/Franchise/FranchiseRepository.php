<?php

namespace App\Repositories\Franchise;

use App\Repositories\Franchise\FranchiseInterface as FranchiseInterface;
use App\Models\Franchise;
use App\Models\FranchiseState;
use App\Models\FranchiseRegion;
use App\Models\FranchiseZone;
use App\Models\FranchiseDistrict;
use App\Models\FranchiseTaluk;
use App\Models\Vendor;
use App\User;
use Event;

class FranchiseRepository implements FranchiseInterface
{   

    /**
     * Franchise instance
     *
     * @var model instance
     * @access protected
     */    
    protected $franchise; 

    /**
     * FranchiseState instance
     *
     * @var model instance
     * @access protected
     */    
    protected $franchiseState;  

    /**
     * FranchiseRegion instance
     *
     * @var model instance
     * @access protected
     */    
    protected $franchiseRegion;   

    /**
     * FranchiseZone instance
     *
     * @var model instance
     * @access protected
     */    
    protected $franchiseZone; 

    /**
     * FranchiseDistrict instance
     *
     * @var model instance
     * @access protected
     */    
    protected $franchiseDistrict;  

    /**
     * FranchiseTaluk instance
     *
     * @var model instance
     * @access protected
     */    
    protected $franchiseTaluk;            

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
    function __construct(Franchise $franchise, Vendor $vendor, FranchiseState $franchiseState, FranchiseRegion $franchiseRegion, FranchiseZone $franchiseZone, FranchiseDistrict $franchiseDistrict, FranchiseTaluk $franchiseTaluk) {
        $this->franchise = $franchise;
        $this->vendor = $vendor;
        $this->franchiseState = $franchiseState;
        $this->franchiseRegion = $franchiseRegion;
        $this->franchiseZone = $franchiseZone;
        $this->franchiseDistrict = $franchiseDistrict;
        $this->franchiseTaluk = $franchiseTaluk;
    }   

    /* ------------------- Add Franchises Page --------------------------- */

    /**
     * Get activated vendors.
     *
     * @return $vendors object
     */
    public function getActivatedVendors()
    {       
        $vendors = $this->vendor::where('status',1)->where('is_deleted',0)->get();                
        return $vendors;
    }  

    /**
     * Get activated states.
     *
     * @return $states object
     */
    public function getActivatedStates()
    {       
        $states = $this->franchiseState::where('status',1)->get();                
        return $states;
    }      

    /**
     * Store new Franchise form data.
     *
     * @param $input array
     * @return $msg array
     */
    public function storeNewFranchise($input)
    {   
        $this->franchise->vendor_id = $input['vendor'];
        $this->franchise->state_id = $input['state'];
        $this->franchise->region_id = $input['region'];
        $this->franchise->zone_id = $input['zone'];
        $this->franchise->district_id = $input['district'];
        $this->franchise->taluk_id = $input['taluk'];
        $this->franchise->status = 1;
        $this->franchise->is_deleted = 0;
        $this->franchise->save();

        // Franchise added successfull
        $msg['status'] = 1;
        $msg['msg'] = 'Franchise Added Successfully...';                      
        return $msg;
    } 

    /**
     * Store new region form data.
     *
     * @param $input array
     * @return $msg array
     */
    public function storeNewRegion($input)
    {   
        $this->franchiseRegion->vendor_id = $input['selected_vendor_id'];
        $this->franchiseRegion->state_id = $input['selected_state_id'];
        $this->franchiseRegion->region_name = $input['new_region'];
        $this->franchiseRegion->status = 1;
        $this->franchiseRegion->is_deleted = 0;
        $this->franchiseRegion->save();

        // Region added successfull
        $msg['status'] = 1;
        $msg['msg'] = 'Region Added Successfully...';                      
        return $msg;
    }  

    /**
     * Get region data.
     *
     * @param $input array
     * @return $msg array
     */
    public function getRegionData($input)
    {   
        $regions = $this->franchiseRegion::where('vendor_id',$input['vendor_id'])->where('state_id',$input['state_id'])->where('status',1)->where('is_deleted',0)->get();                   
        return $regions;
    }

    /**
     * Store new zone form data.
     *
     * @param $input array
     * @return $msg array
     */
    public function storeNewZone($input)
    {   
        $this->franchiseZone->vendor_id = $input['selected_vendor_id'];
        $this->franchiseZone->state_id = $input['selected_state_id'];
        $this->franchiseZone->region_id = $input['selected_region_id'];
        $this->franchiseZone->zone_name = $input['new_zone'];
        $this->franchiseZone->status = 1;
        $this->franchiseZone->is_deleted = 0;
        $this->franchiseZone->save();

        // Zone added successfull
        $msg['status'] = 1;
        $msg['msg'] = 'Zone Added Successfully...';                      
        return $msg;
    }  

    /**
     * Get zone data.
     *
     * @param $input array
     * @return $msg array
     */
    public function getZoneData($input)
    {   
        $regions = $this->franchiseZone::where('vendor_id',$input['vendor_id'])->where('state_id',$input['state_id'])->where('region_id',$input['region_id'])->where('status',1)->where('is_deleted',0)->get();                   
        return $regions;
    }

    /**
     * Store new district form data.
     *
     * @param $input array
     * @return $msg array
     */
    public function storeNewDistrict($input)
    {   
        $this->franchiseDistrict->vendor_id = $input['selected_vendor_id'];
        $this->franchiseDistrict->state_id = $input['selected_state_id'];
        $this->franchiseDistrict->region_id = $input['selected_region_id'];
        $this->franchiseDistrict->zone_id = $input['selected_zone_id'];
        $this->franchiseDistrict->district_name = $input['new_district'];
        $this->franchiseDistrict->status = 1;
        $this->franchiseDistrict->is_deleted = 0;
        $this->franchiseDistrict->save();

        // District added successfull
        $msg['status'] = 1;
        $msg['msg'] = 'District Added Successfully...';                      
        return $msg;
    }  

    /**
     * Get district data.
     *
     * @param $input array
     * @return $msg array
     */
    public function getDistrictData($input)
    {   
        $regions = $this->franchiseDistrict::where('vendor_id',$input['vendor_id'])->where('state_id',$input['state_id'])->where('region_id',$input['region_id'])->where('zone_id',$input['zone_id'])->where('status',1)->where('is_deleted',0)->get();                   
        return $regions;
    } 

    /**
     * Store new taluk form data.
     *
     * @param $input array
     * @return $msg array
     */
    public function storeNewTaluk($input)
    {   
        $this->franchiseTaluk->vendor_id = $input['selected_vendor_id'];
        $this->franchiseTaluk->state_id = $input['selected_state_id'];
        $this->franchiseTaluk->region_id = $input['selected_region_id'];
        $this->franchiseTaluk->zone_id = $input['selected_zone_id'];
        $this->franchiseTaluk->district_id = $input['selected_district_id'];
        $this->franchiseTaluk->taluk_name = $input['new_taluk'];
        $this->franchiseTaluk->status = 1;
        $this->franchiseTaluk->is_deleted = 0;
        $this->franchiseTaluk->save();

        // Taluk added successfull
        $msg['status'] = 1;
        $msg['msg'] = 'Taluk Added Successfully...';                      
        return $msg;
    }  

    /**
     * Get taluk data.
     *
     * @param $input array
     * @return $msg array
     */
    public function getTalukData($input)
    {   
        $regions = $this->franchiseTaluk::where('vendor_id',$input['vendor_id'])->where('state_id',$input['state_id'])->where('region_id',$input['region_id'])->where('zone_id',$input['zone_id'])->where('district_id',$input['district_id'])->where('status',1)->where('is_deleted',0)->get();                   
        return $regions;
    }                                          
}

?>