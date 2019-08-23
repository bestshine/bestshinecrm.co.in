<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

//Route::get('/', 'HomeController@home')->name('home');
/* updated in 16-5-2018*/
Route::get('user/login', 'HomeController@home')->name('home');
Route::get('/', 'HomeController@index')->name('/');
Route::get('about', 'HomeController@about')->name('about');
Route::get('services', 'HomeController@service')->name('services');
Route::get('feature', 'HomeController@feature')->name('features');
Route::get('pricing', 'HomeController@pricing')->name('pricing');
Route::get('demo/form', 'HomeController@demo_form')->name('Demo_form');
Route::get('school/visit', 'HomeController@school_visit')->name('schoolvisit');
Route::get('service/agreement', 'HomeController@service_agreement')->name('service_agreement');
Route::get('franchiess', 'HomeController@franchiess')->name('franchiess');
Route::get('contact', 'HomeController@contact')->name('contact');

/*end*/

// login routes...
Route::get('/login', 'Common\LoginController@showLoginForm')->name('login');
Route::post('/postLogin', 'Common\LoginController@postLogin')->name('postLogin');
Route::post('/logout', 'Common\LoginController@logout')->name('logout');

// forgot password routes...
Route::get('/forgot', 'Common\ForgotPasswordController@showForgotPasswordForm')->name('forgot');
Route::post('/postForgot', 'Common\ForgotPasswordController@postForgotPassword')->name('postForgotPassword');

// reset password routes...
Route::get('/reset/password/{token}', 'Common\ResetPasswordController@showResetPasswordForm')->name('resetPassword');
Route::post('/postResetPassword', 'Common\ResetPasswordController@postResetPassword')->name('postResetPassword');



// account routes..
Route::group(['prefix' => 'account'], function () {
	// profile routes..
	Route::group(['prefix' => 'profile'], function () {
		Route::get('/', 'Common\AccountController@editUser')->name('editUser');
		Route::post('/update', 'Common\AccountController@updateUser')->name('updateUser');
		Route::post('/change-password', 'Common\AccountController@changePassword')->name('changePassword');
	});
	// notification routes..
	Route::get('/notifications', 'Common\NotificationController@getAllNotifications')->name('getAllNotifications');
	Route::get('/get/latest/notifications', 'Common\NotificationController@getLatestNotifications')->name('getLatestNotifications');
	Route::post('/update/count', 'Common\NotificationController@updateNotifyCount')->name('updateNotifyCount');
});

// dashboard routes...
Route::group(['prefix' => 'dashboard'], function () {
	Route::get('/', 'DashboardController@dashboard')->name('dashboard');

	// vendor routes...
	Route::group(['prefix' => 'vendor'], function () {
		Route::get('/', 'VendorController@vendor')->name('vendorList');	
		Route::get('/getVendorsData', 'VendorController@getVendorsData')->name('getVendorsData');
		Route::post('/activateVendor', 'VendorController@activateVendor')->name('activateVendor');
		Route::post('/deactivateVendor', 'VendorController@deactivateVendor')->name('deactivateVendor');	
		Route::post('/deleteVendor', 'VendorController@deleteVendor')->name('deleteVendor');	

		// add vendor routes
		Route::get('/create', 'VendorController@addNewVendor')->name('addNewVendor');			
		Route::post('/store', 'VendorController@storeNewVendor')->name('storeNewVendor');	

		// edit vendor routes
		Route::get('/edit/{id}', 'VendorController@editVendor')->name('editVendor');			
		Route::post('/update', 'VendorController@updateVendor')->name('updateVendor');		

		// franchise routes...
		Route::group(['prefix' => 'franchise'], function () {
			// Route::get('/', 'FranchiseController@franchise')->name('franchiseList');	
			// Route::get('/getVendorsData', 'FranchiseController@getVendorsData')->name('getVendorsData');
			// Route::post('/activateVendor', 'FranchiseController@activateVendor')->name('activateVendor');
			// Route::post('/deactivateVendor', 'FranchiseController@deactivateVendor')->name('deactivateVendor');	
			// Route::post('/deleteVendor', 'FranchiseController@deleteVendor')->name('deleteVendor');	

			// add franchise routes...
			Route::get('/create', 'FranchiseController@addNewFranchise')->name('addNewFranchise');			
			Route::post('/store', 'FranchiseController@storeNewFranchise')->name('storeNewFranchise');	

			// region routes...
			Route::post('/region/store', 'FranchiseController@storeNewRegion')->name('storeNewRegion');	
			Route::post('/region/get', 'FranchiseController@getRegionData')->name('getRegionData');	

			// zone routes...
			Route::post('/zone/store', 'FranchiseController@storeNewZone')->name('storeNewZone');	
			Route::post('/zone/get', 'FranchiseController@getZoneData')->name('getZoneData');

			// district routes...
			Route::post('/district/store', 'FranchiseController@storeNewDistrict')->name('storeNewDistrict');	
			Route::post('/district/get', 'FranchiseController@getDistrictData')->name('getDistrictData');			

			// taluk routes...
			Route::post('/taluk/store', 'FranchiseController@storeNewTaluk')->name('storeNewTaluk');	
			Route::post('/taluk/get', 'FranchiseController@getTalukData')->name('getTalukData');

			// edit franchise routes
			// Route::get('/edit/{id}', 'FranchiseController@editVendor')->name('editVendor');			
			// Route::post('/update', 'FranchiseController@updateVendor')->name('updateVendor');					
		});					
	});

	// employer routes...
	Route::group(['prefix' => 'employer'], function () {
		Route::get('/', 'EmployerController@employer')->name('employerList');	
		Route::get('/getEmployersData', 'EmployerController@getEmployersData')->name('getEmployersData');
		Route::post('/activateEmployer', 'EmployerController@activateEmployer')->name('activateEmployer');
		Route::post('/deactivateEmployer', 'EmployerController@deactivateEmployer')->name('deactivateEmployer');	
		Route::post('/deleteEmployer', 'EmployerController@deleteEmployer')->name('deleteEmployer');	

		// add employer routes
		Route::get('/create', 'EmployerController@addNewEmployer')->name('addNewEmployer');			
		Route::post('/store', 'EmployerController@storeNewEmployer')->name('storeNewEmployer');		

		// edit employer routes
		Route::get('/edit/{id}', 'EmployerController@editEmployer')->name('editEmployer');			
		Route::post('/update', 'EmployerController@updateEmployer')->name('updateEmployer');					
	});

	// office employer routes...
	Route::group(['prefix' => 'office/staff'], function () {
		Route::get('/', 'OfficeEmployerController@officeEmployer')->name('officeEmployerList');	
		Route::get('/getOfficeEmployersData', 'OfficeEmployerController@getOfficeEmployersData')->name('getOfficeEmployersData');
		Route::post('/activateOfficeEmployer', 'OfficeEmployerController@activateOfficeEmployer')->name('activateOfficeEmployer');
		Route::post('/deactivateOfficeEmployer', 'OfficeEmployerController@deactivateOfficeEmployer')->name('deactivateOfficeEmployer');	
		Route::post('/deleteOfficeEmployer', 'OfficeEmployerController@deleteOfficeEmployer')->name('deleteOfficeEmployer');	

		// add employer routes
		Route::get('/create', 'OfficeEmployerController@addNewOfficeEmployer')->name('addNewOfficeEmployer');
		Route::post('/store', 'OfficeEmployerController@storeNewOfficeEmployer')->name('storeNewOfficeEmployer');		

		// edit employer routes
		Route::get('/edit/{id}', 'OfficeEmployerController@editOfficeEmployer')->name('editOfficeEmployer');		
		Route::post('/update', 'OfficeEmployerController@updateOfficeEmployer')->name('updateOfficeEmployer');					
	});	

	// school routes...
	Route::group(['prefix' => 'school'], function () {
		Route::get('/', 'SchoolController@school')->name('schoolList');	
		Route::get('/getSchoolsData', 'SchoolController@getSchoolsData')->name('getSchoolsData');
		Route::post('/activateSchool', 'SchoolController@activateSchool')->name('activateSchool');
		Route::post('/deactivateSchool', 'SchoolController@deactivateSchool')->name('deactivateSchool');	
		Route::post('/deleteSchool', 'SchoolController@deleteSchool')->name('deleteSchool');	

		// add school routes
		Route::get('/create', 'SchoolController@addNewSchool')->name('addNewSchool');			
		Route::post('/store', 'SchoolController@storeNewSchool')->name('storeNewSchool');	
		Route::post('/getEmployerDataByID', 'SchoolController@getEmployerDataByID')->name('getEmployerDataByID');	

		// edit school routes
		Route::get('/edit/{id}', 'SchoolController@editSchool')->name('editSchool');			
		Route::post('/update', 'SchoolController@updateSchool')->name('updateSchool');	

		// view school routes
		Route::get('/view/{id}', 'SchoolController@viewSchool')->name('viewSchool');	

		// school payment routes...
		Route::group(['prefix' => 'payment'], function () {
			Route::get('/overall', 'SchoolController@overAllSchoolPayment')->name('overAllSchoolPayment');	
			Route::get('/', 'SchoolController@schoolPayment')->name('schoolPayment');					
			Route::get('/getSchoolOverAllPaymentData', 'SchoolController@getSchoolOverAllPaymentData')->name('getSchoolOverAllPaymentData');			
			Route::get('/history/{school_slug}', 'SchoolController@schoolPaymentHistory')->name('schoolPaymentHistory');
			Route::get('/getSchoolPaymentHistoryData', 'SchoolController@getSchoolPaymentHistoryData')->name('getSchoolPaymentHistoryData');
			Route::get('/downloadHistoryPDF/{history_id}', 'SchoolController@downloadHistoryPDF')->name('downloadHistoryPDF');

			// Paynow
			Route::post('/paynow', 'SchoolPaymentController@paySchoolPayment')->name('paySchoolPayment');	
			Route::get('/schoolPaymentStatus', 'SchoolPaymentController@schoolPaymentStatus')->name('schoolPaymentStatus');

			// Office Staff Paynow
			Route::group(['prefix' => 'office'], function () {		
				Route::get('/', 'SchoolController@officeStaffSchoolPayment')->name('officeStaffSchoolPayment');		
				Route::post('/searchSchoolPayment', 'SchoolController@searchSchoolPayment')->name('searchSchoolPayment');	
				Route::post('/paynow', 'SchoolPaymentController@officeStaffPaySchoolPayment')->name('officeStaffPaySchoolPayment');					
			});		
		});	

		// fee details routes...
		Route::group(['prefix' => 'fee'], function () {
			// Route::get('/', 'SchoolController@school')->name('schoolList');	
			// Route::get('/getSchoolsData', 'SchoolController@getSchoolsData')->name('getSchoolsData');
			// Route::post('/activateSchool', 'SchoolController@activateSchool')->name('activateSchool');
			// Route::post('/deactivateSchool', 'SchoolController@deactivateSchool')->name('deactivateSchool');	
			// Route::post('/deleteSchool', 'SchoolController@deleteSchool')->name('deleteSchool');	

			// add school fee routes
			Route::get('/create', 'SchoolController@addSchoolFeeDetails')->name('addSchoolFeeDetails');			
			Route::post('/store', 'SchoolController@storeSchoolFeeDetails')->name('storeSchoolFeeDetails');	

			// edit school fee routes	
			Route::post('/update', 'SchoolController@updateSchoolFeeDetails')->name('updateSchoolFeeDetails');					
		});							
	});

	// customer care routes...
	Route::group(['prefix' => 'customercare'], function () {
		Route::get('/', 'CustomerCareController@customerCareList')->name('customerCareList');	
		Route::post('/store', 'CustomerCareController@storeNewIssue')->name('storeNewIssue');
		Route::get('/track/{track_id}', 'CustomerCareController@getCustomerCareDetails')->name('getCustomerCareDetails');	
		Route::post('/check', 'CustomerCareController@checkTrackID')->name('checkTrackID');							
		Route::post('/reply/issue', 'CustomerCareController@replyIssue')->name('replyIssue');
	});	

	// service document routes...
	Route::group(['prefix' => 'service'], function () {
		Route::get('/', 'ServiceDocumentController@serviceDocumentList')->name('serviceDocumentList');	
		Route::get('/getServiceData', 'ServiceDocumentController@getServiceData')->name('getServiceData');	
		Route::post('/post', 'ServiceDocumentController@serviceDocumentCreate')->name('serviceDocumentCreate');	
		Route::post('/delete', 'ServiceDocumentController@deleteServiceDocument')->name('deleteServiceDocument');	
	});		
});
