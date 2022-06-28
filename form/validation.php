<?php
function validation($requeset)
{
  $errors = [];

  if (empty($request['yourname']) || 20 < mb_strlen($requeset['yourname'])) {
    $errors[] = '「氏名」は20文字以内で入力してください';
  }

  if (empty($request['contact']) || 200 < mb_strlen($requeset['contact'])) {
    $errors[] = '「お問い合わせ内容」は必須です。200文字以内で入力してください';
  }

  if (empty($request['caution'])) {
    $errors[] = '「注意事項」をご確認ください';
  }

  if (!isset($requeset['gender'])) {
    $errors[] = '「性別」は必須です';
  }

  if (empty($request['age']) || 6 < $requeset['age']) {
    $errors[] = '「年齢」をご確認ください';
  }

  if (empty($request['email']) || !filter_var($requeset['email'], FILTER_VALIDATE_EMAIL)) {
    $errors[] = '「メールアドレス」は必須です。正しい形式で入力してください。';
  }

  if (!empty($request['url'])) {
    if (!filter_var($request['url'], FILTER_VALIDATE_URL)) {
      $errors[] = '「ホームページ」は正しい形式で入力してください。';
    }
  }
  
  return $errors;
}
