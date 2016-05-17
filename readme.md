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
#### 1. Ví dụ ứng dụng cần làm facebook login, ta sẽ sử dụng package oauth2-server-laravel đã được làm sẵn cho laravel, add package vào composer.json
```
"lucadegasperi/oauth2-server-laravel": "5.1.*" // lucadegasperi là tên tổ chức tạo package, những package này được tự động tải từ server packagist.org khi chạy lệnh composer update
```
