<?

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


Route::get('/', function () {
    return view('welcome');
});
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('users', function () {
    return App\Tenant\Models\User::all();
});

Route::get('/check', function () {
    return 'working asf'
});
