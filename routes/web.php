<?php

use Illuminate\Support\Facades\Route;

// Home
Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/privacy-policy', function () {
    return view('policy');
})->name('policy');

Route::get('/terms-of-service', function () {
    return view('terms');
})->name('terms');

// Company Routes
Route::prefix('company')->name('company.')->group(function () {
    Route::get('/about', function () {
        return view('company.about');
    })->name('about');
    
    Route::get('/leadership', function () {
        return view('company.leadership');
    })->name('leadership');
    
    Route::get('/history', function () {
        return view('company.history');
    })->name('history');
});

// Business Routes
Route::prefix('business')->name('business.')->group(function () {
    Route::get('/operations', function () {
        return view('business.operations');
    })->name('operations');
    
    Route::get('/technology', function () {
        return view('business.technology');
    })->name('technology');
    
    Route::get('/products', function () {
        return view('business.products');
    })->name('products');
});

// Sustainability Routes
Route::prefix('sustainability')->name('sustainability.')->group(function () {
    Route::get('/', function () {
        return view('sustainability.environment');
    })->name('index');
    
    Route::get('/environment', function () {
        return view('sustainability.environment');
    })->name('environment');
    
    Route::get('/safety', function () {
        return view('sustainability.safety');
    })->name('safety');
    
    Route::get('/community', function () {
        return view('sustainability.community');
    })->name('community');
});

// Investors Routes
Route::prefix('investors')->name('investors.')->group(function () {
    Route::get('/', function () {
        return view('investors.financials');
    })->name('index');
    
    Route::get('/financials', function () {
        return view('investors.financials');
    })->name('financials');
    
    Route::get('/reports', function () {
        return view('investors.reports');
    })->name('reports');
    
    Route::get('/presentations', function () {
        return view('investors.presentations');
    })->name('presentations');
});

// Media Routes
Route::prefix('media')->name('media.')->group(function () {
    Route::get('/', function () {
        return view('media.news');
    })->name('index');
    
    Route::get('/news', function () {
        return view('media.news');
    })->name('news');
    
    Route::get('/press', function () {
        return view('media.press');
    })->name('press');
    
    Route::get('/gallery', function () {
        return view('media.gallery');
    })->name('gallery');
});

// Careers Routes
Route::prefix('careers')->name('careers.')->group(function () {
    Route::get('/', function () {
        return view('careers.index');
    })->name('index');
    
    Route::get('/opportunities', function () {
        return view('careers.index');
    })->name('opportunities');
    
    Route::get('/culture', function () {
        return view('careers.culture');
    })->name('culture');
});
