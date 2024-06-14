<?php
$name = htmlspecialchars($_POST['name']);
$email = htmlspecialchars($_POST['email']);
$textarea = htmlspecialchars($_POST['textarea']);

$email_title = 'お問合せを承りました@中原諒也';

$email_body = <<<email
{$name}様

以下のお問合せを承りました。

■氏名/会社名
{$name}

■メールアドレス
{$email}

■お問合せ内容
{$textarea}

追ってご連絡致します。

===================
氏名 : 中原諒也
===================
email;

$email_from = 'From:taroutanaka515@gmail.com';

mb_internal_encoding("UTF-8");
mb_language("japanese");

mb_send_mail($email, $email_title, $email_body, $email_from);

$tanto = 'taroutanaka515@gmail.com';
$tanto_title = 'ポートフォリオサイトよりお問い合わせ';
$tanto_body = <<<tanto
■ポートフォリオサイトよりお問い合わせ

■氏名/会社名
{$name}

■メールアドレス
{$email}

■お問合せ内容
{$textarea}
tanto;

$tanto_from = 'From:taroutanaka515@gmail.com';

mb_internal_encoding("UTF-8");
mb_language("japanese");

mb_send_mail($tanto, $tanto_title, $tanto_body, $tanto_from);

?>


<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <!-- my css -->
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/common.css">
    <link rel="stylesheet" href="../css/contact.css">
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;300;400;500&family=Sora:wght@100;400;600;800&display=swap" rel="stylesheet">
    <script>
        console.log("動作○");
    </script>
</head>

<body>
    <header>
        <div class="header_inner">
            <h1>
                <a href="../index.html">Nakahara Ryoya</a>
            </h1>
            <nav class="header_nav">
                <ul>
                    <li><a href="../index.html">Top</a></li>
                    <li><a href="../about.html">About</a></li>
                    <li><a href="../works.html">Works</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section class="contact_sent">
        <div class="sent_inner">
            <h2 class="sent_title">Sent</h2>
            <div class="form_table_sent">
                <p>送信完了<br>お問合せを承りました。</p>
            </div>
        </div>
    </section>

</body>

</html>