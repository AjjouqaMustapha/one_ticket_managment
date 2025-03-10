<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\EmmployerRoleController;
use App\Http\Controllers\EmployerController;
use App\Http\Controllers\EmployerIssueController;
use App\Http\Controllers\IssueController;
use App\Http\Controllers\PoliceController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});




/* ---------------------- Admin route ---------------------- */

Route::prefix('admin')->group(function (){
    /**-------------------------------login and log out admin---------------------------------------------- */
    Route::post('/logout',[AdminController::class, 'Logout'])->name('admin.logout')->middleware(['auth:admin']);
    Route::get('/login',[AdminController::class, 'Index'])->name('login_form')->middleware('guest');
    Route::post('/login/owner',[AdminController::class, 'Login'])->name('login.admin')->middleware(['guest']);
    /**-------------------------------login and log out admin---------------------------------------------- */

    /**-------------------------------Dashboard---------------------------------------------- */

    Route::get('/dashboard',[AdminController::class, 'Dashboard'])->name('admin.dashboard')->middleware(['auth:admin']);

            /**-------------------------------users---------------------------------------------- */

    Route::get('/dashboard/Users',[UsersController::class, 'Users'])->name('users.users')->middleware(['auth:admin']);
    Route::delete('/dashboard/Users/{id}',[UsersController::class, 'UsersDelete'])->name('users.users.delete')->middleware(['auth:admin']);

    Route::get('/dashboard/Admins',[UsersController::class, 'Admins'])->name('users.admins')->middleware(['auth:admin']);
    Route::delete('/dashboard/Admins/{id}',[UsersController::class, 'AdminsDelete'])->name('users.admins.delete')->middleware(['auth:admin']);

    Route::get('/dashboard/Employers',[UsersController::class, 'Employers'])->name('users.employers')->middleware(['auth:admin']);
    Route::delete('/dashboard/Employers/{id}',[UsersController::class, 'EmployersDelete'])->name('users.employers.delete')->middleware(['auth:admin']);
            /**-----------------------------end users-------------------------------------------- */

    Route::get('/dashboard/Polices',[PoliceController::class, 'index'])->name('polices.index')->middleware(['auth:admin']);
    Route::delete('/dashboard/Polices/{id}',[PoliceController::class, 'destroy'])->name('polices.destroy')->middleware(['auth:admin']);
    Route::get('/dashboard/Polices/info/{id}',[PoliceController::class, 'show'])->name('polices.show')->middleware(['auth:admin']);

    Route::get('/dashboard/Tickets',[IssueController::class, 'index'])->name('issue.index')->middleware(['auth:admin']);
    Route::get('/dashboard/Tickets/{id}',[IssueController::class, 'detail'])->name('issue.detail')->middleware(['auth:admin']);
    Route::post('/dashboard/Tickets/Forward',[EmployerIssueController::class, 'store'])->name('issue.forward')->middleware(['auth:admin']);






    /**-------------------------------End Dashboard---------------------------------------------- */

    Route::get('/register',[AdminController::class, 'Register'])->name('admin.register');
    Route::post('/register',[AdminController::class, 'Store'])->name('admin.store');
    Route::get('/profile',[AdminController::class, 'Profile'])->name('admin.profile');
});


/* -------------------- End Admin route -------------------- */














/* ---------------------- Employer route ---------------------- */

Route::prefix('employer')->group(function (){
    /**-------------------------------login and log out employer---------------------------------------------- */
    Route::post('/logout',[EmployerController::class, 'Logout'])->name('employer.logout');
    Route::get('/login',[EmployerController::class, 'Index'])->name('employer.login')->middleware('guest');
    Route::post('/login/owner',[EmployerController::class, 'Login'])->name('employer.check')->middleware('guest');
    Route::get('/dashboard',[EmployerController::class, 'Dashboard'])->name('employer.dashboard')->middleware(['auth:employer']);
    /**-------------------------------End login and log out employer---------------------------------------------- */

    /**-------------------------------Dashboard---------------------------------------------- */
    Route::get('/dashboard/tickets',[EmployerController::class, 'Tickets'])->name('employer.ticket')->middleware(['auth:employer']);
    Route::get('/dashboard/Tickets/{id}',[IssueController::class, 'detail'])->name('issue.detail.employer')->middleware(['auth:employer']);
    Route::post('/dashboard/Tickets/{id}',[IssueController::class, 'solved'])->name('issue.solved.employer')->middleware(['auth:employer']);
    /**-------------------------------End Dashboard---------------------------------------------- */

    Route::get('/register',[EmployerController::class, 'Register'])->name('employer.register')->middleware(['guest']);
    Route::post('/register',[EmployerController::class, 'Store'])->name('employer.store')->middleware(['guest']);
    Route::get('/profile',[EmployerController::class, 'Profile'])->name('employer.profile')->middleware(['auth:employer']);
    Route::post('/notifications/mark-as-read', [NotificationController::class, 'markAsRead'])->name('notifications.read')->middleware(['auth:employer']);
});


/* -------------------- End Employer route -------------------- */





/* ---------------------- User route ---------------------- */
Route::prefix('user')->group(function (){
    /**-------------------------------Dashboard---------------------------------------------- */
    Route::get('/dashboard', [UsersController::class, 'dashboard'])->name('user.dashboard')->middleware('auth');
    Route::get('/dashboard/police/{id}', [UsersController::class, 'police'])->name('user.police')->middleware('auth');

    /**-------------------------------End Dashboard---------------------------------------------- */
});
/* -------------------- End Employer route -------------------- */



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
