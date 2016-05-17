# Dự án Đi Đâu Đây

## Hướng dẫn thực hiện git :

### 1. Clone repo  về:
```
git clone https://github.com/InvisK/didauday.git .
git checkout develop
```

### 2. Cập nhật và cài đặt các package của app :
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
"madewithlove/laravel-oauth2": "0.4.*" // thông thường, tất cả package được composer tải về ở packagist.org, ta cũng có thể lên đó để xem thông tin các phien bản hoặc tìm package khác

composer update // chạy composer update để tự động tải và add package vào app
```
##### 3. Cuối cùng, gọi package ra để sử dụng (xem chi tiết ở hướng dẫn) :
```
use OAuth2\OAuth2;
use OAuth2\Token_Access;
use OAuth2\Exception as OAuth2_Exception;

```
##### 4. Một số lưu ý khi sử dụng package :
```
* Nên tận dụng package để hoàn thành nhanh và ổn định công việc, trừ khi không có package hoặc những tính năng riêng biệt của app ta sẽ code lại.
* Trước khi install package, nên vào packagist.org để xem thông tin các phiên bản. Đôi khi trong hướng dẫn, phiên bản đã cũ và bị xung đột mà nhà cung cấp chưa cập nhật hoặc hướng dẫn đã cũ.

```
