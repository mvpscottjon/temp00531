<?php
        session_start();
        if(!isset($_GET['editid']))
            header('Location:20170531_38_php');
            $editid = $_GET['editid'];

            $_SESSION['editid']=$editid;
            $sql= "select * from member where id = {$editid}";
            $db = @new mysqli('127.0.0.1','root','root',
                'iii');
            $rs= $db->query($sql);
            $editObj = $rs->fetch_object();






?>



<form action="updateMember.php">
    <table>
        <tr>
<!--            <input type="hidden" name="id" value="--><?php //echo $editObj->id?><!--">-->
            //隱藏id方法不推

            <th>account</th>
            <td><input type="text" name="account" value="<?php echo $editObj->account?>"></td>
        </tr>
        <tr>
            <th>password</th>
            <td><input type="password" name="password" value="<?php echo $editObj->password?>"></td>
        </tr>

        <tr>
            <th>realname</th>
            <td><input type="text" name="realname" value="<?php echo $editObj->realname?>"></td>
        </tr>

        <tr>
            <td><input type="submit" value="sent"></td>
        </tr>

    </table>
</form>
