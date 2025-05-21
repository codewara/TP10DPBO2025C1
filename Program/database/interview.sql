CREATE DATABASE IF NOT EXISTS interview;
USE interview;

CREATE TABLE candidates (
    candidate_id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL
);

CREATE TABLE interviewers (
    interviewer_id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    department VARCHAR(100) NOT NULL
);

CREATE TABLE interviews (
    interview_id INT AUTO_INCREMENT PRIMARY KEY,
    candidate_id INT,
    interviewer_id INT,
    schedule DATETIME NOT NULL,
    location VARCHAR(100) NOT NULL,
    FOREIGN KEY (candidate_id) REFERENCES candidates(candidate_id)
        ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (interviewer_id) REFERENCES interviewers(interviewer_id)
        ON DELETE CASCADE ON UPDATE CASCADE
);

INSERT INTO candidates (name, email) VALUES
('Alice Putri', 'alice@example.com'),
('Budi Santoso', 'budi@example.com'),
('Citra Dewi', 'citra@example.com'),
('Dika Mahardika', 'dika@example.com'),
('Eka Ramdani', 'eka@example.com');

INSERT INTO interviewers (name, department) VALUES
('Rina Wijaya', 'Human Resources'),
('Andi Saputra', 'Engineering'),
('Dewi Lestari', 'Marketing'),
('Joko Prabowo', 'Finance'),
('Sari Kusuma', 'Design');

INSERT INTO interviews (candidate_id, interviewer_id, schedule, location) VALUES
(1, 2, '2025-06-01 09:00:00', 'Ruang Interview A'),
(2, 1, '2025-06-01 10:00:00', 'Ruang Interview B'),
(3, 3, '2025-06-02 13:30:00', 'Ruang Interview A'),
(4, 4, '2025-06-02 14:30:00', 'Ruang Interview C'),
(5, 5, '2025-06-03 11:00:00', 'Ruang Interview B');
