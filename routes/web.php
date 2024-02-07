<?php
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\InnovationController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SlidercategoryController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\GalleryCategoryController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\ApproachController;
use App\Http\Controllers\MainMenuController;
use App\Http\Controllers\SubMenuController;
use App\Http\Controllers\VerticalController;
use App\Http\Controllers\SubSubMenuController;
use App\Http\Controllers\WebHomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/




Route::get('/', [WebHomeController::class, 'index']);

//admins routes starts here .
Route::get('dashboard', [CustomAuthController::class, 'dashboard']);
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom');
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom');
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');

//menus route starts here.
Route::resource('menus', MainMenuController::class);
Route::get('getMenus', [MainMenuController::class, 'getMenus'])->name('getMenus');
Route::post('/menus/{mainMenu}', [MainMenuController::class, 'destroy'])->name('menus.delete');
//menus route ends here.

//sub menu route starts here.
Route::resource('sub_menus', SubMenuController::class);
Route::get('/sub_menus/index/{id}', [SubMenuController::class, 'indexWithId'])->name('sub_menus.indexWithId');
Route::get('getSubMenus', [SubMenuController::class, 'getSubMenus'])->name('getSubMenus');
Route::post('/sub_menus/{mainMenu}', [SubMenuController::class, 'destroy'])->name('sub_menus.delete');
//sub menus route ends here.

//sub sub menu route starts here.
Route::resource('sub_sub_menus', SubSubMenuController::class);
Route::get('/sub_sub_menus/index/{id}', [SubSubMenuController::class, 'indexWithId'])->name('sub_sub_menus.indexWithId');
Route::get('getSubSubMenus', [SubSubMenuController::class, 'getSubSubMenus'])->name('getSubSubMenus');
Route::post('/sub_sub_menus/{mainMenu}', [SubSubMenuController::class, 'destroy'])->name('sub_sub_menus.delete');
//sub sub menus route ends here.




//admins routes ends here .

Auth::routes();
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::get('/user-registration', [ApplicationController::class, 'userRegistration'])->name('userRegistration');
Route::post('/user-store', [ApplicationController::class, 'userStore'])->name('userStore');
Route::get('captcha', [ApplicationController::class, 'captcha'])->name('captcha');
Route::post('/check-aadhar-number', [ApplicationController::class, 'checkAadharNumber']);

Route::get('/user-profile', [ApplicationController::class, 'userProfile']);

Route::get('/reload-captcha', [ApplicationController::class, 'reloadCaptcha']);
Route::post('/user-registration/save', [ApplicationController::class, 'userRegisterSave']);


Route::get('/filter-words', [App\Http\Controllers\ApplicationController::class, 'filterAndCountWords']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/userData', [App\Http\Controllers\HomeController::class, 'userData'])->name('userData.status');
Route::post('/bankDetailsUpdate', [App\Http\Controllers\HomeController::class, 'bankDetailsUpdate'])->name('userBankDetails.update');




Route::resource('/users', UserController::class);
Route::get('/getUsers', [UserController::class, 'getUsers'])->name('getUsers');
Route::post('/users/delete/{id}', [UserController::class, 'destroy'])->name('delete-user');
Route::post('/users/edit/{id}', [UserController::class, 'update'])->name('update-user');
Route::get('status/change', [App\Http\Controllers\HomeController::class, 'changeStatus'])->name('changeStatus');


Route::get('/profile', [App\Http\Controllers\HomeController::class, 'profile'])->name('profile');
Route::get('/password', [App\Http\Controllers\HomeController::class, 'password'])->name('password');
Route::post('/change_password', [App\Http\Controllers\HomeController::class, 'changePassword'])->name('change_password');


Route::resource('/roles', RoleController::class);
Route::get('/getRoles', [RoleController::class, 'getRoles'])->name('getRoles');
Route::get('/roles/delete/{id}', [RoleController::class, 'destroy'])->name('delete-role');
Route::post('/roles/edit/{id}', [RoleController::class, 'update'])->name('update-role');


Route::resource('/settings', SettingsController::class);
Route::post('setting/store',[SettingsController::class,'store'])->name('setting.store');

Route::resource('/slidercategories', SlidercategoryController::class);

Route::resource('/sliders', SliderController::class);
Route::get('/slider/{id?}',[App\Http\Controllers\SliderController::class, 'createSlider'])->name('slider.createSlider');

Route::resource('/gallery_category', App\Http\Controllers\GalleryCategoryController::class);

Route::resource('/gallery', App\Http\Controllers\GalleryController::class);
Route::post('/gallery/{id}', [App\Http\Controllers\GalleryController::class, 'store'])->name('store');
Route::post('gallery/update/{id}',[App\Http\Controllers\GalleryController::class, 'update'])->name('gallery.update');
Route::get('/galleries/{id}', [App\Http\Controllers\GalleryController::class, 'galleryList'])->name('gallery_list');






Route::controller(FrontendController::class)->group(function(){
   Route::get('/our_approach', 'approach')->name('home.approachs');
   Route::get('/charger_services', 'chargerServices')->name('home.chargerServices');
   Route::get('/Products', 'products')->name('home.products');
   Route::get('/cmsServices', 'cmsServices')->name('home.cmsServices');
   Route::get('/consultingSiri', 'consultingSiri')->name('home.consultingSiri');
   Route::get('/Solutions', 'Solutions')->name('home.solutions');
   Route::get('/Contact-Us', 'contact')->name('home.contact');

   Route::get('/verticals/{slug}', 'verticals')->name('home.verticals');
   Route::get('/About-us', 'aboutUs')->name('home.aboutUs');
   Route::get('/Team', 'team')->name('home.team');

   Route::get('/innovation/{slug}', 'innovation')->name('home.innovation');
  
});
Route::Resource('/admin-approach', ApproachController::class);
Route::get('getApproach',[ApproachController::class, 'getApproach'])->name('getApproach');


Route::get('/admin/verticals/{slug}', [VerticalController::class, 'index'])->name('verticalList.index');
Route::get('/vertical/create/{slug}', [VerticalController::class, 'create'])->name('verticalList.create');
Route::Resource('/admin-verticals', VerticalController::class)->except(['index','create']);
Route::get('getVerticals',[VerticalController::class, 'getVerticals'])->name('getVerticals');

Route::get('/admin/innovation/{slug}', [InnovationController::class, 'index'])->name('innovation.index');
Route::post('admin/innovation/store',[InnovationController::class,'store'])->name('innovation.store');

Route::resource('/admin/contact-us', App\Http\Controllers\ContactUsController::class);
Route::get('getContactus',[ContactUsController::class, 'getContactUs'])->name('getContactUs');
Route::post('/contact-us/delete/{id}', [ContactUsController::class, 'destroy'])->name('delete-contact');