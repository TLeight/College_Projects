<!DOCTYPE html>
<html lang="en">
<head>
	
    <title>Grade calculator</title>

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

<h1>Grade Calculator</h1>

<form action="grade2.php" method="post">

<table>
    <tr>
        <td>Homework #1</td>

        <td>
            <input type="number" name="hw1" min="0" max="77">
        </td>
    </tr>

    <tr>
        <td>Homework #2</td>

        <td>
            <input type="number" name="hw2" min="0" max="77">
        </td>
    </tr>
    <tr>
        <td>Homework #3</td>

        <td>
            <input type="number" name="hw3" min="0" max="85">
        </td>
    </tr>
    <tr>
        <td>Course and Sylubus Quiz</td>

        <td>
            <input type="number" name="q1" min="0" max="20">
        </td>
    </tr>
    <tr>
        <td>Client and Server Quiz</td>

        <td>
            <input type="number" name="q2" min="0" max="20">
        </td>
    </tr>
    <tr>
        <td>HTML Quiz</td>

        <td>
            <input type="number" name="q3" min="0" max="20">
        </td>
    </tr>
    <tr>
        <td>CSS Quiz</td>

        <td>
            <input type="number" name="q4" min="0" max="20">
        </td>
    </tr>
    <tr>
        <td>Internet/Web Quiz</td>

        <td>
            <input type="number" name="q5" min="0" max="20">
        </td>
    </tr>
    <tr>
        <td>Exam #1</td>

        <td>
            <input type="number" name="exam1" min="0" max="115">
        </td>
    </tr>

    <td colspan="2">
		<input type="submit" value="Submit" class="centercell">
	</td>

</table>
</body>
</html>