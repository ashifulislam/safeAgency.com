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
use App\Http\Controllers\NOAPI\CustomerController;
use App\Http\Controllers\SslCommerzPaymentController;
use RealRashid\SweetAlert\Facades\Alert;
//
//Route::get('/', function () {
//
//    Alert::success('Success Title', 'Success Message');
//
//    return view('welcome');
//});
Route::get('/employerProfile','Employer\AddEmployerController@showEmployer');
Route::post('/addEmployerOperation','Employer\AddEmployerController@addEmployer');
Route::post('/addEmployerOperation','Employer\AddEmployerController@addEmployer');
Route::get('/candidateProfile','Candidate\AddCandidateController@showCandidate')->name('candidate.profile');
Route::post('/addCandidateOperation','Candidate\AddCandidateController@addCandidate');
Route::get('/showEmployerList','EmployerController@showEmployerList');

//Route::get('/jobPost','EmployerController@createJobPost')->name('jobPost');
Route::get('/show','EmployerController@showEmployerList')->name('employer.show');
Route::get('/showCandidate','CandidateController@showCandidate')->name('candidate.show');
Route::get('/updateEmployerProfile/{id}','EmployerController@updateEmployer');
Route::post('/edit/{id}','EmployerController@editEmployer');
Route::post('/editCandidate/{id}','CandidateController@editCandidate');
Route::get('/deleteEmployerProfile/{id}','EmployerController@deleteEmployer');
Route::get('/deleteCandidateProfile/{id}','CandidateController@deleteCandidate');
Route::get('/showForUpdate','CandidateController@showCandidateForUpdate')->name('update.show');
Route::get('/updateCandidateProfile/{id}','CandidateController@updateCandidate');

Route::get('/viewSingleInfo/{id}','EmployerController@showSingleInfo');
Route::get('/viewSingleInfoCandidate/{id}','AdminController@showSingleInfo');
Route::get('/jobCategory','EmployerController@createJobCategory')->name('employer.category');
Route::post('/addJobCategory','EmployerController@addJobCategory');
Route::resource('jobPost','JobPostController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('user/logout', 'Auth\LoginController@UserLogout')->name('employer.logout');
Route::get('/prince','EmployerController@show')->name('employer.prince');
Route::group(['prefix'=>'employer'],function(){

//    Route::get('/','EmployerController@index')->name('employer.home');
    Route::get('/login', 'Employer\LoginController@showLoginForm')->name('employer.login');
    Route::post('/login', 'Employer\LoginController@login')->name('employer.login.submit');
    Route::get('logout', 'Employer\LoginController@logout')->name('employer.logout');
});
Route::group(['prefix'=>'candidate'],function(){

//    Route::get('/','EmployerController@index')->name('employer.home');

    Route::get('/login', 'Candidate\LoginController@showLoginForm')->name('candidate.login');
    Route::get('/register', 'Candidate\RegisterController@showRegForm')->name('candidate.register');
    Route::post('/register','Candidate\RegisterController@register')->name('candidate.register.submit');

    Route::post('/login', 'Candidate\LoginController@login')->name('candidate.login.submit');
    Route::get('logout', 'Candidate\LoginController@logout')->name('candidate.logout');
});
Route::group(['prefix'=>'admin'],function(){

//    Route::get('/','EmployerController@index')->name('employer.home');
    Route::get('/login', 'admin\LoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'admin\LoginController@login')->name('admin.login.submit');
    Route::get('logout', 'admin\LoginController@logout')->name('admin.logout');
});
Route::get('/homePage','candidate\HomeController@showHome')->name('home.page');
Route::get('/category/posts/{id}','candidate\HomeController@categoryWiseJobPosts')->name('category.jobPosts');
Route::post('/job/search','candidate\HomeController@searchjob')->name('job.search');
Route::get('/postDetails/{id}','candidate\HomeController@showJobDetails')->name('post.details');
//Route::get('/angular',function(){
//
//});
Route::get('/candidateHome','CandidateController@candidateHome')->name('candidate.home');
Route::get('/adminHome','AdminController@adminHome')->name('admin.home');
Route::get('/showCandidates','AdminController@showCandidates')->name('admin.show');
Route::post('/subscriber','SubscriberController@store')->name('subscriber.store');

Route::get('/userSubscriber','admin\SubscriberController@showSubscribers')->name('subscriber.show');

Route::get('/deleteSubscriber/{id}','admin\SubscriberController@delete')->name('subscriber.delete');

Route::get('/jobApplication/{id}','CandidateController@jobApplication')->name('application.show');

Route::post('/jobApplication','candidate\jobApplyController@jobApplied')->name('application.store');
Route::get('/jobConfirmation','CandidateController@jobConfirmation')->name('application.confirm');
//Route::get('/jobConfirmationUpdate','CandidateController@jobConfirmationUpdate')->name('application.confirmUpdate');
Route::get('/pending/posts','AdminController@showPendingPosts')->name('admin.post.showPending');
Route::get('/approve/posts','AdminController@showApprovedPosts')->name('admin.post.showApprove');

Route::put('/pending/posts/{id}','AdminController@updatePendingPostStatus')->name('admin.post.update');
Route::delete('/approve/posts/{id}','AdminController@deletePostStatus')->name('admin.post.delete');
Route::get('/pendingEmployer/posts','EmployerController@showPendingJobApplication')->name('employer.jobApplication.showPending');
Route::put('/pendingEmployer/posts/{id}','EmployerController@updatePendingJobApplicationStatus')->name('employer.jobApplication.update');

Route::get('/pendingAgent','EmployerController@showPendingAgentRequest')->name('employer.pendingAgent');
Route::get('/agentRegReq','AdminController@showAgentRegReq')->name('admin.post.showAgentReg');
Route::get('/approveRegReq/{id}','AdminController@approveRegReq')->name('admin.approveRegReq');
Route::get('/rejectRegReq/{id}','AdminController@rejectRegReq')->name('admin.rejectRegReq');
Route::get('/regStatus','LocalAgentController@regStatus')->name('registrationStatus');


Route::prefix('agent')->group(function(){
    Route::get('/','LocalAgentController@index')->name('localAgent.dashboard');
    Route::get('/login','LocalAgent\LocalAgentLoginController@showLoginForm')->name('localAgent.login');
    Route::post('/login','LocalAgent\LocalAgentLoginController@login')->name('localAgent.login.submit');
    Route::get('/register','LocalAgent\LocalAgentRegisterController@showregistrationForm')->name('localAgent.register');
    Route::post('/register','LocalAgent\LocalAgentRegisterController@register')->name('localAgent.register.submit');
    Route::get('/logout','LocalAgent\LocalAgentLoginController@logout')->name('localAgent.logout');
});


Route::get('/display', 'HomeController@display')->name('display');

//Route::resource('customer','NOAPI\CustomerController');
Route::resource('agents','NOAPI\AgentsController');





Route::get('chat','localAgent\ChatController@chat')->name('chat');

Route::get('seeEmployers','LocalAgentController@seeEmployers')->name('seeEmployers');

Route::get('seeRequests','LocalAgentController@seeRequests')->name('seeRequests');

//Route::get('chatView','EmployerController@chat')->name('chatView');

Route::get('chatView','CandidateController@chat')->name('chatView');
Route::post('send','localAgent\ChatController@send');

//Route::post('sendToEmployer','EmployerController@send');
Route::post('sendToCandidate','CandidateController@send');
//Route::post('sendUpdate','EmployerController@send');
Route::post('sendRequestToEmployer/{emp_id}','LocalAgentController@sendRequestToEmployer')->name('sendRequest');

Route::post('approveAgentRequest/{agent_id}','EmployerController@approveRequest')->name('approveRequest');

Route::post('rejectAgentRequest/{agent_id}','EmployerController@rejectRequest')->name('rejectRequest');

Route::get('showAllAgent/{agent_id}','CandidateController@showAllAgent')->name('showAllAgent');

Route::get('packageList/{agent_id}', 'CandidateController@showPackageList')->name('showPackageList');

Route::get('partialPackage/{agent_id}', 'CandidateController@showPartialPackageList')->name('showPartialPackage');

Route::resource('serviceTypes','localAgent\ServiceTypeController');

Route::resource('postService','localAgent\ServicePostController');

Route::get('seeAgentRequestsStatus','candidate\CandidateRequestsController@seeRequests')->name('agentRequestsStatus');

Route::get('seeCandidatesRequestLists','LocalAgentController@seeCandidateRequests')->name('candidateRequests');
Route::post('sendHireRequest/{agent_id}/{package_type_id}','candidate\CandidateRequestsController@sendHireRequest')->name('sendHireRequest');


Route::post('approveCandidates/{candidate_id}','LocalAgentController@approveCandidates')->name('approveCandidates');
Route::post('rejectCandidates/{candidate_id}','LocalAgentController@rejectCandidates')->name('rejectCandidates');
Route::get('approvedCandidates','LocalAgentController@approvedCandidates')->name('approvedCandidates');
Route::get('requiredTasks','LocalAgentController@requiredTasks')->name('requiredTasks');

//Route::get('chatWithCandidate','localAgent\ChatController@chatWithCandidate')->name('chatWithCandidate');
Route::get('visa_application/{candidate_name}/{candidate_email}/{candidate_id}','localAgentController@visa_application')->name('visa_application');

Route::resource('packageType','localAgent\PackageTypeController');
Route::resource('visaApplication','localAgent\VisaApplicationController');

Route::get('service_detail','CandidateController@service_detail')->name('service_details');
Route::get('print_visa','CandidateController@print_visa')->name('print_visa');


Route::get('/example1', [SslCommerzPaymentController::class, 'exampleEasyCheckout']);
Route::get('/example2/{demands}/{package_type}/{agent_id}/{package_type_id}', [SslCommerzPaymentController::class, 'exampleHostedCheckout'])->name('payment');

Route::post('/pay', [SslCommerzPaymentController::class, 'index'])->name('pay');
Route::post('/pay-via-ajax', [SslCommerzPaymentController::class, 'payViaAjax'])->name('payViaAjax');

Route::post('/success', [SslCommerzPaymentController::class, 'success']);
Route::post('/fail', [SslCommerzPaymentController::class, 'fail']);
Route::post('/cancel', [SslCommerzPaymentController::class, 'cancel']);

Route::post('/ipn', [SslCommerzPaymentController::class, 'ipn']);
