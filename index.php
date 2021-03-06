<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="contact.css">
    <title>تماس با من - علیرضا علوی</title>
</head>

<?php   if ($_POST){
            switch($_POST["color"]){
                case "green":
                    $background = "dad7cd";
                    $btn_background= "588157";
                    $btn_hover = "#283618";
                    $top_circle = "img/11.png";
                    $site_pic = "img/site-green.png";
                    break;
                case "blue":
                    $background = "caf0f8";
                    $btn_background= "023e8a";
                    $btn_hover = "#03045e";
                    $top_circle = "img/12.png";
                    $site_pic = "img/site-blue.png";
                    break;
                case "red":
                    $background = "fdf0d5";
                    $btn_background= "c1121f";
                    $btn_hover = "#780000";
                    $top_circle = "img/13.png";
                    $site_pic = "img/site-red.png";
                    break;
                }
            }

        else {
            $background = "dad7cd";
            $btn_background= "588157";
            $btn_hover = "#283618";
            $top_circle = "img/11.png";
            $site_pic = "img/site-green.png";
        }
?>

<style>
    a:link {
        background-color: #<?php echo $btn_background;?>;
    }
    a:hover{
        background-color: <?php echo $btn_hover;?>;
    }
    #wt:hover{
        background-color: <?php echo $btn_hover;?>;
    }
    #theme{
        color:white;
        line-height : 80%;
        background-color: #<?php echo $btn_background;?>;
        border-radius: 20px;
    }
    #conect{
        line-height : 50%;
    }
    #wt{
        display:inline;
    }
</style>

<body dir="rtl" style="color:black ; background-color:#<?php echo $background; ?>;">
    <img src=<?php echo $top_circle ?> alt="" style="width:375px; height:100px;">
    <br>
    <img src="img/my_pic.png" class="border border-2 border-dark" alt=""  style="position: relative;bottom:55px;border-radius: 250px;">
    
    <div style="position: relative;bottom:55px;">
    <h3 style="">علیرضا علوی</h3>
    <h6 style="">برنامه نویس و توسعه دهنده وبسایت</h6>
    <div class="col-9 col-lg-4 mx-auto border border-3 " id="theme" style="padding:12px;">
    <p style="font-size:15px;  ">میتونی تم صفحه رو تغییر بدی!</p>
    <p style="font-size:13px;">اول یکی رو انتخاب کن</p>
    <form method="POST">
        <input type="radio" value="green" name="color" checked="checked">سبز ---

        <input type="radio" value="blue" name="color">آبی ---

        <input type="radio" value="red" name="color">قرمز
        <br>
        <br>
        <input type="submit" value="حالا اینجا کلیک کن!" id="click" style="padding:10px;line-height : 20%;">
    </form>
    </div>
    <br>
    <a href="https://alialavii.ir/"><img src=<?php echo $site_pic; ?> alt="" style="width:260px;height:85px"></a>
    <br><br>
    <div id="conect">
    
    <h5>ارتباطات کاری :</h5>
    <br>
    <div class="d-grid gap-3 col-8 col-lg-4 mx-auto">
        <a href="CV/CV.pdf" class="btn" type="button" target="_blank" style="color:white;">رزومه من</a>
    </div>
    <br>
    <a href="https://www.linkedin.com/in/alireza-alavi-83389822b/" class="btn col-4" id="wt" type="button" target="_blank" style="color:white;">لینکدین</a>
    <a href="https://github.com/alireza8686" class="btn col-4" id="wt" type="button" target="_blank" style="color:white;">گیت هاب</a>
    <br>
    <br><br>
    <h5>شبکه‌های اجتماعی :</h5>
    <br>
    <div class="d-grid gap-3 col-8 col-lg-4 mx-auto">
        <a href="https://instagram.com/programming._.fun" class="btn" type="button" target="_blank" style="color:white;">اینستاگرام</a>
        <a href="https://twitter.com/alrez81" class="btn" type="button" target="_blank" style="color:white;">توییتر</a>
        
    </div>
    <p class="d-grid gap-3 col-5 col-lg-4 mx-auto">
        <h6>ارتباط سریع:</h6>
        <a href="https://wa.me/+989117970185" class="btn col-4" type="button" target="_blank" id="wt" style="color:white;">واتساپ</a>
        <a href="https://t.me/aliwalv" class="btn col-4" type="button" target="_blank" id="wt" style="color:white;">تلگرام</a>
    </p>
    <div class="d-grid gap-3 col-8 col-lg-4 mx-auto">
    <a href="mailto: alavialireza38@gmail.com" class="btn" type="button" target="_blank" id="wt" style="color:white;">جیمیل</a>
    </div>
    
    </div>
    
    </div>
    <script src="contact.js">
    </script>
</body>
</html>