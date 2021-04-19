<?php if (!isset($_COOKIE["internal"])) { setcookie("internal", "overwritten_by_iframe_that_did_not_get_the_cookie...", [
    'path' => '/',
    'domain' => 'internal.localhost',
    'secure' => true,
    'httponly' => true,
    'samesite' => 'Lax',
]); } ?>
<html>
    <head></head>
    <body>
        <script>
        window.top.location.href = "https://internal.localhost/result.php";
        </script>
    </body>
</html>