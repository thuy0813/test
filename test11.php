<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>test register</title>
	<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
</head>
<body>
<form id="formRegister" name="formRegister" method="post" action="test12.php">
<table align="center">
        <tr>
        <td width="131">UserID:</td>
        <td width="202"><span id="sprytextfieldUserID">
          <label for="text1"></label>
          <input name="UserID" type="text" id="UserID" size="30" />
          <span class="textfieldRequiredMsg">A value is required.</span></span></td>
      	</tr>
		<tr>
          <td>Password:</td>
          
          <td><span id="sprytextfieldPassword">
            <label for="text2"></label>
            <input name="Password" type="password" id="Password" size="30" />
          <span class="textfieldRequiredMsg">A value is required.</span></span></td>
      	</tr>
         
        <tr>
        <td>ชื่อ:</td> 
        <td><input name="Name" type="text" id="Name" size="30" /></td>
        </tr>
        
        <tr>
        <td>นามสกุล: </td>
        <td><input name="Surname" type="text" id="Surname" size="30" /></td>
        </tr>
        
        <tr>
        <td>เบอร์โทรศัพท์: </td>
        <td><label for="phone"></label>
          <input name="Phone" type="text" id="Phone" size="30" /></td>
        </tr>
        <tr>
         <td>E-mail:</td>
          
          <td><span id="sprytextfieldEmail">
          <label for="text3"></label>
          <input name="Email" type="text" id="Email" size="30" />
          <span class="textfieldRequiredMsg">A value is required.</span><span class="textfieldInvalidFormatMsg">Invalid format.</span></span></td>
     	</tr> 
          
        <tr>
          <td colspan="2" align="center"><input type="submit" name="Submit" id="Submit" value="Submit"  /></td>
        </tr>
        
</table>

<script type="text/javascript">
	var sprytextfieldUserID = new Spry.Widget.ValidationTextField("sprytextfield1", "none");
	var sprytextfieldPassword = new Spry.Widget.ValidationTextField("sprytextfield2", "none");
	var sprytextfieldEmail = new Spry.Widget.ValidationTextField("sprytextfield4", "email");
</script>
</body>
</html>