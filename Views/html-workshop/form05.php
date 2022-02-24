<!DOCTYPE HTML>
<html>
<head>
	<title>form05</title>
</head>
<body>
	<form name="form05">
		<h3>แบบสอบถามข้อมูลส่วนบุคคล</h3>
		<hr>
		คำนำหน้า
		<select name="คำนำหน้า" >
			<option value="นาย">นาย</OPTION>
			<OPTION value="นาง">นาง</option>
			<OPTION value="นางสาว">นางสาว</option>
		</select>
		<br>
		<br>
		ชื่อจริง
		<input type="text" name="Fname" size="20" maxlength="5">
		นามสกุล
		<input type="text" name="Lname" size="20" maxlength="5"><br>
		<br>
		วันเกิด
		<input type="date" id="birthday" name="birthday"><br>
		<br>
		รหัสนิสิต<input type="number" name="quantity" size="8" maxlength="8"><br>
		<br>
		อีเมล</b><input type="email" id="email" name="email"><br>
		<br>
		รหัสผ่าน
		<input type="password" name="pass" size="20" maxlength="20"><br>
		<br>
		<hr><br>
		<br>
		คณะ
		<select name="คณะ"disabled>
            <option value="1"selected>คณะวิทยาการสารสนเทศ </option>
            <option value="2">คณะพยาบาลศาสตร์</option>
            <option value="3">คณะแพทยศาสตร์</option>
        </select>
		<br>
		<br>
		นิสิตชั้นปีที่
		<input type="number" name="ชั้นปี" min="1" max="6" value="2" disabled><br>
		<br>
		มกุล<br>
		<input type="Radio" id="Cluster0-3" name="มกุล" value="Cluster 0 - Cluster 3">Cluster 0 - Cluster 3<br>
        <input type="Radio" id="Cluster4-6" name="มกุล" value="Cluster 4 - Cluster 6">Cluster 4 - Cluster 6<br>
        <input type="Radio" id="Cluster7-9" name="มกุล" value="Cluster 7 - Cluster 9">Cluster 7 - Cluster 9<br>
		<br>
		ภาษาที่ถนัด<br>
		<input type="checkbox" name="HTML" value="HTML">HTML<br>
        <input type="checkbox" name="CSS" value="CSS">CSS<br>
        <input type="checkbox" name="MySQL" value="MySQL">MySQL<br>
        <input type="checkbox" name="JS" value="JS">JS<br>
        <input type="checkbox" name="PHP" value="PHP">PHP<br>
		<br>
        <input type="reset" value="ยกเลิก">
        <input type="submit" value="บันทึก">
	</form>
</body>
</html>