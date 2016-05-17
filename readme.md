# Dự án Đi Đâu Đây

## Hướng dẫn thực hiện git :

### 1. Clone repo  về:
```
git clone https://github.com/InvisK/didauday.git .
git checkout develop
```

### 2. Cập nhật composer :
```
composer update
```
### 3. Tạo .env file từ .env.example và update giá trị
```
cp .env.example .env
```
### 4. Sử dụng package của composer cho Laravel
##### 1. Ví dụ ứng dụng cần làm facebook login, ta sẽ sử dụng package madewithlove/laravel-oauth2 đã được làm sẵn cho laravel, ta có thể xem hướng dẫn ở trang github của package https://github.com/madewithlove/laravel-oauth2
##### 2. Theo như hướng dẫn, ta sẽ thêm package vào composer.json để composer tự động tải package về khi chạy composer update
```
"madewithlove/laravel-oauth2": "0.4.*" // thông thường, tất cả package được composer tải về ở packagist.org, ta cũng có thể lên đó tìm package khác

composer update // chạy composer update để tự động tải và add package vào app
```
##### 3. Cuối cùng, gọi package ra để sử dụng (xem chi tiết ở hướng dẫn) :
```
use OAuth2\OAuth2;
use OAuth2\Token_Access;
use OAuth2\Exception as OAuth2_Exception;

```
