<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show-info</title>
    <link rel="stylesheet" href="./styles/show.css">
</head>
<body>
    <form action="" id="show-info">
        <!-- <tr>
            <td>Name:</td><td><input type="text"></td>
        </tr><br>
        <tr>
            <td>Email:</td><td><input type="email"></td>
        </tr><br>
        <tr>
            <td>ID:</td><td><input type="text" value="" readonly></td>
        </tr><br>
        <tr>
            <td>Phone Number:</td><td><input type="text"></td>
        </tr> -->
        
        <label for="" style="margin-right: 63px;">Name:</label>
        <input type="text" id="name" value="mridul"><br>
        <label for="" style="margin-right: 64px;">Email:</label>
        <input type="email" id="email"><br>
        <label for="" style="margin-right: 85px;">ID:</label>
        <input type="text" id="id" value="1" readonly><br>
        <label for="" style="margin-right: 5px;">Phone Number:</label>
        <input type="text" id="phn-no"><br>
        <button type="submit">Save Info</button>

    </form>
    <?php
      include 'new.php';
      
    ?>
</body>
</html>