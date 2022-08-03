<!doctype html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>魚</title>
</head>
<body>
    <h1>魚</h1>
    <div>
        <p>投稿フォーム</p>
        <form action="{{ route('fish_article.create') }}" method="post">
            @csrf
            <label for="article-content">魚の説明</label>
            <span>200文字まで</span>
            <textarea id="article-content" type="text" name="fish_article" placeholder="魚の説明を登録"></textarea>
            <button type="submit">投稿</button>
        </form>
    </div>
    <div>
    @foreach($fish_articles as $fish_article)
        <p>{{ $fish_article->content }}</p>
    @endforeach
    </div>
</body>
</html>