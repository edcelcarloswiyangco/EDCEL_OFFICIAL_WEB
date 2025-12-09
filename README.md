# Edcel Carlos Wiyangco - Official Web Portfolio

## 📄 Project Overview
Welcome to my official portfolio repository, **EDCEL_OFFICIAL_WEB**. 
This web application was developed as my **Final Project** for Web Development. It serves as a digital resume and showcase platform to highlight my skills, projects, and background as a developer.

The application is built on the **Laravel PHP Framework**, utilizing MVC architecture for robust backend management and dynamic content rendering.

## 🛠 Tech Stack
* **Framework:** Laravel
* **Language:** PHP, JavaScript
* **Frontend:** HTML5, CSS3, Blade Templates
* **Database:** MySQL
* **Tools:** VS Code, Git, Composer

## 🚀 Key Features
* **Dynamic Portfolio Showcase:** Projects are managed and fetched from the database.
* **Responsive UI:** Optimized for both desktop and mobile viewing.
* **Contact Management:** Functional contact form for inquiries.
* **Admin Capabilities:** Backend structure for content management.

## ⚙️ Installation & Setup Guide
To run this project on your local machine, please follow these steps:

1.  **Clone the repository**
    ```bash
    git clone [https://github.com/edcelcarloswiyangco/EDCEL_OFFICIAL_WEB.git](https://github.com/edcelcarloswiyangco/EDCEL_OFFICIAL_WEB.git)
    cd EDCEL_OFFICIAL_WEB
    ```

2.  **Install PHP dependencies**
    ```bash
    composer install
    ```

3.  **Install Frontend dependencies (if applicable)**
    ```bash
    npm install
    npm run build
    ```

4.  **Environment Setup**
    * Duplicate the `.env.example` file and rename it to `.env`
    * Update your database credentials (DB_DATABASE, DB_USERNAME, DB_PASSWORD) in the new `.env` file.

5.  **Generate Application Key**
    ```bash
    php artisan key:generate
    ```

6.  **Run Database Migrations**
    ```bash
    php artisan migrate
    ```

7.  **Serve the Application**
    ```bash
    php artisan serve
    ```
    Access the site at: `http://localhost:8000`

## 👤 Author
**Edcel Carlos Wiyangco**
* **GitHub:** [@edcelcarloswiyangco](https://github.com/edcelcarloswiyangco)
* **Repository:** [EDCEL_OFFICIAL_WEB](https://github.com/edcelcarloswiyangco/EDCEL_OFFICIAL_WEB)

---
*This project is for educational purposes as a requirement for [Insert Subject Code/Name Here].*