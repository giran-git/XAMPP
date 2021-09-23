<?php
    // セッションの開始
    session_start();
    // セッション変数に値を代入
    $_SESSION["title"] = "PHPのキソ";
?>
<html>
    <body>
        <p>セッションが開始されました。</p>
        <p>$_SESSION["title"]に代入した値は「<?php echo $_SESSION["title"] ?>」です。</p>
        <p><a href = "session2.php">次のページ</a>に遷移してみましょう</p>
    </body>
</html>