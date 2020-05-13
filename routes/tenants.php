<?

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('users', function () {
    // todo add tenant views
    return App\Tenant\Models\User::all();
});



// Route::middleware('web')
//     ->namespace('App\\Http\\Controllers\\Tenant\\')
//     ->group(function () {
//         Route::get('/', 'HomeController');
//     });
