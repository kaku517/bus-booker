CREATE DATABASE IF NOT EXISTS busbooker;
USE busbooker;

CREATE TABLE routes (
  id INT AUTO_INCREMENT PRIMARY KEY,
  state_name VARCHAR(100) NOT NULL
);

INSERT INTO routes (state_name) VALUES
('Andhra Pradesh'),('Arunachal Pradesh'),('Assam'),('Bihar'),
('Chhattisgarh'),('Goa'),('Gujarat'),('Haryana'),
('Himachal Pradesh'),('Jharkhand'),('Karnataka'),('Kerala'),
('Madhya Pradesh'),('Maharashtra'),('Manipur'),('Meghalaya'),
('Mizoram'),('Nagaland'),('Odisha'),('Punjab'),
('Rajasthan'),('Sikkim'),('Tamil Nadu'),('Telangana'),
('Tripura'),('Uttar Pradesh'),('Uttarakhand'),('West Bengal');

CREATE TABLE bookings (
  id INT AUTO_INCREMENT PRIMARY KEY,
  booking_id VARCHAR(20),
  passenger VARCHAR(100),
  email VARCHAR(100),
  phone VARCHAR(20),
  from_city VARCHAR(100),
  to_city VARCHAR(100),
  travel_date DATE,
  travel_time VARCHAR(20),
  bus_type VARCHAR(50),
  seats TEXT,
  total_fare INT,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE booked_seats (
  id INT AUTO_INCREMENT PRIMARY KEY,
  travel_date DATE,
  travel_time VARCHAR(20),
  seat_no VARCHAR(10)
);
