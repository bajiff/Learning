<?php

$brands = [
    [
        "id" => 1,
        "brand" => "Samsung",
        "model" => "Galaxy S21",
        "specifications" => [
            "os" => "Android 11",
            "processor" => "Exynos 2100",
            "ram" => "8GB",
            "storage" => "128GB",
            "battery" => "4000mAh",
            "camera" => [
                "rear" => "12MP+64MP+12MP",
                "front" => "10MP"
            ],
            "display" => [
                "size" => "6.2 inches",
                "resolution" => "1080 x 2400 pixels"
            ]
        ],
        "release_date" => "2021-01-29",
        "thumbnail" => "https://example.com/images/galaxy_s21_thumbnail.jpg",
        "price" => "$799"
    ],
    [
        "id" => 2,
        "brand" => "Apple",
        "model" => "iPhone 13",
        "specifications" => [
            "os" => "iOS 15",
            "processor" => "A15 Bionic",
            "ram" => "6GB",
            "storage" => "128GB",
            "battery" => "3240mAh",
            "camera" => [
                "rear" => "12MP+12MP",
                "front" => "12MP"
            ],
            "display" => [
                "size" => "6.1 inches",
                "resolution" => "1170 x 2532 pixels"
            ]
        ],
        "release_date" => "2021-09-24",
        "thumbnail" => "https://example.com/images/iphone_13_thumbnail.jpg",
        "price" => "$899"
    ],
    [
        "id" => 3,
        "brand" => "Xiaomi",
        "model" => "Mi 11",
        "specifications" => [
            "os" => "Android 11",
            "processor" => "Snapdragon 888",
            "ram" => "8GB",
            "storage" => "128GB",
            "battery" => "4600mAh",
            "camera" => [
                "rear" => "108MP+13MP+5MP",
                "front" => "20MP"
            ],
            "display" => [
                "size" => "6.81 inches",
                "resolution" => "1440 x 3200 pixels"
            ]
        ],
        "release_date" => "2021-01-01",
        "thumbnail" => "https://example.com/images/mi_11_thumbnail.jpg",
        "price" => "$749"
    ],
    [
        "id" => 4,
        "brand" => "OnePlus",
        "model" => "OnePlus 9",
        "specifications" => [
            "os" => "Android 11",
            "processor" => "Snapdragon 888",
            "ram" => "8GB",
            "storage" => "128GB",
            "battery" => "4500mAh",
            "camera" => [
                "rear" => "48MP+50MP+2MP",
                "front" => "16MP"
            ],
            "display" => [
                "size" => "6.55 inches",
                "resolution" => "1080 x 2400 pixels"
            ]
        ],
        "release_date" => "2021-03-23",
        "thumbnail" => "https://example.com/images/oneplus_9_thumbnail.jpg",
        "price" => "$729"
    ],
    [
        "id" => 5,
        "brand" => "Google",
        "model" => "Pixel 6",
        "specifications" => [
            "os" => "Android 12",
            "processor" => "Google Tensor",
            "ram" => "8GB",
            "storage" => "128GB",
            "battery" => "4614mAh",
            "camera" => [
                "rear" => "50MP+12MP",
                "front" => "8MP"
            ],
            "display" => [
                "size" => "6.4 inches",
                "resolution" => "1080 x 2400 pixels"
            ]
        ],
        "release_date" => "2021-10-28",
        "thumbnail" => "https://example.com/images/pixel_6_thumbnail.jpg",
        "price" => "$599"
    ]
];

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan</title>
    <style>
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            font-family: sans-serif;
            text-decoration: none;
            list-style-type: none;
        }
        a{
            color: red;
            
        }
        ul{
            padding: 10px;
        }
        li{
            padding: 5px 15px;

        }
    </style>
</head>

<body>
    <h1>
        Kumpulan Merk HP

    </h1>
    <?php foreach ($brands as $brand) : ?>
        <ul>
            
            <li><a href="#"><img src="images/a.png" alt="" srcset=""></a></li>
            <li>Brand<a href="#">: <?= $brand["brand"] ?></a></li>
            <li>Model<a href="#">: <?= $brand["model"] ?></a></li>
            <li>Specifications<a href="#">: <?= $brand["specifications"]["os"] ?></a></li>
            <li>Processor<a href="#">: <?= $brand["specifications"]["processor"] ?></a></li>
            <li>RAM:<a href="#"> <?= $brand["specifications"]["ram"] ?></a></li>
            <li>Storage<a href="#">:<?= $brand["specifications"]["storage"] ?></a></li>
            <li>Battery<a href="#">: <?= $brand["specifications"]["battery"] ?></a></li>
            <li>Camera Rear:<a href="#"> <?= $brand["specifications"]["camera"]["rear"] ?></a></li>
            <li>Camera Front:<a href="#"> <?= $brand["specifications"]["camera"]["front"] ?></a></li>
            <li>Size:<a href="#"> <?= $brand["specifications"]["display"]["size"] ?></a></li>
            <li>Resolution:<a href="#"> <?= $brand["specifications"]["display"]["resolution"] ?></a></li>
            <li>Release Date:<a href="#"> <?= $brand["release_date"] ?></a></li>
            <li>Thumbnail:<a href="#"> <?= $brand["thumbnail"] ?></a></li>
            <li>Price:<a href="#"> <?= $brand["price"] ?></a></li>
        </ul>
    <?php endforeach; ?>
</body>

</html>