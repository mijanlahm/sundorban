<?php

use App\Http\Controllers\admin\AdminMainController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\ProductAttributeController;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\admin\ProductDiscountController;
use App\Http\Controllers\admin\SubCategoryController;
use App\Http\Controllers\Customer\CustomerMainController;
use App\Http\Controllers\HomepageCategoryController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\MasterCategoryController;
use App\Http\Controllers\MasterSubCategoryController;
use App\Http\Controllers\ProductHomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Seller\SellerMainController;
use App\Http\Controllers\Seller\SellerProductController;
use App\Http\Controllers\Seller\SellerStoreController;
use App\Livewire\HomepageComponent;
use Illuminate\Support\Facades\Route;

Route::get('/homeforlogin', function () {
    return view('welcome');
});


Route::controller(HomePageController::class)->group(function () {
    
    Route::get('/', 'index')->name('home');

});

Route::controller(ProductHomeController::class)->group(function () {
    
    Route::get('/Microwave', 'show_microwave')->name('microwave');
    Route::get('/product/{slug}', 'product_show')->name('product.show');
});

Route::controller(HomepageCategoryController::class)->group(function () {
    
    Route::get('/Microwave', 'show_microwave')->name('microwave');
    Route::get('/Mobile', 'show_mobile')->name('mobile');

});







/*===========================
     Admin Routes - Start
=============================*/ 

Route::middleware(['auth', 'verified', 'rolemanager:admin'])->group(function () {

    Route::prefix('admin')->group(function () {
        
        Route::controller(AdminMainController::class)->group(function () {
            Route::get('/dashboard', 'index')->name('admin');
            Route::get('/setting', 'admin_setting')->name('adminSetting');
            Route::put('/setting/homepagesetting/update', 'update_homepage_setting')->name('homepageSettingUpdate');
            Route::get('/manage/users', 'manage_users')->name('manageUsers');
            Route::get('/manage/stores', 'manage_stores')->name('manageStores');
            Route::get('/cart/history', 'cart_history')->name('cartHistory');
            Route::get('/order/history', 'order_history')->name('orderHistory');
        });

        Route::controller(CategoryController::class)->group(function () {
            Route::get('/category/create', 'create_category')->name('createCategory');
            Route::get('/category/manage', 'manage_category')->name('manageCategory');
        });

        Route::controller(SubCategoryController::class)->group(function () {
            Route::get('/subcategory/create', 'create_subcategory')->name('createSubCategory');
            Route::get('/subcategory/manage', 'manage_subcategory')->name('manageSubCategory');
        });

        Route::controller(ProductController::class)->group(function () {
            Route::get('/product/manage', 'manage_product')->name('manageProduct');
            Route::get('/product/review/manage', 'manage_product_review')->name('manageProductReview');
        });

        Route::controller(ProductAttributeController::class)->group(function () {
            Route::get('/product-attribute/create', 'create_product_attribute')->name('createProductAttribute');
            Route::get('/product-attribute/manage', 'manage_product_attribute')->name('manageProductAttribute');
            Route::post('/default-attribute/store', 'store_default_attribute')->name('storeDefaultAttribute');
            Route::get('/default-attribute/edit/{id}', 'show_default_attribute')->name('showDefaultAttribute');
            Route::put('/default-attribute/update/{id}', 'update_default_attribute')->name('updateDefaultAttribute');
            Route::delete('/default-attribute/delete/{id}', 'delete_default_attribute')->name('deleteDefaultAttribute');
        });

        Route::controller(ProductDiscountController::class)->group(function () {
            Route::get('/product-discount/create', 'create_product_discount')->name('createProductDiscount');
            Route::get('/product-discount/manage', 'manage_product_discount')->name('manageProductDiscount');
        });

        Route::controller(MasterCategoryController::class)->group(function () {
            Route::post('/store/category', 'store_category')->name('storeCategory');
            Route::get('/category/{id}', 'show_category')->name('showCategory');
            Route::put('/category/update/{id}', 'update_category')->name('updateCategory');
            Route::delete('/category/delete/{id}', 'delete_category')->name('deleteCategory');
        });

        Route::controller(MasterSubCategoryController::class)->group(function () {
            Route::post('/store/subcategory', 'store_subcategory')->name('storeSubcategory');
            Route::get('/subcategory/{id}', 'show_subcategory')->name('showSubcategory');
            Route::put('/subcategory/update/{id}', 'update_subcategory')->name('updateSubcategory');
            Route::delete('/subcategory/delete/{id}', 'delete_subcategory')->name('deleteSubcategory');
        });

    });

});

/*===========================
     Admin Routes - End
=============================*/ 

/*===========================
     Vendor Routes - Start
=============================*/ 

Route::middleware(['auth', 'verified', 'rolemanager:vendor'])->group(function () {

    Route::prefix('vendor')->group(function () {
        
        Route::controller(SellerMainController::class)->group(function () {
            Route::get('/dashboard', 'index')->name('vendor');
            Route::get('/order/history', 'seller_order_history')->name('sellerOrderHistory');
        });

        Route::controller(SellerStoreController::class)->group(function () {
            Route::get('/store/create', 'vendor_store_create')->name('vendorStoreCreate');
            Route::get('/store/manage', 'vendor_store_manage')->name('vendorStoreManage');
            Route::post('/store/publish', 'vendor_store_publish')->name('vendorStorePublish');
            Route::get('/store/edit/{id}', 'show_vendor_store')->name('showVendorStoreEdit');
            Route::put('/store/update/{id}', 'update_vendor_store')->name('updateVendorStore');
            Route::delete('/store/delete/{id}', 'delete_vendor_store')->name('deleteVendorStore');
        });

        Route::controller(SellerProductController::class)->group(function () {
            Route::get('/product/create', 'vendor_product_create')->name('vendorProductCreate');
            Route::get('/product/manage', 'vendor_product_manage')->name('vendorProductManage');

            Route::post('/product/publish', 'vendor_product_publish')->name('vendorProductPublish');
            Route::get('/product/edit/{id}', 'show_vendor_product')->name('showVendorProductEdit');
            Route::put('/product/update/{id}', 'update_vendor_product')->name('updateVendorProduct');
            Route::delete('/product/delete/{id}', 'delete_vendor_product')->name('deleteVendorProduct');
        });


    });

});

/*===========================
     Vendor Routes - End
=============================*/ 

/*===========================
     Customer Routes - Start
=============================*/ 

Route::middleware(['auth', 'verified', 'rolemanager:customer'])->group(function () {

    Route::prefix('user')->group(function () {
        
        Route::controller(CustomerMainController::class)->group(function () {
            Route::get('/dashboard', 'index')->name('customer');
            Route::get('/order/history', 'user_order_history')->name('userOrderHistory');
            Route::get('/setting/payment', 'user_payment_setting')->name('userPaymentSetting');
            Route::get('/affiliate', 'user_affiliate')->name('userAffiliate');
        });

    });

});

/*===========================
     Customer Routes - End
=============================*/ 

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
