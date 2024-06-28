USE Agency_TJL
GO
CREATE TABLE Customers
(CustomerNo	INT	PRIMARY KEY IDENTITY,
 CustomerFirstName	VARCHAR(8),
 CustomerLastName	VARCHAR(11),
 City	VARCHAR(20),
 Address	VARCHAR(15),
 State		CHAR(2),
 PhoneNo	INT,
 Email		VARCHAR(24),
 AgentNo	INT NOT NULL REFERENCES Agents(AgentNo)
GO
CREATE TABLE Agents
(AgentNo	INT		PRIMARY KEY IDENTITY,
CustomerNo	INT NOT NULL REFERENCES Customers(CustomerNo))
GO
CREATE TABLE Employees
(EmployeeID	INT	PRIMARY KEY IDENTITY,
 EmployeeFName	VARCHAR(8),
 EmpoyeeLName	VARCHAR(11),
 Position	VARCHAR(11),
 AgentNo	INT NOT NULL REFERENCES Agents(AgentNo),
 DATEOFHIRE	INT)