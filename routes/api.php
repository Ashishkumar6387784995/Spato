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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });





Route::get('/register', [loginController::class, 'registerForm']);
Route::post('/register', [loginController::class, 'submitRegistration']);
Route::get('refresh_captcha', [loginController::class, 'refreshCaptcha']);
// Route::get('login',[loginController::class,'loginform']);
Route::post('login',[loginController::class,'index']);
Route::post('forgetPassword',[loginController::class,'forgetPassword']);
Route::get('password/reset/{token}',[loginController::class,'passwordResetFrom']);
Route::post('password/reset',[loginController::class,'passwordReset']);
// Route::post('logoutApi',[loginController::class,'logoutApi']);
// Route::get('logout',[loginController::class,'logout']);

Route::get('userDetails',[loginController::class,'userDetails']);
Route::get('B2CUserDetails',[loginController::class,'B2CUserDetails']);
Route::get('selectedB2CUserDetails/{id}',[loginController::class,'selectedB2CUserDetails']);





Route::get('/home', [webController::class, 'home']);



// Route::get('login',[authController::class,'loginform']);
// Route::post('login',[authController::class,'loginCheck']);
// Route::get('home',[authController::class,'home']);
// Route::get('logout',[authController::class,'logout']); 

Route::get('contact',[staticPageController::class,'contact']);
Route::get('about',[staticPageController::class,'about']);
Route::get('agb',[staticPageController::class,'agb']);
Route::get('cancelationPolicy',[staticPageController::class,'cancelationPolicy']);


// dashboard for Admin  
// Route::get('/admin_dashboard/{role}', [dashboardController::class, 'admin_Dashboard']);


// Pool Builder For Front End
Route::get('poolBuilderRegister',[PoolBuilder::class,'poolBuilderRegister']);
Route::post('poolBuilderRegister',[PoolBuilder::class,'submitpoolBuilderRegistration']);
Route::get('poolBuilderProfile',[PoolBuilder::class,'poolBuilderProfile']);
Route::get('poolBuilderClaim&Request',[PoolBuilder::class,'poolBuilderClaim']);



Route::middleware('api.auth')->group(function () {

  // Offers for Admin
Route::get('offerListingApi',[OfferController::class,'offerListing']);


Route::post('addOfferApi',[OfferController::class,'addOfferApi']);






Route::post('logoutApi',[loginController::class,'logoutApi']);
// Route::get('logout',[loginController::class,'logout']);
});

Route::get('/productList', [tryController::class, 'productListing']);




Route::get('/admin_dashboard/{role}', [dashboardController::class, 'admin_Dashboard']);

 // Offers for Admin
Route::view('offerListing/{role}', 'admin_theme/pages/offers/offerList');
Route::get('addOffer/{role}',[OfferController::class,'addOffer']);
Route::get('editOffer/{id}',[OfferController::class,'editOffer']);

Route::get('OffersPdfdownload/{offerId}',[OfferController::class,'downloadPdf']);
Route::post('/sendOfferMailsToB2C', [OfferController::class, 'sendOfferMailsToB2C']);





  // Categories for Admin
  Route::get('productListingApi',[productController::class,'productListing']);
  Route::view('productListing', 'admin_theme/pages/products/productsList');
  Route::get('addProduct',[productController::class,'addProduct']);
  Route::post('addProduct',[productController::class,'addproductList']);
  Route::get('editProduct/{id}',[productController::class,'editProduct']);
  Route::get('deleteProduct/{id}',[productController::class,'deleteProduct']);



  // products for Admin
  Route::get('productListingApi',[productController::class,'productListing']);
  Route::view('productListing', 'admin_theme/pages/products/productsList');
  Route::get('addProduct',[productController::class,'addProduct']);
  Route::post('addProduct',[productController::class,'addproductList']);
  Route::get('editProduct/{id}',[productController::class,'editProduct']);
  Route::get('deleteProduct/{id}',[productController::class,'deleteProduct']);




// // Offers for Admin
// Route::get('offerListingApi',[OfferController::class,'offerListing']);
// Route::view('offerListing/{role}', 'admin_theme/pages/offers/offerList');
// Route::get('addOffer/{role}',[OfferController::class,'addOffer']);
// Route::post('addOfferApi',[OfferController::class,'addOfferApi']);
// Route::get('editOffer/{id}',[OfferController::class,'editOffer']);


// Assignment for Admin
Route::get('assignmentListingApi',[AssignmentController::class,'AssignmentListing']);
Route::view('assignmentListing', 'admin_theme/pages/assignments/assignmentList');
Route::get('addAssignment',[AssignmentController::class,'addAssignment']);
Route::post('addAssignmentsApi',[AssignmentController::class,'addAssignmentsApi']);
Route::get('editAssignment/{id}',[AssignmentController::class,'editAssignment']);




// Delivery Notes for Admin
Route::get('deliveryNotesListingApi',[DeliveryNotesController::class,'DeliveryNotesListingApi']);
Route::view('deliveryNotesListing', 'admin_theme/pages/delivery_notes/DeliveryNotesList');
Route::get('addDeliveryNotes',[DeliveryNotesController::class,'addDeliveryNotes']);
Route::post('addDeliveryNotesApi',[DeliveryNotesController::class,'addDeliveryNotesApi']);
Route::get('editDeliveryNotes',[DeliveryNotesController::class,'editDeliveryNotes']);


// Bills for Admin
Route::get('billsListingApi',[billsController::class,'billsListingApi']);
Route::view('billsListing', 'admin_theme/pages/bills/billsList');
Route::get('addbills',[billsController::class,'addbills']);
Route::POST('addbillsApi',[billsController::class,'addbillsApi']);
Route::get('editbills',[billsController::class,'editbills']);


// Credits for Admin
Route::get('creditsListingApi',[creditsController::class,'creditListingApi']);
Route::view('creditsListing', 'admin_theme/pages/credits/creditList');
Route::get('addCredits',[creditsController::class,'addCredits']);
Route::post('addCreditsApi',[creditsController::class,'addCreditsApi']);
Route::get('editCredits',[creditsController::class,'editCredits']);


// Claim Manger for Admin
// Route::get('claimsListingApi',[claims_manager_Controller::class,'claimsListing']);
Route::view('claimsListing', 'admin_theme/pages/claim_manager/claimsList');
Route::get('addClaims',[claims_manager_Controller::class,'addCliams']);
Route::get('editClaims',[claims_manager_Controller::class,'editCliams']);


// Contact for Admin
// Route::get('claimsListingApi',[claims_manager_Controller::class,'claimsListing']);
Route::view('contactListing', 'admin_theme/pages/contacts/ContactsList');
Route::get('addcontact',[ContactController::class,'addContacts']);
// Route::get('editClaims',[claims_manager_Controller::class,'editCliams']);


// Suppliers for Admin
// Route::get('claimsListingApi',[claims_manager_Controller::class,'claimsListing']);
Route::view('SuppliersListing', 'admin_theme/pages/suppliers/SuppliersList');
Route::get('addSuppliers',[SuppliersController::class,'addSuppliers']);


// Statistics for Admin
// Route::get('claimsListingApi',[claims_manager_Controller::class,'claimsListing']);
Route::view('Statistics', 'admin_theme/pages/Statistics/Statistics');
// Route::get('addSuppliers',[SuppliersController::class,'addSuppliers']);

// Connections for Admin
// Route::get('claimsListingApi',[claims_manager_Controller::class,'claimsListing']);
Route::view('connection', 'admin_theme/pages/connections/connections');
// Route::get('addSuppliers',[SuppliersController::class,'addSuppliers']);


// NewsLetter for Admin
// Route::get('claimsListingApi',[claims_manager_Controller::class,'claimsListing']);
Route::view('newsLetter', 'admin_theme/pages/newsLetter/NewsLetter');
// Route::get('addSuppliers',[SuppliersController::class,'addSuppliers']);

// Settings for Admin
// Route::get('claimsListingApi',[claims_manager_Controller::class,'claimsListing']);
Route::view('settings', 'admin_theme/pages/settings/settings');
// Route::get('addSuppliers',[SuppliersController::class,'addSuppliers']);


// Settings for Admin
// Route::get('claimsListingApi',[claims_manager_Controller::class,'claimsListing']);
Route::view('settings', 'admin_theme/pages/settings/settings');
// Route::get('addSuppliers',[SuppliersController::class,'addSuppliers']);


// Customer Address Book for B2B
// Route::get('claimsListingApi',[claims_manager_Controller::class,'claimsListing']);
Route::view('customerAddressbook', 'admin_theme/pages/customerAddressbook/customerAddressbook');
// Route::get('addSuppliers',[SuppliersController::class,'addSuppliers']);








//  Account Setting for B2C users

Route::get('/ProductdetailPage', [webController::class, 'ProductdetailPage']);
Route::view('accountSetting', 'frontEnd/pages/setting');
Route::view('productPortfolio', 'frontEnd/pages/productPortfolio');
Route::view('addToCart', 'frontEnd/pages/addToCart');




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

Route::get('/productListing', [tryController::class, 'productListing']);

// routes/web.php

