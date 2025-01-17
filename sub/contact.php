<? 
    include_once $_SERVER['DOCUMENT_ROOT']."/php/db.php";
?>

<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8" />
    <title>LSH Portfolio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link href="../css/contact.css" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="../js/contact.js" type="module"></script>
    <link rel="shortcut icon" href="#">
</head>

<body>
    <div class="wrapper">
        <!-- menu -->
        <div class="menu">
        </div>
        <!-- menu end -->

        <!-- leftTab -->
        <div class="leftTab">
        </div>
        <!-- leftTab end -->
        <div class="main">
            <div class="main__title">
                <h3>CONTACT<span></span></h3>
                <p>궁금하신 점이 있으시다면<br>언제든 연락주시기 바랍니다.</p>
            </div>
            <div class="main__info">
                <div class="main__info__name">
                    <h4>이승현</h4><strong>LEE SEUNG HYUN</strong>
                </div>
                <div class="main__info__etc">
                    <strong>NUMBER</strong>
                    <p>010.4140.1263</p>
                    <strong>EMAIL</strong>
                    <p>tmdgusdl58@gmail.com</p>
                </div>
            </div>
            <form action="contact_ok.php" method="POST" class="main__contact">
                <div class="main__contact__name">
                    <span class=selected></span>
                    <p>이름</p>
                    <input type="text" required name="name">
                </div>
                <div class="main__contact__mail">
                    <span></span>
                    <p>이메일</p>
                    <input type="email" required name="email">
                </div>
                <div class="main__contact__content">
                    <span></span>
                    <p>내용</p>
                    <textarea required name="contents"></textarea>
                </div>
                <input type="submit" class="main__contact__send" value="SEND">
            </form>
        </div>
        <!-- 배경 단 start -->
        <div class="background">
            <div class="area area01">
                <div class="area__wrapper"></div>
            </div>
            <div class="area area02">
                <div class="area__wrapper"></div>
            </div>
            <div class="area area03">
                <div class="area__wrapper"></div>
            </div>
            <div class="area area04">
                <div class="area__wrapper"></div>
            </div>
            <div class="area area05">
                <div class="area__wrapper"></div>
            </div>
            <div class="area area06">
                <div class="area__wrapper"></div>
            </div>
            <div class="area area07">
                <div class="area__wrapper"></div>
            </div>
            <div class="area area08">
                <div class="area__wrapper"></div>
            </div>
            <button class="prev"></button>
            <h3>CONTACT</h3>
        </div>
        <!-- 배경 단 end -->

        <!-- footer -->
        <div class="footer">
            <button class="git"></button>
            <div class="footer__resume">
                <p>이력서다운로드</p>
                <a href="../img/이승현_이력서.pdf" target="_blank"></a>
            </div>
            <p>COPYRIGHT 2020 &copy; LEE SEUNG HYUN</p>
        </div>
        <!-- footer end -->
    </div>
</body>

</html>