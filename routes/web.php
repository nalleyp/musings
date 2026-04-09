<?php

use Illuminate\Support\Facades\Route;
use Artesaos\SEOTools\Facades\SEOTools;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\JsonLd;

Route::get('/', function () {
    SEOTools::setTitle('The Musings of a Bibliophile');
    SEOTools::setDescription('Honest, passionate book reviews, Wizard of Oz collectibles, and a welcoming community for readers who love beautiful stories.');
    SEOTools::setCanonical(url('/'));

    OpenGraph::setUrl(url('/'));
    OpenGraph::setType('website');

    JsonLd::setType('WebSite');
    JsonLd::addValue('url', url('/'));
    JsonLd::addValue('potentialAction', [
        '@type'       => 'SearchAction',
        'target'      => url('/reviews') . '?q={search_term_string}',
        'query-input' => 'required name=search_term_string',
    ]);

    return view('welcome');
})->name('home');

Route::get('/reviews', function () {
    return view('musings.reviews');
})->name('reviews.index');

Route::get('/reviews/{slug}', function ($_slug) {
    return view('musings.review');
})->name('reviews.show');

Route::get('/oz', function () {
    return view('musings.oz');
})->name('oz.index');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');
});

require __DIR__.'/settings.php';
