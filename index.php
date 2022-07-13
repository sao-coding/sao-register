<?php
    $name=$_POST['name'];
    $email=$_POST['email'];
    $today = date('Y/m/d H:i:s');
    $myFile = "form.diff";
    $to = $email;
    mb_internal_encoding('UTF-8');
    $subject = "艾恩格朗特 註冊成功";
    $subject = "=?UTF-8?B?" . base64_encode($subject) . "?=";
    $message = "
    <!DOCTYPE html>
    <html>
    <head>
    <meta http-equiv='content-type' content='text/html; charset=UTF-8'>
    <link rel='stylesheet' href='https://npm.elemecdn.com/@fortawesome/fontawesome-free@6/css/all.min.css' />
    <style>
        @font-face {
        font-family: SAOUI;
        src: url('SAOUI.ttf');
        }

        @font-face {
        font-family: SAO;
        src: url('ZhuZiAYuanJWD.ttf');
        }

        #SAO-Notify {
        z-index: 9999;
        background: rgba(204, 204, 207, 0.8);
        font-family: 'SAOUI', 'SAO', Langar, -apple-system, sans-serif;
        font-weight: bolder;
        text-shadow: 0.5px 0.5px 0.5px#888;
        height: 240px;
        width: 350px;
        position: fixed;
        bottom: 0;
        right: 0;
        left: 0;
        top: 0;
        margin: auto auto;
        border-radius: 5px;
        box-shadow: 2px 2px 10px#888;
        display: block;
        animation: flashOpen 1s ease alternate
        }

        .notify-title {
        background: rgba(249, 249, 249, 0.8);
        color: rgba(60, 60, 61, 0.7);
        height: 60px;
        width: 100%;
        display: block;
        font-size: 20px;
        text-align: center;
        border-top-left-radius: 5px;
        border-top-right-radius: 5px;
        padding-top: 10px
        }

        .notify-alert::-webkit-scrollbar {
        display: none
        }

        .notify-alert {
        background: rgba(220, 220, 220, 0.8);
        color: rgba(60, 60, 61, 0.7);
        height: 120px;
        overflow: scroll;
        // width: 100%;
        display: flex;
        justify-content: space-around;
        align-items: center;
        box-shadow: 0px 0px 15px#bcbcbc inset;
        flex-wrap: wrap;
        padding: 5px 25px;
        }

        .notify-button {
        background: rgba(249, 249, 249, 0.8);
        height: 60px;
        width: 100%;
        display: block;
        text-align: center;
        border-bottom-left-radius: 5px;
        border-bottom-right-radius: 5px;
        padding-top: 12.5px
        }

        .notify-confirm {
        background: rgba(47, 121, 212, 0);
        border-radius: 50%;
        display: inline-block;
        width: 36px;
        height: 36px;
        margin-inline: 60px;
        border: 1px solid;
        border-color: #2f79d4
        }

        .notify-confirm button {
        background: #2f79d4;
        text-align: center;
        border-radius: 50%;
        font-size: 18px;
        color: #fff;
        display: block;
        width: 30px;
        height: 30px;
        margin: 2px;
        border: none
        }

        .notify-cancel {
        background: rgba(203, 55, 73, 0);
        border-radius: 50%;
        display: inline-block;
        width: 36px;
        height: 36px;
        margin-inline: 60px;
        border: 1px solid;
        border-color: #cb3749
        }

        .notify-cancel button {
        background: #cb3749;
        text-align: center;
        border-radius: 50%;
        font-size: 18px;
        font-weight: bolder;
        color: #fff;
        display: block;
        width: 30px;
        height: 30px;
        margin: 2px;
        border: none
        }

        .notify-receive {
        background: rgba(47, 121, 212, 0);
        border-radius: 50%;
        display: inline-block;
        width: 36px;
        height: 36px;
        margin-inline: 60px;
        }

        .notify-receive button {
        background: #eda60c;
        text-align: center;
        border-radius: 50%;
        font-size: 18px;
        color: #fff;
        display: block;
        width: 30px;
        height: 30px;
        margin: 2px;
        border: none;
        display: none
        }

        @-moz-keyframes flashOpen {
        from {
            transform: rotateX(90deg)
        }

        to {
            transform: rotateX(0deg)
        }
        }

        @-webkit-keyframes flashOpen {
        from {
            transform: rotateX(90deg)
        }

        to {
            transform: rotateX(0deg)
        }
        }

        @-o-keyframes flashOpen {
        from {
            transform: rotateX(90deg)
        }

        to {
            transform: rotateX(0deg)
        }
        }

        @keyframes flashOpen {
        from {
            transform: rotateX(90deg)
        }

        to {
            transform: rotateX(0deg)
        }
        }

        @-moz-keyframes flashClose {
        from {
            transform: rotateX(0deg)
        }

        to {
            transform: rotateX(90deg)
        }
        }

        @-webkit-keyframes flashClose {
        from {
            transform: rotateX(0deg)
        }

        to {
            transform: rotateX(90deg)
        }
        }

        @-o-keyframes flashClose {
        from {
            transform: rotateX(0deg)
        }

        to {
            transform: rotateX(90deg)
        }
        }

        @keyframes flashClose {
        from {
            transform: rotateX(0deg)
        }

        to {
            transform: rotateX(90deg)
        }
        }
    </style>
    </head>
    
    <body>
      <div id='SAO-Notify'>
        <div class='notify-title'>
          Sword Art Online
          <i>β</i> &nbsp;test
        </div>
        <div class='notify-alert'>
          等待回覆，祝您抽中資格!
        </div>
        <div class='notify-button'>
          <span class='notify-receive'>
            <button class='fas fa-check' type='button' name='receive'></button>
          </span>
        </div>
      </div>
    </body>
    </html>
    ";
    $from = "Content-type: text/html; charset=utf-8\r\n" ."From: only@sao-x.com";
    if (mail($to, $subject, $message, $from)) {
        echo "已收到，請查看 " . $to;
        echo "<br>";
        echo "郵件已發送，請檢查垃圾信箱。";
    } else {
        echo "郵件發送失敗，請檢稍後再試";
    }
    $count = 0;
    for ($i = 0; $i < strlen($name); $i++) {
        if ($name[$i] ===" ") {
            $count++;
        } else {
            break;
        }
    }
    if ($count == strlen($name)) {
        $name = "Unknown";
    }
    $fh = fopen($myFile, 'a+');
    fwrite($fh, " *" . $today . "* " . $name . " " . $email . "\n");
    fclose($fh);
    // echo '接收到的內容為: '.$name." ".$email;
?>