# Inmate Information Management System

## Project Overview
The **Inmate Information Management System** is a web-based application designed to streamline the management of inmate records within a medium-security custodian center. The system enables efficient tracking, retrieval, and update of inmate data, supporting operational decision-making and data-driven insights. With a focus on user-friendly design and secure data handling, the system aims to improve custodial staff productivity and enhance overall security.

## Table of Contents
- [Project Overview](#project-overview)
- [Features](#features)
- [Technologies Used](#technologies-used)
- [Installation](#installation)
- [Usage](#usage)
- [Development Report](#development-report)
- [Project Structure](#project-structure)
- [Future Enhancements](#future-enhancements)
- [Contributing](#contributing)
- [License](#license)

## Features
- **User Management**: Secure login system for custodial staff, with role-based access control.
- **Inmate Record Management**: Create, update, and view inmate profiles, including personal details, case information, and status updates.
- **Search & Filter**: Advanced search capabilities to locate inmate records quickly.
- **Reporting**: Generate customized reports for inmate status, demographic breakdown, and more.
- **Audit Trail**: Track all modifications to inmate records, ensuring accountability and data integrity.
- **User-Friendly Interface**: Easy-to-navigate graphical interface designed for quick adoption by custodial staff.

## Technologies Used
### Frontend
- **HTML5**: Structuring web pages
- **CSS3 & Bootstrap**: Styling and responsive design
- **JavaScript & jQuery**: Adding interactivity and handling dynamic content

### Backend
- **PHP**: Server-side logic
- **MySQL 5.7.11**: Database management and query handling

### Development Tools
- **WAMP Server (Apache 3.1.9)**: Local development environment
- **Sublime Text**: Code editor

## Installation
### Prerequisites
- **WAMP Server** (or another server supporting Apache, MySQL, and PHP)
- **Sublime Text** or any preferred code editor

### Setup
1. **Clone the repository:**
   ```bash
   git clone https://github.com/yourusername/inmate-info-system.git

## Start WAMP Server and ensure MySQL and Apache services are running.

### Database Setup:
1. Import the SQL file located in `database/inmate_info_system.sql` to set up the database structure.
2. Configure the database connection in `config/database.php` with the appropriate credentials.

### Access the Application:
- Open your web browser and navigate to `http://localhost/inmate-info-system`.

## Usage
1. **Login** using staff credentials.
2. Access the **Dashboard** to view options for managing inmate records.
3. Use the **Add Inmate** option to create a new record, or **Edit** existing records as needed.
4. **Generate Reports** on inmate demographics and case status.

## Development Report
### Successes
- Designed a responsive UI with Bootstrap for ease of use.
- Developed a secure backend with PHP and MySQL, enabling efficient record management.
- Implemented search functionality and a role-based access control system.

### Challenges
- Ensuring data security and privacy.
- Managing responsiveness across devices.
- Balancing project scope with time constraints.

### Areas for Improvement
- Code optimization for PHP and JavaScript.
- Enhanced reporting features and analytics.

### Lessons Learned
- Importance of thorough database design.
- Effective version control and project management with a Trello board.

## Project Structure
```plaintext
├── config/                # Configuration files (database, environment)
├── database/              # Database schema and SQL files
├── public/                # Public files and assets (CSS, JS, images)
├── src/                   # Source code for application logic
│   ├── controllers/       # PHP controllers for handling requests
│   ├── models/            # PHP models for database interactions
│   └── views/             # HTML views for the frontend
├── index.php              # Main entry point
└── README.md              # Project documentation

## Future Enhancements
- **Role-Based Reports**: More granular access control for different user roles.
- **Automated Notifications**: Alerts for approaching release dates or court hearings.
- **Data Analytics Dashboard**: Overview of inmate demographics and trends.
- **Mobile Optimization**: Further optimization for mobile devices.

## Contributing
Contributions are welcome! Please fork the repository and create a pull request with your proposed changes.

## License
This project is licensed under the MIT License. See [LICENSE](LICENSE) for more details.
