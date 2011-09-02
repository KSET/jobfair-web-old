<?php

    function get_uri_segment($segment)
    {
        $tmp = explode('=', $_SERVER['QUERY_STRING']);
        $tmp = explode("/", $tmp[1]);
        return $tmp[$segment];
    }

?>