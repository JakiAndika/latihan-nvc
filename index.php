<?php
class manusia
{
    var $nama;
    var $godeq;

    function __construct()
    {   
        echo 'ini construct ya </br>';
    }
    function tampilkan_nama()
    {
        return 'godeq godeq godeq </br>';
    }
    function tampilkan_godeq()
    {
        return 'asdasdasd';
    }
    function __destruct()
    {
        echo 'ini destruct ya </br>';
    }
}

$manusia = new manusia;

echo $manusia->tampilkan_nama();
