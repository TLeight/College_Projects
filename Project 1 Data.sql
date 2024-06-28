USE TravelAgency_TJL
GO
/* Inserting Data*/

INSERT INTO Customers
(FirstName, LastName, City, Address, State, PhoneNo, Email, DestinationNo)
 VALUES
	('Jordan', 'Peterson', 'Nashville-Davidson', '46013 Cheery Rd', 'TN', '247-311-0041', 'JordanPeters@Gmail.com', '1'),
	('Amy', 'Matlock', 'Nashville-Davidson', '94732 Welch St', 'TN', '247-777-390-0041', 'AmLock@Gmail.com', '1'),
	('Lisa', 'Hampton', 'ScottsDale', '22193 Leth Rd', 'AZ', '368-0117-9981', 'LizHamp@Ymail.com', '2'),
	('Monica', 'LightFoot', 'Lubbock', '66631 Metro Rd','TX', '555-0178-3365', 'LightFoots@Gmail.com', '3'),
	('Jose', 'Montoya', 'Salt Lake City', '97542 Heath St', 'UT', '414-0983-0911', 'JoMont@Ymail.com', '3'),
	('Austen', 'Weathers', 'Minneapolis', '99321 Mint Rd','MN', '919-555-6541', 'ErathersMan@Ymail.com', '4'),
	('Jim', 'Johnson', 'Arkansas', '22439 Big St', 'AR', '210-477-3198', 'JohnJohn@Gmail.com', '4'),
	('Will', 'Burt', 'Oklahoma', '00998 Kelten St', 'OK', '343-111-3096', 'Burton@Ymail.com', '5'),
	('Matt', 'Newton', 'Detroit', '94320 Walther Rd', 'MI', '313-999-4031', 'Newtonslaw@Ymail.com', '6'),
	('Michael', 'Miller', 'New Mexico', '49877 St', 'NM', '712-601-3971', 'MexianMiller@YYmail.com', '6')
GO

USE TravelAgency_TJL
GO
INSERT INTO Employees
(EmployeeFName, EmployeeLName, Position, DateOfHire, AgenttNo, CustomerNo)
 VALUES
	('Jason', 'Mochals', 'Owner', '3-06-2002', 'NULL', 'NULL'),
	('Shanen', 'Parks', 'Branch Manager','3-06-2002', 'NULL', 'NULL'),
	('Parker', 'Peters', 'Branch Manager', '6-04-2003', 'NULL', 'NULL'),
	('Veronica', 'Heathe', 'admin assistant', '3-06-2002', 'NULL', 'NULL'),
	('Tosha', 'Heathe', 'admin assistant', '3-06-2002', 'NULL', 'NULL'),
	('Paula', 'Bisler', 'admin assistant', '6-04-2003', 'NULL', 'NULL'),
	('Austen', 'Kingston', 'Travel Agents', '3-06-2002', '1','1'),
	('Julio', 'Ramsi', 'Travel Agents', '3-06-2002', '2','2'),
	('Doug', 'Marshals', 'Travel Agents', '3-06-2002', '3','3'),
	('Will', 'Wheaton', 'Travel Agents', '3-06-2002', '4','4'),
	('Tom', 'Hollows', 'Travel Agents', '6-04-2003', '5','5'),
	('Jack', 'Jefferson', 'Travel Agents', '6-04-2003', '6','6'),
	('Pail', 'Thissle', 'Travel Agents', '6-04-2003', '7','7'),
	('Hannah', 'Swallows', 'Travel Agents', '6-04-2003', '8','8')
GO

USE TravelAgency_TJL
GO
INSERT INTO PrimaryBranch
(BranchName, City, Address, State, ZipCode, EmployeeID)
VALUES
	('Book&Go', 'Modesto', 'Home Rd', 'CA', '90234', '1'),
	('NULL', 'NULL', 'NULL', 'NULL', 'NULL', '2'),
	('NULL', 'NULL', 'NULL', 'NULL', 'NULL', '4'), 
	('NULL', 'NULL', 'NULL', 'NULL', 'NULL', '5'), 
	('NULL', 'NULL', 'NULL', 'NULL', 'NULL', '7'),
	('NULL', 'NULL', 'NULL', 'NULL', 'NULL', '8'), 
	('NULL', 'NULL', 'NULL', 'NULL', 'NULL', '9'), 
	('NULL', 'NULL', 'NULL', 'NULL', 'NULL', '10') 
GO

USE TravelAgency_TJL
GO
INSERT INTO SecondaryBranch
(BranchName, City, Address, State, ZipCode, EmployeeID, BranchNo)
VALUES
	('TopTicket', 'Witchita', 'Real St', 'KA', '04873', '3', '2'),
	('NULL', 'NULL', 'NULL', 'NULL', 'NULL', '6', '2'),
	('NULL', 'NULL', 'NULL', 'NULL', 'NULL', '11', '2'),
	('NULL', 'NULL', 'NULL', 'NULL', 'NULL', '12', '2'),
	('NULL', 'NULL', 'NULL', 'NULL', 'NULL', '13', '2'),
	('NULL', 'NULL', 'NULL', 'NULL', 'NULL', '14', '2')

GO

USE TravelAgency_TJL
GO
INSERT INTO Transport
(AirCraftName)
VALUES
	('VTOL'),
	('KC135 Strato'),
	('Kawasaki P-1'),
	('Antonov AN-22'),
	('Lockhead C-5 Galaxy'),
	('Boeing C-17')
GO

USE TravelAgency_TJL
GO
INSERT INTO Travel
(Destination, DepartureTime, ArrivalTime)
VALUES
	('Florida', '3:00', '8:00'),
	('Georgia', '5:00', '10:00'),
	('Michigan', '7:30', '3:00'),
	('Unknown', '0:00', '0:00'),
	('Wisconsin', '6:45', '9:25'),
	('Texas', '12:00', '3:00')
GO

USE TravelAgency_TJL
GO
INSERT INTO Services 
(Airline, BranchNo, AirCraftNo, DestinationNo)
Values
	('MileHigh', '1', '3', '4'),
	('FlyFast', '2', '6', '1'),
	('SpeedAir', 1, '2', '6')