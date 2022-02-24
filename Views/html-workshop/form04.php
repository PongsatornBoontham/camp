<!DOCTYPE HTML>
<html>
<head>
	<title>form04</title>
</head>
<body>
	<form name="form04" >
		<h3>ข้อมูลส่วนตัวเบื้องต้น</h3>
		<br>
		ชื่อจริง :<br>
		<input type="text" name="Fname" value="พงศธร" size="10" maxlength="10" readonly><br>
		นามสกุล :<br>
		<input type="text" name="Lname" value="บุญธรรม" size="10" maxlength="10" disabled><br>
		E-mail :<br>
		<input type="text" name="Email" size="50" maxlength="50"><br>
		PIN :<br>
		<input type="password" name="Pin" size="4" maxlength="4"><br>
		<br>
		อายุ :<input type="number" name="age" min="1" max="30"><br>
		<br>
		<button type="reset">ยกเลิก</button>
		<button type="submit">บันทึก</button>
	</form>
</body>
</html>