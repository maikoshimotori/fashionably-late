<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FashionablyLate</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <header>
        <nav>
            <a href="{{ route('login') }}" class="btn btn-primary">Login</a>
        </nav>
    </header>

    <main class="container mt-5">
        <h2>Register</h2>

        <!-- 登録フォーム -->
        <form action="{{ route('register') }}" method="POST">
            @csrf

            <!-- 名前 -->
            <div class="mb-3">
                <label for="name" class="form-label">お名前</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}" required>
                @error('name')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- メールアドレス -->
            <div class="mb-3">
                <label for="email" class="form-label">メールアドレス</label>
                <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}" required>
                @error('email')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- パスワード -->
            <div class="mb-3">
                <label for="password" class="form-label">パスワード</label>
                <input type="password" name="password" id="password" class="form-control" required>
                @error('password')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- 登録ボタン -->
            <button type="submit" class="btn btn-primary">登録</button>
        </form>
    </main>
</body>
</html>