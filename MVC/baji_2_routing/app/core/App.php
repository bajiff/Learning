<?php namespace app\core;

class App
{
    public function _construct()
    {
        $url = $this->parseUrl();
        var_dump($url);
    }
    public function parseUrl(){
        if(isset($_GET["url"])){
            $url = rtrim($_GET["url"], "/");            return $url;
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode("/", $url);
            return $url;
        }
    }
}
