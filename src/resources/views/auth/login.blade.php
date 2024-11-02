<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>ログイン</title>
</head>
<body>
    <h1>ログイン</h1>
    <form action="{{ route('login') }}" method="POST">
        @csrf
        <label for="email">メールアドレス</label>
        <input type="email" id="email" name="email" required><br>
        <label for="password">パスワード</label>
        <input type="password" id="password" name="password" required><br>
        <button type="submit">ログイン</button>
    </form>
</body>
</html>
