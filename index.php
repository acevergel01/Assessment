<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <script>
    $(function() 
    {
        var DOB = document.getElementsByName("txtDOB");
        $(DOB).datepicker();
    });
    </script>
</head>

<body style="
  display:flex; 
  flex-direction:column; ">
        <div style=" display: flex;
        flex: 1;
        margin-bottom:10px">
            <div style="display: inline-block;
            border-radius: 5px;
            border: solid 2px grey;
            padding:20px;
            text-align:center">

                <?php
                function generate_textbox($name)
                {
                    return '<input type="text" name="' . $name . '">';
                }
                function generate_radiobox($name, $value)
                {
                    return '<input type="radio" name="' . $name . '" value="' . $value . '">'.$value;
                }
                $lastname = isset($_POST['txtLastname']) ? $_POST['txtLastname'] : '';
                $firstname = isset($_POST['txtFirstname']) ? $_POST['txtFirstname'] : '';
                $DOB = isset($_POST['txtDOB']) ? $_POST['txtDOB'] : '';
                
                echo '<form method="post" action="success.php">';
                echo '<table>';
                echo '<tr><td>Last Name</td><td>',
                generate_textbox('txtLastname'),
                '</td></tr>';
                echo '<tr><td>First Name</td><td>',
                generate_textbox('txtFirstname'),
                '</td></tr>';
                echo '<tr><td>Date of Birth</td><td>',
                generate_textbox('txtDOB', $DOB),
                '</td></tr>';
                echo '<tr><td>Gender</td><td>',
                generate_radiobox('radGender', 'Male'),
                generate_radiobox('radGender', 'Female'),
                '</td></tr>';

                echo '<tr><td colspan=2>';
                echo '<input type="submit" name="btnSubmit" value="Submit">&nbsp;';
                echo '</td></tr>';
                echo '</table>';
                echo '</form>';

                ?>
        </div>
    </div>
</body>
</html>