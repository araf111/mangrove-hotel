<?php

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
 */
Route::prefix('admin')->name('admin.')->group(function () {
	Route::get('/', 'Admin\DashboardController@index')->name('adminhome');
	Route::get('dashboard', 'Admin\DashboardController@index')->name('dashboard');
	Route::get('login', 'Admin\AuthController@index')->name('login');
	Route::post('login', 'Admin\AuthController@authenticate');
	Route::get('logout', 'Admin\AuthController@logout')->name('logout');

	Route::get('inquiry', 'Admin\InquiryController@index')->name('inquiry');
	Route::post('inquiry/followup', 'Admin\InquiryController@followup')->name('inquiry.followup');

	Route::post('/investor-share', 'Admin\InvestorController@investorShareStore')->name('investors.share.store');
	Route::post('/investor-share-payment', 'Admin\InvestorController@investorSharePayment')->name('investors.share.payment');
	Route::get('/investor-share/{investorId}', 'Admin\InvestorController@investorShare')->name('investor.share');
	Route::get('/generateInvoice/{id}', 'Admin\InvestorController@generateinvoicePDF')->name('investor.generateInvoice');
	Route::resource('investors', 'Admin\InvestorController');


    Route::post('/invoice-share', 'Admin\InvoiceController@invoiceShareStore')->name('invoice.share.store');
    Route::post('/invoice-share-payment', 'Admin\InvoiceController@invoiceSharePayment')->name('invoice.share.payment');
    Route::get('/generatePDF/{id}', 'Admin\InvoiceController@generatePDF')->name('invoice.generatePDF');
    Route::resource('invoice', 'Admin\InvoiceController');


	Route::get('/profile/{investorId}/share', 'Admin\DashboardController@profileView')->name('profile.view');
	Route::get('/investor-list', 'Admin\DashboardController@investorList')->name('investor.list');

	//custom route
	Route::get('ajaxRequest', 'Admin\AjaxRequestController@find_shares')->name('ajaxRequest');
	Route::get('findemi', 'Admin\AjaxRequestController@find_emi_with_shareid')->name('findemi');
	Route::post('homeSectionUpdate', 'Admin\AjaxRequestController@homeSectionUpdate')->name('homeSectionUpdate');
	Route::post('homeTextUpdate', 'Admin\AjaxRequestController@homeTextUpdate')->name('homeTextUpdate');
	Route::put('homeTextUpdate', 'Admin\AjaxRequestController@homeTextUpdate')->name('homeTextUpdate');

	Route::prefix('settings')->group(function () {
		Route::resource('users', 'Admin\UserController');
		Route::resource('roles', 'Admin\RoleController');
		Route::resource('departments', 'Admin\DepartmentController');
		Route::resource('designations', 'Admin\DesignationController');
		Route::get('designations/get_by_department/{department_id}', 'Admin\DesignationController@get_by_department')->name('designations.get_by_department');
		Route::resource('projects', 'Admin\ProjectController');
		Route::resource('shares', 'Admin\ShareController');
	});

	Route::prefix('cms')->name('cms.')->group(function () {
		Route::resource('publications', 'Admin\PublicationController');
		Route::resource('investments', 'Admin\InvestmentController');
		Route::resource('investments-instruction', 'Admin\InvestmentInstructionController');
		Route::get('homesection/create', 'Admin\CmsFrontController@createHomesection')->name('homesection');
		Route::get('create-overview/create', 'Admin\CmsFrontController@createOverview')->name('overview');
		Route::get('create-modernliving/create', 'Admin\CmsFrontController@modernLiving')->name('modernliving');
		Route::get('create-gallery/create', 'Admin\CmsFrontController@gallery')->name('gallery');
		Route::get('gallery/remove/{id}', 'Admin\CmsFrontController@removeGallery')->name('removeGallery');
        Route::get('gallery/list', 'Admin\CmsFrontController@galleryList')->name('galleryList');
		Route::get('create-map/create', 'Admin\CmsFrontController@map')->name('map');
		Route::get('create-login/create', 'Admin\CmsFrontController@login')->name('login');
        Route::get('create-aboutus/create', 'Admin\CmsFrontController@aboutUs')->name('aboutUs');
        Route::get('create-findajob/create', 'Admin\CmsFrontController@findJobs')->name('findJobsList');

        Route::get('create-publication/create', 'Admin\CmsFrontController@publications')->name('publications');
        Route::get('publication/remove/{id}', 'Admin\CmsFrontController@removePublications')->name('removePublications');
        Route::get('publication/list', 'Admin\CmsFrontController@publicationList')->name('publicationList');

		Route::resource('cmsfront', 'Admin\CmsFrontController');

		Route::resource('footer', 'Admin\ManageFooterController');
	});
});
