<?php

return [
    'disable' => false,
    'characters' => ['0', '2', '6', '8', '9'],
    'default' => [
        'length' => 4,
        'width' => 80,
        'height' => 38,
        'math' => false,
        'expire' => 30,
        'encrypt' => false,
        'bgColors' => ['#fff'],
        'fontColors' => ['#000'],
        'lines' => 20,
        'bgImage' => false,
        'lineColor' => ['#000'],
        'quality' => 100,
    ],
    'math' => [
        'length' => 9,
        'width' => 120,
        'height' => 36,
        'quality' => 90,
        'math' => true,
    ],

    'flat' => [
        'length' => 6,
        'width' => 160,
        'height' => 46,
        'quality' => 90,
        'lines' => 6,
        'bgImage' => false,
        'bgColor' => '#ecf2f4',
        'fontColors' => ['#2c3e50', '#c0392b', '#16a085', '#c0392b', '#8e44ad', '#303f9f', '#f57c00', '#795548'],
        'contrast' => -5,
    ],
    'mini' => [
        'length' => 3,
        'width' => 60,
        'height' => 32,
    ],
    'inverse' => [
        'length' => 5,
        'width' => 120,
        'height' => 36,
        'quality' => 90,
        'sensitive' => true,
        'angle' => 12,
        'sharpen' => 10,
        'blur' => 2,
        'invert' => true,
        'contrast' => -5,
    ]
];
