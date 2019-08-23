<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\School;
use App\Models\ServiceDocument;

class ServiceDocumentController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {   
        $this->middleware('auth');
    }  

    /**
     * Show the service page.
     *
     * @return \Illuminate\Http\Response
     */
    public function serviceDocumentList()
    {	
    	$schoolIDs = [];
    	$services = ServiceDocument::where('status',1)->where('is_deleted',0)->get();
    	foreach ($services as $service) {
    		$schoolIDs[] = $service->school_id;
    	}
    	$schools = School::whereNotIn('id',$schoolIDs)->where('status',1)->where('is_deleted',0)->get();
        return view('service.all',compact('schools'));
    }

    /**
     * Get all services.
     *
     * @return array $data
     */
    public function getServiceData()
    {   
        $data = [];
        $services = ServiceDocument::with('school')->where('status',1)->where('is_deleted',0)->get();
        $data['data'] = $services;
        return $data;        
    } 

    /**
     * Show the service create page.
     *
     * @return \Illuminate\Http\Response
     */
    public function serviceDocumentCreate(Request $request)
    {	
    	$input = $request->all();
    	$school = $input['school'];
    	$image = $input['zip_file'];
        $fileName = $image->getClientOriginalName();
        $destinationPath = public_path('/service/document');      
        $image->move($destinationPath, $fileName);     	
    	$serviceObj = new ServiceDocument();
    	$serviceObj->school_id = $school;
    	$serviceObj->documents = $fileName;
    	$serviceObj->status = 1;
    	$serviceObj->is_deleted = 0;
    	$serviceObj->save();
    	return \Redirect::back();
    } 

    /**
     * Delete service document
     *
     * @param $input array
     * @return string
     */
    public function deleteServiceDocument(Request $request){
    	$input = $request->all();
        $serviceDocument = ServiceDocument::find($input['id']);
        $serviceDocument->is_deleted = 1;
        $serviceDocument->update();     
        return response()->json(['result'=>"Document has been deleted successfully..."]);   
    }      
}
