**FashionablyLate(お問い合わせフォーム)**

*環境構築*

Dockerビルド

　1.git clone git@github.com:maikoshimotori/fashionably-late.git

　2.DockerDesktopアプリを立ち上げる
  
　3.docker-compose up -d build

Laravel環境構築
　

　1.docker-compose exec php bash
  
　2.composer install
  
　3.「.env.example」ファイルを「.env」ファイルに命名を変更。又は、「.env」ファイルを作成する

　4..env以下の環境変数を追加

    DB_CONNECTION=mysql
    
    DB_HOST=mysql
    
    DB_PORT=3306
    
    DB_DATABASE=laravel_db
    
    DB_USERNAME=laravel_user
    
    DB_PASSWORD=laravel_pass
 
　5.アプリケーションキーの作成
  
  　php artisan key:generate

　6.マイグレーションの実行
 
 　　php artisan migrate

　7.シーディングを実行する
 
 　　phpartisan db:seed

*使用技術*

　・php 8.0
  
　・Laravel 10.0
  
　・MySQL　8.0.26

 ER図

 ![スクリーンショット 2024-12-17 223211](https://github.com/user-attachments/assets/1683afa6-2eb2-4313-b1fe-b91ab79e445c)


＊メールアドレス*

・開発環境：http://localhost/

・phpMyAdmin:：http://localhost:8080/
