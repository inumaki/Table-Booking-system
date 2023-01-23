<html>
<head>
<title>User Information</title>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="navhome.css">
</head>
<body>
    <?php
include './navbar.php'; ?>   
<form action="insert_data.php" method="POST">
<table>
    <tr>
        <td>
            <label for="table_number">Table Number :</label></td>
            <td>
<input type="text" name="table_number" placeholder="Table Number" required/>
</td>
</tr>
<tr>
    <td><label for="table_cost">Table Cost: </label></td>
    <td>
<input type="text" name="table_cost"  placeholder="table cost"required/>
</td>
</tr>
<tr>
<td><label for="number_of_seats">Number Of Seats</label></td>
<td>
<input type="text" name="number_of_seats" placeholder="Number Of Seats" required>
</td>
</tr>
<tr>
    <td>
<input type="submit" name="submit" value="Submit">
</td>
</tr>
</table>

</form>
</body>
</html>