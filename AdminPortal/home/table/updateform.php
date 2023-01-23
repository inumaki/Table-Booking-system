<html>
<head>
<title>User Information</title>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="./navhome.css">
</head>
<body>

<?php

include "./navbar.php";
?>
<form action="update_data.php" method="POST">

<table>
    <tr>
    <td>    
    <label for="table_number">Table Number</label>
    </td>
    <td>
        <input type="number" name="table_number" required>
    </td>


<tr>
<td><label for="table_cost">Table Cost</label></td>
<td><input type="number" name="table_cost"></td>
</tr>
<tr>
<td><label for="number_of_seats">Number Of Seats</label></td>
<td><input type="number" name="number_of_seats"></td>
</tr>


    <td>

    <input type="submit" name="submit" value="Update" class="fetch">
    </td>

    </tr>

</table>

</form>
</body>
</html>