# Gue belajar lagi hal baru dalam 2 jam 👇

## Stack: CodeIgniter 4 + Tailwind CSS

### Summary feature✨
- Home, About, Login & Register Page
- All Page Validation
- Creating new user
- Login & Logout account
- Database creation for users (only for id, email, token).
- Basic password hashing
- Basic dynamic component layouting

### PROS 👍
- Super strong MVC pattern
- Super lightweight
- Fase development bisa dibilang cukup cepet
- Koneksi ke database gak terlalu ribet
- Query builder kek punyanya eloquent laravel
- Layouting cukup enak

### CONS 😢
- Validasi lemparan data yang sedikit ribet mesti agak muter

### WHAT NEXT? 😊
- Posting data
- Multirole user permission
- Cleaning some code
- Creating some API & using external API
- and much more...

### WHAT TO BELIEVE? 🤦‍♂️
- Belum nyoba production
- Belum nyoba middleware & module services
- Belum nyoba manage API
- Belum nyoba integrated RULES module
- Belum nyoba relasi & advance modeling
- Belum nyoba helper function

Banyak banget yang belom kan? iyeelah orang cuma 2 jam taek 🤣
lanjut lagi nanti dah...

### Cara jalanin projectnya? 👇🎉
1. Clone repository ini:
    - via HTTPS:
    ```bash
    git clone https://github.com/deaaprizal/deaci4dev-boilerplate.git
    ```
    - via SSH:
    ```bash
    git clone git@github.com:deaaprizal/deaci4dev-boilerplate.git
    ```
2. Perbarui paket dependensi yang disertakan:
    ```bash
    composer update
    ```
3. setup database MYSQL, kasih nama db simple_user lalu gunain db tersebut:
    ```SQL
    CREATE DATABASE simple_user;
    USE simple_user;
    ```
4. bikin table users:
    ```SQL
    CREATE TABLE users (
        id int(11) NOT NULL AUTO_INCREMENT,
        email varchar(255) NOT NULL,
        password varchar(255) NOT NULL,
        token int(8) NOT NULL,
        PRIMARY KEY (id),
        UNIQUE KEY token (token)
    ) ENGINE=InnoDB;
    ```
5. Salin file teks env menjadi file yang ber-esktensi `.env`:
    ```bash
    cp env .env
    ```
6. Buka file `.env` masukkan nilai pada setting seperti yang di bawah ini atau bisa menyesuaikan konfigurasi milik pribadi:
    ```env
    CI_ENVIRONMENT = development

    app.baseURL = http://localhost:8080/

    database.default.hostname = localhost
    database.default.database = simple_user
    database.default.username = root
    database.default.password = 
    database.default.DBDriver = MySQLi
    database.default.DBPrefix =
    database.default.port = 3306
    ```
    - Jangan lupa uncomment (hapus tanda #) pada settingan di atas.
7. Nyalain project nya: `php spark serve`
8. Pelajari.