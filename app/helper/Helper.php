<?php


if (!function_exists('qrCode')) {
    function qrCode($value)
    {
        $ip = env('IP_ADDRESS');
        $folder = env('FOLDER_NAME');
        return $ip . '/' . $folder . '/public' . '/sertifikat-tanah/' . $value;
    }
}
