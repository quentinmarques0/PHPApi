<?php

function using($apifile)
{
    $_file = "API/$apifile";
    $line = "";
    $isPhPOpen = false;
    $isPhPClosed = false;
    if($file = fopen($_file, "r")){
        while(!feof($file)){
            $line = $line.fgets($file);
        }
    }
    $isPhPOpen = str_contains($line,'<?php');
    $isPhPClosed = str_contains($line,'?>');

    //echo "isPhPOpen = $isPhPOpen";
    //echo "isPhPClosed = $isPhPClosed";
    //echo "$apifile";
    if($isPhPOpen){
        $line = '?>'.$line;
    }

    if($isPhPClosed){
        $line = $line.'<?php';
    }
    eval("$line");
}

class Core
{
    public static function EndPHP(){
        return '?>';
    }
    public static function StartPHP(){
        return '<?php';
    }
}

function split(string $pattern, string $string, int $limit = PHP_INT_MAX)
{
    return explode($pattern, $string, $limit);
}
function str_contains_any(...$args)
{
    $str = $args[0];
    for($i = 1; $i < count($args); $i++)
    {
        if(str_contains($args[$i], $str))
        {
            return true;
        }
    }
    return false;
}
function str_contains_any_pairs(...$args)
{
    $str = $args[0];
    for($i = 1; $i < count($args); $i++)
    {
        if(str_contains($args[$i][0], $str) && str_contains($args[$i][1], $str))
        {
            return true;
        }
    }
    return false;
}