 <?php
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $textarea = htmlspecialchars($_POST['textarea']);

    $flg = 0;
    if (empty($name)) {
        $flg = 1;
        $name = '<span class="attention">氏名/会社名を入力してください</span>';
    }
    if (empty($email)) {
        $flg = 1;
        $email = '<span class="attention">メールアドレスを入力してください</span>';
    }
    if (empty($textarea)) {
        $flg = 1;
        $textarea = '<span class="attention">お問合せ内容を入力してください</span>';
    }


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

     <section class="contact_check">
         <div class="check_inner">
             <h2 class="check_title">Check</h2>
             <div class="form_table_check">
                 <dl>
                     <dt>name</dt>
                     <dd><?php echo $name; ?></dd>
                 </dl>
                 <dl>
                     <dt>e-mail</dt>
                     <dd><?php echo $email; ?></dd>
                 </dl>
                 <dl>
                     <dt>Your inquiry</dt>
                     <dd><?php echo $textarea; ?></dd>
                 </dl>
                 <?php if ($flg) : ?>
                     <button type="button" class="contact_btn" onClick="history.back();">Back</button>
                 <?php else : ?>
                     <form action="complete.php" method="post">
                         <input type="hidden" name="name" value="<?php echo $name; ?>">
                         <input type="hidden" name="email" value="<?php echo $email; ?>">
                         <input type="hidden" name="textarea" value="<?php echo $textarea; ?>">
                         <div class="check_btn">
                             <button class="btn" type="submit">Send</button>
                             <button class="btn" type="button" onClick="history.back();">Back</button>
                         </div>
                     </form>
                 <?php endif; ?>
             </div>
         </div>
     </section>

 </body>

 </html>