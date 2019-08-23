<?php 

namespace App\Repositories\CustomerCare;

interface CustomerCareInterface {

    /* ------------------- New Issue Page --------------------------- */

    /**
     * Post new issue
     *
     * @param $input array
     */
    public function storeNewIssue($input); 

    /**
     * Get customer care details
     *
     * @param $track_id random string
     */
    public function getCustomerCareDetails($track_id); 

    /**
     * Get customer care note details
     *
     * @param $care_id int
     */
    public function getCustomerCareNoteDetails($care_id);    

    /* ------------------- Reply Issue Page --------------------------- */

    /**
     * Reply issue
     *
     * @param $input array
     */
    public function replyIssue($input);    

	/* ------------------- All Issue Page --------------------------- */ 
	
    /**
     * New Issues
     *
     */
    public function getNewIssue(); 	    

    /**
     * Re Issues
     *
     */
    public function getReIssue(); 

    /**
     * Process Issues
     *
     */
    public function getProcessIssue();   

    /**
     * Hold Issues
     *
     */
    public function getHoldIssue();       

    /**
     * Close Issues
     *
     */
    public function getCloseIssue(); 
    
    /**
     * Over all report
     *
     */
    public function getOverAllReport();    	 

    /* ------------------- Track ID Page --------------------------- */  
    
    /**
     * Check Track id details.
     *
     * @param $input array
     */
    public function checkTrackID($input);                   
}

?>