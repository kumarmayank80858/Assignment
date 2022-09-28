# CodeIgniter 4 Login & Register
Download the Codeigniter file from url: https://codeigniter.com

## 1. Setup in Apache server config -> (httpd.conf)
> DocumentRoot "C:/xampp/htdocs/assignment/public"
> <Directory "C:/xampp/htdocs/assignment/public">

## 2. Setup
Change .env settings to apply to your environment
> Hosting: http://localhost
> Database: login
> CI_ENVIRONMENT
> hostname: localhost
> username: root
> password: " " 

## 3. Add .sql file in MySql database
> folder: login.sql 

This will create the table 'users' in your database that you secified in your .env file

### 4. Now you can Register your first user
