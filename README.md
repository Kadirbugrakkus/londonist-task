<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Proje Kurulumu

Bu rehber, Laravel projenizin nasıl kurulacağına dair adımları içermektedir.

### Adım 1: Projeyi Klonlama

Projeyi GitHub üzerinden klonlamak için aşağıdaki komutu terminalinize yazın:

```bash
git clone https://github.com/Kadirbugrakkus/londonist-task.git
```

### Adım 2: Veritabanı Ayarları

Projeniz için bir veritabanı oluşturun. .env dosyasında belirtilen veritabanı ismini kullanarak MySQL ya da başka bir veritabanı yönetim sistemi üzerinden yeni bir veritabanı oluşturabilirsiniz.

### Adım 3: Composer Kurulumu

Projeyi klonladıktan sonra, projenin kök dizininde aşağıdaki komutu çalıştırarak gerekli paketleri yükleyin:

```bash
composer install
```

### Adım 4: Migration ve Seed

Veritabanı tablolarını oluşturmak için aşağıdaki komutu çalıştırın:

```bash
php artisan migrate
```

### Adım 5: Storage Link

Proje içerisindeki storage klasörünü public klasörüne bağlamak için aşağıdaki komutu çalıştırın:

```bash
php artisan storage:link
```

### Adım 6: Projeyi Çalıştırma

Projeyi çalıştırmak için aşağıdaki komutu çalıştırın:

```bash
php artisan serve
```


### Not: Smtp Ayarları

#### - E-posta gönderimi için Mailtrap kullanılmaktadır. Mailtrap'ın ücretsiz versiyonu kullandığından, gönderilen e-postalar Mailtrap'ın test kutusuna gidecektir.
#### - Şu anda kullanılan SMTP bilgileri kişisel hesaba aittir. Kendi SMTP bilgilerinizi kullanmak için .env dosyasındaki aşağıdaki satırları güncelleyin:

```bash
MAIL_MAILER=smtp
MAIL_HOST=sandbox.smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=70550192850496
MAIL_PASSWORD=6698dabde52b3c
MAIL_ENCRYPTION=tls
```


