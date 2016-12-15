<?php
/**
 * Created by PhpStorm.
 * User: ematgrz
 * Date: 2016-12-15
 * Time: 15:21
 */
$files = glob('pictures/*.{jpg,png,gif}', GLOB_BRACE);
foreach($files as $file) {
    $src = '';
    echo $file.' ';
    echo '<img style="max-width: 150px; max-height: 100px;" src="../'.$file.'"></br>';
}