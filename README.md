# Kledo PHP OAuth 2 App

Projek PHP ini mendemonstrasikan cara mengakses API Kledo menggunakan API Key. Gunakan `composer` atau `clone` repositori ini untuk memulai.

## Mulai

Untuk menjalankan di `local` kamu perlu lokal web server dengan dukungan PHP versi 8.0 ke atas, Git dan juga composer.

* [Download XAMPP](https://www.apachefriends.org/download.html) 
* [Download Git](https://git-scm.com/downloads)
* [Download Composer](https://getcomposer.org/download/)

### Unduh Secara Manual

* Clone repository ini menggunakan git ke local server web root :

```bash
C:\Xampp\htdocs

$ git clone https://github.com/Kledo-ID/php-oauth2-demo.git
```

* Ubah ke folder yang baru di clone `php-oauth2-demo`

```bash
$ cd php-oauth2-demo
```

* Kemudian unduh dependencies composer menggunakan command berikut

```bash
$ composer install
```

## Membuat API Key

Ikuti langkah-langkah berikut untuk membuat API Key.

* Buat akun di [kledo](https://kledo.com/daftar/) (Jika belum punya)
* Login ke [Kledo](https://app.kledo.com/)
* Buka menu `Pengaturan` > `Integrasi` > `API Key`
* Kemudian klik tombol `Tambah`
* Masukkan `Nama Token` dan `Tanggal Kedaluwarsa`
* Klik tombol `Tambah Token`
* Copy `Personal Access Token` kemudian simpan ke dalam text file.

## Konfigurasi .env

* Rename file `.env.sample` ke `.env`
* Sesuaikan `API_HOST` dengan API Endpoint URL yang ada di halaman menu `Pengaturan` > `Integrasi` > `API Key`.
* copy & paste `Personal Access Token` yang sudah disimpan ke variabel `ACCESS_TOKEN`.

Contoh file `.env`

```text
API_HOST=http://xxx.api.kledo.com/api/v1

ACCESS_TOKEN="kledo_pat_0000MC_AACiJecQWjt6W***koRe"
```
