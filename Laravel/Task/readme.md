Ứng dụng Task Management 
#
Luyện tập sử dụng Eloquent

Thực hiện thao tác thêm sửa xóa dữ liệu

#
Mã nguồn được sử dụng để thực hành tại <a href="https://codegym.vn">CodeGym</a>
#
<h1>Các bước khởi chạy</h1>
<h2>Cài đặt composer</h2>
composer install

#
<h2>Cài đặt npm</h2>
npm install

#
<h2>Cấu hình database</h2>
Tạo file .env từ file .env mẫu

cp .env.example .env

Cấu hình biến môi trường trong file .env

DB_DATABASE= tên database

DB_USERNAME= tên đăng nhập
 
DB_PASSWORD= mật khẩu

<h3>Tạo key cho ứng dụng</h3>

php artisan key:generate

<h3>Chạy migration và seeding</h3>

php artisan migrate --seed

#
Chạy project laravel trên địa chỉ http://localhost:8000 với câu lệnh

php artisan serve
