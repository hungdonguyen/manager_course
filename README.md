# Hệ Thống Quản Lý Khóa Học

Hệ thống quản lý khóa học (Course Manager) được xây dựng bằng PHP thuần, sử dụng kiến trúc MVC đơn giản để quản lý các khóa học, sinh viên, nhóm học và người dùng.

## 🚀 Tính Năng

### Quản Lý Người Dùng
- Đăng ký tài khoản mới
- Đăng nhập/Đăng xuất
- Quên mật khẩu và đặt lại mật khẩu
- Thay đổi mật khẩu
- Kích hoạt tài khoản
- Quản lý danh sách người dùng (thêm, sửa, xóa)

### Quản Lý Khóa Học
- Thêm khóa học mới
- Sửa thông tin khóa học
- Xóa khóa học
- Danh sách khóa học

### Quản Lý Danh Mục Khóa Học
- Thêm danh mục
- Sửa danh mục
- Xóa danh mục
- Danh sách danh mục

### Quản Lý Nhóm
- Thêm nhóm học
- Sửa thông tin nhóm
- Xóa nhóm
- Danh sách nhóm

### Quản Lý Sinh Viên
- Quản lý thông tin sinh viên

### Dashboard
- Trang tổng quan hệ thống

## 📋 Yêu Cầu Hệ Thống

- **Web Server**: Apache (XAMPP/WAMP/LAMP)
- **PHP**: 7.0 trở lên
- **Database**: MySQL/MariaDB
- **Extension PHP**: PDO, PDO_MySQL

## ⚙️ Cài Đặt

### 1. Clone hoặc tải dự án

```bash
git clone <repository-url>
```

### 2. Cấu hình Database

Tạo database MySQL với tên `manager_hung` hoặc tên tùy chỉnh.

### 3. Cấu hình kết nối

Mở file `config.php` và cập nhật thông tin kết nối database:

```php
const _HOST = 'localhost';
const _PORT = '3306'; 
const _DB = 'manager_hung';
const _USER = 'root';  
const _PASS = '';
const _DRIVER = 'mysql';
```

### 4. Import Database

Import file SQL vào database đã tạo (nếu có file dump).

### 5. Cấu hình Timezone

Timezone mặc định được đặt là `Asia/Ho_Chi_Minh` trong file `index.php`.

### 6. Khởi động ứng dụng

- Di chuyển project vào thư mục `htdocs` (với XAMPP) hoặc `www` (với WAMP)
- Truy cập: `http://localhost/manager_course/`

## 📁 Cấu Trúc Thư Mục

```
manager_course/
├── config.php              # Cấu hình chính
├── index.php               # File khởi tạo
├── routes.php              # Định tuyến
├── includes/               # Thư viện và hàm chung
│   ├── connect.php         # Kết nối database
│   ├── database.php        # Hàm truy vấn database
│   ├── functions.php       # Hàm tiện ích
│   └── session.php         # Quản lý session
├── modules/                # Các module chức năng
│   ├── auth/               # Xác thực người dùng
│   ├── course/             # Quản lý khóa học
│   ├── course_category/    # Quản lý danh mục
│   ├── dashboard/          # Trang chủ
│   ├── groups/             # Quản lý nhóm
│   ├── students/           # Quản lý sinh viên
│   ├── users/              # Quản lý người dùng
│   └── errors/             # Xử lý lỗi
└── templates/              # Giao diện
    ├── assets/             # Tài nguyên tĩnh
    │   ├── css/            # File CSS
    │   ├── js/             # File JavaScript
    │   ├── font/           # Font chữ
    │   └── images/         # Hình ảnh
    ├── layouts/            # Layout chung
    │   ├── header.php      # Header
    │   ├── sidebar.php     # Sidebar
    │   ├── footer.php      # Footer
    │   └── breadcrumb.php  # Breadcrumb
    └── uploads/            # Thư mục upload file
```

## 🔧 Cấu Hình

### Debug Mode

Để bật/tắt chế độ debug, sửa trong `config.php`:

```php
const _DEBUG = true; // Bật debug
const _DEBUG = false; // Tắt debug
```

### Module và Action mặc định

```php
const _MODULES = 'dashboard';
const _ACTION = 'index';
```

## 🛠️ Hàm Database Chính

### SELECT
- `getAll($sql)` - Lấy tất cả bản ghi
- `getOne($sql, $id)` - Lấy một bản ghi theo ID
- `getRow($sql)` - Đếm số bản ghi

### INSERT
- `insert($table, $data)` - Thêm dữ liệu mới

### UPDATE
- `update($table, $data, $condition)` - Cập nhật dữ liệu

### DELETE
- `delete($table, $condition)` - Xóa dữ liệu

## 🔐 Bảo Mật

- Sử dụng PDO với Prepared Statements chống SQL Injection
- Sanitize input với `preg_replace()` để tránh directory traversal
- Kiểm tra constant `_HUNG` để bảo vệ các file include
- Quản lý session an toàn

## 🎨 Giao Diện

- Sử dụng AdminLTE template
- Responsive design
- CSS và JavaScript tùy chỉnh trong thư mục `templates/assets/`

## 📝 URL Routing

Hệ thống sử dụng URL dạng:
```
?module=<tên_module>&action=<tên_action>
```

Ví dụ:
- `?module=auth&action=login` - Trang đăng nhập
- `?module=course&action=list` - Danh sách khóa học
- `?module=users&action=add` - Thêm người dùng

## 👨‍💻 Phát Triển

### Thêm Module Mới

1. Tạo thư mục mới trong `modules/`
2. Tạo các file action (index.php, list.php, add.php, edit.php, delete.php)
3. Thêm menu trong `templates/layouts/sidebar.php`

### Thêm Chức Năng Database

Thêm hàm mới vào `includes/database.php`

## 📄 License

Dự án này được phát triển cho mục đích học tập và nghiên cứu.

## 📧 Liên Hệ

Tác giả: Hưng Nguyễn

---

**Lưu ý**: Đây là dự án học tập, không nên sử dụng trong môi trường production mà chưa có các biện pháp bảo mật bổ sung.
