# ASSEMBLY OF SAINTS IN UGANDA

## Project Overview
The ASSEMBLY OF SAINTS IN UGANDA web application is a full-stack solution designed to serve the needs of the church community. It provides a platform for sharing preachings, music, and church information while facilitating user engagement through a responsive and modern web interface.

## Technologies Used
- **Frontend**: HTML, CSS, JavaScript, Tailwind CSS
- **Backend**: PHP
- **Database**: MySQL

## Project Structure
```
assembly-of-saints
├── frontend
│   ├── css
│   ├── js
│   ├── tailwind.config.js
│   ├── index.html
│   ├── preachings.html
│   ├── music.html
│   ├── about.html
│   └── contact.html
├── backend
│   ├── admin
│   ├── includes
│   ├── api
│   └── index.php
├── assets
│   ├── images
│   ├── videos
│   └── music
├── database
│   ├── schema.sql
│   └── seed.sql
├── README.md
└── .gitignore
```

## Features
### User Module
- View church programs
- Watch live preachings via embedded YouTube links
- Access old preaching videos
- Browse all music uploads

### Admin Module
- Secure login system for authentication and authorization
- Admin dashboard for managing content
- CRUD functionality for preachings, music uploads, church programs, and user messages
- Automatic updates of public pages upon admin uploads

## Setup Instructions
1. **Clone the Repository**: 
   ```
   git clone <repository-url>
   cd assembly-of-saints
   ```

2. **Database Setup**:
   - Import the `schema.sql` file into your MySQL database to create the necessary tables.
   - Optionally, run the `seed.sql` file to populate the database with initial data.

3. **Configure Database Connection**:
   - Update the database connection settings in `backend/includes/db.php` with your database credentials.

4. **Run the Application**:
   - Use a local server environment (like XAMPP or MAMP) to run the PHP backend.
   - Access the frontend by navigating to `frontend/index.html` in your web browser.

## Contribution
Contributions to enhance the application are welcome. Please fork the repository and submit a pull request with your changes.

## License
This project is licensed under the MIT License. See the LICENSE file for more details.

## Contact
For inquiries, please reach out via the contact form on the website or directly through the church's social media channels.