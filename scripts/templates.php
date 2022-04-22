<?php
function use_args(...$args)
{
    global $last_args;

    $last_args = $args;
    return $args;
}













?>