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