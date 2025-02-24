<?php

use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

// Redirect to provider
Route::get('auth/{provider}', function ($provider) {
    return Socialite::driver($provider)->redirect();
});

// Handle callback
Route::get('auth/{provider}/callback', function ($provider) {
    $socialUser = Socialite::driver($provider)->user();

    $user = User::updateOrCreate(
        ['email' => $socialUser->getEmail()],
        [
            'name' => $socialUser->getName(),
            'provider' => $provider,
            'provider_id' => $socialUser->getId(),
            'avatar' => $socialUser->getAvatar(),
        ]
    );

    Auth::login($user);

    return redirect('/dashboard');
});

Route::get('/dashboard', function () {
    return view('dashboard'); // Ensure you have a dashboard view
})->middleware(['auth'])->name('dashboard');
