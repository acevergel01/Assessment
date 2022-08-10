<?php
    echo '<table>';
    echo '<tr><td colspan=2 align=center><strong>FORM SUBMITTED</td></tr>';
    echo '<tr><td>Last Name: </td><td>' .  $_POST['txtLastname'] . '</td></tr>';
    echo '<tr><td>First Name: </td><td>', $_POST['txtFirstname'], '</td></tr>';
    echo '<tr><td>Date of Birth: </td><td>', $_POST['txtDOB'], '</td></tr>';
    echo '<tr><td>Gender: </td><td>', $_POST['radGender'], '</td></tr>';
    echo '</table>';
?>
