<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AboutTheAppController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ContatController;
use App\Http\Controllers\DemoPageController;
use App\Http\Controllers\DetailPageController;
use App\Http\Controllers\ErrorPageController;
use App\Http\Controllers\FooterController;
use App\Http\Controllers\HeaderBannerController;
use App\Http\Controllers\HeaderMenuItemController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\HomePageSettingController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\MenuItemController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\PhotoTextBannerController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ServiceDetailController;
use App\Http\Controllers\ServicePageController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\SocialMediaSectionController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\WhyKidoromaController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/setting', [HomePageSettingController::class, 'update']);
Auth::routes();

Route::get('/admin/home', [App\Http\Controllers\HomeController::class, 'index'])->name('admin.home');


/// menu routes
Route::group(
    ['middleware' => ['auth']],
    function () {
        Route::get('/menu', [MenuController::class, 'index'])->name('menu');
        Route::get('/menu/create', [MenuController::class, 'create'])->name('menu.create');
        Route::get('/menu/edit/{id}', [MenuController::class, 'edit'])->name('menu.edit');
        Route::post('/menu/store', [MenuController::class, 'store'])->name('menu.store');
        Route::post('/menu/update/{id}', [MenuController::class, 'update'])->name('menu.update');
        Route::get('/menu/destroy/{id}', [MenuController::class, 'destroy'])->name('menu.destroy');
    }
);


/// menu_items route

Route::get("/menu/items/{slug}", [MenuItemController::class, 'index'])->name('menuitem');
Route::get("/menu/home/{slug}", [MenuItemController::class, 'home'])->name('menuitem.home');
Route::get("/menu/items/create/{slug}", [MenuItemController::class, 'create'])->name('menuitem.create');
Route::post("/menu/items/store/{slug}", [MenuItemController::class, 'store'])->name('menuitem.store');
Route::post("/menu/items/order", [MenuItemController::class, 'order'])->name('menuitem.order');
Route::get("/menu/items/edit/{id}", [MenuItemController::class, 'edit'])->name('menuitem.edit');
Route::post("/menu/items/update/{id}", [MenuItemController::class, 'update'])->name('menuitem.update');
Route::post("/menu/items/update-order", [MenuItemController::class, 'updateOrder'])->name('menuitem.updateorder');
Route::get("/menu/items/destroy/{id}", [MenuItemController::class, 'destroy'])->name('menuitem.destroy');

/// webpage
Route::get("/", [HomePageController::class, 'index'])->name('home');


/// blogs
Route::get("/blog", [BlogController::class, 'index'])->name('blog');
Route::get("/blog/details/{slug}", [BlogController::class, 'blogdetails'])->name('blog.details');

///create blog
Route::group(['middleware' => ['auth']], function () {
    Route::get("/blog/create", [BlogController::class, 'create'])->name('blog.create');
    Route::post("/blog/store", [BlogController::class, 'store'])->name('blog.store');
    Route::get("/blog/view", [BlogController::class, 'view'])->name('blog.view');
    Route::get("/blog/edit/{id}", [BlogController::class, 'edit'])->name('blog.edit');
    Route::post("/blog/update/{id}", [BlogController::class, 'update'])->name('blog.update');
    Route::get("/blog/destroy/{id}", [BlogController::class, 'destroy'])->name('blog.destroy');
    Route::get("/blog/categories/{slug}", [BlogController::class, 'category'])->name('blog.category');
    // Route::get("/blog/categories/{slug}",[BlogController::class,'category'])->name('blog.category');
});


Route::group(['middleware' => ['auth']], function () {
    Route::get("/blog/createcategory", [CategoryController::class, 'create'])->name('blog.createcategory');
    Route::get("/blog/viewcategory", [CategoryController::class, 'index'])->name('blog.viewcategory');
    Route::post("/blog/storecategory", [CategoryController::class, 'store'])->name('blog.storecategory');
    Route::get("/blog/editcategory/{id}", [CategoryController::class, 'edit'])->name('blog.editcategory');
    Route::any("/blog/updatecategory/{id}", [CategoryController::class, 'update'])->name('blog.updatecategory');
    Route::get("/blog/destroycategory/{id}", [CategoryController::class, 'destroy'])->name('blog.destroycategory');
});

/// footer message

Route::group(['middleware' => ['auth'], 'prefix' => "/messages"], function () {
    Route::any("/store", [MessageController::class, 'store'])->name('message.store');
    Route::get("/index", [MessageController::class, 'index'])->name('message.index');
    Route::get("/view/{id}", [MessageController::class, 'messagedetail'])->name('message.messagedetail');
});

/// footer section

Route::group(['middleware' => ['auth'], 'prefix' => "/contact"], function () {
    Route::get('index', [ContatController::class, 'index'])->name('contact');
    ROute::get('create', [ContatController::class, 'create'])->name('contact.store');
    ROute::post('store', [ContatController::class, 'store'])->name('contact.store');
    ROute::any('edit/{id}', [ContatController::class, 'edit'])->name('contact.edit');
    ROute::post('update/{id}', [ContatController::class, 'update'])->name('contact.update');
});
Route::group(['middleware' => ['auth'], 'prefix' => '/footer'], function () {
    Route::get('index', [FooterController::class, 'index'])->name('footer');
    Route::get('create', [FooterController::class, 'create'])->name('footer.create');
    Route::post('store', [FooterController::class, 'store'])->name('footer.store');
    Route::get('edit/{id}', [FooterController::class, 'edit'])->name('footer.edit');
    Route::post('update/{id}', [FooterController::class, 'update'])->name('footer.update');
});

///  body section

Route::group(['middleware' => ['auth'], 'prefix' => '/headerbanner'], function () {
    Route::get('index', [HeaderBannerController::class, 'index'])->name('headerbanner');
    Route::get('create', [HeaderBannerController::class, 'create'])->name('headerbanner.create');
    Route::get('edit/{id}', [HeaderBannerController::class, 'edit'])->name('headerbanner.edit');
    Route::any('store', [HeaderBannerController::class, 'store'])->name('headerbanner.store');
});


/// phototext banner
Route::group(['middleware' => ['auth'], 'prefix' => '/phototextbanner'], function () {
    Route::get('index', [PhotoTextBannerController::class, 'index'])->name('phototextbanner');
    Route::get('create', [PhotoTextBannerController::class, 'create'])->name('phototextbanner.create');
    Route::get('createimage', [PhotoTextBannerController::class, 'createimage'])->name('phototextbanner.createimage');
    Route::post('store', [PhotoTextBannerController::class, 'store'])->name('phototextbanner.store');
    Route::post('storeimage', [PhotoTextBannerController::class, 'storeimage'])->name('phototextbanner.storeimage');
});

/// about the app section
Route::group(['middleware' => ['auth'], 'prefix' => '/about/app'], function () {
    Route::get('index', [AboutTheAppController::class, 'index'])->name('aboutapp');
    Route::get('indexcard', [AboutTheAppController::class, 'indexcard'])->name('aboutapp.card');
    Route::get('create', [AboutTheAppController::class, 'create'])->name('aboutapp.create');
    Route::get('createcard', [AboutTheAppController::class, 'createcard'])->name('aboutapp.createcard');
    Route::post('store', [AboutTheAppController::class, 'store'])->name('aboutapp.store');
    Route::post('storecard', [AboutTheAppController::class, 'storecard'])->name('aboutapp.storecard');
    Route::get('info', [AboutTheAppController::class, 'info'])->name('aboutapp.info');
    Route::get('createinfo', [AboutTheAppController::class, 'createinfo'])->name('aboutapp.createinfo');
    Route::post('storeinfo', [AboutTheAppController::class, 'storeinfo'])->name('aboutapp.storeinfo');
    Route::get('indexbanner', [AboutTheAppController::class, 'indexbanner'])->name('aboutapp.indexbanner');
    Route::get('createbanner', [AboutTheAppController::class, 'createbanner'])->name('aboutapp.createbanner');
    Route::post('storebanner', [AboutTheAppController::class, 'storebanner'])->name('aboutapp.storebanner');
});
//// why kidoroma section
Route::group(['middleware' => ['auth'], "prefix" => '/why/kidoroma'], function () {
    Route::get('index', [WhyKidoromaController::class, 'index'])->name('kidoroma');
    Route::get('create', [WhyKidoromaController::class, 'create'])->name('kidoroma.create');
    Route::post('store', [WhyKidoromaController::class, 'store'])->name('kidoroma.store');
    Route::get('indexcard', [WhyKidoromaController::class, 'indexcard'])->name('kidoroma.indexcard');
    Route::get('createcard', [WhyKidoromaController::class, 'createcard'])->name('kidoroma.createcard');
    Route::post('storecard', [WhyKidoromaController::class, 'storecard'])->name('kidoroma.storecard');
    Route::get('indeximage', [WhyKidoromaController::class, 'indeximage'])->name('kidoroma.indeximage');
    Route::get('createimage', [WhyKidoromaController::class, 'createimage'])->name('kidoroma.createimage');
    Route::post('storeimage', [WhyKidoromaController::class, 'storeimage'])->name('kidoroma.storeimage');
});

/// social media content page
Route::group(['middleware' => ['auth'], "prefix" => '/socialmedia'], function () {
    Route::get('index', [SocialMediaSectionController::class, 'index'])->name('socialmedia');
    Route::get('create', [SocialMediaSectionController::class, 'create'])->name('socialmedia.create');
    Route::post('store', [SocialMediaSectionController::class, 'store'])->name('socialmedia.store');
    Route::get('indexbutton', [SocialMediaSectionController::class, 'indexbutton'])->name('socialmedia.indexbutton');
    Route::get('createbutton', [SocialMediaSectionController::class, 'createbutton'])->name('socialmedia.createbutton');
    Route::post('storebutton', [SocialMediaSectionController::class, 'storebutton'])->name('socialmedia.storebutton');
    Route::get('spatie', [SocialMediaSectionController::class, 'spatie'])->name('socialmedia.spatie');
});



Route::group(['middleware' => ['auth']], function () {

    Route::get("/settings/home", [SettingController::class, 'index'])->name('settings');
    Route::get("/settings/contact", [SettingController::class, 'contact'])->name('settings.contact');
    Route::get("/settings/header", [SettingController::class, 'header'])->name('settings.header');
    Route::any("/settings/update", [SettingController::class, 'update'])->name('settings.update');
    Route::post("/settings/updatecontact", [SettingController::class, 'updatecontact'])->name('settings.updatecontact');
    Route::post("/settings/updateheader", [SettingController::class, 'updateheader'])->name('settings.updateheader');
});


Route::group(['middleware' => ['auth'], 'prefix' => 'demo'], function () {
    Route::get("/home", [DemoPageController::class, 'index'])->name('demo');
    Route::get("/create", [DemoPageController::class, 'create'])->name('demo.create');
    Route::post("/update", [DemoPageController::class, 'update'])->name('demo.update');
});


Route::group(['middleware' => ['auth'], 'prefix' => 'error'], function () {
    Route::get("/home", [ErrorPageController::class, 'error'])->name('error');
    Route::get("/create", [ErrorPageController::class, 'create'])->name('error.create');
    Route::post("/update", [ErrorPageController::class, 'update'])->name('error.update');
});
/// Contact
Route::get("/contact/home", [ContactController::class, 'index'])->name('contact.home');

Route::group(['middleware' => ['auth'], 'prefix' => 'about'], function () {
    Route::get('/home', [AboutController::class, 'home'])->name('abouthome');
    Route::get('/create', [AboutController::class, 'create'])->name('abouthome.create');
    Route::post('/store', [AboutController::class, 'store'])->name('abouthome.store');
    Route::get('/index', [AboutController::class, 'index'])->name('abouthome.index');
    Route::get('/edit/{id}', [AboutController::class, 'edit'])->name('abouthome.edit');
    Route::get('/destroy/{id}', [AboutController::class, 'destroy'])->name('abouthome.destroy');
    Route::post('/update/{id}', [AboutController::class, 'update'])->name('abouthome.update');
    Route::get('/settings', [AboutController::class, 'settings'])->name('abouthome.settings');
    Route::post('/settings/update', [AboutController::class, 'settingsupdate'])->name('abouthome.settingsupdate');
});

Route::group(['middleware' => ['auth'], 'prefix' => 'team'], function () {
    Route::get('/home', [TeamController::class, 'home'])->name('team');
    Route::get('/index', [TeamController::class, 'index'])->name('team.index');
    Route::get("/create", [TeamController::class, 'create'])->name('team.create');
    Route::post("/store", [TeamController::class, 'store'])->name('team.store');
    Route::get("/edit/{id}", [TeamController::class, 'edit'])->name('team.edit');
    Route::get("/destroy/{id}", [TeamController::class, 'destroy'])->name('team.destroy');
    Route::post("/update/{id}", [TeamController::class, 'update'])->name('team.update');
    Route::get('/settings', [TeamController::class, 'settings'])->name('team.settings');
    Route::post('/settings/update', [TeamController::class, 'settingsupdate'])->name('team.settingsupdate');
});

Route::group(['middleware' => ['auth'], 'prefix' => 'servicedetail'], function () {
    Route::get("/index", [ServiceDetailController::class, 'index'])->name('servicedetail');
    Route::get("/create", [ServiceDetailController::class, 'create'])->name('servicedetail.create');
    Route::post("/store", [ServiceDetailController::class, 'store'])->name('servicedetail.store');
    Route::get("/edit/{id}", [ServiceDetailController::class, 'edit'])->name('servicedetail.edit');
    Route::post("/update/{id}", [ServiceDetailController::class, 'update'])->name('servicedetail.update');
    Route::get("/destroy/{id}", [ServiceDetailController::class, 'destroy'])->name('servicedetail.destroy');
});

Route::group(['middleware' => ['auth'], 'prefix' => 'service'], function () {
    Route::get("/index", [ServiceController::class, 'index'])->name('service');
    Route::get("/create", [ServiceController::class, 'create'])->name('service.create');
    Route::get("/edit/{id}", [ServiceController::class, 'edit'])->name('service.edit');
    Route::get("/destroy/{id}", [ServiceController::class, 'destroy'])->name('service.destroy');
    Route::post("/store", [ServiceController::class, 'store'])->name('service.store');
    Route::post("/update/{id}", [ServiceController::class, 'update'])->name('service.update');
    Route::post("/ckeditor", [ServiceController::class, 'ckeditor'])->name('ckeditor.upload');
});

Route::group(['middleware' => ['auth'], 'prefix' => 'detail'], function () {
    Route::get("/funlearning", [DetailPageController::class, 'funlearning'])->name('detailpage.funlearning');
    Route::get("/meetup", [DetailPageController::class, 'meetup'])->name('detailpage.funlearning');
    Route::get("/secured", [DetailPageController::class, 'secured'])->name('detailpage.funlearning');
    Route::get("/virtual", [DetailPageController::class, 'virtual'])->name('detailpage.funlearning');
});

Route::group(['middleware' => ['auth'], 'prefix' => 'servicespage'], function () {
    Route::get("/index", [ServicePageController::class, 'index'])->name('servicespage');
    Route::get("/servicedetail/{slug}", [ServicePageController::class, 'detail'])->name('servicespage.detail');
});



Route::get("headermenu/index", [HeaderMenuItemController::class, 'index'])->name('headermenu');


Route::group(['middleware' => ['auth'], 'prefix' => 'adminpermession'], function () {
    Route::get('/home', [AdminController::class, 'index'])->name('admin.index');
    Route::get('/view/{id}', [AdminController::class, 'view'])->name('admin.view');
    Route::get('/edit/{id}', [AdminController::class, 'edit'])->name('admin.edit');
    Route::get('/create', [AdminController::class, 'create'])->name('admin.create');
    Route::get('/destroy/{id}', [AdminController::class, 'destroy'])->name('admin.destroy');
    Route::post('/store', [AdminController::class, 'store'])->name('admin.store');
    Route::post('/update/{id}', [AdminController::class, 'update'])->name('admin.update');
});

Route::group(['middleware' => ['auth'], 'prefix' => 'roles'], function () {
    Route::get('/home', [RoleController::class, 'index'])->name('role.index');
    Route::get('/create', [RoleController::class, 'create'])->name('role.create');
    Route::post('/store', [RoleController::class, 'store'])->name('role.store');
});
Route::group(['middleware' => ['auth'], 'prefix' => 'permission'], function () {
    Route::get('/home', [PermissionController::class, 'index'])->name('permission.index');
    Route::get('/create', [PermissionController::class, 'create'])->name('permission.create');
    Route::post('/store', [PermissionController::class, 'store'])->name('permission.store');
    Route::get('/destroy/{id}', [PermissionController::class, 'destroy'])->name('permission.destroy');
});
