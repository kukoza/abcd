# การอัปโหลดโปรเจค Laravel ไปยัง Plesk

## ขั้นตอนการอัปโหลด:

### 1. อัปโหลดไฟล์
- อัปโหลดทุกไฟล์ยกเว้น:
  - node_modules/
  - .git/
  - database/database.sqlite (ถ้าใช้ SQLite)

### 2. ตั้งค่า Database
- สร้าง MySQL database ใน Plesk
- แก้ไขไฟล์ .env:
  ```
  DB_CONNECTION=mysql
  DB_HOST=localhost
  DB_PORT=3306
  DB_DATABASE=your_database_name
  DB_USERNAME=your_username
  DB_PASSWORD=your_password
  APP_URL=https://doc.nozomi-th.com
  ```

### 3. ตั้งค่า Permissions
```bash
chmod -R 755 storage/
chmod -R 755 bootstrap/cache/
```

### 4. รัน Commands (ผ่าน SSH หรือ Plesk Terminal)
```bash
composer install --optimize-autoloader --no-dev
php artisan config:cache
php artisan route:cache
php artisan view:cache
php artisan migrate --force
```

### 5. ตั้งค่า Document Root
- ใน Plesk ตั้งค่า Document Root ให้ชี้ไปที่โฟลเดอร์ `public/`

### 6. ตั้งค่า PHP Version
- ตั้งค่า PHP version ให้เป็น 8.1 หรือสูงกว่า

## ไฟล์สำคัญที่ต้องตรวจสอบ:
- .env (ต้องแก้ไขให้เหมาะกับ production)
- public/.htaccess (สำหรับ URL rewriting)
- .htaccess (สำหรับความปลอดภัย)

## หมายเหตุ:
- ห้ามลืมเปลี่ยน APP_DEBUG=false ใน production
- ตรวจสอบให้แน่ใจว่า APP_KEY ถูกตั้งค่าแล้ว
- สำรองข้อมูลก่อนอัปโหลด