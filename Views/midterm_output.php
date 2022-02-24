<!DOCTYPE HTML>
<html>
<style> 
    table{
		border-radius: 20px;
		background: green;
		padding: 20px;
	}
	img{
		border-radius: 15px;
	}
	#green{
		border-radius: 20px;
		background: green;
		padding: 20px;
	}
	#orange{
		border-radius: 20px;
		background: orange;
		padding: 20px;
	}
	#red{
		border-radius: 20px;
		background: red;
		padding: 20px;
	}
</style>
<head>
	<title>ผลการประเมิน</title>
</head>
<body>
	<h1>ผลการประเมินเบื้องต้น</h1>
	<hr>
	<b>1. บัตรประจำตัวผู้ประเมิน</b><br><br>
	<?php 
		$countsym = count($sym);
		if($countsym <= 1){
			echo "ไม่มีความเสี่ยง";
		}else if($countsym <= 2){
			echo "ความเสี่ยงต่ำ";
		}else{
			echo "ความเสี่ยงสูง";
		}
	?>
	<table div id = "red">
		<tr> 
			<td rowspan="5">
				<img src = "<?php echo base_url().'./picture/'.$image?>" width = '200px' height = '200px' >
			</td>
			<td>
				<h2><font color = 'white'>บัตรประจำตัวผู้มีความเสี่ยงสูง</h2></font><hr>
			</td>
		</tr>
		<tr>
			<td>
				<font color = 'white'><?php echo $prefix .' '. $fname .' '. $sname?> เพศ : <?php echo $mf?></font><hr>
			</td>
		</tr>
		<tr>
			<td>
				<font color = 'white'>วัดเกิด : <?php echo $birthday?> อายุ <?php echo $date?></font><hr>
			</td>
		</tr>
		<tr>
			<td>
				<font color = 'white'>อีเมล : <?php echo $email?></font><hr>
			</td>
		</tr>
		<tr>
			<td>
				<font color = 'white'>เบอร์โทรศัพท์ : <?php echo $num?></font><hr>
			</td>
		</tr>
		<tr>
			<td colspan ="2"> 
				<font color = 'white'>ที่อยู่ : <?php echo $address?></font><hr>
			</td>
		</tr>
	</table><hr><table div id = "orange">
		<tr> 
			<td rowspan="5">
				<img src = "<?php echo base_url().'./picture/'.$image?>" width = '200px' height = '200px' >
			</td>
			<td>
				<h2><font color = 'white'>บัตรประจำตัวผู้มีความเสี่ยงต่ำ</h2></font><hr>
			</td>
		</tr>
		<tr>
			<td>
				<font color = 'white'><?php echo $prefix .' '. $fname .' '. $sname?> เพศ : <?php echo $mf?></font><hr>
			</td>
		</tr>
		<tr>
			<td>
				<font color = 'white'>วัดเกิด : <?php echo $birthday?> อายุ <?php echo $date?></font><hr>
			</td>
		</tr>
		<tr>
			<td>
				<font color = 'white'>อีเมล : <?php echo $email?></font><hr>
			</td>
		</tr>
		<tr>
			<td>
				<font color = 'white'>เบอร์โทรศัพท์ : <?php echo $num?></font><hr>
			</td>
		</tr>
		<tr>
			<td colspan ="2"> 
				<font color = 'white'>ที่อยู่ : <?php echo $address?></font><hr>
			</td>
		</tr>
	</table>
	<table div id = "green">
		<tr> 
			<td rowspan="5">
				<img src = "<?php echo base_url().'./picture/'.$image?>" width = '200px' height = '200px' >
			</td>
			<td>
				<h2><font color = 'white'>บัตรประจำตัวผู้ไม่มีความเสี่ยง</h2></font><hr>
			</td>
		</tr>
		<tr>
			<td>
				<font color = 'white'><?php echo $prefix .' '. $fname .' '. $sname?> เพศ : <?php echo $mf?></font><hr>
			</td>
		</tr>
		<tr>
			<td>
				<font color = 'white'>วัดเกิด : <?php echo $birthday?> อายุ <?php echo $date?></font><hr>
			</td>
		</tr>
		<tr>
			<td>
				<font color = 'white'>อีเมล : <?php echo $email?></font><hr>
			</td>
		</tr>
		<tr>
			<td>
				<font color = 'white'>เบอร์โทรศัพท์ : <?php echo $num?></font><hr>
			</td>
		</tr>
		<tr>
			<td colspan ="2"> 
				<font color = 'white'>ที่อยู่ : <?php echo $address?></font><hr>
			</td>
		</tr>
	</table><hr>
	<br><br>
	<b>2. ข้อมูลที่ตรวจพบ</b><br><br>
	<hr>
</body>
</html>