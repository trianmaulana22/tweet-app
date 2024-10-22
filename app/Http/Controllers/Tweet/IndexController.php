<?php

namespace App\Http\Controllers\Tweet;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tweet;
use App\Services\TweetService;
class IndexController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, TweetService $tweetService)    {
       
        $tweetService = new TweetService();
        $tweets = $tweetService->getTweets();
        // dump($tweets);
        // app(\App\Exceptions\Handler::class)->render(request(), throw new \Error('dump report.'));
        return view('tweet.index')
            ->with('tweets', $tweets);
        
    }
}
