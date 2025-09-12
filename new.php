<?php
if (isset($_COOKIE["id"])) {
    // echo $_COOKIE["id"];
    $id = $_COOKIE["id"];
    include 'php/config.php';
    $sql = "SELECT * FROM users WHERE id = '$id' ";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($rows = $result->fetch_assoc()) {
            echo "<script>
    document.getElementById('name').value = '{$rows['name']}';
    document.getElementById('email').value = '{$rows['email']}';
    document.getElementById('id').value = '{$rows['id']}';
  
</script>";
        }
        // header("Location:show.php");
    }

}
