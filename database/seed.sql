INSERT INTO users (username, password, email, role) VALUES
('admin', 'hashed_password', 'admin@example.com', 'admin'),
('user1', 'hashed_password', 'user1@example.com', 'user'),
('user2', 'hashed_password', 'user2@example.com', 'user');

INSERT INTO music_categories (name) VALUES
('Worship'),
('Praise'),
('Gospel');

INSERT INTO music (title, artist, category_id, file_link) VALUES
('Amazing Grace', 'John Newton', 1, 'assets/music/amazing_grace.mp3'),
('How Great Thou Art', 'Carl Boberg', 1, 'assets/music/how_great_thou_art.mp3'),
('This Little Light of Mine', 'Harry Dixon Loes', 2, 'assets/music/this_little_light_of_mine.mp3');

INSERT INTO preachings (title, speaker, video_link, date) VALUES
('The Power of Faith', 'Pastor John', 'https://www.youtube.com/watch?v=example1', '2023-01-15'),
('Living a Purposeful Life', 'Pastor Jane', 'https://www.youtube.com/watch?v=example2', '2023-01-22'),
('Overcoming Trials', 'Pastor Mark', 'https://www.youtube.com/watch?v=example3', '2023-01-29');

INSERT INTO church_programs (name, description, date) VALUES
('Sunday Service', 'Weekly Sunday service with worship and preaching.', '2023-02-05'),
('Midweek Prayer', 'Join us for a time of prayer and fellowship.', '2023-02-08'),
('Youth Fellowship', 'A gathering for the youth to connect and grow.', '2023-02-12');

INSERT INTO contact_messages (name, email, message) VALUES
('Visitor', 'visitor@example.com', 'I would like to know more about your church.'),
('John Doe', 'johndoe@example.com', 'How can I join the church?');