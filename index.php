<?php

/*******w******** 
    
    Name: Treasure Onah
    Date: 19-05-24
    Description: PHP gallery Assignment

****************/

$config = [

    'gallery_name' => 'Chaotic goods',
 
    'unsplash_categories' => ['nature','portraits','wildlife','film', 'travel', 'landscape'],
 
    'local_images' => [
        [
            'filename' => 'cig.jpg',
            'photographer_name' => 'Maksim Istomin',
            'photographer_url' => 'https://unsplash.com/@ismadragon'
        ],
        [
            'filename' => 'petal.jpg',
            'photographer_name' => 'Sayan Ghosh',
            'photographer_url' => 'https://unsplash.com/@7th_verse'
        ],
        [
            'filename' => 'pillar.jpg',
            'photographer_name' => 'Michael Brown',
            'photographer_url' => 'https://unsplash.com/@michaelbrown'
        ],
        [
            'filename' => 'street.jpg',
            'photographer_name' => 'Bruno Guerrero',
            'photographer_url' => 'https://unsplash.com/@prey4bokeh'
        ]
    ]
];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <title id ="gallery_title"> <?php echo $config['gallery_name']; ?></title>
</head>
<body>
    <!-- Remember that alternative syntax is good and html inside php is bad -->
    
    <h1 id= "gallery_name"><?php echo $config['gallery_name']; ?></h1>

    <div class="gallery">
        <!-- Used a for loop instead of foreach -->
        <?php 
                for ($i = 0; $i < count($config['unsplash_categories']); $i++): 
                    $category = $config['unsplash_categories'][$i];
            ?>
                <div class="category">
                    <h2><?php echo $category; ?></h2>
                    <img src="https://source.unsplash.com/300x200/?<?php echo $category; ?>" alt="<?php echo $category; ?>">
                </div>
        <?php endfor; ?>
    </div>
    
    <!--Displays the Large Images title-->
    <h1><?php echo count($config['local_images']); ?> Large Images</h1>

    <div class="local-images">

        <!--Displays the Large Images title-->
        <?php foreach ($config['local_images'] as $image): ?>
            <div class="image">

                <!--Displays each image in the array-->
                <img src="http://localhost/Introphp/images/<?php echo $image['filename']; ?>" alt="<?php echo $image['filename']; ?>">

                <!--Credits owner and url-->
                <p><a href="<?php echo $image['photographer_url']; ?>"><?php echo $image['photographer_name']; ?></a></p>
            </div>
        <?php endforeach; ?>
    </div>
</body>
</html>