# Kartu Ucapan Selamat Wisuda
Project ini dibuat sebagai salah satu saran pemberian ucapan yang antimainstream kepada kawan-kawan ITB yang sedang di Wisuda. Dipakai sebagai sarana pengingat kenangan yang telah lalu, permintaan maaf, maupun ucapan terima kasih untuk para wisudawan sejak Juli 2016.

## Deployment
Untuk melakukan menggunakan project ini, terdapat beberapa prerequisite yakni php web server dan json-server sebagai mock server. Langkah-langkah yang harus dilakukan adalah:
1. Install Web server dan php
2. Install nodejs & json-server (npm install json-server)
3. Copy project ke webroot folder (Pada linux/ubuntu biasanya pada /var/www/html)
4. Lakukan pengubahan database ucapan pada Ucapan.json
5. Upload foto/gambar dengan format penamaan {iducapan}-{nomor gambar}.jpg
6. Jalankan json-server dengan perintah *json-server -watch /var/www/html/Ucapan.json*


## Cara Penggunaan
1. Lakukan deployment seperti pada tahap sebelumnya
2. Informasikan Kode Ucapan pada wisudawan

Untuk dapat diakses oleh wisudawan, aplikasi ini harus dapat diakses via internet/jaringan. Bila terdapat VPS/Server dengan IP Public maka tidak ada masalah. Bila tidak terdapat server dengan IP public yang dapat diakses oleh wisudawan, dapat digunakan perangkat pribadi (PC/Laptop) dengan melakukan deployment seperti tahap sebelumnya dan menginstall *ngrok* untuk melakukan http connection tunneling.

## Demo
1. Akses http://dari.aryyadwisatya.com
![Homepage](/images/home.jpg)
2. Masukkan kode "20-taro"
![Alm. Taufiq Akbar Rosyadi](/images/taro.jpg)

## Disclaimer
Aplikasi ini bebas digunakan dan dimodifikasi dengan tetap menyebutkan sumber.

##

*Selamat jalan, Fiq. Semoga tempatmu lapang dan menyenangkan di sana*