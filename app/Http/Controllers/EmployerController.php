<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Employer\EmployerInterface as EmployerInterface;

class EmployerController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(EmployerInterface $employer)
    {   
        $this->employer = $employer;
        $this->middleware('auth');
    }

    /**
     * Show the employer page.
     *
     * @return \Illuminate\Http\Response
     */
    public function employer()
    {	
        return view('employer.all');
    }

    /**
     * Get all employers.
     *
     * @return array $data
     */
    public function getEmployersData()
    {   
        $data = [];
        $employers = $this->employer->getAllEmployers();
        $data['data'] = $employers;
        return $data;        
    }     

    /**
     * Show the employer form create page.
     *
     * @return \Illuminate\Http\Response
     */
    public function addNewEmployer()
    {	
        $vendors = $this->employer->getActivatedVendors();
        $states = $this->employer->getActivatedStates();
        return view('employer.create',compact('vendors','states'));        
    } 


    /**
     * Show the employer form create page.
     *
     * @return \Illuminate\Http\Response
     */
    public function storeNewEmployer(Request $request)
    {	
    	$input = $request->all();
        $response = $this->employer->storeNewEmployer($input);
        return response()->json($response);        
    }

    /**
     * Show the employer form edit page.
     *
     * @return \Illuminate\Http\Response
     */
    public function editEmployer($id)
    {   
        $edit = $this->employer->editEmployer($id);
        return view('employer.edit',compact('edit'));      
    } 

    /**
     * update employer.
     *
     * @return \Illuminate\Http\Response
     */
    public function updateEmployer(Request $request)
    {   
        $input = $request->all();
        $response = $this->employer->updateEmployer($input);
        return response()->json($response);          
    }     

    /**
     * Activate employer.
     *
     * @param $request array
     * @return json $response
     */
    public function activateEmployer(Request $request)
    {   
        $input = $request->all();
        $response = $this->employer->activateEmployer($input);
        return response()->json(['result'=>$response]);    
    }

    /**
     * Deactivate employer.
     *
     * @param $request array
     * @return json $response
     */
    public function deactivateEmployer(Request $request)
    {   
        $input = $request->all();
        $response = $this->employer->deactivateEmployer($input);
        return response()->json(['result'=>$response]);          
    }           

    /**
     * Delete employer.
     *
     * @param $request array
     * @return json $response
     */
    public function deleteEmployer(Request $request)
    {   
        $input = $request->all();
        $response = $this->employer->deleteEmployer($input);
        return response()->json(['result'=>$response]);          
    }           
}
