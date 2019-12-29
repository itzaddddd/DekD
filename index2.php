<?php 
    #session start
    session_start();
    #define variable
    $title = '';
    $content = '';

    #error description
    $error = array(
        'title_blank'=>'กรุณาใส่ชื่อกระทู้',
        'content_blank'=>'กรุณาใส่เนื้อหากระทู้',
        'title_err'=>'หัวข้อกระทู้ต้องยาว 4-140 ตัวอักษร',
        'content_err'=>'เนื้อหากระทู้ต้องยาว 6-2000 ตัวอักษร',
        'title_tag' =>'ชื่อกระทู้จะไม่แสดงผลของ HTML tag'
    );
    #array for collecting error
    $val_error = [];
    
    #flag to check that each parts have been checked 
    $title_flag = False;
    $content_flag = False;

    #validation post method
    if($_POST){
        $title = strip_tags($_POST['post-title']); #ignore html tags
        $content = $_POST['post-content'];
        #input title validation
        if(empty($title)){ #check empty form
            array_push($val_error,$error['title_blank']);
        }else if(strlen($title)<4||strlen($title)>140){ #check length
            array_push($val_error,$error['title_err']);
        }
        $title_flag = True; #define that this part has been checked

        #title with html tag validation
        if($title != $_POST['post-title']){
            array_push($val_error,$error['title_tag']);
        }

        #input content validation
        if(empty($content)){
            array_push($val_error,$error['content_blank']);
        }else if(strlen($content)<6||strlen($content)>2000){
            array_push($val_error,$error['content_err']);
        }
        $content_flag = True; #define that this part has been checked

        #save values to session
        $_SESSION['title'] = $title; 
        $_SESSION['content'] = $content;
    }
?>