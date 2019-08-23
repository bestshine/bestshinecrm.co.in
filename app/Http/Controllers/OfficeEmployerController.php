<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Employer\EmployerInterface as EmployerInterface;

class OfficeEmployerController extends Controller
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
    public function officeEmployer()
    {	
        return view('employer.office.all');
    }

    /**
     * Get all employers.
     *
     * @return array $data
     */
    public function getOfficeEmployersData()
    {   
        $data = [];
        $employers = $this->employer->getAllOfficeEmployers();
        $data['data'] = $employers;
        return $data;        
    }     

    /**
     * Show the employer form create page.
     *
     * @return \Illuminate\Http\Response
     */
    public function addNewOfficeEmployer()
    {	
        return view('employer.office.create');        
    } 


    /**
     * Show the employer form create page.
     *
     * @return \Illuminate\Http\Response
     */
    public function storeNewOfficeEmployer(Request $request)
    {	
    	$input = $request->all();
        $response = $this->employer->storeNewOfficeEmployer($input);
        return response()->json($response);        
    }

    /**
     * Show the employer form edit page.
     *
     * @return \Illuminate\Http\Response
     */
    public function editOfficeEmployer($id)
    {   
        $edit = $this->employer->editOfficeEmployer($id);
        return view('employer.office.edit',compact('edit'));      
    } 

    /**
     * update employer.
     *
     * @return \Illuminate\Http\Response
     */
    public function updateOfficeEmployer(Request $request)
    {   
        $input = $request->all();
        $response = $this->employer->updateOfficeEmployer($input);
        return response()->json($response);          
    }     

    /**
     * Activate employer.
     *
     * @param $request array
     * @return json $response
     */
    public function activateOfficeEmployer(Request $request)
    {   
        $input = $request->all();
        $response = $this->employer->activateOfficeEmployer($input);
        return response()->json(['result'=>$response]);    
    }

    /**
     * Deactivate employer.
     *
     * @param $request array
     * @return json $response
     */
    public function deactivateOfficeEmployer(Request $request)
    {   
        $input = $request->all();
        $response = $this->employer->activateOfficeEmployer($input);
        return response()->json(['result'=>$response]);          
    }           

    /**
     * Delete employer.
     *
     * @param $request array
     * @return json $response
     */
    public function deleteOfficeEmployer(Request $request)
    {   
        $input = $request->all();
        $response = $this->employer->deleteOfficeEmployer($input);
        return response()->json(['result'=>$response]);          
    }        
}
