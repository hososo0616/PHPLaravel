<?php 

//パスワードを記録したファイルの場所
echo __FILE__;
// C:\xampp\htdocs\PHPLaravel\mainte\test.php

echo '<br>';
//パスワード（暗号化）
echo password_hash('pasword123', PASSWORD_BCRYPT);
