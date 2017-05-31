<?php
    if(isset($_GET['account'])){
        $account= $_GET['account'];
        $password= $_GET['password'];
        $realname= $_GET['realname'];

        $sql = "insert into member (account,password,realname)".
    "VALUES ('{$account}','{$password}','{$realname}')";

        $db = @new mysqli('127.0.0.1','root','root',
            'iii');
        $db->query($sql);

        header('Location:20170531_38.php');

    }



?>



<form>
    <table>
        <tr>
        <th>account</th>
            <td><input type="text" name="account"></td>
        </tr>
        <tr>
            <th>password</th>
            <td><input type="password" name="password"></td>
        </tr>

        <tr>
            <th>realname</th>
            <td><input type="text" name="realname"></td>
        </tr>

        <tr>
            <td><input type="submit" value="sent"></td>
        </tr>

    </table>
</form>