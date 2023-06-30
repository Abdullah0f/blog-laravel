<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>blog</title>
    <link rel="stylesheet" href="/app.css">
</head>
<body>
    <div class="container">
        <?php 
        foreach ($posts as $post) {
            echo "<div class='blog-post'>";
            echo $post;
            echo "</div>";
        }
        ?>
        
    </div>
</body>
</html>