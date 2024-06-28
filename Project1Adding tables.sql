CREATE DATABASE TravelAgency_TJL
GO

USE TravelAgency_TJL

IF OBJECT_ID('Customers') IS NOT NULL
 DROP TABLE Customers
IF OBJECT_ID('Employees') IS NOT NULL
 DROP TABLE Employees
IF OBJECT_ID('PrimaryBranch') IS NOT NULL
 DROP TABLE PrimaryBranch
IF OBJECT_ID('SecondaryBranch') IS NOT NULL
 DROP TABLE SecondaryBranch 
IF OBJECT_ID('Transport') IS NOT NULL
 DROP TABLE Transport 
IF OBJECT_ID ('Travel') IS NOT NULL
  Drop Table Travel
IF OBJECT_ID('Services') IS NOT NULL
 Drop TABLE services
GO
CREATE TABLE Customers
(CustomerNo		INT		NOT NULL IDENTITY PRIMARY KEY,
 FirstName		VARCHAR(8)	NOT NULL,
 LastName		VARCHAR(11)	NOT NULL,
 City			VARCHAR(20)	NOT NULL,
 Address	VARCHAR(15)	NOT NULL,
 State		Char(2)	NOT NULL,
 PhoneNo		INt	NOT NULL,
 Email		VARCHAR(24) NOT NULL,
 DestinationNo			INT NOT NULL REFERENCES Travel(DestinationNo))
 GO
 /*use alter table for foreign keys*/

 USE TravelAgency_TJL
 CREATE TABLE Employees
 (EmployeeID		INT	NOT NULL IDENTITY PRIMARY KEY,
 EmployeeFName		VARCHAR(8) NOT NULL,
 EmployeeLName		VARCHAR(11) NOT NULL,
 Position			VARCHAR(11) NOT NULL,
 DateOfHire			DATE		NOT NULL,
 AgenttNo			INT NOT NULL,
 CustomerNo			INT NOT NULL REFERENCES Customers(CustomerNo))
 GO

 USE TravelAgency_TJL
 CREATE TABLE PrimaryBranch
 (BranchNo			INT	NOT NULL	IDENTITY PRIMARY KEY,
 BranchName			VARCHAR(10)	NOT NULL,
 City			VARCHAR(20)	NOT NULL,
 Address	VARCHAR(15)	NOT NULL,
 State		Char(2)	NOT NULL,
 ZipCode			INT	NOT NULL,
 EmployeeID		INT	NOT NULL REFERENCES Employees(EmployeeID))
 GO

 USE TravelAgency_TJL
 CREATE TABLE SecondaryBranch
 (BranchName			VARCHAR(10)	NOT NULL,
 City			VARCHAR(20)	NOT NULL,
 Address	VARCHAR(15)	NOT NULL,
 State		Char(2)	NOT NULL,
 ZipCode			INT	NOT NULL,
 BranchNo			INT	NOT NULL REFERENCES PrimaryBranch(BranchNo),
 EmployeeID			INT	NOT NULL REFERENCES Employees(EmployeeID))
GO

USE TravelAgency_TJL
CREATE TABLE Transport
(AircraftNo			INT	NOT NULL IDENTITY PRIMARY KEY,
AirCraftName			VARCHAR(10) NOT NULL)
GO

USE TravelAgency_TJL
CREATE TABLE Travel
(DestinationNo		INT NOT NULL IDENTITY PRIMARY KEY,
Destination			VARCHAR(20) NOT NULL,
ArrivalTime			TIME(4) NOT NULL,
DepartureTime		TIME(4) NOT NULL)
GO

USE TravelAgency_TJL
CREATE TABLE Services
(AirLine			VARCHAR(10),
AircraftNo			INT	NOT NULL REFERENCES Transport(AircraftNo),
BranchNo			INT	NOT NULL REFERENCES PrimaryBranch(BranchNo),
DestinationNo		INT	NOT NULL REFERENCES Travel(DestinationNo))

