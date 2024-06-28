USE CIS11170AssetTJL
/* add data to Agency table */
INSERT INTO Agency
 (AgencyName, City, State)
VALUES
('One', 'Dearborn', 'MI'),
('Two', 'Southfield', 'MI'),
('Three', 'Royal Oak', 'MI')
GO
USE CIS11170AssetTJL
/* add data to Employees table */
INSERT INTO Employee
(EmpFirstName, EmpLastName, DateOfBirth, PhoneNumber, ReportTo, Pay, PayType, AgencyID)
VALUES
('Bob', 'James', '1965/10/08', '3138456356', 1, 250000, 'y', 1 ),
('Fred', 'Sanford', '1960/12/10', '3138456357', 1, 75000, 'y', 1 ),
('Amy', 'Jones', '1988/08/30', '3138456358', 1, 75000, 'y', 2 ),
('Sam', 'Temm', '1960/11/22', '3138456359', 3, 75000, 'y', 2 ),
('Nicole', 'Simmons', '1972/01/01', '3138456301', 1, 10, 'h', 2 ),
('Andy', 'Donny', '1980/09/22', '3138456302', 2, 75000, 'h', 3 ),
('Debbie', 'Andrews', '1990/06/30', '3138456303', 3, 75000, 'y', 3 ),
('George', 'Frank', '1984/05/12', '3138456304', 2, 12, 'h', 3 )
GO
USE CIS11170AssetTJL
/* add data to Employees table */
INSERT INTO Asset
(PurchaseDate, Description, PurchaseAmount, SerialNo, AgencyID)
VALUES
('2010/03/03', 'Computer', 500, '94ew33098', 1 ),
('2011/03/03', 'Desk', 750, 'None', 1 ),
('2010/03/03', 'Microwave', 200, '22305', 2 ),
('2011/03/03', 'Painting', 3000, 'None', 2 ),
('2012/03/01', 'Painting', 1000, 'None', 2 ),
('2010/03/03', 'Desk', 2000, 'None', 3 ),
('2013/03/03', 'Microwave', 200, '8544rb', 3 ),
('2011/03/03', 'computer', 500, '1234ww30256', 3 )