<?php

Route::group(['prefix' => 'v1', 'as' => 'api.', 'namespace' => 'Api\V1\Admin', 'middleware' => ['auth:api']], function () {
    // Permissions
    Route::apiResource('permissions', 'PermissionsApiController');

    // Roles
    Route::apiResource('roles', 'RolesApiController');

    // Users
    Route::apiResource('users', 'UsersApiController');

    // Stocks
    Route::post('stocks/media', 'StocksApiController@storeMedia')->name('stocks.storeMedia');
    Route::apiResource('stocks', 'StocksApiController');

    // Type Of Trainers
    Route::apiResource('type-of-trainers', 'TypeOfTrainerApiController');

    // Treainers
    Route::post('treainers/media', 'TreainerApiController@storeMedia')->name('treainers.storeMedia');
    Route::apiResource('treainers', 'TreainerApiController');

    // Club Carts
    Route::apiResource('club-carts', 'ClubCartsApiController');

    // Services
    Route::post('services/media', 'ServicesApiController@storeMedia')->name('services.storeMedia');
    Route::apiResource('services', 'ServicesApiController');

    // Contact Companies
    Route::apiResource('contact-companies', 'ContactCompanyApiController');

    // Contact Contacts
    Route::post('contact-contacts/media', 'ContactContactsApiController@storeMedia')->name('contact-contacts.storeMedia');
    Route::apiResource('contact-contacts', 'ContactContactsApiController');

    // Teams
    Route::apiResource('teams', 'TeamApiController');
});
