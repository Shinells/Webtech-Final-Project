drop database if exists revamping_site;

CREATE database revamping_site;

use revamping_site;

CREATE TABLE User (
    UserID INT PRIMARY KEY AUTO_INCREMENT,
    FirstName VARCHAR(50),
    LastName VARCHAR(50),
    Password VARCHAR(50),
    Email VARCHAR(100),
    Phonenumber VARCHAR(20),
    Role VARCHAR(20)
);


CREATE TABLE Technician (
    TechnicianID INT PRIMARY KEY AUTO_INCREMENT,
    TechnicianName VARCHAR(100),
    Specialization VARCHAR(100),
    Availability VARCHAR(50)
);


CREATE TABLE ServiceType(
	ServiceTypeID INT PRIMARY KEY AUTO_INCREMENT,
	ServiceType Varchar(100)
);

CREATE TABLE Status_ (
	StatusID INT PRIMARY KEY AUTO_INCREMENT,
	StatusName Varchar(100)
);

CREATE TABLE RevampingRequest (
    RequestID INT PRIMARY KEY AUTO_INCREMENT,
    UserID INT,
    CarModel VARCHAR(100),
    CarNumber INT,
    ServiceTypeID INT,
    AdditionalInfo VARCHAR(100),
    FOREIGN KEY (UserID) REFERENCES User(UserID),
    FOREIGN KEY (ServiceTypeID) REFERENCES ServiceType(ServiceTypeID)
);

CREATE TABLE Payment (
    PaymentID INT PRIMARY KEY AUTO_INCREMENT,
    UserID INT,
    RequestID INT,
    PaymentDate DATETIME,
    PaymentAmount DECIMAL(10, 2),
    FOREIGN KEY (UserID) REFERENCES User(UserID),
    FOREIGN KEY (RequestID) REFERENCES RevampingRequest(RequestID)
);

