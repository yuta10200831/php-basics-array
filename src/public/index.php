<?php
$tweets = [
    [
        'id' => 1,
        'userName' => 'さとう',
        'tweets' => 'お腹すいた',
        'created_at' => '2022/10/22',
    ],
    [
        'id' => 2,
        'userName' => 'さとう',
        'tweets' => 'カレーを食べたい',
        'created_at' => '2022/10/23',
    ],
    [
        'id' => 3,
        'userName' => 'すずき',
        'tweets' => 'すき焼きを食べたい',
        'created_at' => '2022/10/24',
    ],
    [
        'id' => 4,
        'userName' => 'さとう',
        'tweets' => '寿司を食べたい',
        'created_at' => '2022/10/25',
    ],
    [
        'id' => 5,
        'userName' => 'たなか',
        'tweets' => 'お腹が空いた',
        'created_at' => '2022/10/26',
    ],
    [
        'id' => 6,
        'userName' => 'たなか',
        'tweets' => 'さすがに眠い',
        'created_at' => '2022/10/26',
    ],
    [
        'id' => 7,
        'userName' => 'たなか',
        'tweets' => 'まだ水曜日かー',
        'created_at' => '2022/10/26',
    ],
]; 


$filteredTweets = [];

foreach ($tweets as $tweet) {
    if ($tweet['userName'] === 'さとう') {
        $filteredTweets[] = $tweet;
    }
}
?>

<!-- 以下はHTMLのコードになります -->
<!-- 今は「こんな処理をしているんだな〜」とざっくり見ていただけたらと思います！ -->
<!DOCTYPE html>
<html lang="ja">

<!-- headタグの中の処理で、ブラウザのタブに表示されるタイトルを設定しています -->
    <head>
        <meta charset="UTF-8">
        <title>投稿ページ</title>
    </head>
    <!-- bodyタグの中の処理で、ブラウザ上に表示させる「タイトル」や、別の画面に遷移する「ボタン」を作成しています -->
    <body>
        <h1>投稿ページ</h1>
        <a href="top.php">
            <button type="button">綺麗なデザインでやりたい方はこちら</button>
        </a>
        <div>
            <table>
                <thead>
                    <tr>
                        <th>ユーザー名</th>
                        <th>ツイート</th>
                        <th>作成日時</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($filteredTweets as $tweet): ?>
                        <tr>
                            <td><?php echo $tweet['userName']; ?></td>
                            <td><?php echo $tweet['tweets']; ?></td>
                            <td><?php echo $tweet['created_at']; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </body>
</html>