<?php

Route::redirect('/', '/login');
Route::get('/home', function () {
    if (session('status')) {
        return redirect()->route('admin.home')->with('status', session('status'));
    }

    return redirect()->route('admin.home');
});

Auth::routes(['register' => false]);
// Admin

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {
    Route::get('/', 'HomeController@index')->name('home');
    // Permissions
    Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');
    Route::resource('permissions', 'PermissionsController');

    // Roles
    Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');
    Route::resource('roles', 'RolesController');

    // Users
    Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');
    Route::resource('users', 'UsersController');

    // Stocks
    Route::delete('stocks/destroy', 'StocksController@massDestroy')->name('stocks.massDestroy');
    Route::post('stocks/media', 'StocksController@storeMedia')->name('stocks.storeMedia');
    Route::resource('stocks', 'StocksController');

    // Type Of Trainers
    Route::delete('type-of-trainers/destroy', 'TypeOfTrainerController@massDestroy')->name('type-of-trainers.massDestroy');
    Route::resource('type-of-trainers', 'TypeOfTrainerController');

    // Treainers
    Route::delete('treainers/destroy', 'TreainerController@massDestroy')->name('treainers.massDestroy');
    Route::post('treainers/media', 'TreainerController@storeMedia')->name('treainers.storeMedia');
    Route::resource('treainers', 'TreainerController');

    // Club Carts
    Route::delete('club-carts/destroy', 'ClubCartsController@massDestroy')->name('club-carts.massDestroy');
    Route::resource('club-carts', 'ClubCartsController');

    // Services
    Route::delete('services/destroy', 'ServicesController@massDestroy')->name('services.massDestroy');
    Route::post('services/media', 'ServicesController@storeMedia')->name('services.storeMedia');
    Route::resource('services', 'ServicesController');

    // Contact Companies
    Route::delete('contact-companies/destroy', 'ContactCompanyController@massDestroy')->name('contact-companies.massDestroy');
    Route::resource('contact-companies', 'ContactCompanyController');

    // Contact Contacts
    Route::delete('contact-contacts/destroy', 'ContactContactsController@massDestroy')->name('contact-contacts.massDestroy');
    Route::post('contact-contacts/media', 'ContactContactsController@storeMedia')->name('contact-contacts.storeMedia');
    Route::resource('contact-contacts', 'ContactContactsController');

    // Teams
    Route::delete('teams/destroy', 'TeamController@massDestroy')->name('teams.massDestroy');
    Route::resource('teams', 'TeamController');
});
