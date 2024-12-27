# Laravel Task Tracker Application

## 📖 Overview

The **Laravel Task Tracker** is a web-based application designed for efficient task management. It allows users to create, edit, update, and delete tasks with real-time functionality using Laravel with Filament and Livewire. The backend is powered by MySQL for reliable data storage.

---

## 🚀 Features

- User Authentication
- Task Management (CRUD Operations)
- Real-time Updates with Livewire
- Modern User Interface with Filament
- MySQL Database Integration

---

## 🛠️ Setup Instructions

Follow the steps below to set up and run the application locally:

### 1. **Prerequisites**
Ensure you have the following installed on your machine:
- [Composer](https://getcomposer.org/download/)
- [PHP 8.1+](https://www.php.net/downloads.php)
- [MySQL](https://dev.mysql.com/downloads/)
- [Node.js](https://nodejs.org/) (for npm)
- A web server such as [Apache](https://httpd.apache.org/) or [Nginx](https://nginx.org/en/)
- [XAMPP](https://www.apachefriends.org/) (optional, includes Apache, PHP, and MySQL)

### 2. **Clone the Repository**
```bash
git clone https://github.com/your-username/task-tracker.git
cd task-tracker
```

### 3. **Install Dependencies**
Run the following commands to install Laravel's backend and frontend dependencies:
```bash
composer install
npm install
npm run dev
```

### 4. **Environment Configuration**
Copy the example environment file and configure the necessary settings:
```bash
cp .env.example .env
```
- Update the .env file with your database credentials:

    ```bash
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=your_database_name
    DB_USERNAME=your_database_user
    DB_PASSWORD=your_database_password
    ```

### 5. **Run Migrations**  
Create the database tables:
```bash
php artisan migrate
```

### 6. **Start the Development Server**
Launch the application:
```bash
php artisan serve
```
The application will be available at http://localhost:8000.

## 📋 Usage Instructions

### 1. **Log in or Register**
- Access the application by registering as a new user or logging in with existing credentials.

### 2. **Task Management**
- Create tasks using the "Add Task" button.
- Edit or update tasks via the edit button next to each task.
- Delete tasks with the delete button after confirmation.

### 3. **Real-Time Updates**
- Changes to tasks are updated in real-time without needing to refresh the page.

---

## 🖥️ Tech Stack

- **Backend:** Laravel 10, PHP 8.1+
- **Frontend:** Livewire, Filament
- **Database:** MySQL
- **Tools:** Composer, npm

---

## 🤝 Contribution

Feel free to fork the repository and submit pull requests for improvements or new features.

---

## 📞 Support

For any questions or issues, please reach out to:

- **Developer:** Yoonus Ajward
- **Email:** yoonusajward27@gmail.com
- **GitHub:** Yoonus Ajward [https://github.com/yoonusajward]


