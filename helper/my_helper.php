<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    function random_str($para = 6){
        $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        // Output: video-g6swmAP8X5VG4jCi.mp4
        return substr(str_shuffle($permitted_chars), 0, $para);
    }
