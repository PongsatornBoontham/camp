<!DOCTYPE HTML>
<html>
<head>
	<title>ข้อสอบกลางภาค</title>
</head>
<body>
	<h1>แบบประเมินความเสี่ยงโรคติดเชื้อไวรัสโคโรน่า 2019 (COVID-19)</h1>
	<hr>
	<form method ="POST" action = "<?php echo site_url().'/Midterm/midterm_output' ?>"enctype = "multipart/form-data">
		<h2>ส่วนที่ 1 ข้อมูลทั่วไป</h2>
		คำนำหน้า <select name = "prefix">
			<option value = "นาย">นาย</option>
			<option value = "นาง">นาง</option>
			<option value = "นางสาว">นางสาว</option>
		</select>
		เพศ
		<input type = "radio" name = "mf" value = "ชาย">ชาย
		<input type = "radio" name = "mf" value = "หญิง">หญิง
		<input type = "radio" name = "mf" value = "ไม่ระบุ">ไม่ระบุ
		<br><br>
		ชื่อจริง <input type = "text" name = "fname">
		นามสกุล <input type = "text" name = "sname"><br><br>
		วันเกิด <input type = "date" name = "birthday">   
		อายุ <input type = "number" name = "date" value = "อายุ" size = "3" maxlength = "5">ปี
		<br><br>
		เบอร์โทรศัพท์ <input type = "number" name = "num" value = "เบอร์" size = "10" maxlength = "10">
		อีเมล <input type = "email" name = "email">
		<br><br>
		จังหวัด <input type = "text" name = "provine">
		อำเภอ <input type = "text" name = "district">
		<br><br>
		ที่อยู่<br> <textarea name = "address"></textarea>
		<br><br>
		รูปภาพประจำตัว <input type = "file" name = "image" accept = "image/*"><br><br>
		<hr>
		<h2>ส่วนที่ 2 ข้อมูลการสัมผัสโรค</h2>
		1. ท่านมีประวัติเดินทางไปต่างประเทศ หรือพื้นที่ ที่มีการระบาดของโรคติดเชื้อไวรัสโคโรนา 2019 (COVID-19) ในช่วงเวลา 14 วัน ก่อนหน้านี้ ใช่หรือไม่ ?<br>
		<input type = "radio" name = "q1y" value = "q1y">ใช่
		<input type = "radio" name = "q1n" value = "q1n">ไม่ใช่
		<br><br>
		2. ท่านสัมผัสใกล้ชิดกับประชาชนที่มาจากพื้นที่ที่มีรายงานการระบาดต่อเนื่องของโรคติดเชื้อไวรัสโคโรนา 2019 (COVID-19) ใช่หรือไม่ ?<br>
		<input type = "radio" name = "q2y" value = "q2y">ใช่
		<input type = "radio" name = "q2n" value = "q2n">ไม่ใช่
		<br><br>
		3. ท่านมีประวัติใกล้ชิดหรือสัมผัสกับผู้ป่วยเข้าข่ายหรือยืนยันโรคติดเชื้อไวรัสโคโรนา 2019(COVID-19) ใช่หรือไม่ ?<br>
		<input type = "radio" name = "q3y" value = "q3y">ใช่
		<input type = "radio" name = "q3n" value = "q3n">ไม่ใช่
		<br><br>
		4. ท่านหรือบุคคลใกล้ชิดเข้าร่วมกิจกรรมที่มีผู้ชุมนุมเกิน 100 คน ในช่วงเวลา 14 วัน ก่อนหน้านี้ ใช่หรือไม่ ? <br>
		<input type = "radio" name = "q4y" value = "q4y">ใช่
		<input type = "radio" name = "q4n" value = "q4n">ไม่ใช่
		<br><br><hr>
		<h2>ส่วนที่ 3 ข้อมูลอาการที่ตรวจพบ</h2>
		กรุณาเลือกคำตอบที่ตรงกับท่านมากที่สุด<br>
		<input type = "checkbox" name = "sym[]" value = "มีไข้">มีไข้(37.5 oC ขึ้นไป)<br>
		<input type = "checkbox" name = "sym[]" value = "ไอ">ไอ<br>
		<input type = "checkbox" name = "sym[]" value = "มีน้ำมูก">มีน้ำมูก<br>
		<input type = "checkbox" name = "sym[]" value = "เจ็บคอ">เจ็บคอ<br>
		<input type = "checkbox" name = "sym[]" value = "หายใจเร็ว หรือ หายใจลำบาก หรือ หายใจไม่สะดวก">หายใจเร็ว หรือ หายใจลำบาก หรือ หายใจไม่สะดวก<br>
		<input type = "checkbox" name = "sym[]" value = "จมูกไม่ได้กลิ่น">จมูกไม่ได้กลิ่น<br>
		<hr>
		<input type = "reset" value = "ยกเลิก">
		<input type = "submit" value = "บันทึก">
	</form>
</body>
</html>