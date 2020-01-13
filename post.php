<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Post</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
    <?php include 'post2.php'?>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1><?php echo $title?></h1>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <article><?php echo $content?></article>
            </div>
        </div>
    </div>
</body>
</html>