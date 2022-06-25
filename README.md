clone後まずやること<br>
composer install

envファイルを書き換える　db,app_keyなど<br>
php artisan migrate /テーブル定義<br>
php artisan db:seed カード情報読み込み<br>
