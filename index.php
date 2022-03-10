<!-- やあ、こんにちは。スクリプトへようこそ -->

<?php


if ($_SERVER["REQUEST_METHOD"] == "POST"){
    error_reporting(0);
    $error = [];
    
    if ($_POST["family"] == "") {
        $error["family"] = "empty";
    }
    if ($_POST["email"] == "") {
        $error["email"] = "empty";
    }
    if ($_POST["comment"] == "") {
        $error["comment"] = "empty";
    }

    if(count($error)==0){
        mb_send_mail("nemu-oto0106@gmail.com",$_POST["email"]+"からのお問い合わせ",$_POST["comment"],);
        echo "<script type='text/javascript'>alert('送信が完了致しました。');</script>";
    }else{
        echo "<script type='text/javascript'>alert('送信に失敗しました。エラー内容をご確認ください。');</script>";
    }
}
    ?>


<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <div class="header-container">

            <div class="header-wrapper">
                <ul>

                    <li><a href="">トップ</a></li>
                    <li><a href="">このサイトについて</a></li>
                    <li><a href="">ポートフォリオ</a></li>
                    <li><a href="">連絡先</a></li>
                    <li><a href="https://nemu-oto.com/">ブログ</a></li>

                </ul>
            </div>
        </div>
    </header>
    <main>
        <div class="top-banner-container">
            <div class="top-banner-wrapper">
                <h1>NemuLog</h1>
                <p>Nemu Engineering Log</p>
            </div>
        </div>

        <div class="scroll-fuwa about-site-container">
            <div class="about-site-wrapper">
                <h1>About this site</h1>
                <p>当サイトの開発は全て著者が行っております。
                    言語はHtml,Css,Javascript,Phpです。
                </p>
            </div>
        </div>

        <div class="scroll-fuwa about-me-container">
            <div class="about-me-wrapper">
                <h1>About me</h1>
                <div class="about-me-parent">
                    <div class="about-me-child1">
                        <img src="https://lh3.googleusercontent.com/t7DU14dGUXzeoPV_nA-4noTTd1INBndlcd4x2WF7z-YEL_7Kn-eiCEGGvmyhQ8ezdGRib1bjefblNwmew1GF4i6yQbqTBpjI8XSgiurK2j6EQabd8VCKQWlvzmAqgKSlMGYij9tUyhqs_w5KRARs5ieOw0iVOXF6zJbVU3gwlZTx6H3BzPAf--IMm29yrt8onhayyiP78SaC1TQ_uo1SIwO-UGDLDspCJAmDwXVaJIyiQXg2nzrxssSbAV52WU0v3-ZP0Wku-Fylt88qyB40BZV5IbCkSrhSKqEhsGWosCqsxAd08KD6-sUjiTB8rdGce-4zUXWPpOFLFnF2SvBW7s3gXD2b8PrQDJhy31TdufI8G-vIOWqrdDCd95BfwuIs-LSZoBqU0ZUn_6Lof6iCcMfZ4aJZWeWNQOF9nrC3UhIgn0laNuvMkDyOmI05corN_8TMNJTZ_OnLRTdiJJwemebOXH3Q6sbbe3KukvilONMPIUK7iKDosIOnNWMcsGfEfA1DBS_MDApIPoceMlno76vNFx0bXSQtRepKwVCcJDJruvLyu6sMmnWWEXaypgwHlJxj0DtSK7f-_XseaS10nxeBrGcZvBhjW_r5G7UfRGWDXECAjY2BF3iJVAVCNy9vQ5LEmPTU_O9taRk5fpSmtZvb2ukklFcC_qk-po5fEf4rt3N9HsWzbz6WK8me6Hm5h5P9PPetf7QKfA5QiyUsAw_T=w933-h872-no?authuser=0" alt="">
                    </div>
                    <div class="about-me-child2">

                        <p>関東都内で活動してるフリーエンジニア。専門学生時代に独学でプログラミングを学んだ後、web制作会社のアルバイトで実務を経験。
                            タスクを終えるほど木が成長するサービス「クレスト」やJavascript、C#を使ったゲーム開発も行っている。クラウドワークスで出会った方から高い評価を得ている。
                            現在はフリーランスエンジニアとして活動。
                        </p>

                    </div>
                </div>
            </div>
        </div>

        <div class="scroll-fuwa works-container">
            <div class="works-wrapper">
                <h1>Works</h1>
                <p>腕によりをかけて制作しました。</p>
                <div class="works-parent">
                    <div class="works-child">
                        <img src="img/works1.png" alt="">
                        <p>フロントエンド開発ブログ運営</p>
                    </div>
                    <div class="works-child">
                        <img src="img/works2.png" alt="">
                        <p>タスクを行うほど木が成長するサービス「クレスト」の開発</p>
                    </div>
                    <div class="works-child">
                        <img src="img/works3.png" alt="">
                        <p>Wordpressを使ったテーマ開発</p>
                    </div>
                    <div class="works-child">
                        <img src="img/works4.png" alt="">
                        <p>Javascriptを使ったミニゲーム開発</p>
                    </div>
                    <div class="works-child">
                        <img src="img/works5.png" alt="">
                        <p>飲食店、建築会社様のサイトデザイン、コーディング</p>
                    </div>
                    <div class="works-child">
                        <img src="img/works6.png" alt="">
                        <p>C#を使ったゲーム開発</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="scroll-fuwa form-container">
            <div class="form-wrapper">
                <h1>Contact</h1>
                <p>最後までご覧いただきありがとうございました。</p>
                <form method="POST" action="">
                <p class="error-msg"><?php if ($error["family"] == "empty") {
                                                echo "※名前を入力してください";
                                            } ?></p>
                    <input name="family" class="form-wrapper-input" type="text" placeholder="お名前">
                    <p class="error-msg"><?php if ($error["email"] == "empty") {
                                                echo "※メールアドレスを入力してください";
                                            } ?></p>
                    <input name="email" class="form-wrapper-input" type="text" placeholder="ご連絡先">
                    <p class="error-msg"><?php if ($error["comment"] == "empty") {
                                                echo "※コメントを入力してください";
                                            } ?></p>
                    <textarea name="comment" id="" cols="30" rows="10" placeholder="コメント"></textarea>
                    <input class="form-wrapper-submit" type="submit" name="" id="">
                </form>
            </div>
        </div>


    </main>
    <script src="main.js"></script>
</body>

</html>

