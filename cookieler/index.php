<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Cookiler  yani çerezler</title>
</head>

<body>
<?php

$YasamSuresi = time() + 3600;
setcookie("KullaniciAdi" , "Kamer Alperen", $YasamSuresi);
setcookie("KullaniciSoyadi" , "Özokutan", $YasamSuresi);
setcookie("KullaniciYasi", "21", $YasamSuresi);

echo "<pre>";
print_r($_COOKIE);
echo "</pre>";





?>



</body>
</html>