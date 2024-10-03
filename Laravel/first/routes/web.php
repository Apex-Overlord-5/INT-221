
 <?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/admin-check', function () {
    $user = Auth::user();

    if ($user && $user->role === 'admin') {
        return redirect()->action([AdminController::class, 'dashboard']);
    } else {
        return redirect()->action([UserController::class, 'dashboard']);
    }
});

?>