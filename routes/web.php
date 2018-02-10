<?php

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



// Route::get('{lang}/products', 'ProductController@index')->name('products');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth', 'prefix' => '/admin', 'namespace' => 'Admin'], function () {
	Route::get('/articles', 'ArticleController@index')->name('adminArticles');
	Route::get('/articles/create', 'ArticleController@create')->name('adminArticlesCreate');
	Route::post('/articles', 'ArticleController@store')->name('adminArticlesStore');
	Route::get('/articles/{id}/edit', 'ArticleController@edit')->name('adminArticlesEdit');
	Route::put('/articles/{id}', 'ArticleController@update')->name('adminArticlesUpdate');
	Route::get('/articles/{id}/delete', 'ArticleController@destroy')->name('adminArticlesDelete');
	Route::get('/articles/{id}/{lang}', 'ArticleController@trans')->name('adminArticlesTrans');
	Route::put('/articles/trans/{id}', 'ArticleController@translate')->name('adminArticlesTranslate');

	Route::get('/category_types', 'Category_typeController@index')->name('adminCategory_types');
	Route::get('/category_types/create', 'Category_typeController@create')->name('adminCategory_typesCreate');
	Route::post('/category_types', 'Category_typeController@store')->name('adminCategory_typesStore');
	Route::get('/category_types/{id}/edit', 'Category_typeController@edit')->name('adminCategory_typesEdit');
	Route::put('/category_types/{id}', 'Category_typeController@update')->name('adminCategory_typesUpdate');
	Route::get('/category_types/{id}/delete', 'Category_typeController@destroy')->name('adminCategory_typesDelete');
	Route::get('/category_types/{id}/{lang}', 'Category_typeController@trans')->name('adminCategory_typesTrans');
	Route::put('/category_types/trans/{id}', 'Category_typeController@translate')->name('adminCategory_typesTranslate');


	Route::get('/categories', 'CategoryController@index')->name('adminCategories');
	Route::get('/categories/create', 'CategoryController@create')->name('adminCategoriesCreate');
	Route::post('/categories', 'CategoryController@store')->name('adminCategoriesStore');
	Route::get('/categories/{id}/edit', 'CategoryController@edit')->name('adminCategoriesEdit');
	Route::put('/categories/{id}', 'CategoryController@update')->name('adminCategoriesUpdate');
	Route::get('/categories/{id}/delete', 'CategoryController@destroy')->name('adminCategoriesDelete');
	Route::get('/categories/{id}/{lang}', 'CategoryController@trans')->name('adminCategoriesTrans');
	Route::put('/categories/trans/{id}', 'CategoryController@translate')->name('adminCategoriesTranslate');

	Route::get('/news', 'NewsController@index')->name('adminNews');
	Route::get('/news/create', 'NewsController@create')->name('adminNewsCreate');
	Route::post('/news', 'NewsController@store')->name('adminNewsStore');
	Route::get('/news/{id}/edit', 'NewsController@edit')->name('adminNewsEdit');
	Route::put('/news/{id}', 'NewsController@update')->name('adminNewsUpdate');
	Route::get('/news/{id}/delete', 'NewsController@destroy')->name('adminNewsDelete');
	Route::get('/news/{id}/{lang}', 'NewsController@trans')->name('adminNewsTrans');
	Route::put('/news/trans/{id}', 'NewsController@translate')->name('adminNewsTranslate');

	Route::get('/partners', 'PartnerController@index')->name('adminPartners');
	Route::get('/partners/create', 'PartnerController@create')->name('adminPartnersCreate');
	Route::post('/partners', 'PartnerController@store')->name('adminPartnersStore');
	Route::get('/partners/{id}/edit', 'PartnerController@edit')->name('adminPartnersEdit');
	Route::put('/partners/{id}', 'PartnerController@update')->name('adminPartnersUpdate');
	Route::get('/partners/{id}/delete', 'PartnerController@destroy')->name('adminPartnersDelete');

	Route::get('/products', 'ProductController@index')->name('adminProducts');
	Route::get('/products/create', 'ProductController@create')->name('adminProductsCreate');
	Route::post('/products', 'ProductController@store')->name('adminProductsStore');
	Route::get('/products/{id}/edit', 'ProductController@edit')->name('adminProductsEdit');
	Route::put('/products/{id}', 'ProductController@update')->name('adminProductsUpdate');
	Route::get('/products/{id}/delete', 'ProductController@destroy')->name('adminProductsDelete');
	Route::get('/products/{id}/{lang}', 'ProductController@trans')->name('adminProductsTrans');
	Route::put('/products/trans/{id}', 'ProductController@translate')->name('adminProductsTranslate');

	Route::get('/projects', 'ProjectController@index')->name('adminProjects');
	Route::get('/projects/create', 'ProjectController@create')->name('adminProjectsCreate');
	Route::post('/projects', 'ProjectController@store')->name('adminProjectsStore');
	Route::get('/projects/{id}/edit', 'ProjectController@edit')->name('adminProjectsEdit');
	Route::put('/projects/{id}', 'ProjectController@update')->name('adminProjectsUpdate');
	Route::get('/projects/{id}/delete', 'ProjectController@destroy')->name('adminProjectsDelete');
	Route::get('/projects/{id}/{lang}', 'ProjectController@trans')->name('adminProjectsTrans');
	Route::put('/projects/trans/{id}', 'ProjectController@translate')->name('adminProjectsTranslate');

	Route::get('/solutions', 'SolutionController@index')->name('adminSolutions');
	Route::get('/solutions/create', 'SolutionController@create')->name('adminSolutionsCreate');
	Route::post('/solutions', 'SolutionController@store')->name('adminSolutionsStore');
	Route::get('/solutions/{id}/edit', 'SolutionController@edit')->name('adminSolutionsEdit');
	Route::put('/solutions/{id}', 'SolutionController@update')->name('adminSolutionsUpdate');
	Route::get('/solutions/{id}/delete', 'SolutionController@destroy')->name('adminSolutionsDelete');
	Route::get('/solutions/{id}/{lang}', 'SolutionController@trans')->name('adminSolutionsTrans');
	Route::put('/solutions/trans/{id}', 'SolutionController@translate')->name('adminSolutionsTranslate');
	
	Route::get('/videos', 'VideoController@index')->name('adminVideos');
	Route::get('/videos/create', 'VideoController@create')->name('adminVideosCreate');
	Route::post('/videos', 'VideoController@store')->name('adminVideosStore');
	Route::get('/videos/{id}/edit', 'VideoController@edit')->name('adminVideosEdit');
	Route::put('/videos/{id}', 'VideoController@update')->name('adminVideosUpdate');
	Route::get('/videos/{id}/delete', 'VideoController@destroy')->name('adminVideosDelete');
	Route::get('/videos/{id}/{lang}', 'VideoController@trans')->name('adminVideosTrans');
	Route::put('/videos/trans/{id}', 'VideoController@translate')->name('adminVideosTranslate');

	Route::get('/you-knows', 'You_knowController@index')->name('adminYou_knows');
	Route::get('/you-knows/create', 'You_knowController@create')->name('adminYou_knowsCreate');
	Route::post('/you-knows', 'You_knowController@store')->name('adminYou_knowsStore');
	Route::get('/you-knows/{id}/edit', 'You_knowController@edit')->name('adminYou_knowsEdit');
	Route::put('/you-knows/{id}', 'You_knowController@update')->name('adminYou_knowsUpdate');
	Route::get('/you-knows/{id}/delete', 'You_knowController@destroy')->name('adminYou_knowsDelete');
	Route::get('/you-knows/{id}/{lang}', 'You_knowController@trans')->name('adminYou_knowsTrans');
	Route::put('/you-knows/trans/{id}', 'You_knowController@translate')->name('adminYou_knowsTranslate');
	
	Route::resource('testimonial', 'TestimonialController');

	Route::get('/blocks', 'BlockController@index')->name('adminBlocks');
	Route::get('/blocks/create', 'BlockController@create')->name('adminBlocksCreate');
	Route::post('/blocks', 'BlockController@store')->name('adminBlocksStore');
	Route::get('/blocks/{id}/edit', 'BlockController@edit')->name('adminBlocksEdit');
	Route::put('/blocks/{id}', 'BlockController@update')->name('adminBlocksUpdate');
	Route::get('/blocks/{id}/delete', 'BlockController@destroy')->name('adminBlocksDelete');
	Route::get('/blocks/{id}/{lang}', 'BlockController@trans')->name('adminBlocksTrans');
	Route::put('/blocks/trans/{id}', 'BlockController@translate')->name('adminBlocksTranslate');

});
Route::get('/', function() {
	return redirect('vi');
});
Route::get('/language/{language}', 'LanguageController@lang')->name('');

Route::group(['middleware' => 'localization', 'prefix' => '{lang}'], function () {
	Route::get('/', 'HomePageController@index')->name('home');

	// Route::get('/products', 'ProductController@index')->name('products');

	// Route::get('/products/{slug}', 'ProductController@show')->name('productsDetail');

	Route::get('/products/{slug}', 'ProductController@show')->name('productsDetail');

	Route::get('/products', 'ProductController@index')->name('products');

	Route::get('/about-us', 'ArticleController@about_us')->name('about-us');

	Route::get('/policy', 'ArticleController@policy')->name('policy');

	Route::get('/articles/{slug}', 'ArticleController@detail')->name('articleDetails');

	Route::get('/categories/{id}', 'CategoryController@index')->name('categoriesDetail');

	Route::get('/solutions', 'SolutionController@index')->name('solutions');

	Route::get('/solutions/{id}', 'SolutionController@detail')->name('solutionDetail');

	Route::get('/projects', 'ProjectController@index')->name('projects');

	Route::get('/projects/{slug}', 'ProjectController@detail')->name('projectDetail');

	Route::get('/partners', 'PartnerController@index')->name('partners');

	Route::get('/news', 'NewsController@index')->name('news');

	Route::get('/news/{slug}', 'NewsController@detail')->name('newsDetail');

	Route::get('/youknows/{id}', 'YouknowController@detail')->name('youknowsDetail');

	Route::get('/youknows', 'YouknowController@index')->name('youknows');

	Route::get('/dai-ly/{slug}', 'BlockController@block')->name('daily');

	Route::get('/ho-tro-doi-tac/{slug}', 'BlockController@block')->name('hotro');

	Route::get('/tai-lieu/{slug}', 'BlockController@block')->name('tai-lieu');

	Route::get('search', 'SearchController@search')->name('Search');


});

// Route::get('/articles/doinet', 'ArticleController@doinet')->name('doinet');
// Route::get('/articles/sanpham', 'ArticleController@sanpham')->name('sanpham');
// Route::get('/articles/tintuc', 'ArticleController@tintuc')->name('tintuc');
// Route::get('/products', 'ProductController@index')->name('products');
// Route::get('products/{slug}', 'ProductController@show')->name('productsDetail');
// Route::get('/youknows', 'YouknowController@index');
// Route::get('dai-ly/{slug}', function ($slug) {
//     return view('daily');
// })->name('daily');


Route::group(['middleware' => 'auth'], function () {
    Route::get('/laravel-filemanager', '\Unisharp\Laravelfilemanager\controllers\LfmController@show');
    Route::post('/laravel-filemanager/upload', '\Unisharp\Laravelfilemanager\controllers\UploadController@upload');
    // list all lfm routes here...
});
