<?php setcookie("internal", "this_is_the_original_session_from_" . time(), [
    'path' => '/',
    'domain' => 'internal.localhost',
    'secure' => true,
    'httponly' => true,
    'samesite' => 'Lax',
]); ?>
<html>
    <head></head>
    <body>
        <iframe src="https://external.localhost/iframe.php"></iframe>
    </body>
</html>