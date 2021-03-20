<?php
session_start();

$accessToken = $_SESSION['my_access_token_accessToken'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

    echo '<p>access token:</p>';
    echo '<p><code>' . $accessToken . '</code></p>';
    echo '<br /';

    if ($accessToken != "") {
        echo '<p>Logged in!</p>';
    } else {
        echo '<p><a href="https://www.sageone.com/oauth2/auth/central?filter=apiv3.1&client_id=1b54cbcc-adfe-4ce9-90ae-63ee2bf7c8a8/3c33d970-37bf-4f16-948c-5641bee7196f&response_type=code&redirect_uri=http://127.0.0.1:8080/callback.php&scope=full_access&state=9">Sign in with Sage</a></p>';
    }

    ?>


</body>

</html>