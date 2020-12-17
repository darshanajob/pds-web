<?php
use Illuminate\Support\Facades\Route;
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
Route::group([
    'prefix' => '{locale}',
    'where' => ['locale' => '[a-zA-Z]{2}'],
    'middleware' => 'setlocale'], function() {

		Route::get('/', function () {
			return view('welcome');
		})->name('welcome');

        Auth::routes();

        Route::get('/home', 'HomeController@index')->name('home');

       // Route::get('/gallery', 'publicImage@index')->name('gallery');

          Route::resource('/gallery', 'publicImage');

       // Route::get('/galleryone/{h}', 'publicImage@show')->name('galleryone');




		#Admin links
		Route::get('upload', function () {
			return view('admin/upload');
		})->name('upload');

	/*	Route::get('adminhome', function () {
			return view('admin/adminHome');
		})->name('adminhome');
        */
		Route::get('welcome', function () {
			return view('welcome');
		})->name('welcome');

		Route::get('s/waterSupply', function () {
			return view('services/water_supply');
		})->name('s/waterSupply');

		Route::get('s/waterBowser', function () {
			return view('services/water_bowser');
		})->name('s/waterBowser');

		Route::get('s/building', function () {
			return view('services/building');
		})->name('s/building');

		Route::get('s/landBlock', function () {
			return view('services/landblock');
		})->name('s/landBlock');

		Route::get('s/roadExcavation', function () {
			return view('services/road_excav');
		})->name('s/roadExcavation');

		Route::get('s/cutTree', function () {
			return view('services/tree');
		})->name('s/cutTree');

		Route::get('s/cutTree_apply', function () {
			return view('services/tree_form');
		})->name('s/cutTree_apply');

		Route::get('s/tradeLicense', function () {
			return view('services/trade_license');
		})->name('s/tradeLicense');

		Route::get('s/envirProtect', function () {
			return view('services/envir_protect');
		})->name('s/envirProtect');

		Route::get('s/hirePlayground', function () {
			return view('services/hire_ground');
		})->name('s/hirePlayground');

		Route::get('s/hireHall', function () {
			return view('services/hire_hall');
		})->name('s/hireHall');

		Route::get('s/garbageTransport', function () {
			return view('services/garbage_transport');
		})->name('s/garbageTransport');

		Route::get('s/garbageDisposal', function () {
			return view('services/garbage_disposal');
		})->name('s/garbageDisposal');

		Route::get('s/threewheelReg', function () {
			return view('services/threewheel_reg');
		})->name('s/threewheelReg');

		Route::get('s/ayurvedaMedical', function () {
			return view('services/ayurveda');
		})->name('s/ayurvedaMedical');

		Route::get('s/streetLight', function () {
			return view('services/street_light');
		})->name('s/streetLight');

		Route::get('project', function () {
			return view('projects');
		})->name('project');

		Route::get('d/application', function () {
			return view('downloads/download_appli');
		})->name('d/application');

		Route::get('d/gazette', function () {
			return view('downloads/download_gazet');
		})->name('d/gazette');

		Route::get('t/supplierReg', function () {
			return view('tenders/sup_reg');
		})->name('t/supplierReg');

		Route::get('t/tenderCall', function () {
			return view('tenders/tender_call');
		})->name('t/tenderCall');

		Route::get('t/bidding', function () {
			return view('tenders/biding');
		})->name('t/bidding');



		Route::get('c/complain', function () {
			return view('complains/complain_make');
		})->name('c/complain');

		Route::get('c/viewComplain', function () {
			return view('complains/complain_view');
		})->name('c/viewComplain');
    });

  Route::get('/', function () {
    return redirect(app()->getLocale());
});

Route::group(['middleware' => ['officer']], function () {

    Route::resource('/officerh', 'CofficerController');
    Route::resource('/officerWaterSup', 'officerApprovalWaterSupplyController');
    Route::resource('/officerBusApp', 'officerBussinessperappControoller');
    Route::resource('/officerBuildApp', 'officerBuildingApproveController');
    Route::resource('/officerTreeCutA', 'officercutTreeController');
    Route::resource('/officerEnvApp', 'officerEnavironprotectAppController');
});



Route::group(['middleware' => ['admin']], function () {
    Route::resource('/adminhome', 'adminUserController');
    Route::resource('/gramasewaka', 'gsController');
    Route::resource('/imageGallery', 'imageController');
    Route::resource('/news', 'newsController');
     Route::resource('/imgsss', 'imageController');
     Route::resource('/member', 'memberController');
     Route::resource('/officer', 'officerController');
});


	#route to download file
	Route::get( '/download/{filename}', 'fileHandleController@download')->name('download');


