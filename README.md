# Academia Hub — College Admission Management System

A PHP and MySQL web application for college admissions. The project includes a public college website, student account and application pages, and an admin portal for managing courses, reviewing applications, and handling fees.

## Features

- Public home, departments, courses, about, and contact pages
- Student registration, login, dashboard, and profile
- Online admission application and fee submission pages
- Admin dashboard, registered user list, course management, and application review
- MySQL schema in `database/schema.sql`

## Technology

- PHP and MySQL/MariaDB
- HTML, CSS, JavaScript, Bootstrap, and bundled frontend assets
- XAMPP for local development

## Local setup

1. Clone the repository into your web server document root (for XAMPP, `htdocs`).
2. Create a MySQL database named `camsdb` in phpMyAdmin.
3. Import `database/schema.sql` to create the tables.
4. Check the database settings in `cams/includes/dbconnection.php`, `cams/admin/includes/dbconnection.php`, and `cams/user/includes/dbconnection.php`.
5. Start Apache and MySQL, then open `http://localhost/Academiahub/cams2/cams/` (or the matching path for your install).
6. Admin pages are under `/cams/admin/`; student pages are under `/cams/user/`.

Create your own local admin and student accounts. This repository does not include sample login credentials.

## Screenshots

The screenshots below show the project running locally with fictional demo records.

### Public site

#### Home page

![Academia Hub home page](screenshots/home.png)

#### Departments

![Departments](screenshots/departments.png)

#### Course catalog

![Course catalog](screenshots/courses.png)

#### About

![About Academia Hub](screenshots/about.png)

#### Contact

![Contact page](screenshots/contact.png)

### Student portal

#### Student login

![Student login](screenshots/student-login.png)

#### Student registration

![Student registration](screenshots/student-signup.png)

#### Student dashboard

![Student dashboard](screenshots/student-dashboard.png)

#### Admission application form

![Admission application form](screenshots/student-admission-form.png)

#### Fee submission

![Fee submission](screenshots/student-fees.png)

#### Student profile

![Student profile](screenshots/student-profile.png)

### Admin portal

#### Admin login

![Admin login](screenshots/admin-login.png)

#### Admin dashboard

![Admin dashboard](screenshots/admin-dashboard.png)

#### Applications

![Application list](screenshots/admin-applications.png)

#### Application review

![Application review form](screenshots/admin-application-detail.png)

#### Pending applications

![Pending applications](screenshots/admin-pending-applications.png)

#### Course management

![Course management](screenshots/admin-courses.png)

#### Registered users

![Registered users](screenshots/admin-registered-users.png)

#### Reports

![Application reports](screenshots/admin-reports.png)

## Privacy

Database dumps with personal records and password hashes, and student-uploaded documents, are excluded from this repository. The screenshot data is fictional. Use fictional records for local development and do not commit private applicant documents or credentials.
