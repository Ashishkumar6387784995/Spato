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
use App\Http\Controllers\api\contactController;
use App\Http\Controllers\api\ConnectionsController;
use App\Http\Controllers\api\CustomerMngController;
use App\Http\Controllers\api\OrderMngController;
use App\Http\Controllers\api\StatisticsController;
use App\Http\Controllers\api\categoriesController;
use App\Http\Controllers\api\quatationController;
use App\Http\Controllers\api\PaymentController;
use App\Http\Controllers\api\CouponMngController;
use App\Http\Controllers\api\WareHouseController;
use App\Http\Controllers\api\cmsController;

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
Route::get('B2CUserDetails/{role_filter}', [loginController::class, 'B2CUserDetails']);
Route::get('selectedB2CUserDetails/{id}', [loginController::class, 'selectedB2CUserDetails']);
Route::get('selectedB2CUserDetailsByCompanyName/{companyName}/{role_filter}', [loginController::class, 'selectedB2CUserDetailsByCompanyName']);
Route::get('selectedB2CUserDetailsByUserName/{name}', [loginController::class, 'selectedB2CUserDetailsByUserName']);





Route::get('/home', [webController::class, 'home']);
Route::post('/cart/addApi', [CartController::class, 'addToCart']);
Route::get('/cart/getCartItemsApi', [CartController::class, 'getCartItems']);
Route::post('/cart/updateQuanityApi', [CartController::class, 'updateQuantityOfItems']);
Route::delete('/cart/deleteCartProductsApi/{product_id}', [CartController::class, 'deleteCartProducts']);
Route::get('/viewCart', [CartController::class, 'viewCart']);
Route::get('checkout', [CartController::class, 'checkout']);
Route::get('applyDiscCode', [CartController::class, 'applyDiscCode']);
Route::get('quotes/{product_id}', [CartController::class, 'quotesForm']);
Route::post('submitQuotes', [CartController::class, 'SubmitQuotes']);


//Static Pages

Route::get('contact', [staticPageController::class, 'contact']);
Route::post('contactSubmit', [staticPageController::class, 'contactSubmit']);
Route::get('about', [staticPageController::class, 'about']);
Route::get('agb', [staticPageController::class, 'agb']);
Route::get('cancelationPolicy', [staticPageController::class, 'cancelationPolicy']);
Route::get('Impressum', [staticPageController::class, 'Impressum']);
Route::get('lieferbedingungen', [staticPageController::class, 'lieferbedingungen']);

// cms static pages update

Route::post('/agb_save_content', [cmsController::class, 'agb_save_content']);
Route::post('/lieferbedingungen_save_content', [cmsController::class, 'lieferbedingungen_save_content']);
Route::post('/Impressum_save_content', [cmsController::class, 'Impressum_save_content']);


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
  Route::get('updateOfferStatusApi', [OfferController::class, 'updateOfferStatus']);
  Route::get('getOfferDetailsApi', [OfferController::class, 'getOfferDetails']);

  //Asignments for Admin

  Route::post('addAssignmentsApi', [AssignmentController::class, 'addAssignmentsApi']);
  Route::get('assignmentListingApi', [AssignmentController::class, 'AssignmentListing']);

  // Delivery Notes for Admin
  Route::post('addDeliveryNotesApi', [DeliveryNotesController::class, 'addDeliveryNotesApi']);
  Route::get('deliveryNotesListingApi', [DeliveryNotesController::class, 'DeliveryNotesListingApi']);



  // Bills for Admin
  Route::get('billsListingApi', [billsController::class, 'billsListingApi']);
  Route::POST('addbillsApi', [billsController::class, 'addbillsApi']);


  // Credits for Admin
  Route::get('creditsListingApi', [creditsController::class, 'creditListingApi']);
  Route::post('addCreditsApi', [creditsController::class, 'addCreditsApi']);

  // Contacts for Admin
  Route::get('contactsListingApi', [contactController::class, 'contactsListingApi']);
  Route::POST('addContactsApi', [contactController::class, 'addContactsApi']);
  Route::POST('contactsImportApi', [contactController::class, 'contactsImportApi']);

  // Suppliers for Admin
  Route::get('suppliersListingApi', [SuppliersController::class, 'suppliersListingApi']);
  Route::POST('addSuppliersApi', [SuppliersController::class, 'addSuppliersApi']);
  Route::POST('suppliersImportApi', [SuppliersController::class, 'suppliersImportApi']);





  // items for checkout with auth.
  Route::get('cart/checkoutItemsApiAuthentic', [CartController::class, 'getCartItems']);
  Route::get('cart/userAddress', [CartController::class, 'userAddress']);


  // Quatation submit
  Route::post('submitQuotes', [CartController::class, 'SubmitQuotes']);


  // B2C User Profile
  Route::get('profileViewApi', [webController::class, 'profileViewApi']);
  Route::post('addPermanentProfileApi', [webController::class, 'addPermanentProfileApi']);
  Route::post('changePasswordApi', [webController::class, 'changePasswordApi']);
  Route::post('saveTempAddressApi', [webController::class, 'saveTempAddressApi']);
  Route::get('showTempAddressApi', [webController::class, 'showTempAddressApi']);
  Route::get('tempAddressDelete/{id}', [webController::class, 'tempAddressDelete']);
  Route::get('showOrderHistoryApi', [webController::class, 'showOrderHistoryApi']);

  // For get user details by his id
  Route::get('profileViewByIdApi/{id}', [webController::class, 'profileViewByIdApi']);

  Route::post('logoutApi', [loginController::class, 'logoutApi']);
  // Route::get('logout',[loginController::class,'logout']);


  // Payment Checkout
  Route::get('/payment', [PaymentController::class, 'index']);
  Route::post('/cart/addOrder', [PaymentController::class, 'addOrder']);

  // cms api for static pages

  Route::get('/CmsUserRole', [cmsController::class, 'CmsUserRole']);
});



Route::get('/checkout/payment', [PaymentController::class, 'payment']);

Route::get('/productList', [tryController::class, 'productListing']);

// WareHouse Management
Route::view('/wareHouseProductList/{role}', '/admin_theme/pages/wareHouse/productsList');
// Route::post('/cart/addOrder', [WareHouseController::class, 'addOrder']);


Route::get('/admin_dashboard/{role}', [dashboardController::class, 'admin_Dashboard']);


// Offers for Admin
Route::view('offerListing/{role}', 'admin_theme/pages/offers/offerList');
Route::get('updateOfferStatusB2BApi', [OfferController::class, 'updateOfferB2B']);
Route::get('addOffer/{role}', [OfferController::class, 'addOffer']);
Route::get('editOffer/{role}/{id}', [OfferController::class, 'editOffer']);

Route::get('OffersPdfdownload/{offerId}', [OfferController::class, 'downloadPdf']);
Route::post('sendOfferMailsToB2C', [OfferController::class, 'sendOfferMailsToB2C']);

//offers for B2C
Route::get('viewOffersForB2C', [OfferController::class, 'viewOffersForB2C']);





// Categories for Admin
Route::get('categoriesListingApi', [categoriesController::class, 'categoriesListing']);
Route::view('categoriesListing/{role}', 'admin_theme/pages/categories/categoriesList');
Route::get('addCategories/{role}', [categoriesController::class, 'addCategories']);
Route::post('addCategoriesApi', [categoriesController::class, 'addCategoriesApi']);
Route::get('editProduct/{id}', [categoriesController::class, 'editProduct']);
Route::post('deleteCategory/{id}', [categoriesController::class, 'deleteCategory']);
Route::get('getSpecificProductCategoryAPI', [categoriesController::class, 'getProductCategory']);



// products for Admin
Route::get('productListingApi', [productController::class, 'productListing']);
Route::get('addSpareParts/{role}', [productController::class, 'addSpareParts']);
Route::view('productListing/{role}', 'admin_theme/pages/products/productsList');
Route::get('addProduct/{role}', [productController::class, 'addProduct']);
Route::post('addProduct', [productController::class, 'addproductList']);
Route::post('productImportApi', [productController::class, 'productImport']);
Route::get('productExport', [productController::class, 'productExport']);
Route::get('editProduct/{id}', [productController::class, 'editProduct']);
Route::get('getProductCategoryAPI', [productController::class, 'getProductCategory']);
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

Route::view('assignmentListing/{role}', 'admin_theme/pages/assignments/assignmentList');
Route::get('addAssignment/{role}', [AssignmentController::class, 'addAssignment']);

Route::get('editAssignment/{role}/{id}', [AssignmentController::class, 'editAssignment']);

Route::get('assignmentPdfdownload/{assignmentNo}', [AssignmentController::class, 'downloadPdf']);
Route::post('sendAssignmentMailsToB2C', [AssignmentController::class, 'sendAssignmentMailsToB2C']);



// Delivery Notes for Admin

Route::view('deliveryNotesListing/{role}', 'admin_theme/pages/delivery_notes/DeliveryNotesList');
Route::get('addDeliveryNotes/{role}', [DeliveryNotesController::class, 'addDeliveryNotes']);

Route::get('editDeliveryNotes', [DeliveryNotesController::class, 'editDeliveryNotes']);
Route::post('sendDeliveryNotesMailsToB2C', [DeliveryNotesController::class, 'sendDeliveryNotesMailsToB2C']);
Route::get('editDeliveryNotesForSuppliers/{role}', [DeliveryNotesController::class, 'editDeliveryNotesForSuppliers']);


// Bills for Admin


Route::view('billsListing/{role}', 'admin_theme/pages/bills/billsList');
Route::get('updateBillStatusApi', [billsController::class, 'updateBills']);
Route::get('addbills/{role}', [billsController::class, 'addbills']);

Route::get('editbills', [billsController::class, 'editbills']);
Route::post('sendBillstMailsToB2C', [billsController::class, 'sendBillstMailsToB2C']);


// Credits for Admin

Route::view('creditsListing/{role}', 'admin_theme/pages/credits/creditList');
Route::get('updateCreditStatusApi', [creditsController::class, 'updateCredits']);
Route::get('addCredits/{role}', [creditsController::class, 'addCredits']);

Route::get('editCredits', [creditsController::class, 'editCredits']);
Route::post('sendCredistMailsToB2C', [creditsController::class, 'sendCredistMailsToB2C']);


// Claim Manger for Admin
Route::get('claimsListingApi', [claims_manager_Controller::class, 'claimsListing']);
Route::view('claimsListing/{role}', 'admin_theme/pages/claim_manager/claimsList');
Route::get('addClaims/{role}', [claims_manager_Controller::class, 'addCliams']);
Route::POST('addClaimsApi', [claims_manager_Controller::class, 'addClaimsApi']);
Route::get('editClaims/{role}/{id}', [claims_manager_Controller::class, 'editClaims']);


// Contact for Admin
// Route::get('claimsListingApi',[claims_manager_Controller::class,'claimsListing']);
Route::view('contactListing/{role}', 'admin_theme/pages/contacts/ContactsList');
Route::get('addcontact/{role}', [contactController::class, 'addContacts']);
// Route::get('editClaims',[claims_manager_Controller::class,'editCliams']);


// Suppliers for Admin
// Route::get('claimsListingApi',[claims_manager_Controller::class,'claimsListing']);
Route::view('SuppliersListing/{role}', 'admin_theme/pages/suppliers/suppliersList');
Route::get('addSuppliers/{role}', [SuppliersController::class, 'addSuppliers']);


// Customer Management for Admin
Route::get('customerListingApi', [CustomerMngController::class, 'customerListingApi']);
Route::view('customerListing/{role}', 'admin_theme/pages/customer/customerList');
Route::get('editcustomer/{role}/{id}', [CustomerMngController::class, 'editCustomer']);
Route::post('updatecustomer', [CustomerMngController::class, 'updateCustomer']);
Route::get('deletecustomer/{id}', [CustomerMngController::class, 'deleteCustomer']);

// Order Management for Admin
Route::get('orderListingApi', [OrderMngController::class, 'orderListingApi']);
Route::get('getOrdersDetailsApi', [OrderMngController::class, 'getOrdersDetailsApi']);
Route::view('orderListing/{role}', 'admin_theme/pages/order/orderList');
Route::get('editorder/{role}/{id}', [OrderMngController::class, 'editOrder']);
Route::get('updateOrderFinalStatusApi', [OrderMngController::class, 'updateOrderFinalStatusApi']);

// Coupon Management for Admin
Route::get('couponListingApi', [CouponMngController::class, 'couponListingApi']);
Route::view('couponListing/{role}', 'admin_theme/pages/coupon/couponList');
Route::get('addcoupon/{role}', [CouponMngController::class, 'addCoupon']);
Route::post('addcouponApi', [CouponMngController::class, 'addCouponApi']);
Route::get('updateCouponStatusApi', [CouponMngController::class, 'updateCoupon']);

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
Route::post('/cart/getCountOfThisProductApi', [webController::class, 'getCountOfThisProductApi']);
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
Route::get('/image', [tryController::class, 'image']);

// routes/web.php