<?php
    // セッションの開始
    session_start();
?>
<html>
    <body>
        <p>ページが遷移しました。再びセッションを開始します。</p>
        <p>受け取ったセッション変数の値は「<?php echo $_SESSION["title"] ?>」です。</p>
        <p><a href = "session_destroy.php">セッションを破棄</a>してみましょう。</p>
    </body>
</html>