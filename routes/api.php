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
use App\Http\Controllers\api\OfferController;
use App\Http\Controllers\api\PoolBuilder;
use App\Http\Controllers\api\AssignmentController;
use App\Http\Controllers\api\DeliveryNotesController;
use App\Http\Controllers\api\billsController;
use App\Http\Controllers\api\creditsController;
use App\Http\Controllers\api\claims_manager_Controller;
use App\Http\Controllers\api\SuppliersController;
use App\Http\Controllers\api\ContactController;
use App\Http\Controllers\api\ConnectionsController;
use App\Http\Controllers\api\StatisticsController;
use App\Http\Controllers\api\categoriesController;
use App\Http\Controllers\api\quatationController;

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



Route::get('/register', [loginController::class, 'registerForm']);
Route::post('/register', [loginController::class, 'submitRegistration']);
Route::get('refresh_captcha', [loginController::class, 'refreshCaptcha']);
// Route::get('login',[loginController::class,'loginform']);
Route::post('login', [loginController::class, 'index']);
Route::post('forgetPassword', [loginController::class, 'forgetPassword']);
Route::get('password/reset/{token}', [loginController::class, 'passwordResetFrom']);
Route::post('password/reset', [loginController::class, 'passwordReset']);
Route::get('/pagenotfound', [loginController::class, 'pagenotfound'])->name('notfound');
// Route::post('logoutApi',[loginController::class,'logoutApi']);
// Route::get('logout',[loginController::class,'logout']);

Route::get('userDetails', [loginController::class, 'userDetails']);
Route::get('B2CUserDetails', [loginController::class, 'B2CUserDetails']);
Route::get('selectedB2CUserDetails/{id}', [loginController::class, 'selectedB2CUserDetails']);





Route::get('/home', [webController::class, 'home']);
Route::post('/cart/addApi', [CartController::class, 'addToCart']);
Route::get('/cart/getCartItemsApi', [CartController::class, 'getCartItems']);
Route::post('/cart/updateQuanityApi', [CartController::class, 'updateQuantityOfItems']);
Route::delete('/cart/deleteCartProductsApi/{product_id}', [CartController::class, 'deleteCartProducts']);
Route::get('/viewCart', [CartController::class, 'viewCart']);
Route::get('checkout', [CartController::class, 'checkout']);
Route::get('quotes/{product_id}', [CartController::class, 'quotesForm']);
Route::post('submitQuotes', [CartController::class, 'SubmitQuotes']);




Route::get('contact', [staticPageController::class, 'contact']);
Route::post('contactSubmit', [staticPageController::class, 'contactSubmit']);
Route::get('about', [staticPageController::class, 'about']);
Route::get('agb', [staticPageController::class, 'agb']);
Route::get('cancelationPolicy', [staticPageController::class, 'cancelationPolicy']);


// Pool Builder For Front End
Route::get('poolBuilderRegister', [PoolBuilder::class, 'poolBuilderRegister']);
Route::post('poolBuilderRegister', [PoolBuilder::class, 'submitpoolBuilderRegistration']);
Route::get('poolBuilderProfile', [PoolBuilder::class, 'poolBuilderProfile']);
Route::get('poolBuilderClaim&Request', [PoolBuilder::class, 'poolBuilderClaim']);



Route::middleware('api.auth')->group(function () {

  Route::get('/home1', [webController::class, 'home1']);

  // Offers for Admin
  Route::get('offerListingApi', [OfferController::class, 'offerListing']);
  Route::post('addOfferApi', [OfferController::class, 'addOfferApi']);


  // items for checkout with auth.
  Route::get('cart/checkoutItemsApiAuthentic', [CartController::class, 'getCartItems']);



   // Quatation submit
   Route::post('submitQuotes', [CartController::class, 'SubmitQuotes']);


   // B2C User Profile
   Route::get('profileViewApi', [webController::class, 'profileViewApi']);
   Route::post('addPermanentProfileApi', [webController::class, 'addPermanentProfileApi']);
   Route::post('changePasswordApi', [webController::class, 'changePasswordApi']);
   Route::post('saveTempAddressApi', [webController::class, 'saveTempAddressApi']);



   
  Route::post('logoutApi', [loginController::class, 'logoutApi']);
  // Route::get('logout',[loginController::class,'logout']);

  
});

Route::get('/productList', [tryController::class, 'productListing']);




Route::get('/admin_dashboard/{role}', [dashboardController::class, 'admin_Dashboard']);

// Offers for Admin
Route::view('offerListing/{role}', 'admin_theme/pages/offers/offerList');
Route::get('addOffer/{role}', [OfferController::class, 'addOffer']);
Route::get('editOffer/{id}{role}', [OfferController::class, 'editOffer']);

Route::get('OffersPdfdownload/{offerId}', [OfferController::class, 'downloadPdf']);
Route::post('/sendOfferMailsToB2C', [OfferController::class, 'sendOfferMailsToB2C']);





// Categories for Admin
Route::get('categoriesListingApi', [categoriesController::class, 'categoriesListing']);
Route::view('categoriesListing/{role}', 'admin_theme/pages/categories/categoriesList');
Route::get('addCategories/{role}', [categoriesController::class, 'addCategories']);
Route::post('addCategoriesApi', [categoriesController::class, 'addCategoriesApi']);
Route::get('editProduct/{id}', [categoriesController::class, 'editProduct']);
Route::post('deleteCategory/{id}', [categoriesController::class, 'deleteCategory']);



// products for Admin
Route::get('productListingApi', [productController::class, 'productListing']);
Route::view('productListing/{role}', 'admin_theme/pages/products/productsList');
Route::get('addProduct/{role}', [productController::class, 'addProduct']);
Route::post('addProduct', [productController::class, 'addproductList']);
Route::get('editProduct/{id}', [productController::class, 'editProduct']);
Route::get('deleteProduct/{id}', [productController::class, 'deleteProduct']);

// products for Admin
Route::get('quatationListingApi', [quatationController::class, 'quatationListingApi']);
Route::get('quatationListing/{role}', [quatationController::class, 'quatationList']);



// // Offers for Admin
// Route::get('offerListingApi',[OfferController::class,'offerListing']);
// Route::view('offerListing/{role}', 'admin_theme/pages/offers/offerList');
// Route::get('addOffer/{role}',[OfferController::class,'addOffer']);
// Route::post('addOfferApi',[OfferController::class,'addOfferApi']);
// Route::get('editOffer/{id}',[OfferController::class,'editOffer']);


// Assignment for Admin
Route::get('assignmentListingApi', [AssignmentController::class, 'AssignmentListing']);
Route::view('assignmentListing/{role}', 'admin_theme/pages/assignments/assignmentList');
Route::get('addAssignment/{role}', [AssignmentController::class, 'addAssignment']);
Route::post('addAssignmentsApi', [AssignmentController::class, 'addAssignmentsApi']);
Route::get('editAssignment/{id}', [AssignmentController::class, 'editAssignment']);




// Delivery Notes for Admin
Route::get('deliveryNotesListingApi', [DeliveryNotesController::class, 'DeliveryNotesListingApi']);
Route::view('deliveryNotesListing/{role}', 'admin_theme/pages/delivery_notes/DeliveryNotesList');
Route::get('addDeliveryNotes/{role}', [DeliveryNotesController::class, 'addDeliveryNotes']);
Route::post('addDeliveryNotesApi', [DeliveryNotesController::class, 'addDeliveryNotesApi']);
Route::get('editDeliveryNotes', [DeliveryNotesController::class, 'editDeliveryNotes']);


// Bills for Admin
Route::get('billsListingApi', [billsController::class, 'billsListingApi']);
Route::view('billsListing/{role}', 'admin_theme/pages/bills/billsList');
Route::get('addbills/{role}', [billsController::class, 'addbills']);
Route::POST('addbillsApi', [billsController::class, 'addbillsApi']);
Route::get('editbills', [billsController::class, 'editbills']);


// Credits for Admin
Route::get('creditsListingApi', [creditsController::class, 'creditListingApi']);
Route::view('creditsListing/{role}', 'admin_theme/pages/credits/creditList');
Route::get('addCredits/{role}', [creditsController::class, 'addCredits']);
Route::post('addCreditsApi', [creditsController::class, 'addCreditsApi']);
Route::get('editCredits', [creditsController::class, 'editCredits']);


// Claim Manger for Admin
// Route::get('claimsListingApi',[claims_manager_Controller::class,'claimsListing']);
Route::view('claimsListing/{role}', 'admin_theme/pages/claim_manager/claimsList');
Route::get('addClaims/{role}', [claims_manager_Controller::class, 'addCliams']);
Route::get('editClaims', [claims_manager_Controller::class, 'editCliams']);


// Contact for Admin
// Route::get('claimsListingApi',[claims_manager_Controller::class,'claimsListing']);
Route::view('contactListing/{role}', 'admin_theme/pages/contacts/ContactsList');
Route::get('addcontact/{role}', [ContactController::class, 'addContacts']);
// Route::get('editClaims',[claims_manager_Controller::class,'editCliams']);


// Suppliers for Admin
// Route::get('claimsListingApi',[claims_manager_Controller::class,'claimsListing']);
Route::view('SuppliersListing/{role}', 'admin_theme/pages/suppliers/SuppliersList');
Route::get('addSuppliers/{role}', [SuppliersController::class, 'addSuppliers']);


// Statistics for Admin
// Route::get('claimsListingApi',[claims_manager_Controller::class,'claimsListing']);
Route::view('Statistics/{role}', 'admin_theme/pages/Statistics/Statistics');
// Route::get('addSuppliers',[SuppliersController::class,'addSuppliers']);

// Connections for Admin
// Route::get('claimsListingApi',[claims_manager_Controller::class,'claimsListing']);
Route::view('connection/{role}', 'admin_theme/pages/connections/connections');
// Route::get('addSuppliers',[SuppliersController::class,'addSuppliers']);


// NewsLetter for Admin
// Route::get('claimsListingApi',[claims_manager_Controller::class,'claimsListing']);
Route::view('newsLetter/{role}', 'admin_theme/pages/newsLetter/NewsLetter');
// Route::get('addSuppliers',[SuppliersController::class,'addSuppliers']);

// Settings for Admin
// Route::get('claimsListingApi',[claims_manager_Controller::class,'claimsListing']);
Route::view('settings/{role}', 'admin_theme/pages/settings/settings');
// Route::get('addSuppliers',[SuppliersController::class,'addSuppliers']);




// Customer Address Book for B2B
// Route::get('claimsListingApi',[claims_manager_Controller::class,'claimsListing']);
Route::view('customerAddressbook{role}', 'admin_theme/pages/customerAddressbook/customerAddressbook');
// Route::get('addSuppliers',[SuppliersController::class,'addSuppliers']);








//  Account Setting for B2C users
Route::view('accountSetting', 'frontEnd/pages/setting');



// front End WebSite Pages...
Route::get('/ProductdetailPage/{product_id}/{product_category}', [webController::class, 'ProductdetailPage']);
Route::get('/ProductsByCategories/{Kategorie_Name}', [webController::class, 'ProductsByCategories']);
Route::get('/accountSetting', [webController::class, 'accountSetting']);


Route::view('productPortfolio', 'frontEnd/pages/productPortfolio');





// staticPages

// Route::get('contact',[staticPageController::class,'contact']);
// Route::get('about',[staticPageController::class,'about']);




// Cart
Route::post('/cartProducts', [CartController::class, 'cartProductList']);
Route::post('/updateCartProducts/{id}', [CartController::class, 'UpdateCartProductList']);
Route::get('/deleteCartProducts/{id}', [CartController::class, 'deleteCartProductList']);


// Check Out
Route::get('/checkOut/{email}', [CartController::class, 'checkOutCartProduct']);


// Notification Well

Route::get('/productListingNew', [tryController::class, 'productListing']);

// routes/web.php
