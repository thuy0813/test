<?
        if($_POST['Submit'])
        {
        // เชื่่อมต่อฐานข้อมูล
        $host="localhost"; // กำหนด host
        $username="root"; // กำหนด username
        $pass_word="thuy0813"; // กำหนด Password
        $db="contact"; // กำหนดชื่อฐานข้อมูล
        $Conn = mysql_connect( $host,$username,$pass_word) or die ("ติดต่อฐานข้อมูลไม่ได้");// ติดต่อฐานข้อมูล
        mysql_query("SET NAMES utf8",$Conn); // set กำหนดมาตราฐาน
        mysql_select_db($db) or die("เลือกฐานข้อมูลไม่ได้"); // เลือกฐานข้อมูล 
        //--->
		$userId = $_POST['UserID'];
		$passUser = $_POST['Password']; 
                $name = $_POST['Name'];
                $surname = $_POST['Surname'];
                $phone = $_POST['Phone'];
		$email = $_POST['Email'];
        // เพิ่มลงฐานข้อมูล
        $sql_add = "insert into register set 
        UserID = '$userId',Password = '$passUser',Name = '$name' , Surname = '$surname'  , Phone = '$phone',Email = '$email'";
        mysql_query($sql_add) or die(mysql_error());
        echo "เพิ่มข้อมูลของ $name $surname สำเร็จแล้ว";
        
        }
        ?>
