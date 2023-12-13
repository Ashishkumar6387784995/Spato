<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\loginController;

use App\Http\Controllers\api\apiAuthController;
use App\Http\Controllers\api\dashboardController;
use App\Http\Controllers\api\staticPageController;
use App\Http\Controllers\api\ProductController;
use App\Http\Controllers\api\CartController;
use App\Http\Controllers\api\tryController;
use App\Http\Controllers\api\frontEnd\webController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/home', [webController::class, 'home']);


Route::get('/register', [loginController::class, 'registerForm']);
Route::post('/register', [loginController::class, 'submitRegistration']);
Route::get('refresh_captcha', [loginController::class, 'refreshCaptcha']);
Route::get('login',[loginController::class,'loginform']);
Route::post('login',[loginController::class,'loginCheck']);
Route::post('forgetPassword',[loginController::class,'forgetPassword']);
Route::get('password/reset/{token}',[loginController::class,'passwordResetFrom']);
Route::post('password/reset',[loginController::class,'passwordReset']);
Route::post('logout',[loginController::class,'logout']);

Route::get('home1',[loginController::class,'home']);

Route::get('/admin_dashboard', [dashboardController::class, 'admin_Dashboard']);


// Route::get('login',[authController::class,'loginform']);
// Route::post('login',[authController::class,'loginCheck']);
// Route::get('home',[authController::class,'home']);
// Route::get('logout',[authController::class,'logout']); 

Route::get('contact',[staticPageController::class,'contact']);
Route::get('about',[staticPageController::class,'about']);
Route::get('agb',[staticPageController::class,'agb']);
Route::get('cancelationPolicy',[staticPageController::class,'cancelationPolicy']);
Route::get('productListing',[productController::class,'productListing']);
Route::get('addProduct',[productController::class,'addProduct']);
Route::get('editProduct',[productController::class,'editProduct']);

Route::middleware('api.token')->group(function () {
    // Route::get('/protected-endpoint', [ApiController::class, 'protectedEndpoint']);
    // Route::get('contact',[staticPageController::class,'contact']);
    // Route::get('about',[staticPageController::class,'about']);
});

// staticPages

// Route::get('contact',[staticPageController::class,'contact']);
// Route::get('about',[staticPageController::class,'about']);


// Products
Route::get('/products', [ProductController::class, 'productList']);
Route::post('/products', [ProductController::class, 'addproductList']);
Route::get('/addProducts', [ProductController::class, 'addProduct']);

// Cart
Route::post('/cartProducts', [CartController::class, 'cartProductList']);
Route::post('/updateCartProducts/{id}', [CartController::class, 'UpdateCartProductList']);
Route::get('/deleteCartProducts/{id}', [CartController::class, 'deleteCartProductList']);


// Check Out
Route::get('/checkOut/{email}', [CartController::class, 'checkOutCartProduct']);


// Notification Well

Route::get('/nav', [tryController::class, 'nav']);


// Route::group(['middleware' => 'api'], function () {

//     Route::get('login1',[authController::class,'loginform']);
//     Route::post('/login1', [apiAuthController::class, 'login']);
//     Route::middleware([apiAuthController::class])->group(function () {
//         // Your protected routes go here
//     });
// });




