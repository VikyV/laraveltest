<?php


namespace App\Http\Services;

use Abraham\TwitterOAuth\TwitterOAuth;

class Twitter
{
    private $consumerKey;

    private $consumerSecret;

    private $accessToken;

    private $accessTokenSecret;

    private $cache;



    public function __construct()
    {
        $this->consumerKey = config('services.twitter.consumerKey');
        $this->consumerSecret = config('services.twitter.consumerSecret');
        $this->accessToken = config('services.twitter.accessToken');
        $this->accessTokenSecret = config('services.twitter.accessTokenSecret');
        $this->cache = storage_path().'/twitter/tweets.txt';
    }

    public function getTweets()
    {
        if ( time() - filemtime($this->cache) > 60 )
        {

            $connection = new TwitterOAuth($this->consumerKey, $this->consumerSecret, $this->accessToken, $this->accessTokenSecret);

            $tweets = $connection->get("statuses/user_timeline", [
                'screen_name' => '3WAcademy',
                'exclude_replies' => true,
                'count' => 5

            ]);

            file_put_contents($this->cache, serialize($tweets));
        }
        else
        {

            $tweets = unserialize(file_get_contents($this->cache));
        }


        return $tweets;
    }
}





