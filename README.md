
CREATE DATABASE travel_seeker;

USE travel_seeker;

CREATE TABLE tour_plans (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    destination VARCHAR(255) NOT NULL,
    price INT NOT NULL,
    duration VARCHAR(100) NOT NULL,
    description TEXT,
    organizing_agency VARCHAR(255),
    pickup_location VARCHAR(255),
    around_locations TEXT,
    inclusion TEXT,
    exclusion TEXT
);

CREATE TABLE destinations (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    total_plans INT DEFAULT 0,
    total_companies INT DEFAULT 0,
    avg_price INT DEFAULT 0
);

CREATE TABLE tour_statistics (
    id INT AUTO_INCREMENT PRIMARY KEY,
    tours_completed INT DEFAULT 0,
    total_tourists INT DEFAULT 0,
    total_plans INT DEFAULT 0
);

CREATE TABLE offers (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255),
    description TEXT,
    end_date DATE
);


INSERT INTO tour_plans (title, destination, price, duration, description, organizing_agency, pickup_location, around_locations, inclusion, exclusion) 
VALUES 
('Cox\'s Bazar Trip', 'Cox\'s Bazar', 3000, '2 Days & 1 Night', 
 'Enjoy the beauty of Cox\'s Bazar with our exclusive package.', 
 'Travel Seeker BD', 'Cox\'s Bazar Airport', 
 'Kolatoli Beach, Himchari, Marine Drive', 
 'Transportation, Accommodation, Breakfast', 
 'Lunch, Dinner');

INSERT INTO tour_plans (title, destination, price, duration, description, organizing_agency, pickup_location, around_locations, inclusion, exclusion) 
VALUES 
('Sundarbans Adventure', 'Sundarbans', 5000, '3 Days & 2 Nights', 
 'Explore the largest mangrove forest with expert guides.', 
 'EcoTour BD', 'Khulna Train Station', 
 'Katka Beach, Karamjol, Herbaria Forest', 
 'Guide, Accommodation, Meals', 
 'Personal expenses, Entry fees');

INSERT INTO destinations (name, total_plans, total_companies, avg_price) 
VALUES 
('Cox\'s Bazar', 10, 5, 3000),
('Sundarbans', 8, 4, 5000);

INSERT INTO tour_statistics (tours_completed, total_tourists, total_plans) 
VALUES (130, 110, 18);

INSERT INTO offers (title, description, end_date) 
VALUES ('Summer Special', 'Get 10% off on all tours booked by July 2024.', '2024-07-31');
