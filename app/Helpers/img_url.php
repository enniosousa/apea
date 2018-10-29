<?php

if (!function_exists('img_url')) {

    /**
     * description
     *
     * @param
     * @return
     */
    function img_url(string $path, string $opcao = null) : string {
        $path = str_replace('\\', '/', $path);
        $path = str_start($path, '/');
        $opcao = $opcao ? "/$opcao" : '';
        return asset($opcao.$path);
    }
}
