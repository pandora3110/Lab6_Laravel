# Lab 6 - Laravel Routing & Views

## Thông tin sinh viên
- Họ tên: Nguyễn Vũ Anh
- Lớp: D18CNPM2
- MSSV: 23810310237


## Các chức năng đã thực hiện

### 1. Basic Routing
- Route `/home` hiển thị chuỗi chào mừng
- Route `/about` hiển thị thông tin sinh viên

### 2. View trong Laravel
- Tạo file `contact.blade.php`
- Route `/contact` trả về view contact

### 3. Dynamic Route
- `/tong/{a}/{b}` tính tổng 2 số
- `/sinh-vien/{name}/{age?}` với tuổi tùy chọn

### 4. Route Group
- `/admin/dashboard`
- `/admin/users`

### 5. Validation Route
- `/check-date/{day}/{month}/{year}` kiểm tra bằng Regex

---

## Cách chạy project

```bash
composer install
php artisan key:generate
php artisan serve
