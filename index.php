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
                    break;
                case "blue":
                    $background = "caf0f8";
                    $btn_background= "023e8a";
                    $btn_hover = "#03045e";
                    break;
                case "red":
                    $background = "fdf0d5";
                    $btn_background= "c1121f";
                    $btn_hover = "#780000";
                    break;
                }
            }

        else {
            $background = "dad7cd";
            $btn_background= "588157";
            $btn_hover = "#283618";
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

<body dir="rtl" style="color:black ; background-color:#<?php echo $background; ?>;">
    <br>
    <br>
    <h2>سلام و عرض خوش آمد!</h2>
    <br>
    <h5>راه های ارتباطی با من</h5>
    <br>
    <div class="d-grid gap-3 col-8 col-lg-4 mx-auto">
        <a href="https://alialavii.ir/" class="btn" type="button" target="_blank" style="color:white;">سایت</a>
        <a href="https://instagram.com/programming._.fun" class="btn" type="button" target="_blank" style="color:white;">اینستاگرام</a>
        <a href="https://twitter.com/alrez81" class="btn" type="button" target="_blank" style="color:white;">توییتر</a>
        <a href="https://www.linkedin.com/in/alireza-alavi-83389822b/" class="btn" type="button" target="_blank" style="color:white;">لینکدین</a>
        <a href="https://github.com/alireza8686" class="btn" type="button" target="_blank" style="color:white;">گیت هاب</a>
    </div>
    <p class="d-grid gap-3 col-5 col-lg-4 mx-auto">
        <h6>ارتباط سریع:</h6>
        <a href="https://api.whatsapp.com/send?phone=989117970185" class="btn" type="button" target="_blank" id="wt" style="color:white;">واتساپ</a>
        <a href="https://t.me/aliwalv" class="btn" type="button" target="_blank" id="wt" style="color:white;">تلگرام</a>
    </p>
    <hr>
    <p>اگه میخوای تم اینجا تغییر کنه یکی رو انتخاب کن:</p>
    <form method="POST">
        <input type="radio" value="green" name="color" checked="checked">سبز ---

        <input type="radio" value="blue" name="color">آبی ---

        <input type="radio" value="red" name="color">قرمز
        <br>
        <br>
        <input type="submit" value="حالا اینجا کلیک کن!" id="click">
    </form>
    <hr>
    <script src="contact.js">
    </script>
</body>
</html>