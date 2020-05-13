<?

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


Route::get('users', function () {
    // todo add tenant views
    return App\Tenant\Models\User::all();
});
