<p align="center">
    <a href="https://laravel.com" target="_blank">
        <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo">
    </a>
</p>

<p align="center">
    <a href="https://github.com/laravel/framework/actions">
        <img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status">
    </a>
    <a href="https://packagist.org/packages/laravel/framework">
        <img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads">
    </a>
    <a href="https://packagist.org/packages/laravel/framework">
        <img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version">
    </a>
    <a href="https://packagist.org/packages/laravel/framework">
        <img src="https://img.shields.io/packagist/l/laravel/framework" alt="License">
    </a>
</p>

# 📌 QR Code Generator (Laravel)

🚀 *QR Code Generator* adalah proyek berbasis Laravel yang memungkinkan pengguna untuk menghasilkan QR Code dengan mudah menggunakan *library SimpleSoftwareIO. Proyek ini dapat digunakan untuk berbagai kebutuhan seperti **membuat tautan QR, informasi kontak, atau data lainnya*.

## ✨ Features
- ✅ *Generate QR Code dengan cepat* menggunakan SimpleSoftwareIO.
- ✅ *Tampilan sederhana & responsif* dengan TailwindCSS.
- ✅ *Dapat menyimpan QR Code yang dihasilkan*.
- ✅ *Mudah dikustomisasi* sesuai kebutuhan.

## 🔧 Installation Guide

Untuk meng-clone dan menjalankan proyek ini secara lokal, ikuti langkah-langkah berikut:

### 1️⃣ Clone Repository
bash
git clone https://github.com/intan519/qrcode-melda.git
cd qrcode-mleda


### 2️⃣ Install Dependencies
Pastikan Anda telah menginstal [Composer](https://getcomposer.org/), lalu jalankan:
bash
composer install


### 3️⃣ Install Library QR Code
Proyek ini menggunakan *SimpleSoftwareIO QR Code Library*, install dengan:
bash
composer require simplesoftwareio/simple-qrcode


### 4️⃣ Konfigurasi Environment File
bash
cp .env.example .env
php artisan key:generate

Edit file .env dan sesuaikan pengaturan database.

### 5️⃣ Jalankan Migrasi Database (Jika Diperlukan)
bash
php artisan migrate


### 6️⃣ Jalankan Aplikasi
bash
php artisan serve

Buka di browser: [http://127.0.0.1:8000](http://127.0.0.1:8000)

---

## 🖼 Screenshot

![preview](https://github.com/user-attachments/assets/b6f68083-eb27-4b95-85da-34d14618a1b8)

---

## 📜 License

Proyek ini bersifat open-source dan tersedia di bawah [MIT License](https://opensource.org/licenses/MIT).

---
