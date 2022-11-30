<?php
class Request
{
    public static function uri()
    {
        return ltrim(parse_url($_SERVER['REQUEST_URI'])['path'], '/');
    }
    public static function method()
    {
        return $_SERVER['REQUEST_METHOD'];
    }
}
