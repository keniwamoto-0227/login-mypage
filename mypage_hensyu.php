<?php
mb_internal_encoding("utf8");

session_start();

if(!isset($_POST['from_mypage'])) {
    header("Location:login_error.php");
}
?>

<!DOCTYPE HTML>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>マイページ登録</title>
        <link rel="stylesheet" type="text/css" href="mypage_hensyu.css">
    </head>
    
    <body>
        <header>
            <img src="4eachblog_logo.jpg">
        </header>
        
        <main>
            <div class="login_contents">
                <h2>会員情報</h2>
            <div class="hi">
                <?php echo "こんにちは！ ".$_SESSION['name']." さん"?>
            </div>
            </div>
            
            <form action="mypage_update.php" method="post">
                <div class="myaccount">
                <div class="plofile_pic">
                    <img src="<?php echo $_SESSION['picture']?>" name="picture" class="formbox">
                </div>
                    
                <div class="basic_info">
                    <div class="name">
                    <p>氏名: <input type="text" size="40" value="<?php echo $_SESSION['name'];?>" name="name"></p>
                    </div>
                    
                    <div class="mail">
                    <p>メール: <input type="text" size="40" value="<?php echo $_SESSION['mail'];?>" name="mail"></p>
                    </div>
                    
                    <div class="password">
                    <p>パスワード: <input type="text" size="40" value="<?php echo $_SESSION['password'];?>" name="password"></p>
                    </div>
                </div>
                </div>
                
                <div class="comments">
                    <textarea row="5" cols="80" name="comments"><?php echo $_SESSION['comments'];?></textarea>
                </div>
                
                <div class="button">
                    <input type="submit" size="35" value="この内容に変更する" class="submit_button">
                </div>
            </form>
        </main>
        
        <footer>
            ©︎ 2018 InterNous.inc. All rights reserved
        </footer>
    </body>
</html>