<html>
<head>
<title>User Information</title>
<link rel="stylesheet" href="navhome.css">
<link rel="stylesheet" href="style.css">
</head>
<body>
 <?php
 include './navbar.php';
  ?>   
<form action="getdata.php" method="POST">
<table >
    <tr>
    <td>    
    <label for="number">Table Number</label>
    </td>
    <td>
        <input type="text" name="Number" placeholder="Number" min="1">
    </td>

    <td>

    <input type="submit" name="submit" value="Fetch" class="fetch">
    </td>
    </tr>

</table>

</form>
</body>
</html>