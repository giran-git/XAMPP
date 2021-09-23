<?php
    // セッションの開始
    session_start();
    // セッション変数の初期化
    $_SESSION = array();
    // セッションファイルの削除
    session_destroy();
?>
<html>
    <body>
        <p>ページが遷移しました。</p>
        <p>再びセッションを開始してから、セッションを破棄しました。</p>
        <p>$_SESSION["title"]を表示してみましょう</p>
        <p>$_SESSION["title"] = 「<?php echo $_SESSION["title"] ?>」です。</p>
        <p>セッション関数の中身が空になっていますね。</p>
        <a href = "session1.php">最初に戻る</a>
    </body>
</html>