# Manager Course - Hệ thống quản lý khóa học

Hệ thống quản lý khóa học được xây dựng bằng PHP thuần, sử dụng AdminLTE v4 cho giao diện quản trị.

## Tính năng

- 🎓 Quản lý khóa học
- 📚 Quản lý lĩnh vực/danh mục khóa học
- 👥 Quản lý người dùng và phân quyền
- 👨‍🎓 Quản lý học viên
- 👨‍👩‍👧‍👦 Quản lý nhóm học viên
- 🔐 Xác thực và phân quyền người dùng

## Yêu cầu hệ thống

- PHP >= 7.4
- MySQL/MariaDB
- Apache Server (XAMPP/WAMP/LAMP)
- PDO Extension

## Cài đặt

1. **Clone repository**
```bash
git clone https://github.com/hungdonguyen/manager_course.git
```

2. **Cấu hình database**
- Tạo database mới trong phpMyAdmin
- Import file SQL (nếu có)
- Cập nhật thông tin kết nối trong `config.php`:
```php
const _HOST = 'localhost';
const _PORT = '3306'; 
const _DB = 'manager_hung';
const _USER = 'root';  
const _PASS = '';
```

3. **Chạy ứng dụng**
- Copy project vào thư mục `htdocs` (XAMPP) hoặc `www` (WAMP)
- Khởi động Apache và MySQL
- Truy cập: `http://localhost/manager_course`

## Cấu trúc thư mục

```
manager_course/
├── config.php              # Cấu hình hệ thống
├── index.php              # File khởi tạo chính
├── routes.php             # Định tuyến URL
├── includes/              # Các file core
│   ├── connect.php       # Kết nối database
│   ├── database.php      # Xử lý database
│   ├── functions.php     # Các hàm tiện ích
│   └── session.php       # Quản lý session
├── modules/               # Các module chức năng
│   ├── auth/             # Xác thực người dùng
│   ├── dashboard/        # Trang chủ quản trị
│   ├── course/           # Quản lý khóa học
│   ├── course_category/  # Quản lý danh mục
│   ├── users/            # Quản lý người dùng
│   ├── students/         # Quản lý học viên
│   ├── groups/           # Quản lý nhóm
│   └── errors/           # Xử lý lỗi
└── templates/             # Giao diện
    ├── layouts/          # Layout chung
    └── assets/           # CSS, JS, Images
```

## Công nghệ sử dụng

- **Backend:** PHP (Pure PHP, PDO)
- **Database:** MySQL/MariaDB
- **Frontend:** AdminLTE v4, Bootstrap 5
- **Icons:** Bootstrap Icons
- **Plugins:** OverlayScrollbars, ApexCharts, JSVectorMap

## Tác giả

- GitHub: [@hungdonguyen](https://github.com/hungdonguyen)

## License

This project is open source.

---

**Phát triển bởi HIENU MARKETING**
