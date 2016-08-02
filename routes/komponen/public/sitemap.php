<?php

use App\Models\Mst\Berita;

Route::get('sitemap.xml', function()
{
    // create sitemap
    $sitemap = App::make("sitemap");

    // set cache
    //$sitemap->setCache('laravel.sitemap-index', 3600);

    // add sitemaps (loc, lastmod (optional))
    $sitemap->addSitemap(URL::to('/'));




    /* artikel */
    $berita = Berita::where('is_published', '=', 1)->get();

    foreach($berita as $list){
        $sitemap->addSitemap(URL::to('/'.$list->slug));    
    }


    // show sitemap
    return $sitemap->render('sitemapindex');
});