<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
    <?php
    //Output our site title
    bloginfo('name');
    //show page info if its avilable 
    if ($current_post_title= get_the_title()) {
        echo '|'. $current_post_title;}
        ?>
    </title>
</head>
<body>
    
