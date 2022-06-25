clone後まずやること
composer install

envファイルを書き換える　db,app_keyなど
php artisan migrate /テーブル定義
php artisan db:seed カード情報読み込み
