<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Client;
use Illuminate\Support\Facades\Auth;
use \App\Http\Controllers\SaleMan\TaskController;
use \App\Http\Controllers\admin\AuthController;
use \App\Http\Controllers\admin\ServiceController;
use \App\Http\Controllers\admin\StaffController;
use \App\Http\Controllers\SaleMan\ListOrderController;
use \App\Http\Controllers\teleSale\TeleBillController;
use \App\Http\Controllers\Woker\listWorkerController;
use \App\Http\Controllers\Woker\StatisticalController;
use \App\Http\Controllers\Woker\HistoryController;
use \App\Http\Controllers\teleSale\ListBillController;
use \App\Http\Controllers\Woker\TaskWorkerController;
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
// quan ly thong tin tho
Route::get('testStaff',[listWorkerController::class,'index'])->name('worker.index');
Route::post('addWorker',[listWorkerController::class,'store']);
Route::put('updateWorker/{id}',[listWorkerController::class,'update']);
Route::get('deleteWorker/{id}',[ListOrderController::class,'destroy']);
//thong ke cong viec cua tho

//lich su quan ly tho
Route::get('testHistory',[HistoryController::class,'index']);
Route::get('testStaff',[listWorkerController::class,'index'])->name('worker.index');
Route::post('addWorker',[listWorkerController::class,'store']);
Route::put('updateWorker/{id}',[listWorkerController::class,'update']);
Route::get('deleteWorker/{id}',[ListOrderController::class,'destroy']);
Route::get('statisticalWorker',[StatisticalController::class,'index']);
///////////////////////////////////////////////////////

Route::get('test',[\App\Http\Controllers\admin\BillController::class,'index']);




Route::get('cartTeleProduct/{id}',[TeleBillController::class,'AddCartProduct']);
Route::get('deleteTeleSaleCartProduct/{id}',[TeleBillController::class,'deleteCartProduct']);


Route::get('viewListBill',[ListBillController::class,'index']);
Route::get('viewTeleService',[TeleBillController::class,'listService']);
Route::post('viewTeleService', [TeleBillController::class,'createBill']);

//manage worker
Route::get('viewTaskWorker',[TaskWorkerController::class,'index']);

// Route::resource('/viewListBill','teleSale\ListBillsController1');
// Route::get('viewListBill',[ListBillsController::class,'listBill']);
Route::put('/billDetail/{id}',[StaffController::class,'update'])->name('billDetail.update');
// Route::get('viewTeleService',[TeleBillController::class,'getCheckOut']);




Route::get('cartTeleService/{id}',[TeleBillController::class,'AddCartService']);
Route::get('deleteTeleSaleCartService/{id}',[TeleBillController::class,'deleteCartService']);
// demo ve tho
Route::get('viewSaleService',[ListOrderController::class,'listService']);
Route::get('cartService/{id}',[ListOrderController::class,'AddCartService']);
Route::get('deleteCartService/{id}',[ListOrderController::class,'deleteCartService']);
//Route phan quyen khong cho phep nguoi dung vao
Route::get('403', function() {
    return view('403');
})->name('403');
//login
Route::get('login',[AuthController::class,'getFormLogin'])->name('login');
Route::post('login',[AuthController::class,'submitLogin']);
//logout
Route::get('logout',[AuthController::class,'logout'])->name('logout');
//----------------------------------------------------------
// user phai dang nhap vao moi co the truy cap vao cac trang   , 'middleware' => ['auth']
Route::group(['prefix' => 'admin'],function(){
    // garage owner
    
    Route::resource('/managerproducts','Admin\managerproducts');
    Route::resource('/overview','Admin\OverviewController');
    Route::resource('/services','Admin\ServicesController');
    Route::resource('/discount','Admin\DiscountsManagerController');
    // Route::get('listCustomer',function (){
    //     return view('layouts.admin.listCustomer');
    // });
    // Route::get('listOrderService',function (){
    //     return view('layouts.admin.listOderService');
    // });
    // Route::get('listRevenue',function (){
    //     return view('layouts.admin.listRevenue');
    // });
    // Route::get('reportStaff',function (){
    //     return view('layouts.admin.reportStaff');
    // });

    Route::get('viewUser',[AuthController::class,'index'])->name('user.index');
    Route::get('addProduct',function (){
        return view('layouts.admin.updateProduct');
    });
    Route::get('feedBack',function (){
        return view('layouts.admin.feedBack');
    });
    Route::get('listStaff',function (){
        return view('layouts.admin.listRepairStaff');
    });
    
    Route::get('listOrder',function (){
        return view('layouts.admin.listOder');
    });
    Route::get('reportStaff1',function (){
        return view('layouts.admin.reportStaff');
    });
    Route::get('listOrderProduct',function (){
       return view('layouts.admin.listOderProduct');
    });
//admin


//repair staff
    Route::get('/viewStaff',[StaffController::class,'index'])->name('staff.index')->middleware('permission.checker:superAdmin|admin');
    Route::post('/addStaff',[StaffController::class,'store'])->name('staff.store')->middleware('permission.checker:superAdmin|admin');
    Route::put('/staff/{id}',[StaffController::class,'update'])->name('staff.update')->middleware('permission.checker:superAdmin|admin');
    Route::get('staffDelete/{id}',[StaffController::class,'destroy'])->name('staff.delete')->middleware('permission.checker:superAdmin|admin');
    Route::get('/reportStaff',[StaffController::class,'reportStaff'])->name('staff.report')->middleware('permission.checker:superAdmin|admin');
//service
    Route::get('/viewService',[ServiceController::class,'index'])->name('service.index')->middleware('permission.checker:superAdmin|admin');
    Route::post('/addService',[ServiceController::class,'store'])->name('service.store')->middleware('permission.checker:superAdmin|admin');
    Route::get('/serviceEdit/{id}',[ServiceController::class,'edit']);
    Route::put('/serviceUpdate/{id}',[ServiceController::class,'update'])->name('service.update')->middleware('permission.checker:superAdmin|admin');
    Route::get('serviceDelete/{id}',[ServiceController::class,'destroy'])->name('service.delete')->middleware('permission.checker:superAdmin|admin');
    Route::get('search',[ServiceController::class,'action'])->name('service.action')->middleware('permission.checker:superAdmin|admin');

//customer
    Route::get('viewCustomer',[CustomerController::class,'index'])->name('customer.index')->middleware('permission.checker:superAdmin|admin');

});
Route::group(['prefix' => 'teleSale', 'middleware' => ['auth']],function (){
    // teleSale
    Route::get('/billTeleSale',function (){
        return view('layouts.teleSales.billTeleSales');
    });
    Route::get('/customerTeleSale',function (){
        return view('layouts.teleSales.customerTeleSales');
    });
    Route::get('updateBillTeleSale',function (){
        return view('layouts.teleSales.updateBillTeleSales');
    });
//end teleSale
});
Route::group(['prefix' => 'repairManager', 'middleware' => ['auth']],function (){
    //repairManager
    Route::get('listBillStaff',function (){
        return view('layouts.manageStaff.listBillStaff');
    });
    Route::get('historyFixStaff',function (){
        return view('layouts.manageStaff.historyFixStaff');
    });
    Route::get('listTaskStaff',function (){
        return view('layouts.manageStaff.listTaskStaff');
    });
    Route::get('taskStaff',function (){
        return view('layouts.manageStaff.taskStaff');
    });


//
// end repairManager
});

//bill and orderProduct
   
//repair staff
    Route::get('/viewStaff',[StaffController::class,'index'])->name('staff.index');
    Route::post('/addStaff',[StaffController::class,'store'])->name('staff.store');
    Route::put('/staff/{id}',[StaffController::class,'update'])->name('staff.update');
    Route::get('staffDelete/{id}',[StaffController::class,'destroy'])->name('staff.delete');
    Route::get('/reportStaff',[StaffController::class,'reportStaff'])->name('staff.report');
//service
    Route::get('/viewService',[ServiceController::class,'index'])->name('service.index');
    Route::post('/addService',[ServiceController::class,'store'])->name('service.store');
    Route::get('/serviceEdit/{id}',[ServiceController::class,'edit']);
    Route::put('/serviceUpdate/{id}',[ServiceController::class,'update'])->name('service.update');
    Route::get('serviceDelete/{id}',[ServiceController::class,'destroy'])->name('service.delete');
    Route::get('search',[ServiceController::class,'action'])->name('service.action');

//customer
    // Route::get('viewCustomer',[CustomerController::class,'index'])->name('customer.index');




//

Route::resource('/homepage','Client\homepagecontroller');
Route::resource('/shophome','Client\StoreController');
Route::resource('/checkout','Client\CheckoutController');

Route::resource('/shoppingcart','Client\ShoppingCartController');
Route::resource('/wishlist','Client\WishListController');
Route::resource('/productlist','Client\productlistController');
Route::resource('/productdetail','Client\productdetailController');
Route::resource('/testapi','Client\testController');
Route::resource('/complete','Client\completeBillController');


Route::get('/home', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('home');

// Route::get('/product/{slug}','Client\Detailscomponet') ;

