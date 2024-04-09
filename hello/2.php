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
 
 function getBrowser($user_agent) {
    $browser = '';
    if (preg_match('/Chrome/', $user_agent)) {
        $browser = 'Google Chrome';
    } elseif (preg_match('/Firefox/', $user_agent)) {
        $browser = 'Mozilla Firefox';
    } elseif (preg_match('/Safari/', $user_agent)) {
        $browser = 'Apple Safari';
    } elseif (preg_match('/Edge/', $user_agent)) {
        $browser = 'Microsoft Edge';
    } elseif (preg_match('/MSIE/', $user_agent)) {
        $browser = 'Internet Explorer';
    } else {
        $browser = 'Unknown Browser';
    }
    return $browser;
 }
 
 function getOperatingSystem($user_agent) {
    $os = '';
    if (preg_match('/Windows NT 10.0/', $user_agent)) {
        $os = 'Windows 10';
    } elseif (preg_match('/Windows NT 6.3/', $user_agent)) {
        $os = 'Windows 8.1';
    } elseif (preg_match('/Windows NT 6.2/', $user_agent)) {
        $os = 'Windows 8';
    } elseif (preg_match('/Windows NT 6.1/', $user_agent)) {
        $os = 'Windows 7';
    } elseif (preg_match('/Windows NT 6.0/', $user_agent)) {
        $os = 'Windows Vista';
    } elseif (preg_match('/Windows NT 5.1/', $user_agent)) {
        $os = 'Windows XP';
    } elseif (preg_match('/Mac OS X/', $user_agent)) {
        $os = 'macOS';
    } elseif (preg_match('/Linux/', $user_agent)) {
        $os = 'Linux';
    } else {
        $os = 'Unknown Operating System';
    }
    return $os;
 }
 
 $user_agent = $_SERVER['HTTP_USER_AGENT'];
 $browser = getBrowser($user_agent);
 $os = getOperatingSystem($user_agent);
 
 echo "Internet browser: $browser\n";
 echo "Besturingssysteem: $os";
 ?>
 </body>
</html>