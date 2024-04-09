<!DOCTYPE html>
 <html lang="nl">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0" >
     <link rel="stylesheet" href="style.css">
     <title>opdracht 1</title>
 </head>
 <body>


 <?php 
 function generateRandomPassword($length) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $password = '';
    for ($i = 0; $i < $length; $i++) {
        $password .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $password;
}
 
$length = 10; // lengte van het wachtwoord
$password = generateRandomPassword($length);
echo "Willekeurig wachtwoord van $length tekens: $password";
?> 
</body>
</html>