USE blood_bank_database;

SET @OLD_FOREIGN_KEY_CHECKS = @@FOREIGN_KEY_CHECKS;
SET FOREIGN_KEY_CHECKS = 0;



CREATE TABLE Donor (
donor_id INT AUTO_INCREMENT, 
donor_first_name VARCHAR(45),
donor_last_name VARCHAR(45),
donor_email VARCHAR(70),
donor_blood_type VARCHAR(45)  NOT NULL,
event_name VARCHAR(70), 
PRIMARY KEY (donor_id),
FOREIGN KEY (event_name) REFERENCES Event(event_name));



CREATE TABLE Patient (
patient_id INT AUTO_INCREMENT, 
patient_first_name VARCHAR(45),
patient_last_name VARCHAR(45),
patient_blood_type VARCHAR(45) NOT NULL,  
patient_gender VARCHAR(45), 
patient_age INT,
patient_priority VARCHAR(45) NOT NULL,
hospital_id INT,
PRIMARY KEY (patient_id),
FOREIGN KEY (hospital_id) REFERENCES Hospital(hospital_id));


CREATE TABLE Event (
event_name VARCHAR(70) NOT NULL, 
event_street_address VARCHAR (50),
event_city VARCHAR(45), 
event_state VARCHAR(45),
event_zip INT,
event_start DATETIME,
event_end DATETIME,
one_time_frequency TINYINT,
nurse_id INT,
PRIMARY KEY (event_name),
FOREIGN KEY (nurse_id) REFERENCES Nurse(nurse_id));

CREATE TABLE Hospital (
hospital_id INT NOT NULL,
hospital_name VARCHAR(70) NOT NULL, 
hospital_street_address VARCHAR (50),
hospital_city VARCHAR(45), 
hospital_state VARCHAR(45),
hospital_zip INT,
PRIMARY KEY (hospital_id));

CREATE TABLE Nurse (
nurse_id INT NOT NULL, 
nurse_first_name VARCHAR(45),
nurse_last_name VARCHAR(45),
nurse_years INT,
registered_status INT,
hospital_id INT,
PRIMARY KEY (nurse_id),
FOREIGN KEY (hospital_id) REFERENCES Hospital(hospital_id));


CREATE TABLE Participates (
nurse_id INT NOT NULL,
event_name VARCHAR(70), 
PRIMARY KEY (nurse_id, event_name),
FOREIGN KEY (nurse_id) REFERENCES Nurse(nurse_id),
FOREIGN KEY (event_name) REFERENCES Event(event_name));



CREATE TABLE TransfusionBag (
trans_bag_id INT NOT NULL,
donor_id INT NOT NULL,
nurse_id INT NOT NULL,
patient_id INT NOT NULL, 
quantity INT,
PRIMARY KEY (trans_bag_id),
FOREIGN KEY (nurse_id) REFERENCES Nurse(nurse_id),
FOREIGN KEY (patient_id) REFERENCES Patient(patient_id));



CREATE TABLE Login (
id INT AUTO_INCREMENT primary key,
username varchar(50),
pass varchar(50),
usertype varchar(50));





