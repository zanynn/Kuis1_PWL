  
<?php




// Route::get('/hello', 'WelcomeController@hello');

Route::get('/', 'HomeController'); 

Route::get('/about', 'AboutController');

Route::get('/article/{id}', 'ArticleController'); 

Route::get('/guide', 'GuideController');

Route::get('/contact', 'ContactController');

Route::get('/me', 'MeController');

Route::get('/purchase', 'BuyController');