<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserDashboardController;


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


/*
|--------------------------------------------------------------------------
| Users Route
|--------------------------------------------------------------------------
*/
Route::get('/', [UserController::class, 'home'])->name('users.home');
Route::get('login', [UserController::class, 'login'])->name('users.login');
Route::post('login', [UserController::class, 'login_post'])->name('users.login.post');
Route::get('logout', [UserController::class, 'logout'])->name('users.logout');
Route::get('signup', [UserController::class, 'signup'])->name('users.signup');
Route::post('signup', [UserController::class, 'signup_post'])->name('users.signup.post');
Route::get('services', [UserController::class, 'view_services'])->name('users.services');
Route::post('query', [UserController::class, 'query_add'])->name('users.query.add');
Route::get('property-listing', [UserController::class, 'property_listing'])->name('users.property.listing');
Route::get('property-details/{property_name}/{property_id}', [UserController::class, 'property_details'])->name('users.property.details');
Route::post('save_infos', [UserController::class, 'save_infos'])->name('users.save.infos');
Route::post('save-purchase-details', [UserController::class, 'save_purchase_details'])->name('users.save.purchase.details');

/*
|--------------------------------------------------------------------------
| Admin Route
|--------------------------------------------------------------------------
*/
Route::group(['prefix' => 'admin'], function() {
    Route::get('login', [AdminController::class, 'login'])->name('admin.login');
    Route::post('login', [AdminController::class, 'login_post'])->name('admin.login.post');
    Route::get('dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    // Testimonials Routes
    Route::get('testimonials', [AdminController::class, 'testimonials'])->name('admin.view.testimonials');
    Route::post('testimonial-update', [AdminController::class, 'testimonial_update'])->name('admin.testimonial.update');
    Route::post('testimonial-add', [AdminController::class, 'testimonial_add'])->name('admin.testimonial.add');
    Route::get('testimonial-delete/{testimonial_id}', [AdminController::class, 'testimonial_delete'])->name('admin.testimonial.delete');
    // Services Routes
    Route::get('services', [AdminController::class, 'services'])->name('admin.view.services');
    Route::post('service-add', [AdminController::class, 'service_add'])->name('admin.service.add');
    Route::post('service-edit', [AdminController::class, 'service_edit'])->name('admin.service.edit');
    Route::get('service-delete/{service_id}', [AdminController::class, 'service_delete'])->name('admin.service.delete');
    // Projects Routes
    Route::get('projects', [AdminController::class, 'projects'])->name('admin.view.projects');
    Route::post('project-add', [AdminController::class, 'project_add'])->name('admin.project.add');
    Route::post('project-edit', [AdminController::class, 'project_edit'])->name('admin.project.edit');
    Route::get('project-delete/{project_id}', [AdminController::class, 'project_delete'])->name('admin.project.delete');
    // Properties Routes
    Route::group(['prefix' => 'properties'], function() {
        Route::get('/', [AdminController::class, 'properties'])->name('admin.view.properties');
        Route::get('{property_name}/{porperty_id}', [AdminController::class, 'property'])->name('admin.view.edit.property');
        Route::post('add', [AdminController::class, 'property_add'])->name('admin.property.add');
        Route::post('edit', [AdminController::class, 'property_edit'])->name('admin.property.edit');
        Route::post('add/image', [AdminController::class, 'property_add_image'])->name('admin.property.add.image');
        Route::post('add/map', [AdminController::class, 'property_add_map'])->name('admin.property.add.map');
        Route::get('delete/all/{property_id}', [AdminController::class, 'property_delete'])->name('admin.property.delete.all');
        Route::get('delete/image/{image_id}', [AdminController::class, 'property_delete_image'])->name('admin.property.delete.image');
        Route::get('delete/map/{map_id}', [AdminController::class, 'property_delete_map'])->name('admin.property.delete.map');
    });
    // Purchase Details Routes
    Route::group(['prefix' => 'purchase-details'], function() {
        Route::get('/', [AdminController::class, 'purchase_details'])->name('admin.view.purchase.details');
        Route::get('purchase-detail/{id}', [AdminController::class, 'purchase_detail'])->name('admin.view.purchase.detail.info');
    });
    // Contractors Routes
    Route::get('contractors', [AdminController::class, 'contractors'])->name('admin.view.contractors');
    Route::post('contractor-add', [AdminController::class, 'contractor_add'])->name('admin.contractor.add');
    Route::post('contractor-edit', [AdminController::class, 'contractor_edit'])->name('admin.contractor.edit');
    Route::get('contractor-delete/{contractor_id}', [AdminController::class, 'contractor_delete'])->name('admin.contractor.delete');
    // Customer Infos Routes
    Route::get('customers-info', [AdminController::class, 'customers_info'])->name('admin.view.customers.info');
    Route::get('customer-info/{info_id}', [AdminController::class, 'customer_info'])->name('admin.view.customer.info');
    Route::post('change_status', [AdminController::class, 'change_status_customer_info'])->name('admin.change.status.customer.info');
    // Goals Routes
    Route::get('goals', [AdminController::class, 'goals'])->name('admin.view.goals');
    Route::post('goal-add', [AdminController::class, 'goal_add'])->name('admin.goal.add');
    Route::post('goal-edit', [AdminController::class, 'goal_edit'])->name('admin.goal.edit');
    Route::get('goal-delete/{goal_id}', [AdminController::class, 'goal_delete'])->name('admin.goal.delete');
    // Queries Routes
    Route::get('queries', [AdminController::class, 'queries'])->name('admin.view.queries');
    Route::get('logout', [AdminController::class, 'logout'])->name('admin.logout');
});

Route::prefix('user')->group(function () {
    Route::middleware(['checkUserLogin'])->group(function () {
        Route::get('account',[UserDashboardController::class, 'account'])->name('user.account');
        Route::get('projectQueries',[UserDashboardController::class, 'projectQueries'])->name('user.projectQueries');
        Route::get('showQuery',[UserDashboardController::class, 'showQuery'])->name('user.showQuery');
        Route::get('purchaseDetails',[UserDashboardController::class, 'purchaseDetails'])->name('user.purchaseDetails');
    });
});