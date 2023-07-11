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
]; ?>

<!-- 以下はHTMLのコードになります -->
<!-- 今は「こんな処理をしているんだな〜」とざっくり見ていただけたらと思います！ -->
<!DOCTYPE html>
<html lang="ja">

<!-- headタグの中の処理で、ブラウザのタブに表示されるタイトルを設定しています -->
    <head>
        <meta charset="UTF-8">
        <title>投稿ページ</title>
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <!-- bodyタグの中の処理で、ブラウザ上に表示させる「タイトル」や、別の画面に遷移する「ボタン」を作成しています -->
    <body class="w-3/5 mx-auto">
        <h1 class="text-2xl text-gray-700 font-bold mb-6 ml-3 text-center">投稿ページ</h1>
        <a href="index.php" class="text-gray-700 font-bold mb-6 ml-3">
            <button type="button">戻る</button>
        </a>
        <ol >
            <?php foreach ($tweets as $tweet): ?>
                <li class="border-l-2 border-purple-600">
                    <div class="md:flex flex-start">
                    <div class="bg-purple-600 w-6 h-6 flex items-center justify-center rounded-full -ml-3.5">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" class="text-white w-3 h-3" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                        <path fill="currentColor" d="M0 464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V192H0v272zm64-192c0-8.8 7.2-16 16-16h288c8.8 0 16 7.2 16 16v64c0 8.8-7.2 16-16 16H80c-8.8 0-16-7.2-16-16v-64zM400 64h-48V16c0-8.8-7.2-16-16-16h-32c-8.8 0-16 7.2-16 16v48H160V16c0-8.8-7.2-16-16-16h-32c-8.8 0-16 7.2-16 16v48H48C21.5 64 0 85.5 0 112v48h448v-48c0-26.5-21.5-48-48-48z"></path>
                        </svg>
                    </div>
                    <div class="block p-6 rounded-lg shadow-lg bg-gray-100 ml-6 mb-10 w-full">
                        <div class="flex justify-between mb-4">
                        <a href="#!" class="font-medium text-purple-600 hover:text-purple-700 focus:text-purple-800 duration-300 transition ease-in-out text-sm"><?php echo $tweet[
                            'userName'
                        ]; ?></a>
                        <a href="#!" class="font-medium text-purple-600 hover:text-purple-700 focus:text-purple-800 duration-300 transition ease-in-out text-sm"><?php echo $tweet[
                            'created_at'
                        ]; ?></a>
                        </div>
                        <p class="text-gray-700 mb-6"><?php echo $tweet[
                            'tweets'
                        ]; ?></p>
                        <button type="button" class="inline-block px-3.5 py-1 border-2 border-purple-600 text-purple-600 font-medium text-xs leading-tight uppercase rounded hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0 transition duration-150 ease-in-out" data-mdb-ripple="true">コメント</button>
                        <button type="button" class="inline-block px-3.5 py-1 border-2 border-purple-600 text-purple-600 font-medium text-xs leading-tight uppercase rounded hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0 transition duration-150 ease-in-out" data-mdb-ripple="true">リツイート</button>
                        <button type="button" class="inline-block px-3.5 py-1 border-2 border-purple-600 text-purple-600 font-medium text-xs leading-tight uppercase rounded hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0 transition duration-150 ease-in-out" data-mdb-ripple="true">お気に入り</button>
                        <button type="button" class="inline-block px-3.5 py-1 border-2 border-purple-600 text-purple-600 font-medium text-xs leading-tight uppercase rounded hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0 transition duration-150 ease-in-out" data-mdb-ripple="true">その他</button>
                    </div>
                    </div>
                </li>
            <?php endforeach; ?>
        </ol>
    </body>
</html>