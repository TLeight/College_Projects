USE CIS11170AssetTJL
/* drop the tables */
IF OBJECT_ID('Employee') IS NOT NULL
 DROP TABLE Employee
IF OBJECT_ID('Asset') IS NOT NULL
 DROP TABLE Asset
IF OBJECT_ID('Agency') IS NOT NULL
 DROP TABLE Agency
GO
USE CIS11170AssetTJL
/* create the agency table */
CREATE TABLE Agency
(AgencyID INT NOT NULL IDENTITY PRIMARY KEY,
AgencyName VARCHAR(30) NOT NULL,
City VARCHAR(30) NOT NULL,
State CHAR(2) NOT NULL)
GO
use CIS11170AssetTJL
/* Create the employee table */
CREATE TABLE Employee
(EmployeeID INT NOT NULL IDENTITY PRIMARY KEY,
EmpFirstName VARCHAR(50) NOT NULL,
EmpLastName VARCHAR(50) NOT NULL,
DateOfBirth DATETIME NOT NULL,
PhoneNumber VARCHAR(14),
ReportTo INT NOT NULL,
Pay MONEY NOT NULL,
PayType CHAR(1) NOT NULL, CHECK (PayType IN ('Y', 'H', 'y', 'h')),
AgencyID INT NOT NULL REFERENCES Agency(AgencyID))
GO
USE CIS11170AssetTJL
/* Create the Assets table */
CREATE TABLE Asset
(AssetID INT NOT NULL IDENTITY PRIMARY KEY,
PurchaseDate DATETIME NOT NULL,
Description VARCHAR(50) NOT NULL,
PurchaseAmount Money NOT NULL,
SerialNo VARCHAR(14) NULL,
AgencyID INT NOT NULL REFERENCES Agency(AgencyID))
--GO not necessary, as this is the last statement in the batch