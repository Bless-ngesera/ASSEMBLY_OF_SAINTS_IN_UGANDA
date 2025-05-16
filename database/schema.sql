-- Users table
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    role VARCHAR(20) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Music categories table
CREATE TABLE music_categories (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(20) NOT NULL UNIQUE,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Music table
CREATE TABLE music (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    artist VARCHAR(100) NOT NULL,
    category_id INT NOT NULL,
    file_link VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (category_id) REFERENCES music_categories(id) ON DELETE CASCADE
);

-- Preachings table
CREATE TABLE preachings (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    speaker VARCHAR(100) NOT NULL,
    video_link VARCHAR(255) NOT NULL,
    date DATE NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Church programs table
CREATE TABLE church_programs (
    id INT AUTO_INCREMENT PRIMARY KEY,
    program_name VARCHAR(255) NOT NULL,
    description TEXT,
    date DATETIME NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Messages table
CREATE TABLE messages (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    message TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE SET NULL
);

-- Contact messages table
CREATE TABLE contact_messages (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    message TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Insert initial data into users table
INSERT INTO users (username, password, email, role) VALUES
('admin', 'hashed_password', 'admin@example.com', 'admin'),
('user1', 'hashed_password', 'user1@example.com', 'user'),
('user2', 'hashed_password', 'user2@example.com', 'user');

-- Insert initial data into music_categories table
INSERT INTO music_categories (name) VALUES
('Worship'),
('Praise'),
('Gospel');

-- Insert initial data into music table
INSERT INTO music (title, artist, category_id, file_link) VALUES
('Amazing Grace', 'John Newton', 1, 'assets/music/amazing_grace.mp3'),
('How Great Thou Art', 'Carl Boberg', 1, 'assets/music/how_great_thou_art.mp3'),
('This Little Light of Mine', 'Harry Dixon Loes', 2, 'assets/music/this_little_light_of_mine.mp3');

-- Insert initial data into preachings table
INSERT INTO preachings (title, speaker, video_link, date) VALUES
('The Power of Faith', 'Pastor John', 'https://www.youtube.com/watch?v=example1', '2023-01-15'),
('Living a Purposeful Life', 'Pastor Jane', 'https://www.youtube.com/watch?v=example2', '2023-01-22'),
('Overcoming Trials', 'Pastor Mark', 'https://www.youtube.com/watch?v=example3', '2023-01-29');

-- Insert initial data into church_programs table
INSERT INTO church_programs (program_name, description, date) VALUES
('Sunday Service', 'Weekly Sunday service with worship and preaching.', '2023-02-05'),
('Midweek Prayer', 'Join us for a time of prayer and fellowship.', '2023-02-08'),
('Youth Fellowship', 'A gathering for the youth to connect and grow.', '2023-02-12');

-- Insert initial data into contact_messages table
INSERT INTO contact_messages (name, email, message) VALUES
('Visitor', 'visitor@example.com', 'I would like to know more about your church.'),
('John Doe', 'johndoe@example.com', 'How can I join the church?');