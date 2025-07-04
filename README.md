# CCS0043 — Applications Development 🏗️

Applications Development Repo ni Jan

## ❗XAMPP -- MySQL Crashing?

### Quick Fix
**1. Go to `xampp/mysql/data/` and locate `my.ini`**

**2. Open `my.ini` with any text editor and change port=3306 -> 3307**


![image](https://github.com/user-attachments/assets/ec3993fb-fbfa-452a-b1b0-5a15e90c028a)

**3. Save and restart XAMPP**

⬇️ If that does not work, refer to Long Fix. ⬇️

### Long Fix
**1.1 Go to `xampp/mysql/data/` and create a backup of the following files:**
> 📄 `ibdata1`
> 📄 `ib_logfile0`
> 📄 `ib_logfile1`

**1.2 Also create a backup of the databases you've already made.**
> 📄 `registration_db` (example)

**2. Delete 📄 `ibdata1`, 📄 `ib_logfile0`, and 📄 `ib_logfile1`**

**3. Copy __everything__ from `xampp/mysql/backup/` into `xampp/mysql/data/`**
> Overwrite if prompted

**4. Restart XAMPP**

## 📁 FA
- [PSA4 Technical / Formative Assessment 4](https://github.com/LibrarianDarchivo/CCS0043-App-Dev/tree/main/FA4)
- [PSA5 Technical / Formative Assessment 5](https://github.com/LibrarianDarchivo/CCS0043-App-Dev/tree/main/FA5)
- [PSA6 Technical / Formative Assessment 6](https://github.com/LibrarianDarchivo/CCS0043-App-Dev/tree/main/FA6)

## 📁 Eh
- [Renaissance Grid Gallery](https://github.com/LibrarianDarchivo/CCS0043-App-Dev/tree/main/Renaissance%20Grid%20Gallery)
- [Student Registration Page](https://github.com/LibrarianDarchivo/CCS0043-App-Dev/tree/main/Student%20Registration%20Page)
- [Student Grade Calculator](https://github.com/LibrarianDarchivo/CCS0043-App-Dev/tree/main/Student%20Score%20Calculator)

## 📝 Notes
- localhost/phpmyadmin

## ඞ Amogus
- [FA5 (Deprecated) (Sussy)](https://github.com/LibrarianDarchivo/CCS0043-App-Dev/tree/main/FA5-Nah)
- [Shrek](https://github.com/LibrarianDarchivo/CCS0043-App-Dev/tree/main/shrek.jpg)
