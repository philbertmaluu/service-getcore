<?php

use Spatie\GoogleCalendar\Event;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ProfileController;

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

Route::get('/', function(){
// Create an event instance
$event = new Event;
// Set the event details
$event->name = 'My Event';
$event->startDateTime = Carbon\Carbon::now();
$event->endDateTime = Carbon\Carbon::now()->addHour();
// $event->addAttendee(['email' => 'example@example.com']); // Optional: Add attendees

// Save the event to Google Calendar
$event->save();
$e = Event::get();
dd($e);

 });

Route::get('/',[HomeController::class, 'index']);

Route::get('/home',[HomeController::class, 'redirect'])->middleware('auth','verified');

Route::get('/service_form_view',[AdminController::class, 'form_view']);

Route::post('/add_service',[AdminController::class, 'addservice']);

//Route::post('subscribe',[HomeController::class, 'subscribe']);

Route::resource('subscribe',BookingController::class);

Route::get('viewsub',[HomeController::class, 'viewsub']);

Route::get('/cancel_sub/{id}',[HomeController::class, 'cancel_sub']);

Route::get('showsubscribers',[AdminController::class, 'showsubscribers']);

Route::get('canceled/{id}',[AdminController::class, 'canceled']);

Route::get('allservices',[AdminController::class, 'allservices']);






Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
