<!DOCTYPE html>
<html lang="en">
<head>
	
    <title>tution calculator</title>

	<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- ALL VERSION CSS -->
    <link rel="stylesheet" href="css/versions.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <style>
		 *{
            padding: 0;
            margin: 0;
        }
		
		.table1 table {
 		font-family: arial, sans-serif;
 		border-collapse: collapse;
 		width: 100%;
		}
		.table1 td, .table1 th {
 		border: 1px solid #dddddd;
 		text-align: left;
 		padding: 8px;
		}
		.table1 th {
 		background-color: #0143ad;
 		color: white;
		}
		.table1 tr:nth-child(even) {
 		background-color: #c3d7f7;
		}
	</style>
</head>

<body>

<?php include('header.php'); ?>

<h1>Tuiton Calculator</h1>

<form action="tuition2.php" method="post">
 		<table>
 		<tr>
			<td>Residency</td>
			<td>
				<select name="residency">
				<option value="1">In District Student
				<option value="2">Out of District Student
				<option value="3">Out of State / International Student
				</select>
			</td>
 		</tr>

 		<tr>
			<td>level 100 and 200 credit hours</td>
			<td>
			<input type="number" name="lower" min="0" max="25" value="0">
			</td>
 		</tr>

 		<tr>
			<td>level 300 and 400 credit hours</td>
			<td>
			<input type="number" name="upper" min="0" max="25" value="0">
			</td>
 		</tr>

		 <tr>
			<td>Would you like information on financial aid</td>
			<td>
				<select name="finaid">
				<option value="1">No
				<option value="2">Yes
				</select>
			</td>
 		</tr>

		<td colspan="2">
		<input type="submit" value="Submit" class="centercell">
		</td>
 		</table>
		</form>
		<br>


</body>
</html>