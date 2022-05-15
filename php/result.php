<!DOCTYPE html>
<html lang="ja">
<header>
    <meta name="description" content="燃料代計算">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <link rel="stylesheet" href="../bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/css_result.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Luxurious+Roman&display=swap" rel="stylesheet">
    <title>検索結果</title>
</header>


<body>
    <script src="../bootstrap-5.1.3-dist/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="../js/result.js"></script>

    <?php 
        require_once (dirname(__FILE__) . '/vendor/autoload.php');
        define("API_KEY","AIzaSyAdNwBWbrMCNjiEVYX5ht3JtP4spWaR2Do");

        $client = new Google_Client();
        $client->setApplicationName("xxxxxxxxxxx");
        $client->setDeveloperKey(API_KEY);

        $youtube = new Google_Service_YouTube($client);

        $keyword = "CR-Z";
        if( isset($_GET['keyword'])) {
            $keyword = $_GET['keyword'];
        }

        $params['q'] = $keyword;
        $params['type'] = 'video';
        $params['maxResults'] = 50;

        $keyword = htmlspecialchars($keyword);
        $videos = [];
        try {
            $searchResponse = $youtube->search->listSearch('snippet', $params);
            array_map(function ($searchResult) use (&$videos) {
                $videos[] = $searchResult;
            },$searchResponse['items']);
        } catch (Google_Service_Exception $e) {
            echo htmlspecialchars($e->getMessage());
            exit;
        } catch (Google_Exception $e) {
            echo htmlspecialchars($e->getMessage());
            exit;
        }
    ?>

    <!--ここから-->
    <div class="main_area">
        <h1>動画検索システム</h1>

        <div class="wrap-tab">
        <ul id="js-tab" class="list-tab">
            <li class="active">YouTube</li>
                <li>niconico</li>
        </ul>
  
        <div class="wrap-tab-content">
            <div class="tab-content active">
                <?php 
                    print "<ul class=cardUnit>";
                    foreach($videos as $video) :
                        print "<li class=card>";
                        echo '<div class="movieBox">';
                        echo '<a class="movieLink" href="https://www.youtube.com/watch?v=' . $video['id']['videoId'] . '">';
                        echo '<div class="thums">';
                        echo '<img src="' . $video['snippet']['thumbnails']['default']['url']. '" />';
                        echo '</div>';
                        echo '<div class="description">';
                        echo '<div>' . $video['snippet']['title'] . '</div>';
                        echo '<div>' . $video['snippet']['description'] . '</div>';
                        echo '</div>';
                        echo '</a>';
                        echo '</div>';
                        print "</li>";
                    endforeach;
                    print "</ul>";
                ?>
            </div>

            <div class="tab-content">
                <p>タブ2タブ2タブ2</p>
            </div>
        </div>
    </div>

    <!--ここまで-->
    <div class="footer">
        ©yutasato&yukioda
    </div>
<body>