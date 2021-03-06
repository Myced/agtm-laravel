<?php

Route::get('/', "HomeController@index")->name('index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/contact-us', 'HomeController@contact')->name('contact.us');

//exporters routes
Route::get('/exporters', 'ExportersController@index')->name('exporters');
Route::get('/exporters/looking', 'ExportersController@showLookingForm')->name('exporters.looking');
Route::post('/exporters/looking/store', 'ExportersController@storeLooking')->name('expoters.looking.store');

//importers
Route::get('/impoters', 'ImportersController@index')->name('importers');
Route::get('/impoters/looking', 'ImportersController@showLookingForm')->name('importers.looking');
Route::post('/impoters/looking/store', 'ImportersController@storeLooking')->name('importers.looking.store');

//routes for the LOIs and SCO
Route::get('/lois', 'LOIController@index')->name('site.lois');
Route::get('/scos', 'SCOController@index')->name("site.scos");
Route::get('/loi/looking', 'LOIController@showLookingForm')->name('loi.looking');
Route::get('/sco/looking', 'SCOController@showLookingForm')->name('sco.looking');
Route::post('/loi/looking/store', 'LOIController@storeLOILookingInfo')->name('loi.looking.store');
Route::post('/sco/looking/store', 'SCOController@storeSCOLookingInfo')->name('sco.looking.store');

//Route for the forum
Route::get('/forums', 'ForumController@index')->name('forum');
Route::get('/forum/topic/new', 'ForumController@newTopic')->name('forum.new.topic');
Route::post('/forum/topic/store', 'ForumController@storeTopic')->name('forum.topic.store');
Route::get('/forum/topic/{slug}', 'ForumController@viewThread')->name('forum.topic');

//Routes for chat
Route::get('/chats', 'ChatController@index')->name('chat');
Route::get('/chat/room', 'ChatController@chatRoom')->name('chat.room');

Route::post('/post/report', 'PostController@report_post')->name('post.report');

//route to talk to consultant
Route::get('/talk-to-consultant', 'TalkToConsultantController@showForm')->name('consultant.talk');
Route::post('/talk-to-consultant', 'TalkToConsultantController@saveInfo')->name('consultant.talk.save');

//view groups for front end links
Route::group(['prefix' => 'agents'], function(){
    Route::get("/", 'AgentsController@index')->name('agents');
    Route::get('/request', 'AgentsController@requestForm')->name('agents.request');
    Route::post('/request/store', 'AgentsController@requestStore')->name('agents.request.store');
    Route::get('/law-complain', 'AgentsController@showComplainForm')->name('agents.law-complain');
    Route::post('/law-complain.store', 'AgentsController@storeComplain')->name('agents.complain.store');
});

Route::group(['prefix' => 'mandates'], function(){
    Route::get('/', 'MandatesController@index')->name('mandates');
    Route::get('/request', 'MandatesController@showRequestForm')->name('mandates.request');
    Route::post('/request/store', 'MandatesController@storeRequest')->name('mandates.request.store');
    Route::get("/complain", 'MandatesController@showComplainForm')->name("mandates.complain");
    Route::post('/complain/store', 'MandatesController@storeComplain')->name('mandates.complain.store');
});

Route::group(['prefix' => 'admin'], function(){
    Route::get('/', 'Admin\AdminController@index')->name('admin.dashboard');

    Route::group(['prefix' => 'category'], function(){
        Route::get('/', 'Admin\CategoryController@index')->name('categories');
        Route::get('/add', 'Admin\CategoryController@create')->name('category.add');
        Route::post('/store', 'Admin\CategoryController@store')->name('category.store');
        Route::get('/{id}/edit', 'Admin\CategoryController@edit')->name('category.edit');
        Route::post('/{id}/update', 'Admin\CategoryController@update')->name('category.update');
        Route::get('/{id}/destroy', 'Admin\CategoryController@destroy')->name('category.destroy');
    });

    Route::group(['prefix' => 'chat-room'], function(){
        Route::get('/', 'Admin\ChatRoomController@index')->name('chat.rooms');
        Route::get('/add', 'Admin\ChatRoomController@add')->name('chat.room.add');
        Route::post('/store', 'Admin\ChatRoomController@store')->name('chat.room.store');
        Route::get('/{id}/edit', 'Admin\ChatRoomController@edit')->name('chat.room.edit');
        Route::post('/{id}/update', 'Admin\ChatRoomController@update')->name('chat.room.update');
        Route::get('/{id}/destroy', 'Admin\ChatRoomController@destroy')->name('chat.room.delete');
    });

    Route::group(['prefix' => 'loi'], function(){
        Route::get('/', 'Admin\LoiController@index')->name('lois');
        Route::get('/add', 'Admin\LoiController@add')->name('loi.add');
        Route::post('/store', 'Admin\LoiController@store')->name('loi.store');
        Route::get('/{loi}', 'Admin\LoiController@view')->name('loi');
        Route::get('/{loi}/edit', 'Admin\LoiController@edit')->name('loi.edit');
        Route::post('/{loi}/update', 'Admin\LoiController@update')->name('loi.update');
        Route::get('/{loi}/destroy', 'Admin\LoiController@destroy')->name('loi.destroy');
        Route::get('/{loi}/destroy2', 'Admin\LoiController@destroy2')->name('loi.destroy2');
        Route::post('/{loi}/file/store', 'Admin\LoiController@storeFile')->name('loi.file.store');
        Route::get('/loi/file/{id}/destroy', 'Admin\LoiController@deleteFile')->name('loi.file.destroy');
        Route::get('/{loi}/update/available', 'Admin\LoiController@makeAvailable')->name('loi.available');
        Route::get('/status/pending', 'Admin\LoiController@pending')->name('lois.pending');
        Route::get('/status/available', 'Admin\LoiController@available')->name('lois.available');
        Route::get('/{loi}/update/close', 'Admin\LoiController@makeClose')->name('loi.close');
        Route::get('/{loi}/update/pending', 'Admin\LoiController@makePending')->name('loi.pending');
    });

    Route::group(['prefix' => 'sco'], function(){
        Route::get('/', 'Admin\ScoController@index')->name('scos');
        Route::get('/add', 'Admin\ScoController@add')->name('sco.add');
        Route::post('/store', 'Admin\ScoController@store')->name('sco.store');
        Route::get('/{sco}', 'Admin\ScoController@view')->name('sco');
        Route::get('/{sco}/edit', 'Admin\ScoController@edit')->name('sco.edit');
        Route::post('/{sco}/update', 'Admin\ScoController@update')->name('sco.update');
        Route::get('/{sco}/destroy', 'Admin\ScoController@destroy')->name('sco.destroy');
        Route::get('/{sco}/destroy2', 'Admin\ScoController@destroy2')->name('sco.destroy2');
        Route::post('/{sco}/file/store', 'Admin\ScoController@storeFile')->name('sco.file.store');
        Route::get('/sco/file/{id}/destroy', 'Admin\ScoController@deleteFile')->name('sco.file.destroy');
        Route::get('/{sco}/update/available', 'Admin\ScoController@makeAvailable')->name('sco.available');
        Route::get('status/pending', 'Admin\ScoController@pending')->name('scos.pending');
        Route::get('status/available', 'Admin\ScoController@available')->name('scos.available');
        Route::get('/{sco}/update/close', 'Admin\ScoController@makeClose')->name('sco.close');
        Route::get('/{sco}/update/pending', 'Admin\ScoController@makePending')->name('sco.pending');
    });

    Route::group(['prefix' => 'spot-item'], function(){
        Route::get('/', 'Admin\SpotItemController@index')->name('spot.items');
        Route::get('/add', 'Admin\SpotItemController@add')->name('spot.item.add');
        Route::post('/store', 'Admin\SpotItemController@store')->name('spot.item.store');
        Route::get('/{id}/edit', 'Admin\SpotItemController@edit')->name('spot.item.edit');
        Route::post('/{id}/update', 'Admin\SpotItemController@update')->name('spot.item.update');
        Route::get('/{id}/destroy', 'Admin\SpotItemController@destroy')->name('spot.item.destroy');
        Route::get('/{id}/activate', 'Admin\SpotItemController@activate')->name('spot.item.activate');
        Route::get('/{id}/deactivate', 'Admin\SpotItemController@deactivate')->name('spot.item.deactivate');
        Route::get('/prices', 'Admin\SpotItemController@prices')->name('spot.items.prices');
        Route::post('/prices/store', 'Admin\SpotItemController@updatePrices')->name('spot.items.prices.update');
    });

    Route::group(['prefix' => 'product'], function(){
        Route::get('/', 'Admin\ProductController@index')->name('products');
        Route::get('/add', 'Admin\ProductController@add')->name('product.add');
        Route::post('/store', 'Admin\ProductController@store')->name('product.store');
        Route::get('/{product}', 'Admin\ProductController@view')->name('product');
        Route::get('/{product}/edit', 'Admin\ProductController@edit')->name('product.edit');
        Route::post('/{product}/update', 'Admin\ProductController@update')->name('product.update');
        Route::get('/{product}/destroy', 'Admin\ProductController@destroy')->name('product.destroy');
    });

    Route::group(['prefix' => 'subscription'], function(){
        Route::get('/', 'Admin\SubscriptionsController@index')->name('subscriptions');
        Route::get('/add', 'Admin\SubscriptionsController@add')->name('subscription.add');
        Route::post('/store', 'Admin\SubscriptionsController@store')->name('subscription.store');
        Route::get('/{id}/edit', 'Admin\SubscriptionsController@edit')->name('subscription.edit');
        Route::post('/{id}/update', 'Admin\SubscriptionsController@update')->name('subscription.update');
        Route::get('/{id}/destroy', 'Admin\SubscriptionsController@destroy')->name('subscription.destroy');
    });
});

//user routes for his account
Route::group(['prefix' => "user", 'middleware'=> 'auth'], function(){
    Route::get('/', 'UserController@index')->name('user.dashboard');
    Route::get('/profile', 'ProfileController@showProfile')->name('user.profile');
    Route::get('/profile/edit', 'ProfileController@edit')->name('user.profile.edit');

    //update profile sections
    Route::post('/profile/agent/update', 'ProfileController@updateAgentInfo')->name('user.profile.agent.update');

});
