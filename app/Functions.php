<?php

namespace App;

class Functions
{
    public static function human_filesize($bytes, $decimals = 2)
    {
        $size = array('b','kb','Mb','gB','TB','PB','EB','ZB','YB');
        $factor = floor((strlen($bytes) - 1) / 3);
        return sprintf("%.{$decimals}f", $bytes / pow(1024, $factor)) . @$size[$factor];
    }
}
