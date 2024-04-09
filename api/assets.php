<?php

/**
 * Built assets aren't currently routeable via vercel-php
 * Manually route assets to be found
 */
if ($_GET['type'] === 'css') {
    header("Content-type: text/css; charset: UTF-8");
    echo require __DIR__ . '/../public/css/' . basename($_GET['file']);
} else if ($_GET['type'] === 'js') {
    header('Content-Type: application/javascript; charset: UTF-8');
    echo require __DIR__ . '/../public/js/' . basename($_GET['file']);
} else if ($_GET['type'] === 'jpg') {
    header("Content-type: image/jpeg");
    echo file_get_contents(__DIR__ . '/../public/images/' . basename($_GET['file']));
} else if ($_GET['type'] === 'tff') {
    header("Content-type: application/x-font-ttf");
    echo file_get_contents(__DIR__ . '/../public/fonts/' . basename($_GET['file']));
}else if ($_GET['type'] === 'woff') {
    header("Content-type: application/font-woff");
    echo file_get_contents(__DIR__ . '/../public/fonts/' . basename($_GET['file']));
}else if ($_GET['type'] === 'woff2') {
    header("Content-type: application/font-woff2");
    echo file_get_contents(__DIR__ . '/../public/fonts/' . basename($_GET['file']));
}


// if ($_GET['type'] === 'css') {
//     header("Content-type: text/css; charset: UTF-8");
//     echo require __DIR__ . '/../public/css/' . basename($_GET['file']);
// } else if ($_GET['type'] === 'js') {
//     header('Content-Type: application/javascript; charset: UTF-8');
//     echo require __DIR__ . '/../public/js/' . basename($_GET['file']);
// } else if ($_GET['type'] === 'jpg') {
//     header("Content-type: image/jpeg");
//     echo file_get_contents(__DIR__ . '/../public/nuxt/' . basename($_GET['file']));
// } else if ($_GET['type'] === 'tff') {
//     header("Content-type: application/x-font-ttf");
//     echo file_get_contents(__DIR__ . '/../public/nuxt/' . basename($_GET['file']));
// }else if ($_GET['type'] === 'woff') {
//     header("Content-type: application/font-woff");
//     echo file_get_contents(__DIR__ . '/../public/nuxt/' . basename($_GET['file']));
// }else if ($_GET['type'] === 'woff2') {
//     header("Content-type: application/font-woff2");
//     echo file_get_contents(__DIR__ . '/../public/nuxt/' . basename($_GET['file']));
// }