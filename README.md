<div align="center">
  <img src="./readme-images/logo.svg" width="350px">

  <h2>CodeChums - CRUD Application</h2>

  This application is fully responsive crud application, <br />Responsive for all devices
</div>

<h3 align="center">Demo Screenshorts</h3>

![CRUD Application Demo](https://github.com/ShaheDevise/php_crud/blob/main/readme-images/demo.png)
<br> <br> <br> <br> 
![CRUD Application Demo](https://github.com/ShaheDevise/php_crud/blob/main/readme-images/demo_02.png)

Before you begin, make sure you have the following installed:

- PHP
- MySQL
- Web server
- A web browser


<br>

## Setup Database

1. **Create a Database:**

   - Open your MySQL database management tool (phpMyAdmin).

   - Create a new database named `crud`.

   - If you are using phpMyAdmin, follow these steps:
     - Click on the "Databases" tab.
     - Enter `crud` in the "Database name" field.
     - Click the "Create" button.

2. **Create a Table:**

   - Inside the `crud` database, create a table named `developers` using the following SQL query:

   ```sql
   CREATE TABLE developers (
      id INT(11) AUTO_INCREMENT PRIMARY KEY,
      full_name VARCHAR(100) NOT NULL,
      email VARCHAR(100) NOT NULL,
      phone VARCHAR(15) NOT NULL,
      skills TEXT NOT NULL,
      experience_level VARCHAR(50) NOT NULL,
      github_profile VARCHAR(255),
      linkedin_profile VARCHAR(255),
      current_job_title VARCHAR(100),
      portfolio_website VARCHAR(255),
      created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    );
   ```
<br>

### Note
**Note:** I did it differently here. You can clone my repository if you want to do like me

### Prerequisites

Before you begin, ensure you have met the following requirements:

* [Git](https://git-scm.com/downloads "Download Git") must be installed on your operating system.

### Run Locally

To run **jack-portfolio** locally, run this command on your git bash:

Linux and macOS:

```bash
  sudo git clone https://github.com/ShaheDevise/php_crud.git
```

Windows:

```bash
git clone https://github.com/ShaheDevise/php_crud.git
```

### Contact

If you want to contact with me you can reach me at [Facebook](https://web.facebook.com/ShaheDevise).

### License

This project is **free to use** and does not contains any license.
