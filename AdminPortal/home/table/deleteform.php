<html>
<head>
<title>User Information</title>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="navhome.css">
</head>
<body>



<?php
 include './navbar.php';
  ?>     
<form action="delete.php" method="POST">
<table>
    <tr>
    <td>    
    <label for="table_number">Table Number</label>
    </td>
    <td>
        <input type="number" name="table_number"  min="1">
    </td>

    <td>

    <input type="submit" name="submit" value="Delete" class="delete">
    </td>
    </tr>

</table>

</form>
</body>
</html>