<html>
    <head>
        <title>MyChat</title>
        <?php $style = ($theme == "night") ? "style-nigth.css" : "style.css"; ?>
        <link rel="stylesheet" href="<?php echo($style); ?>">
    </head>
    <body>
        <form method="POST">
                <input type="text" name="user_login">
                <input type="submit">
        </form>
    </body>
</html>
