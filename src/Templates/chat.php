<html>
    <head>
        <title>MyChat</title>
        <?php $style = ($theme == "night") ? "style-nigth.css" : "style.css"; ?>
        <link rel="stylesheet" href="<?php echo($style); ?>">
    </head>
    <body>
        <?php
        foreach ($messages as $message){
            echo "<div class='message'>";
            echo "<div class='time'>" .date("d.m.Y H:i", $message['time']) ."</div>";
            echo "<div class='login'>". htmlspecialchars($message['login']) ."</div>";
            echo "<div class='message-text'>". htmlspecialchars($message['message']) ."</div>";
            echo "</div>";
        }
        ?>       
        <form method="POST">
            <input type="text" name="user_message">
            <input type="submit">
        </form>
    </body>
</html>
