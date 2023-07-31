<!DOCTYPE html>
<html>
<head>
    <title>Registration Details</title>
</head>
<body>
    <?
    $firstname = $_REQUEST['firstname'];
    $lastname = $_REQUEST['lastname'];
    $username = $_REQUEST['username'];
    ?>

    <table border="1">

        <tr>
            <td>First Name: </td>
            <td><?php echo $firstname ?></td>
        </tr>

        <tr>
            <td>Last Name: </td>
            <td><?php echo $lastname ?></td>
        </tr>

        <tr>
            <td>User Name: </td>
            <td><?php echo $username ?></td>
        </tr>

        <tr>
            <td>User Name: </td>
            <td><?php echo $_REQUEST['username'] ?></td>
        </tr>

    </table>
</body>
</html>