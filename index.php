<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="contact.css">
    <title>تماس با من - علیرضا علوی</title>
</head>
<?php $color = ""; ?>
<?php switch($_POST["ss"]){
    case "green":
        $body_text_color = "344e41";
        $btn_text_color = "white";
        $background = "dad7cd";
        $btn_background= "588157";
        $btn_hover = "#283618";
        break;
    case "blue":
        $body_text_color = "blue";
        $btn_text_color = "white";
        $background = "caf0f8";
        $btn_background= "023e8a";
        $btn_hover = "#03045e";
        break;
    case "red":
        $body_text_color = "003049";
        $btn_text_color = "white";
        $background = "fdf0d5";
        $btn_background= "c1121f";
        $btn_hover = "#780000";
        break;
    default:
        $body_text_color = "344e41";
        $btn_text_color = "white";
        $background = "dad7cd";
        $btn_background= "588157";
        break;
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
</style>
<body dir="rtl" style="color:#<?php echo $body_text_color;?>; background-color:#<?php echo $background; ?>;">
    <?php echo $color; ?>
    <br>
    <br>
    <h2>سلام و عرض خوش آمد!</h2>
    <br>
    <h5>راه های ارتباطی با من</h5>
    <br>
    <div class="d-grid gap-3 col-8 col-lg-4 mx-auto">
        <a href="https://alialavii.ir/" class="btn" type="button" target="_blank" style="color:<?php echo $btn_text_color;?>;">سایت</a>
        <a href="https://instagram.com/programming._.fun" class="btn" type="button" target="_blank" style="color:<?php echo $btn_text_color;?>;">اینستاگرام</a>
        <a href="https://twitter.com/alrez81" class="btn" type="button" target="_blank" style="color:<?php echo $btn_text_color;?>;">توییتر</a>
        <a href="https://www.linkedin.com/in/alireza-alavi-83389822b/" class="btn" type="button" target="_blank" style="color:<?php echo $btn_text_color;?>;">لینکدین</a>
        <a href="https://github.com/alireza8686" class="btn" type="button" target="_blank" style="color:<?php echo $btn_text_color;?>;">گیت هاب</a>
    </div>
    <p class="d-grid gap-3 col-5 col-lg-4 mx-auto">
        <h6>ارتباط سریع:</h6>
        <a href="https://api.whatsapp.com/send?phone=989117970185" class="btn" type="button" target="_blank" id="wt" style="color:<?php echo $btn_text_color;?>;">واتساپ</a>
        <a href="https://t.me/aliwalv" class="btn" type="button" target="_blank" id="wt" style="color:<?php echo $btn_text_color;?>;">تلگرام</a>
    </p>
    <hr>
    <p>اگه میخوای تم اینجا تغییر کنه یکی رو انتخاب کن:</p>
    <form action="" method="POST">
        <input type="radio" value="green" name="ss" checked="checked">سبز ---

        <input type="radio" value="blue" name="ss">آبی ---

        <input type="radio" value="red" name="ss">قرمز
        <br>
        <br>
        <input type="submit" value="حالا اینجا کلیک کن!" id="click">
    </form>
    <hr>
    <script src="contact.js">
    </script>
</body>
</html>