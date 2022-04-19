
INSERT INTO `blood_bank_database`.`Donor` (`donor_id`, `donor_first_name`, `donor_last_name`, `donor_email`, `donor_blood_type`, `event_name`) VALUES ('1', 'Mary ', 'Solomon', 'msolomon2@gmail.com', 'B-', 'CSL Plasma');
INSERT INTO `blood_bank_database`.`Donor` (`donor_id`, `donor_first_name`, `donor_last_name`, `donor_email`, `donor_blood_type`, `event_name`) VALUES ('2', 'George', 'Moore', 'gmmoore@yahoo.com', 'AB+', 'Rochester Adams NHS Blood Drive');
INSERT INTO `blood_bank_database`.`Donor` (`donor_id`, `donor_first_name`, `donor_last_name`, `donor_email`, `donor_blood_type`, `event_name`) VALUES ('3', 'Luke ', 'Bongiovi', 'lukeiscool123@gmail.com', 'B-', 'Thrive Blood Drive');
INSERT INTO `blood_bank_database`.`Donor` (`donor_id`, `donor_first_name`, `donor_last_name`, `donor_email`, `donor_blood_type`, `event_name`) VALUES ('4', 'Layne', 'McFarlane', 'layne_jo@gmail.com', 'A+', 'St. Joseph Mercy Hospital');
INSERT INTO `blood_bank_database`.`Donor` (`donor_id`, `donor_first_name`, `donor_last_name`, `donor_email`, `donor_blood_type`, `event_name`) VALUES ('5', 'Anika', 'Orion', 'anika_o1@umich.edu', 'A-', 'University of Michigan Blood Battle');
INSERT INTO `blood_bank_database`.`Donor` (`donor_id`, `donor_first_name`, `donor_last_name`, `donor_email`, `donor_blood_type`, `event_name`) VALUES ('6', 'Nigel', 'Andrechek', 'n1g3l_10@msu.edu', 'A+', 'MSU Red Cross Blood Drive');
INSERT INTO `blood_bank_database`.`Donor` (`donor_id`, `donor_first_name`, `donor_last_name`, `donor_email`, `donor_blood_type`, `event_name`) VALUES ('7', 'Kaleb', 'Migaldi', 'kalebb_m@gmail.com', 'O-', 'St. Joseph Mercy Hospital');
INSERT INTO `blood_bank_database`.`Donor` (`donor_id`, `donor_first_name`, `donor_last_name`, `donor_email`, `donor_blood_type`, `event_name`) VALUES ('8', 'Charlize', 'Radtke', 'charlize1013@umich.edu', 'O+', 'University of Michigan Blood Battle');
INSERT INTO `blood_bank_database`.`Donor` (`donor_id`, `donor_first_name`, `donor_last_name`, `donor_email`, `donor_blood_type`, `event_name`) VALUES ('9', 'Alexis', 'McKinley', 'mightyalex18@gmail.com', 'AB-', 'CSL Plasma');
INSERT INTO `blood_bank_database`.`Donor` (`donor_id`, `donor_first_name`, `donor_last_name`, `donor_email`, `donor_blood_type`, `event_name`) VALUES ('10', 'Dana', 'Latoski', 'dLatoski99@oakland.edu', 'O+', 'Rochester Adams NHS Blood Drive');
INSERT INTO `blood_bank_database`.`Donor` (`donor_id`, `donor_first_name`, `donor_last_name`, `donor_email`, `donor_blood_type`, `event_name`) VALUES ('11', 'Roger', 'Combs', 'combs.roger@yahoo.com', 'B+', 'Lansing Red Cross');
INSERT INTO `blood_bank_database`.`Donor` (`donor_id`, `donor_first_name`, `donor_last_name`, `donor_email`, `donor_blood_type`, `event_name`) VALUES ('12', 'Claudia', 'Schmus', 'claschu11@gmail.com', 'B+', 'Thrive Blood Drive');
INSERT INTO `blood_bank_database`.`Donor` (`donor_id`, `donor_first_name`, `donor_last_name`, `donor_email`, `donor_blood_type`, `event_name`) VALUES ('13', 'Anna', 'Duran', 'duran_duranna2004@gmail.com', 'A+', 'Lansing Red Cross');
INSERT INTO `blood_bank_database`.`Donor` (`donor_id`, `donor_first_name`, `donor_last_name`, `donor_email`, `donor_blood_type`, `event_name`) VALUES ('14', 'Alejandro', 'Igelsias', 'AyoIglesias@umich.edu', 'A-', 'University of Michigan Blood Battle');
INSERT INTO `blood_bank_database`.`Donor` (`donor_id`, `donor_first_name`, `donor_last_name`, `donor_email`, `donor_blood_type`, `event_name`) VALUES ('15', 'Rachel', 'Petroff', 'petrach412@gmail.com', 'O-', 'Thrive Blood Drive');
INSERT INTO `blood_bank_database`.`Donor` (`donor_id`, `donor_first_name`, `donor_last_name`, `donor_email`, `donor_blood_type`, `event_name`) VALUES ('16', 'Ella', 'Delevingne', 'delElla21@msu.edu', 'B-', 'MSU Red Cross Blood Drive');
INSERT INTO `blood_bank_database`.`Donor` (`donor_id`, `donor_first_name`, `donor_last_name`, `donor_email`, `donor_blood_type`, `event_name`) VALUES ('17', 'Matthew', 'Jones', 'itsmattjones242gmail.com', 'AB-', 'CSL Plasma');
INSERT INTO `blood_bank_database`.`Donor` (`donor_id`, `donor_first_name`, `donor_last_name`, `donor_email`, `donor_blood_type`, `event_name`) VALUES ('18', 'Christine', 'Lynch', 'c.l.lynch@yahoo.com', 'B-', 'St. Joseph Mercy Hospital');
INSERT INTO `blood_bank_database`.`Donor` (`donor_id`, `donor_first_name`, `donor_last_name`, `donor_email`, `donor_blood_type`, `event_name`) VALUES ('19', 'Mark ', 'Pierce', 'markwithk.p@oakland.edu', 'AB-', 'Rochester Adams NHS Blood Drive');
INSERT INTO `blood_bank_database`.`Donor` (`donor_id`, `donor_first_name`, `donor_last_name`, `donor_email`, `donor_blood_type`, `event_name`) VALUES ('20', 'Greyson', 'Ward', 'g.oat13@gmail.com', 'A-', 'Rochester Adams NHS Blood Drive');


INSERT INTO `blood_bank_database` . `Login` (`id`, `username`, `pass`, `usertype`) VALUES (NULL, 'admin', '1234', 'user');

UPDATE login 
SET 
    usertype = 'admin';
    

INSERT INTO `blood_bank_database`.`Patient` (`patient_id`, `patient_first_name`, `patient_last_name`, `patient_blood_type`, `patient_gender`, `patient_age`, `patient_priority`, `hospital_id`) VALUES (NULL, 'Brian', 'Feeney', 'B-', 'Male', '11', 'High', '1');
INSERT INTO `blood_bank_database`.`Patient` (`patient_id`, `patient_first_name`, `patient_last_name`, `patient_blood_type`, `patient_gender`, `patient_age`, `patient_priority`, `hospital_id`) VALUES (NULL, 'Danielle', 'Savage', 'B+', 'Female', '14', 'Medium', '1');
INSERT INTO `blood_bank_database`.`Patient` (`patient_id`, `patient_first_name`, `patient_last_name`, `patient_blood_type`, `patient_gender`, `patient_age`, `patient_priority`, `hospital_id`) VALUES (NULL, 'Gabe', 'Arrieta', 'A+', 'Male', '19', 'Low', '2');
INSERT INTO `blood_bank_database`.`Patient` (`patient_id`, `patient_first_name`, `patient_last_name`, `patient_blood_type`, `patient_gender`, `patient_age`, `patient_priority`, `hospital_id`) VALUES (NULL, 'Tessa', 'Forbes', 'A+', 'Female', '4', 'Medium', '6');
INSERT INTO `blood_bank_database`.`Patient` (`patient_id`, `patient_first_name`, `patient_last_name`, `patient_blood_type`, `patient_gender`, `patient_age`, `patient_priority`, `hospital_id`) VALUES (NULL, 'Ryan', 'Dolan', 'A+', 'Male', '16', 'Low', '3');
INSERT INTO `blood_bank_database`.`Patient` (`patient_id`, `patient_first_name`, `patient_last_name`, `patient_blood_type`, `patient_gender`, `patient_age`, `patient_priority`, `hospital_id`) VALUES (NULL, 'Penelope', 'Rombauer', 'B-', 'Female', '21', 'Low', '6');
INSERT INTO `blood_bank_database`.`Patient` (`patient_id`, `patient_first_name`, `patient_last_name`, `patient_blood_type`, `patient_gender`, `patient_age`, `patient_priority`, `hospital_id`) VALUES (NULL, 'Jonah', 'Everett', 'AB-', 'Male', '15', 'Low', '1');
INSERT INTO `blood_bank_database`.`Patient` (`patient_id`, `patient_first_name`, `patient_last_name`, `patient_blood_type`, `patient_gender`, `patient_age`, `patient_priority`, `hospital_id`) VALUES (NULL, 'Myles', 'Cruz', 'AB+', 'Male', '17', 'Low', '4');
INSERT INTO `blood_bank_database`.`Patient` (`patient_id`, `patient_first_name`, `patient_last_name`, `patient_blood_type`, `patient_gender`, `patient_age`, `patient_priority`, `hospital_id`) VALUES (NULL, 'Skylar', 'Reid', 'O-', 'Female', '18', 'High', '1');
INSERT INTO `blood_bank_database`.`Patient` (`patient_id`, `patient_first_name`, `patient_last_name`, `patient_blood_type`, `patient_gender`, `patient_age`, `patient_priority`, `hospital_id`) VALUES (NULL, 'Kevin', 'Homrich', 'B+', 'Male', '19', 'Medium', '7');
INSERT INTO `blood_bank_database`.`Patient` (`patient_id`, `patient_first_name`, `patient_last_name`, `patient_blood_type`, `patient_gender`, `patient_age`, `patient_priority`, `hospital_id`) VALUES (NULL, 'Michael', 'Guthrie', 'O+', 'Male', '31', 'Medium', '5');
INSERT INTO `blood_bank_database`.`Patient` (`patient_id`, `patient_first_name`, `patient_last_name`, `patient_blood_type`, `patient_gender`, `patient_age`, `patient_priority`, `hospital_id`) VALUES (NULL, 'Liola', 'Bell', 'A-', 'Female', '2', 'High', '1');
INSERT INTO `blood_bank_database`.`Patient` (`patient_id`, `patient_first_name`, `patient_last_name`, `patient_blood_type`, `patient_gender`, `patient_age`, `patient_priority`, `hospital_id`) VALUES (NULL, 'Drew', 'Field', 'O+', 'Male', '62', 'Medium', '7');
INSERT INTO `blood_bank_database`.`Patient` (`patient_id`, `patient_first_name`, `patient_last_name`, `patient_blood_type`, `patient_gender`, `patient_age`, `patient_priority`, `hospital_id`) VALUES (NULL, 'Kamri', 'Hudson', 'AB-', 'Female', '3', 'Low', '3');
INSERT INTO `blood_bank_database`.`Patient` (`patient_id`, `patient_first_name`, `patient_last_name`, `patient_blood_type`, `patient_gender`, `patient_age`, `patient_priority`, `hospital_id`) VALUES (NULL, 'Fransesca', 'Herrera', 'O-', 'Female', '28', 'Low', '2');
INSERT INTO `blood_bank_database`.`Patient` (`patient_id`, `patient_first_name`, `patient_last_name`, `patient_blood_type`, `patient_gender`, `patient_age`, `patient_priority`, `hospital_id`) VALUES (NULL, 'Rory', 'Grant', 'AB-', 'Female', '42', 'Medium', '2');
INSERT INTO `blood_bank_database`.`Patient` (`patient_id`, `patient_first_name`, `patient_last_name`, `patient_blood_type`, `patient_gender`, `patient_age`, `patient_priority`, `hospital_id`) VALUES (NULL, 'Flynn', 'Kornfeld', 'A-', 'Male', '5', 'Low', '3');
INSERT INTO `blood_bank_database`.`Patient` (`patient_id`, `patient_first_name`, `patient_last_name`, `patient_blood_type`, `patient_gender`, `patient_age`, `patient_priority`, `hospital_id`) VALUES (NULL, 'Mindy', 'Shrock', 'A-', 'Female', '49', 'High', '5');
INSERT INTO `blood_bank_database`.`Patient` (`patient_id`, `patient_first_name`, `patient_last_name`, `patient_blood_type`, `patient_gender`, `patient_age`, `patient_priority`, `hospital_id`) VALUES (NULL, 'Rafael', 'Rodriguez', 'B-', 'Male', '37', 'Medium', '2');
INSERT INTO `blood_bank_database`.`Patient` (`patient_id`, `patient_first_name`, `patient_last_name`, `patient_blood_type`, `patient_gender`, `patient_age`, `patient_priority`, `hospital_id`) VALUES (NULL, 'Manny', 'Pompeo', 'B-', 'Male', '40', 'High', '2');
INSERT INTO `blood_bank_database`.`Patient` (`patient_id`, `patient_first_name`, `patient_last_name`, `patient_blood_type`, `patient_gender`, `patient_age`, `patient_priority`, `hospital_id`) VALUES (NULL, 'Phil', 'Harvey', 'AB+', 'Male', '80', 'Medium', '4');
INSERT INTO `blood_bank_database`.`Patient` (`patient_id`, `patient_first_name`, `patient_last_name`, `patient_blood_type`, `patient_gender`, `patient_age`, `patient_priority`, `hospital_id`) VALUES (NULL, 'Harper', 'O\'Hare', 'AB-', 'Female', '82', 'Low', '4');

ALTER TABLE Patient MODIFY patient_priority VARCHAR(45);


INSERT INTO `blood_bank_database`.`Hospital` (`hospital_id`, `hospital_name`, `hospital_street_address`, `hospital_city`, `hospital_state`, `hospital_zip`) VALUES ('1', 'Sparrow Hospital', '1215 E. Michigan Ave', 'Lansing', 'MI', '48912');
INSERT INTO `blood_bank_database`.`Hospital` (`hospital_id`, `hospital_name`, `hospital_street_address`, `hospital_city`, `hospital_state`, `hospital_zip`) VALUES ('2', 'Ascension Providence Rochester Hospital', '1101 W. Unversity Dr', 'Rochester', 'MI', '48307');
INSERT INTO `blood_bank_database`.`Hospital` (`hospital_id`, `hospital_name`, `hospital_street_address`, `hospital_city`, `hospital_state`, `hospital_zip`) VALUES ('3', 'C.S. Motts Childrens Hospital', '1540 E. Hospital Drive', 'Ann Arbor', 'MI', '48109');
INSERT INTO `blood_bank_database`.`Hospital` (`hospital_id`, `hospital_name`, `hospital_street_address`, `hospital_city`, `hospital_state`, `hospital_zip`) VALUES ('4', 'McLaren Greater Lansing Hospital', '2900 Collins Rd', 'Lansing', 'MI', '48910');
INSERT INTO `blood_bank_database`.`Hospital` (`hospital_id`, `hospital_name`, `hospital_street_address`, `hospital_city`, `hospital_state`, `hospital_zip`) VALUES ('5', 'St. Mary Mercy Hospital', '36475 Five Mile Road', 'Livonia', 'MI', '48154');
INSERT INTO `blood_bank_database`.`Hospital` (`hospital_id`, `hospital_name`, `hospital_street_address`, `hospital_city`, `hospital_state`, `hospital_zip`) VALUES ('6', 'Spectrum Health Butterworth Hospital', '110 Michigan St. NE', 'Grand Rapids', 'MI', '49503');
INSERT INTO `blood_bank_database`.`Hospital` (`hospital_id`, `hospital_name`, `hospital_street_address`, `hospital_city`, `hospital_state`, `hospital_zip`) VALUES ('7', 'Ascension Borgess Pipp Hospital', '411 Naomi St', 'Plainwell', 'MI', '49080');

UPDATE `blood_bank_database`.`Hospital` SET `hospital_name` = 'St. Joseph Mercy Hospital', `hospital_street_address` = '5301 McAuley Dr', `hospital_city` = 'Ypsilanti', `hospital_zip` = '48197' WHERE (`hospital_id` = '5');


INSERT INTO `blood_bank_database`.`Nurse` (`nurse_id`, `nurse_first_name`, `nurse_last_name`, `nurse_years`, `registered_status`, `hospital_id`) VALUES ('10000', 'Maren', 'Compton', '28', '1', '1');
INSERT INTO `blood_bank_database`.`Nurse` (`nurse_id`, `nurse_first_name`, `nurse_last_name`, `nurse_years`, `registered_status`, `hospital_id`) VALUES ('10001', 'Joey', 'Saah', '5', '1', '1');
INSERT INTO `blood_bank_database`.`Nurse` (`nurse_id`, `nurse_first_name`, `nurse_last_name`, `nurse_years`, `registered_status`, `hospital_id`) VALUES ('10002', 'Simon', 'Grienke', '4', '0', '1');
INSERT INTO `blood_bank_database`.`Nurse` (`nurse_id`, `nurse_first_name`, `nurse_last_name`, `nurse_years`, `registered_status`, `hospital_id`) VALUES ('10003', 'Ethan', 'Lantz', '2', '0', '4');
INSERT INTO `blood_bank_database`.`Nurse` (`nurse_id`, `nurse_first_name`, `nurse_last_name`, `nurse_years`, `registered_status`, `hospital_id`) VALUES ('10004', 'Riley', 'Erpelding', '7', '1', '2');
INSERT INTO `blood_bank_database`.`Nurse` (`nurse_id`, `nurse_first_name`, `nurse_last_name`, `nurse_years`, `registered_status`, `hospital_id`) VALUES ('10005', 'Kai', 'Nijjer', '1', '0', '1');
INSERT INTO `blood_bank_database`.`Nurse` (`nurse_id`, `nurse_first_name`, `nurse_last_name`, `nurse_years`, `registered_status`, `hospital_id`) VALUES ('10006', 'Robbie', 'Pricco', '1', '0', '3');
INSERT INTO `blood_bank_database`.`Nurse` (`nurse_id`, `nurse_first_name`, `nurse_last_name`, `nurse_years`, `registered_status`, `hospital_id`) VALUES ('10007', 'Allie', 'Farra', '18', '1', '2');
INSERT INTO `blood_bank_database`.`Nurse` (`nurse_id`, `nurse_first_name`, `nurse_last_name`, `nurse_years`, `registered_status`, `hospital_id`) VALUES ('10008', 'Kate', 'Robinson', '12', '1', '3');
INSERT INTO `blood_bank_database`.`Nurse` (`nurse_id`, `nurse_first_name`, `nurse_last_name`, `nurse_years`, `registered_status`, `hospital_id`) VALUES ('10009', 'Debbie', 'Barasko', '16', '1', '3');
INSERT INTO `blood_bank_database`.`Nurse` (`nurse_id`, `nurse_first_name`, `nurse_last_name`, `nurse_years`, `registered_status`, `hospital_id`) VALUES ('10010', 'Carina', 'Zink', '10', '1', '6');
INSERT INTO `blood_bank_database`.`Nurse` (`nurse_id`, `nurse_first_name`, `nurse_last_name`, `nurse_years`, `registered_status`, `hospital_id`) VALUES ('10011', 'Josie', 'DeCort', '6', '1', '2');
INSERT INTO `blood_bank_database`.`Nurse` (`nurse_id`, `nurse_first_name`, `nurse_last_name`, `nurse_years`, `registered_status`, `hospital_id`) VALUES ('10012', 'Aimee', 'Beauchamp', '7', '1', '4');
INSERT INTO `blood_bank_database`.`Nurse` (`nurse_id`, `nurse_first_name`, `nurse_last_name`, `nurse_years`, `registered_status`, `hospital_id`) VALUES ('10013', 'Chase', 'Cline', '1', '0', '2');
INSERT INTO `blood_bank_database`.`Nurse` (`nurse_id`, `nurse_first_name`, `nurse_last_name`, `nurse_years`, `registered_status`, `hospital_id`) VALUES ('10014', 'Ilya', 'Maddow', '5', '1', '3');
INSERT INTO `blood_bank_database`.`Nurse` (`nurse_id`, `nurse_first_name`, `nurse_last_name`, `nurse_years`, `registered_status`, `hospital_id`) VALUES ('10015', 'David', 'Knox', '1', '0', '6');
INSERT INTO `blood_bank_database`.`Nurse` (`nurse_id`, `nurse_first_name`, `nurse_last_name`, `nurse_years`, `registered_status`, `hospital_id`) VALUES ('10016', 'Bruno', 'Solano', '18', '1', '5');
INSERT INTO `blood_bank_database`.`Nurse` (`nurse_id`, `nurse_first_name`, `nurse_last_name`, `nurse_years`, `registered_status`, `hospital_id`) VALUES ('10017', 'Mia', 'Grewal', '9', '1', '7');
INSERT INTO `blood_bank_database`.`Nurse` (`nurse_id`, `nurse_first_name`, `nurse_last_name`, `nurse_years`, `registered_status`, `hospital_id`) VALUES ('10018', 'Alisha', 'Dionise', '3', '0', '4');
INSERT INTO `blood_bank_database`.`Nurse` (`nurse_id`, `nurse_first_name`, `nurse_last_name`, `nurse_years`, `registered_status`, `hospital_id`) VALUES ('10019', 'Colin', 'Koci', '3', '0', '2');
INSERT INTO `blood_bank_database`.`Nurse` (`nurse_id`, `nurse_first_name`, `nurse_last_name`, `nurse_years`, `registered_status`, `hospital_id`) VALUES ('10020', 'Tina', 'Vargo', '25', '1', '3');
INSERT INTO `blood_bank_database`.`Nurse` (`nurse_id`, `nurse_first_name`, `nurse_last_name`, `nurse_years`, `registered_status`, `hospital_id`) VALUES ('10021', 'Jeremy ', 'Lowell', '21', '1', '7');
INSERT INTO `blood_bank_database`.`Nurse` (`nurse_id`, `nurse_first_name`, `nurse_last_name`, `nurse_years`, `registered_status`, `hospital_id`) VALUES ('10022', 'Quinn', 'Dickens', '1', '0', '1');
INSERT INTO `blood_bank_database`.`Nurse` (`nurse_id`, `nurse_first_name`, `nurse_last_name`, `nurse_years`, `registered_status`, `hospital_id`) VALUES ('10023', 'Marley', 'Kennoy', '4', '0', '7');
INSERT INTO `blood_bank_database`.`Nurse` (`nurse_id`, `nurse_first_name`, `nurse_last_name`, `nurse_years`, `registered_status`, `hospital_id`) VALUES ('10024', 'Finn', 'Menzies', '11', '1', '6');
INSERT INTO `blood_bank_database`.`Nurse` (`nurse_id`, `nurse_first_name`, `nurse_last_name`, `nurse_years`, `registered_status`, `hospital_id`) VALUES ('10025', 'Ryder', 'Rappaport', '2', '0', '3');
INSERT INTO `blood_bank_database`.`Nurse` (`nurse_id`, `nurse_first_name`, `nurse_last_name`, `nurse_years`, `registered_status`, `hospital_id`) VALUES ('10026', 'Pete', 'Jost', '1', '0', '5');
INSERT INTO `blood_bank_database`.`Nurse` (`nurse_id`, `nurse_first_name`, `nurse_last_name`, `nurse_years`, `registered_status`, `hospital_id`) VALUES ('10027', 'Joe', 'Trachtenberg', '15', '1', '5');


INSERT INTO `blood_bank_database`.`TransfusionBag` (`trans_bag_id`, `donor_id`, `nurse_id`, `patient_id`, `quantity`) VALUES ('1', '6' , '10004', '8', '1');
INSERT INTO `blood_bank_database`.`TransfusionBag` (`trans_bag_id`, `donation_id`, `nurse_id`, `patient_id`, `quantity`) VALUES ('2', '101002', '10007', '11', '1');
INSERT INTO `blood_bank_database`.`TransfusionBag` (`trans_bag_id`, `donation_id`, `nurse_id`, `patient_id`, `quantity`) VALUES ('3', '101003', '10010', '9', '1');
INSERT INTO `blood_bank_database`.`TransfusionBag` (`trans_bag_id`, `donation_id`, `nurse_id`, `patient_id`, `quantity`) VALUES ('4', '101005', '10000', '5', '1');
INSERT INTO `blood_bank_database`.`TransfusionBag` (`trans_bag_id`, `donation_id`, `nurse_id`, `patient_id`, `quantity`) VALUES ('5', '101004', '10027', '3', '1');
INSERT INTO `blood_bank_database`.`TransfusionBag` (`trans_bag_id`, `donation_id`, `nurse_id`, `patient_id`, `quantity`) VALUES ('6', '101007', '10006', '13', '1');
INSERT INTO `blood_bank_database`.`TransfusionBag` (`trans_bag_id`, `donation_id`, `nurse_id`, `patient_id`, `quantity`) VALUES ('7', '101006', '10005', '12', '1');
INSERT INTO `blood_bank_database`.`TransfusionBag` (`trans_bag_id`, `donation_id`, `nurse_id`, `patient_id`, `quantity`) VALUES ('8', '101009', '10012', '7', '1');
INSERT INTO `blood_bank_database`.`TransfusionBag` (`trans_bag_id`, `donation_id`, `nurse_id`, `patient_id`, `quantity`) VALUES ('9', '101008', '10019', '1', '1');
INSERT INTO `blood_bank_database`.`TransfusionBag` (`trans_bag_id`, `donation_id`, `nurse_id`, `patient_id`, `quantity`) VALUES ('10', '101010', '10021', '2', '1');
INSERT INTO `blood_bank_database`.`TransfusionBag` (`trans_bag_id`, `donation_id`, `nurse_id`, `patient_id`, `quantity`) VALUES ('11', '101012', '10000', '10', '1');
INSERT INTO `blood_bank_database`.`TransfusionBag` (`trans_bag_id`, `donation_id`, `nurse_id`, `patient_id`, `quantity`) VALUES ('12', '101011', '10001', '6', '1');
INSERT INTO `blood_bank_database`.`TransfusionBag` (`trans_bag_id`, `donation_id`, `nurse_id`, `patient_id`, `quantity`) VALUES ('13', '101013', '10004', '4', '1');
INSERT INTO `blood_bank_database`.`TransfusionBag` (`trans_bag_id`, `donation_id`, `nurse_id`, `patient_id`, `quantity`) VALUES ('14', '101016', '10004', '16', '1');
INSERT INTO `blood_bank_database`.`TransfusionBag` (`trans_bag_id`, `donation_id`, `nurse_id`, `patient_id`, `quantity`) VALUES ('15', '101020', '10010', '15', '1');
INSERT INTO `blood_bank_database`.`TransfusionBag` (`trans_bag_id`, `donation_id`, `nurse_id`, `patient_id`, `quantity`) VALUES ('16', '101017', '10027', '20', '1');
INSERT INTO `blood_bank_database`.`TransfusionBag` (`trans_bag_id`, `donation_id`, `nurse_id`, `patient_id`, `quantity`) VALUES ('17', '101018', '10000', '19', '1');
INSERT INTO `blood_bank_database`.`TransfusionBag` (`trans_bag_id`, `donation_id`, `nurse_id`, `patient_id`, `quantity`) VALUES ('18', '101014', '10007', '14', '1');
INSERT INTO `blood_bank_database`.`TransfusionBag` (`trans_bag_id`, `donation_id`, `nurse_id`, `patient_id`, `quantity`) VALUES ('19', '101015', '10007', '17', '1');
INSERT INTO `blood_bank_database`.`TransfusionBag` (`trans_bag_id`, `donation_id`, `nurse_id`, `patient_id`, `quantity`) VALUES ('20', '101019', '10020', '18', '1');



