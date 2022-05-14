<!DOCTYPE html>
<html lang="ja">
<header>
    <meta name="description" content="動画検索">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <link rel="stylesheet" href="../bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/css_home.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Luxurious+Roman&display=swap" rel="stylesheet">
    <title>ホーム</title>
</header>


<body>
    <script src="../bootstrap-5.1.3-dist/js/bootstrap.min.js"></script>
    <!--ここから-->
    <div class="space_f"></div>
    <div class="title">動画検索システム</div>
    <div class="space"></div>
    <div class="search">
        <div class="row">
            <div class="col-2"></div>
                <form action="result.php" method="GET" class="search_form area" name="search_form">
                    <input type="text" class="form-control form-control-lg" placeholder="キーワード" aria-label=".form-control-lg" name="keyword" pattern= "[^#&?=%\+_'.,]+">
                    <button type="submit" class="btn btn-info btn-lg search_button">検索</button>
                </form>
        </div>
    </div>
    <div class="space_l"></div>


    <div class="footer">
        ©yutasato&yukioda
    </div>
    <!--ここまで-->

</body>