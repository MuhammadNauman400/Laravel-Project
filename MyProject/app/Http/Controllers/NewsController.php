<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class NewsController extends Controller
{
    public function getNews()
    {
        $apiKey = 'f9ef856ec99946fe97d28163a3c037e2'; 
        $response = Http::get('https://newsapi.org/v2/top-headlines', [
            'country' => 'us', 
            'apiKey' => $apiKey,
        ]);

      
        if ($response->successful()) {
            $newsArticles = $response->json()['articles'];
        
            if (count($newsArticles) > 0) {
                return view('frontend.news', compact('newsArticles'));
            } else {
                return view('frontend.news')->with('error', 'No news articles found for this country.');
            }
        } else {
            return view('frontend.news')->with('error', 'Unable to fetch news');
        }
    }
}
