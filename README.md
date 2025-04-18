# 🎓 College Information System — K.D. Polytechnic, Patan


## 📌 Project Overview

**College Information System** is a dynamic and responsive web application developed as my final year project during my Diploma in Computer Engineering at **K.D. Polytechnic, Patan**. It was designed to serve as the **official website** of the college to enhance digital communication and information accessibility.

Despite the system being ready for deployment, due to certain administrative constraints, it wasn't hosted officially — but the entire codebase is preserved here for educational and demonstration purposes.

---

## 🛠️ Tech Stack

- **Frontend**: HTML5, CSS3, JavaScript
- **Backend**: PHP
- **Database**: MySQL (via XAMPP)
- **Design Approach**: Mobile-Responsive, Clean UI/UX

---

## ✨ Features

- 🏫 College overview and departments
- 🧑‍🏫 Faculty information and staff directory
- 📰 Latest news and event updates
- 📁 Downloadable forms and documents
- 📅 Academic calendar integration
- 📞 Contact and inquiry form with backend support
- 🔐 Admin panel to manage content (CRUD operations)

---

## 📷 Screenshots

> *(Add screenshots of the homepage, admin panel, and other UI sections here)*

---

## 🧑‍💻 How to Run the Project Locally

1. **Clone the Repository**
   ```bash
   git clone https://github.com/Utsav9303/college-information-system.git
   cd college-information-system
   ```

2. **Start XAMPP Server**
   - Move the project folder into the `htdocs` directory (usually found at `C:/xampp/htdocs`)
   - Open the **XAMPP Control Panel**
   - Start the following modules:
     - ✅ Apache
     - ✅ MySQL

3. **Setup Database**
   - Open your browser and go to `http://localhost/phpmyadmin`
   - Create a new database (e.g., `college_db`)
   - Import the provided `database.sql` file into this database
   - Edit `config.php` or the relevant file with your database credentials:
     ```php
     $host = 'localhost';
     $user = 'root';
     $pass = '';
     $db   = 'college_db';
     ```

4. **Run the Website**
   - In your browser, navigate to:
     ```
     http://localhost/college-information-system
     ```

---

## 📂 Folder Structure

```
college-information-system/
│
├── assets/          # CSS, JS, images
├── admin/           # Admin panel pages
├── includes/        # Reusable PHP components
├── config.php       # DB configuration
├── index.php        # Homepage
├── ...
└── database.sql     # Database schema
```

---


## 📄 License

This project is open-source and available under the [MIT License](LICENSE).

> Feel free to fork, learn, and contribute!

---

## ❤️ Acknowledgments

- My faculty and classmates at **K.D. Polytechnic, Patan**
- Open-source community for tools, templates, and guidance

---

> *“Transforming college communication with code.”*
```

Let me know if you want to add badges, a live demo link (if you deploy it later), or custom visuals!
