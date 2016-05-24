<?php

namespace Strebo\SocialNetworks;

use Strebo;

class Facebook extends Strebo\AbstractSocialNetwork implements Strebo\PrivateInterface
{
    private $facebook;

    public function __construct()
    {
        parent::__construct("Facebook",
            "facebook",
            "#3b5999",
            [null, null, null],
            getenv("strebo_facebook_1"),
            getenv("strebo_facebook_2"),
            "http://strebo.net/?Facebook=1");

        $this->facebook = new \Facebook\Facebook(
            ['app_id' => $this->getApiKey(),
                'app_secret' => $this->getApiSecret(),
                'default_graph_version' => 'v2.6']
        );
    }

    public function connect($code)
    {
        $client = $this->facebook->getOAuth2Client();
        $token = $client->getAccessTokenFromCode($code[0], $this->getApiCallback());
        return [$token, null];
    }

    public function getPersonalFeed($user)
    {
        $token = $user->getAuthorizedToken($this->getName());
        $posts = $this->facebook->get('/me/feed', $token);
        var_dump($posts);

    }

    public function encodeJSON($json)
    {
        return parent::encodeJSON($json); // TODO: Change the autogenerated stub
    }

    public function formatTime($time)
    {
        return parent::formatTime($time); // TODO: Change the autogenerated stub
    }

    public function isTokenValid($user)
    {
        $expiringDate = $user->getAuthorizedToken($this->getName());
        $expiringDate = $expiringDate["expiresAt"];
        $now = new DateTime(date("Y-m-d H:i:s.u"));

        if ($now->diff($expiringDate)->format('%R') == "-") {
            $user->removeToken($this->getName());
            $user->removeClient($this->getName());
        }
    }

}