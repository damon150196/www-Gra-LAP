<?php

echo'
<h1>Login: </h1>
<form action="index.php?display=login" method="post">
      <table id="login">
             <tr>
                 <td>Login: </td>
                 <td><input type="text" name="login"/></td>
             </tr>
             <tr>
                 <td> </td>
                 <td><input type="submit" value="Zaloguj"/></td>
             </tr>
      </table>      
</form>
';


if($_POST)
{
     
     $SQL = "SELECT *
             FROM users
             WHERE login = '".$_POST['login']."'";
     $result = $conn->query($SQL);
     $row = $result->fetch_array();
     
     if($row)
     {          
          $_SESSION['id_user'] = $row['id_user'];
          $result->close();
          header("Location: index.php?display=rules");
     }
     else
     {
          echo'<h2 style="color: #FF0000">Wprowadzony Login jest błędny</h2>';
     }
     
}
?>
