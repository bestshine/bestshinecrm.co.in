<?php

namespace App\Repositories\Employer;

use App\Repositories\Employer\EmployerInterface as EmployerInterface;
use App\Models\Employer;
use App\Models\OfficeEmployer;
use App\Models\FranchiseState;
use App\Models\FranchiseRegion;
use App\Models\FranchiseZone;
use App\Models\FranchiseDistrict;
use App\Models\FranchiseTaluk;
use App\Models\Vendor;
use App\User;
use App\Models\RoleUser;
use Event;

class EmployerRepository implements EmployerInterface
{   

    /**
     * Employer instance
     *
     * @var model instance
     * @access protected
     */    
    protected $employer; 

    /**
     * OfficeEmployer instance
     *
     * @var model instance
     * @access protected
     */    
    protected $officeEmployer;     

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
    function __construct(Employer $employer, OfficeEmployer $officeEmployer, Vendor $vendor, FranchiseState $franchiseState, FranchiseRegion $franchiseRegion, FranchiseZone $franchiseZone, FranchiseDistrict $franchiseDistrict, FranchiseTaluk $franchiseTaluk) {
        $this->employer = $employer;
        $this->officeEmployer = $officeEmployer;
        $this->vendor = $vendor;
        $this->franchiseState = $franchiseState;
        $this->franchiseRegion = $franchiseRegion;
        $this->franchiseZone = $franchiseZone;
        $this->franchiseDistrict = $franchiseDistrict;
        $this->franchiseTaluk = $franchiseTaluk;
    }   

    /* ------------------- Add Franchises Page --------------------------- */

    /**
     * Get all employers.
     *
     * @return $vendors object
     */
    public function getAllEmployers()
    {       
        $employers = $this->employer::where('is_deleted',0)->get();                
        return $employers;
    }

    /**
     * Activate employer
     *
     * @param $input array
     * @return string
     */
    public function activateEmployer($input){
        $employer = $this->employer::find($input['id']);
        $employer->status = 1;
        $employer->update();

        // update to user
        $user = User::find($employer->user_id);
        $user->status = 1;
        $user->update();          
        return 'Employer has been activated successfully...';
    }

    /**
     * Deactivate employer
     *
     * @param $input array
     * @return string
     */
    public function deactivateEmployer($input){
        $employer = $this->employer::find($input['id']);
        $employer->status = 0;
        $employer->update();    

        // update to user
        $user = User::find($employer->user_id);
        $user->status = 0;
        $user->update();              
        return 'Employer has been deactivated successfully...';
    }

    /**
     * Delete employer
     *
     * @param $input array
     * @return string
     */
    public function deleteEmployer($input){
        $employer = $this->employer::find($input['id']);
        $employer->is_deleted = 1;
        $employer->update();        
        return 'Employer has been deleted successfully...';
    }     

    /* ------------------- Add Employers Page --------------------------- */

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
     * Store new Employer form data.
     *
     * @param $input array
     * @return $msg array
     */
    public function storeNewEmployer($input)
    {   
        $length = 8;
        $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $empID = 'FRA_';
        for ($i = 0; $i < $length; $i++) {
            $empID .= $characters[rand(0, $charactersLength - 1)];
        }

        $user = new User();
        $user->name = $input['full_name'];
        $user->email = $input['email'];
        $user->password = bcrypt($empID);
        $user->status = 1;
        $user->is_deleted = 0;
        $user->notify_count = 0;
        $user->save();

        // assign role
        $roleUser = new RoleUser();
        $roleUser->user_id = $user->id;
        $roleUser->role_id = 2;
        $roleUser->save();        

        $this->employer->user_id = $user->id;
        $this->employer->emp_id = $empID;
        $this->employer->full_name = $input['full_name'];
        $this->employer->email = $input['email'];
        $this->employer->gender = $input['gender'];
        $this->employer->contact_no = $input['contact_no'];
        $this->employer->contact_no_optional = $input['contact_no_optional'];
        $this->employer->address = $input['address'];
        $this->employer->country = $input['country'];
        $this->employer->state = $input['state'];
        $this->employer->city = $input['city'];
        $this->employer->vendor_id = $input['vendor'];
        $this->employer->franchise_level = $input['franchise_level'];
        $this->employer->state_id = $input['franchise_level_state'];
        $this->employer->region_id = $input['franchise_level_region'];
        $this->employer->zone_id = $input['franchise_level_zone'];
        $this->employer->district_id = $input['franchise_level_district'];
        $this->employer->taluk_id = $input['franchise_level_taluk'];
        $this->employer->account_holder_name = $input['account_holder_name'];
        $this->employer->account_no = $input['account_no'];
        $this->employer->ifsc_code = $input['ifsc_code'];
        $this->employer->bank_name = $input['bank_name'];
        $this->employer->branch_name = $input['branch_name'];
        $this->employer->status = 1;
        $this->employer->is_deleted = 0;
        $this->employer->save();

        // Employer added successfull
        $msg['status'] = 1;
        $msg['msg'] = 'Employer Added Successfully...';                      
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

    /* ------------------- Edit Employers Page --------------------------- */

    /**
     * Edit Employer
     *
     * @param $id number
     * @return $edit object
     */
    public function editEmployer($id){
        $employer = $this->employer::find($id);
        return $employer;
    }

    /**
     * Update Employer
     *
     * @param $input array
     * @return string
     */     
    public function updateEmployer($input){
        $employer = $this->employer::find($input['id']);       
        $employer->full_name = $input['full_name'];
        $employer->email = $input['email'];
        $employer->gender = $input['gender'];
        $employer->contact_no = $input['contact_no'];
        $employer->contact_no_optional = $input['contact_no_optional'];
        $employer->address = $input['address'];
        $employer->country = $input['country'];
        $employer->state = $input['state'];
        $employer->city = $input['city'];
        $employer->account_holder_name = $input['account_holder_name'];
        $employer->account_no = $input['account_no'];
        $employer->ifsc_code = $input['ifsc_code'];
        $employer->bank_name = $input['bank_name'];
        $employer->branch_name = $input['branch_name'];          
        $employer->update();

        // employer updated successfull
        $msg['status'] = 1;
        $msg['msg'] = 'Employer Updated Successfully...';                      
        return $msg;        
    }   

    /* ------------------- All Office Employer Page --------------------------- */

    /**
     * Get all employers.
     *
     * @return $vendors object
     */
    public function getAllOfficeEmployers()
    {       
        $employers = $this->officeEmployer::where('is_deleted',0)->get();                
        return $employers;
    }

    /**
     * Activate employer
     *
     * @param $input array
     * @return string
     */
    public function activateOfficeEmployer($input){
        $officeEmployer = $this->officeEmployer::find($input['id']);
        $officeEmployer->status = 1;
        $officeEmployer->update();

        // update to user
        $user = User::find($officeEmployer->user_id);
        $user->status = 1;
        $user->update();          
        return 'Employer has been activated successfully...';
    }

    /**
     * Deactivate office employer
     *
     * @param $input array
     * @return string
     */
    public function deactivateOfficeEmployer($input){
        $officeEmployer = $this->officeEmployer::find($input['id']);
        $officeEmployer->status = 0;
        $officeEmployer->update();    

        // update to user
        $user = User::find($employer->user_id);
        $user->status = 0;
        $user->update();              
        return 'Employer has been deactivated successfully...';
    }

    /**
     * Delete office employer
     *
     * @param $input array
     * @return string
     */
    public function deleteOfficeEmployer($input){
        $officeEmployer = $this->officeEmployer::find($input['id']);
        $officeEmployer->is_deleted = 1;
        $officeEmployer->update();        
        return 'Employer has been deleted successfully...';
    }     

    /* ------------------- Add Office Employers Page --------------------------- */ 

    /**
     * Store new Employer form data.
     *
     * @param $input array
     * @return $msg array
     */
    public function storeNewOfficeEmployer($input)
    {   
        // dd($input);
        $empID = $input['employer_id'];
        $user = new User();
        $user->name = $input['full_name'];
        $user->email = $input['email'];
        $user->password = bcrypt($empID);
        $user->status = 1;
        $user->is_deleted = 0;
        $user->notify_count = 0;
        $user->save();

        // assign role
        $roleUser = new RoleUser();
        $roleUser->user_id = $user->id;
        $roleUser->role_id = 3;
        $roleUser->save();        

        $this->officeEmployer->user_id = $user->id;
        $this->officeEmployer->emp_id = $empID;
        $this->officeEmployer->full_name = $input['full_name'];
        $this->officeEmployer->email = $input['email'];
        $this->officeEmployer->gender = $input['gender'];
        $this->officeEmployer->contact_no = $input['contact_no'];
        $this->officeEmployer->contact_no_optional = $input['contact_no_optional'];
        $this->officeEmployer->address = $input['address'];
        $this->officeEmployer->country = $input['country'];
        $this->officeEmployer->state = $input['state'];
        $this->officeEmployer->city = $input['city'];
        $this->officeEmployer->status = 1;
        $this->officeEmployer->is_deleted = 0;
        $this->officeEmployer->save();

        // Employer added successfull
        $msg['status'] = 1;
        $msg['msg'] = 'Employer Added Successfully...';                      
        return $msg;
    }            

    /* ------------------- Edit Office Employers Page --------------------------- */

    /**
     * Edit Employer
     *
     * @param $id number
     * @return $edit object
     */
    public function editOfficeEmployer($id){
        $officeEmployer = $this->officeEmployer::find($id);
        return $officeEmployer;
    }

    /**
     * Update Employer
     *
     * @param $input array
     * @return string
     */     
    public function updateOfficeEmployer($input){
        $officeEmployer = $this->officeEmployer::find($input['id']);       
        $officeEmployer->full_name = $input['full_name'];
        $officeEmployer->email = $input['email'];
        $officeEmployer->emp_id = $input['employer_id'];
        $officeEmployer->gender = $input['gender'];
        $officeEmployer->contact_no = $input['contact_no'];
        $officeEmployer->contact_no_optional = $input['contact_no_optional'];
        $officeEmployer->address = $input['address'];
        $officeEmployer->country = $input['country'];
        $officeEmployer->state = $input['state'];
        $officeEmployer->city = $input['city'];          
        $officeEmployer->update();

        // employer updated successfull
        $msg['status'] = 1;
        $msg['msg'] = 'Employer Updated Successfully...';                      
        return $msg;        
    }                                          
}

?>