<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $text = $_POST["user_input"] ?? 'デフォルトテキスト';
    file_put_contents("data2.txt", $text . PHP_EOL, FILE_APPEND);
    echo "テキストが保存されました。";
}
?>
