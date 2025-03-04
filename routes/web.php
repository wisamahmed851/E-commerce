<?php

use App\Http\Controllers\{
    CustomerController,
    DashboardController,
    OrderController,
    ProductController,
    UserController,
    AuthController,
    CategoryController,
    FrontendController,
    POSController,
    PurchaseController,
    StockController,
    SupplierController
};
use App\Http\Middleware\{Guest, ValidUser};
use App\Models\Supplier;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Authentication Routes
Route::controller(AuthController::class)->prefix('auth')->group(function () {
    Route::get('/register', 'registerForm')->name('auth.register');
    Route::post('/registerstore', 'register')->name('auth.register.store');
    Route::get('/logout', 'logout')->name('auth.logout');
});

Route::middleware([Guest::class])->group(function () {
    Route::controller(AuthController::class)->prefix('auth')->group(function () {
        Route::get('/login', 'loginform')->name('auth.login');
        Route::post('/loginstore', 'login')->name('auth.login.store');
    });
});

// Protected Admin and Posh Routes
Route::middleware([ValidUser::class, 'checkRole'])->group(function () {

    // Admin Routes
    Route::prefix('admin')->group(function () {
        Route::controller(UserController::class)->prefix('user')->group(function () {
            Route::get('/', 'index')->name('users.index');
            Route::post('/toggleStatus/{user}', 'toggleStatus')->name('user.toggleStatus');
            Route::post('/togglerole/{user}', 'togglerole')->name('user.togglerole');
            Route::get('/profile', 'profile')->name('users.profile');
            Route::get('/setting', 'setting')->name('users.setting');
        });

        Route::controller(AuthController::class)->prefix('auth')->group(function () {
            Route::get('/confirmPass', 'confirm')->name('auth.confirm');
            Route::get('/forgotPass', 'forgot')->name('auth.forgot');
            Route::get('/lockScreen', 'lock')->name('auth.lock');
            Route::get('/resetPass', 'reset')->name('auth.reset');
        });
        Route::controller(POSController::class)->prefix('pos')->group(function () {
            Route::get('/', 'index')->name('pos.index'); // POS Dashboard
            Route::get('/create', 'create')->name('pos.create'); // Create a new transaction
            Route::post('/store', 'store')->name('pos.store'); // Store a transaction
            Route::get('/show', 'detailsShow')->name('pos.detailsShow'); // View transaction details
            Route::get('/{id}/fetch', 'fetchDetail')->name('pos.transaction-details.fetch'); // Edit transaction
            Route::put('/{id}/update', 'updateDetail')->name('pos.transaction-details.update'); // Edit transaction
            Route::delete('/{id}', 'detailsEdit')->name('pos.details.delete'); // Delete transaction
            Route::put('/{id}', 'update')->name('pos.update'); // Update transaction
            Route::get('/{id}/receipt', 'viewReceipt')->name('pos.receipt'); // View receipt
            Route::get('/{id}/download', 'downloadReceipt')->name('pos.download'); // Download receipt
        });

        Route::controller(AuthController::class)->prefix('')->group(function () {
            Route::get('/', 'dashboardIndex')->name('dashboard.index');
        });
        Route::controller(SupplierController::class)->prefix('supplier')->group(function () {
            Route::get('/', 'index')->name('supplier.index');
            Route::get('/create', 'create')->name('supplier.create');
            Route::post('/store', 'store')->name('supplier.store');
            Route::get('/{id}/edit', 'edit')->name('supplier.edit'); // Route for edit
            Route::put('/{id}', 'update')->name('supplier.update'); // Route for update
            Route::get('/{id}/details', 'suppSho')->name('suppliers.show'); // Changed to GET
        });


        Route::controller(StockController::class)->prefix('stocks')->group(function () {
            Route::get('/', 'index')->name('stocks.index');
        });
        Route::controller(PurchaseController::class)->prefix('purchase')->group(function () {
            Route::get('/', 'index')->name('purchase.index');
            Route::get('/create', 'create')->name('purchase.create');
            Route::post('/store', 'store')->name('purchase.store');
            Route::get('/{id}/edit', 'edit')->name('purchase.edit'); // Edit route
            Route::put('/{id}/update', 'update')->name('purchase.update'); // Update route
            Route::get('/{id}/receipt', 'viewReceipt')->name('purchase.receipt');
            Route::get('/{id}/download', 'downloadReceipt')->name('purchase.download');
        });

        Route::controller(ProductController::class)->prefix('products')->group(function () {
            Route::get('/create', 'create')->name('products.create');
            Route::post('/', 'store')->name('products.store');
            Route::put('/{id}/update', 'update')->name('products.update');
            Route::get('/{id}/edit', 'edit')->name('products.edit'); // Already exists
            Route::get('/{id}/show', 'show')->name('products.show'); // Already exists
            Route::get('/index', 'index')->name('products.index');
            Route::get('/data', 'getProducts')->name('products.data');
            Route::get('/destroy', 'destroy')->name('products.destroy');
            Route::post('/toggle-status/{id}', 'toggleStatus')->name('products.toggleStatus');
            Route::get('/grid', 'grid')->name('products.grid');
            Route::get('/details', 'details')->name('products.details');
            Route::get('/{id}/details', 'show')->name('products.show');
        });
        Route::controller(CategoryController::class)->prefix('category')->group(function () {
            Route::get('/create', 'create')->name('category.create');
            Route::post('/store', 'store')->name('category.store');
            Route::get('/', 'index')->name("category.index");
        });

        Route::controller(OrderController::class)->prefix('orders')->group(function () {
            Route::get('/', 'index')->name('orders.index');
            Route::get('/detail', 'detail')->name('orders.detail');
        });

        Route::controller(CustomerController::class)->prefix('customers')->group(function () {
            Route::get('/', 'index')->name('customers.index');
            Route::get('/detail', 'detail')->name('customers.detail');
        });
    });

    // Posh Website Routes
    Route::prefix('')->group(function () {
        Route::controller(FrontendController::class)->prefix('')->group(function () {
            Route::get('/', 'index')->name('front.index');
            Route::get('/about', 'about')->name('front.about');
            Route::get('/contact', 'contact')->name('front.contact');
            Route::get('/404', 'notfound')->name('front.404');
            Route::get('/catalog', 'catalog')->name('front.catalog');
            Route::get('/product', 'product')->name('front.product');
            Route::get('/register', 'register')->name('front.register');
            Route::get('/password-recovery', 'passwordRecovery')->name('front.passwordRecovery');
            Route::get('/login', 'login')->name('front.login');
            Route::get('/checkout/cart', 'checkoutCart')->name('front.checkoutCart');
            Route::get('/checkout/delivery', 'checkoutDelivery')->name('front.checkoutDelivery');
            Route::get('/order', 'order')->name('front.order');
            Route::get('/wishlist', 'wishlist')->name('front.wishlist');
            Route::get('/reviews', 'reviews')->name('front.reviews');
            Route::get('/help', 'help')->name('front.help');
        });
    });
});
