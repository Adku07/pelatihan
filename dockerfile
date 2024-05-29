# Gunakan image PHP resmi
FROM php:7.4-apache

# Salin file aplikasi Anda ke dalam container
COPY . /var/www/html/

# Pastikan port 80 dibuka
EXPOSE 80
