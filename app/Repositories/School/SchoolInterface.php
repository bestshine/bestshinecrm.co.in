<?php 

namespace App\Repositories\School;

interface SchoolInterface {
    
    /* ------------------- All Schools Page --------------------------- */

    /**
     * Get all schools.
     *
     */
    public function getAllSchools(); 

    /**
     * Update School
     *
     * @param $input array
     */
    public function updateSchool($input);

    /**
     * Activate School
     *
     * @param $input array
     */
    public function activateSchool($input);

    /**
     * Deactivate School
     *
     * @param $input array
     */
    public function deactivateSchool($input);

    /**
     * Delete School
     *
     * @param $input array
     */
    public function deleteSchool($input);    

    /* ------------------- Add Schools Page --------------------------- */

    /**
     * Get activated vendors
     *
     */
    public function getActivatedVendors(); 

    /**
     * Get activated states.
     *
     */
    public function getActivatedStates(); 

    /**
     * Get employer details by id.
     *
     */
    public function getEmployerDataByID($input); 
    
    /**
     * Store new School form data.
     *
     * @param $input array
     */
    public function storeNewSchool($input);  

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
    public function getZoneData($input);  

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
    public function getTalukData($input);    

    /* ------------------- View Schools Details Page --------------------------- */

    /**
     * Get school data.
     *
     * @param $school_id int
     */
    public function getSingleSchoolData($school_id);        
    
    /**
     * Get school fee details.
     *
     * @param $school_id int
     */
    public function getSchoolFeeData($school_id);     

    /* ------------------- Add Schools Fee Details Page --------------------------- */

    /**
     * Get activated schools
     *
     */
    public function getSchoolsForFeeDetails(); 

    /**
     * Store new school fee details form data.
     *
     * @param $input array
     */
    public function storeSchoolFeeDetails($input);    

    /**
     * Update new school fee details form data.
     *
     * @param $input array
     */
    public function updateSchoolFeeDetails($input);        

    /* ------------------- Schools Payment Details Page --------------------------- */

    /**
     * Get schools data
     *
     */
    public function getSchoolData();

    /**
     * Get vendor data
     *
     * @param $vendor_id int
     */
    public function getVendorData($vendor_id);

    /**
     * Get employer data
     *
     * @param $employer_id int
     */
    public function getEmployerData($employer_id);        

    /**
     * Get schools payment data
     *
     * @param $school_id int
     */
    public function getSchoolPaymentData($school_id); 

    /**
     * Get over all school payment details
     *
     * @param $input array
     */
    public function getSchoolOverAllPaymentData();   

    /* ------------------- Schools Payment History Details Page --------------------------- */

    /**
     * Get schools payment history data
     *
     * @param $input array
     */
    public function getSchoolPaymentHistoryData($input);   

    /**
     * Get schools payment history data
     *
     * @param $history_id id
     */
    public function downloadHistoryPDF($history_id);  

    /*---------------------------- Office Staff School Payment ------------------------ */

    /**
     * Get schools data by id
     *
     * @param $input array
     */
    public function getSchoolDataByID($input);         
}

?>