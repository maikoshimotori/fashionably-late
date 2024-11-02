<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>ユーザー登録</title>
</head>
<body>
    <h1>Contact Form - Register</h1>
    <form action="{{ route('register') }}" method="POST">
        @csrf
        <label for="name">お名前 ※</label>
        <input type="text" id="name" name="name" placeholder="お名前を入力してください" required>
        <br>

        <label for="email">メールアドレス ※</label>
        <input type="email" id="email" name="email" placeholder="メールアドレスを入力してください" required>
        <br>

        <label for="password">パスワード ※</label>
        <input type="password" id="password" name="password" placeholder="パスワードを入力してください" required>
        <br>

        <button type="submit">登録</button>
    </form>
</body>
</html>
