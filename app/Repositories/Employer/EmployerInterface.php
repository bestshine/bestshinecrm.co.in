<?php 

namespace App\Repositories\Employer;

interface EmployerInterface {
    
    /* ------------------- All Employers Page --------------------------- */

    /**
     * Get all employers.
     *
     */
    public function getAllEmployers(); 

    /**
     * Edit Employer
     *
     * @param $id number
     */
    public function editEmployer($id);

    /**
     * Update Employer
     *
     * @param $input array
     */
    public function updateEmployer($input);

    /**
     * Activate Employer
     *
     * @param $input array
     */
    public function activateEmployer($input);

    /**
     * Deactivate Employer
     *
     * @param $input array
     */
    public function deactivateEmployer($input);

    /**
     * Delete Employer
     *
     * @param $input array
     */
    public function deleteEmployer($input);    

    /* ------------------- Add Employers Page --------------------------- */

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
     * Store new Employer form data.
     *
     * @param $input array
     */
    public function storeNewEmployer($input);  

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

    /* ------------------- All Office Employers Page --------------------------- */

    /**
     * Get all dffice employers.
     *
     */
    public function getAllOfficeEmployers(); 

    /**
     * Edit office Employer
     *
     * @param $id number
     */
    public function editOfficeEmployer($id);

    /**
     * Update office Employer
     *
     * @param $input array
     */
    public function updateOfficeEmployer($input);

    /**
     * Activate office Employer
     *
     * @param $input array
     */
    public function activateOfficeEmployer($input);

    /**
     * Deactivate office Employer
     *
     * @param $input array
     */
    public function deactivateOfficeEmployer($input);

    /**
     * Delete office Employer
     *
     * @param $input array
     */
    public function deleteOfficeEmployer($input);        

    /* ------------------- Add Office Employers Page --------------------------- */

    /**
     * Store new Employer form data.
     *
     * @param $input array
     */
    public function storeNewOfficeEmployer($input);            
}

?>