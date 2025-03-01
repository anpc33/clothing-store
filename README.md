## Clothing Store

## Giới thiệu

Clothing Store là một ứng dụng web bán hàng thời trang, cung cấp các tính năng quản lý sản phẩm, đơn hàng, khách hàng và thanh toán trực tuyến. Dự án này được phát triển với mục tiêu tạo ra một nền tảng thương mại điện tử hiện đại, dễ sử dụng và mạnh mẽ.
## Mục Lục
1. [Tổng Quan](#tổng-quan)
2. [Tính Năng](#tính-năng)
3. [Công Nghệ Sử Dụng](#công-nghệ-sử-dụng)
4. [Cấu Trúc Dự Án](#cấu-trúc-dự-án)
5. [Hướng Dẫn Cài Đặt](#hướng-dẫn-cài-đặt)
6. [Hướng Dẫn Sử Dụng](#hướng-dẫn-sử-dụng)
7. [Hướng Dẫn Đóng Góp](#hướng-dẫn-đóng-góp)
8. [Liên Hệ](#liên-hệ)

## Tổng Quan
Đây là một nền tảng thương mại điện tử dựa trên PHP cho cửa hàng quần áo. Ứng dụng cung cấp giải pháp toàn diện để quản lý kinh doanh bán lẻ quần áo trực tuyến, bao gồm quản lý người dùng, danh mục sản phẩm, chức năng giỏ hàng và công cụ quản trị.

## Tính Năng
- **Quản Lý Người Dùng**: Đăng ký, đăng nhập, quản lý hồ sơ
- **Danh Mục Sản Phẩm**: Duyệt và tìm kiếm các mặt hàng quần áo theo danh mục
- **Giỏ Hàng**: Thêm sản phẩm, quản lý số lượng, quy trình thanh toán
- **Bảng Quản Trị**: Quản lý sản phẩm, danh mục, đơn hàng và người dùng
- **Thiết Kế Responsive**: Hoạt động trên máy tính để bàn và thiết bị di động

## Công Nghệ Sử Dụng
- **Backend**: PHP (46.1%)
- **Frontend**: CSS (28.0%), JavaScript (0.4%)
- **Cơ Sở Dữ Liệu**: MySQL (dựa trên cấu trúc dự án)
- **Framework CSS**: Tailwind CSS

## Cấu Trúc Dự Án
- **Model/**: Chứa các mô hình cơ sở dữ liệu và logic nghiệp vụ
- **admin/**: Giao diện và chức năng quản trị
- **dao/**: Đối tượng truy cập dữ liệu (Data Access Objects) cho các thao tác cơ sở dữ liệu
- **src/**: Các file nguồn cho ứng dụng
- **upload/**: Thư mục cho các file được tải lên (hình ảnh sản phẩm, v.v.)
- **user/**: Chức năng và giao diện liên quan đến người dùng

## Hướng Dẫn Cài Đặt

### Yêu Cầu Hệ Thống
- PHP 7.4 trở lên
- MySQL 5.7 trở lên
- Composer (để quản lý các gói phụ thuộc)
- Node.js và npm (cho tài nguyên frontend)


### Clone repository:
```
> git clone https://github.com/anpc33/clothing-store.git

> cd clothing-store
```
### Cài đặt dependencies:
```
> composer install

> npm install
```
### Cấu hình môi trường:
```
> Sao chép file .env.example thành .env

> Cập nhật thông tin kết nối database trong file .env

> cp .env.example .env

> php artisan key:generate
```
### Chạy migration và seed database:
```
> php artisan migrate --seed

> Chạy server local:

> php artisan serve

> Mở trình duyệt và truy cập: http://127.0.0.1:8000
```
## Đóng góp

Mọi đóng góp đều được hoan nghênh! Hãy fork repository, tạo branch mới và gửi pull request.

## Giấy phép


Dự án này được cấp phép theo MIT License.


