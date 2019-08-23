<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Franchise\FranchiseInterface as FranchiseInterface;

class FranchiseController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(FranchiseInterface $franchise)
    {   
        $this->franchise = $franchise;
        $this->middleware('auth');
    }  

    /**
     * Show the franchise form create page.
     *
     * @return \Illuminate\Http\Response
     */
    public function addNewFranchise()
    {	
    	$vendors = $this->franchise->getActivatedVendors();
        $states = $this->franchise->getActivatedStates();
        return view('franchise.create',compact('vendors','states'));
    } 

    /**
     * Store new franchise form data.
     *
     * @param $request array
     * @return \Illuminate\Http\Response
     */
    public function storeNewFranchise(Request $request)
    {	
        $input = $request->all();
        $response = $this->franchise->storeNewFranchise($input);
        return response()->json($response);         
    } 

    /**
     * Show the new region form create page.
     *
     * @return \Illuminate\Http\Response
     */
    public function storeNewRegion(Request $request)
    {   
        $input = $request->all();
        $response = $this->franchise->storeNewRegion($input);
        return response()->json($response);         
    }  

    /**
     * Get region data.
     *
     * @return \Illuminate\Http\Response
     */
    public function getRegionData(Request $request)
    {   
        $input = $request->all();
        $response = $this->franchise->getRegionData($input);
        return response()->json($response);         
    }

    /**
     * Show the new zone form create page.
     *
     * @return \Illuminate\Http\Response
     */
    public function storeNewZone(Request $request)
    {   
        $input = $request->all();
        $response = $this->franchise->storeNewZone($input);
        return response()->json($response);         
    }  

    /**
     * Get zone data.
     *
     * @return \Illuminate\Http\Response
     */
    public function getZoneData(Request $request)
    {   
        $input = $request->all();
        $response = $this->franchise->getZoneData($input);
        return response()->json($response);         
    } 

    /**
     * Show the new district form create page.
     *
     * @return \Illuminate\Http\Response
     */
    public function storeNewDistrict(Request $request)
    {   
        $input = $request->all();
        $response = $this->franchise->storeNewDistrict($input);
        return response()->json($response);         
    }  

    /**
     * Get district data.
     *
     * @return \Illuminate\Http\Response
     */
    public function getDistrictData(Request $request)
    {   
        $input = $request->all();
        $response = $this->franchise->getDistrictData($input);
        return response()->json($response);         
    }

    /**
     * Show the new taluk form create page.
     *
     * @return \Illuminate\Http\Response
     */
    public function storeNewTaluk(Request $request)
    {   
        $input = $request->all();
        $response = $this->franchise->storeNewTaluk($input);
        return response()->json($response);         
    }  

    /**
     * Get taluk data.
     *
     * @return \Illuminate\Http\Response
     */
    public function getTalukData(Request $request)
    {   
        $input = $request->all();
        $response = $this->franchise->getTalukData($input);
        return response()->json($response);         
    }                 
}
