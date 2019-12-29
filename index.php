<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link rel="stylesheet" type="text/css" href="index.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Post create</title>
</head>
<body>
    <?php include 'index2.php'?>
    <div class="title">
        ตั้งกระทู้ใหม่
    </div>
    <div class="form-post">
        <form action="" method="POST">
            <?php if(sizeof($val_error)>0){?>
                <?php for($i=0;$i<sizeof($val_error);$i++){?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo $val_error[$i]?>
                    </div>
                <?php }?>
            <?php }else if(sizeof($val_error)==0 && ($title_flag) && ($content_flag)){?>
                <?php header('Location:post.php');?>
            <?php }?>
            <div class="form-group">
              <input type="text" class="form-control" id="post-title" name="post-title" placeholder="หัวข้อกระทู้" value="<?php echo $title?>">
              <input type="text" class="form-control" id="post-content" name="post-content" placeholder="เนื้อหากระทู้" value="<?php echo $content?>">
            </div>
            <button type="submit" class="btn btn-primary">สร้างกระทู้</button>
        </form>
    </div>
</body>
</html>