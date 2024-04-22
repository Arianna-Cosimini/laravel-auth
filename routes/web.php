<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use App\Models\project;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    // Recupera i dati dei progetti dal tuo database o da un'altra fonte
    $projects = project::all(); // Esempio, sostituisci con la tua logica di recupero dati
  
    return view('welcome', ['projects' => $projects]);
  });
  

Route::get('/index', [ProjectController::class, 'index'])->name('index');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';



Route::resource('projects', ProjectController::class);
// rotta per pagina di amministrazione
// Route::get('/admin', [DashboardController::class,'index'])->middleware('auth');
// Route::get('/admin', function () {
//     return redirect()->route('projects.index');
// })->name('admin'); 
// Route::get('/register',function (){
//     return redirect()->route('projects.index');
// })->name('register');


Route::middleware(['auth', 'verified'])
    ->name('admin.')
    ->prefix('admin')
    ->group(function () {
        Route::get('/', [DashboardController::class, 'index'])->name('index');
        Route::get('/users', [DashboardController::class, 'users'])->name('users');
    });
