<?php
$servername = "10.190.201.39";
$username = "drupal";
$password = "Admin123taTC123";
$dbname = "pokemon_website_trong";

try {	
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
	For($i = 1; $i<1000; $i++){
		$uuid = 'd75b'.$i.'-4bbc-451b-a07a-2d39a1bcd13f';
	$sql = "INSERT INTO `webform_submission` (`sid`, `webform_id`, `uuid`, `serial`, `token`, `uri`, `created`, `completed`, `changed`, `in_draft`, `current_page`, `remote_addr`, `uid`, `langcode`, `entity_type`, `entity_id`, `sticky`, `notes`) VALUES
	(".$i.", 'survey', '".$uuid."', ".$i.", 'IrRWaNEz0wikpicnYBfUlHCHziygfowKP1ZxTCqcFrg', '/form/survey', 1486954759, 1486954841, 1486954841, 0, 'preview', '172.18.18.3', 1, 'en', NULL, NULL, 0, NULL);";
	
	//print_r($sql.'<br>');
	$stmt = $conn->prepare($sql);
	$stmt->execute();
			
	$sql = "INSERT INTO `webform_submission_data` (`webform_id`, `sid`, `name`, `property`, `delta`, `value`) VALUES
	('survey', ".$i.", 'ban_biet_cac_loai_pin_nao_sau_day_cua_panasonic_', '', 0, 'image 02'),
	('survey', ".$i.", 'ban_biet_cac_loai_pin_nao_sau_day_cua_panasonic_1', '', 0, 'image 01'),
	('survey', ".$i.", 'ban_biet_cac_loai_pin_nao_sau_day_cua_panasonic_2', '', 0, 'image 02'),
	('survey', ".$i.", 'ban_biet_cac_loai_pin_nao_sau_day_cua_panasonic_3', '', 0, 'image 03'),
	('survey', ".$i.", 'ban_nam_trong_do_tuoi_', '', 0, '25 - 44 tuổi'),
	('survey', ".$i.", 'ban_nam_trong_do_tuoi_1', '', 0, 'Trên 44 tuổi'),
	('survey', ".$i.", 'ban_nam_trong_do_tuoi_2', '', 0, '16 - 18 tuổi'),
	('survey', ".$i.", 'ban_nam_trong_do_tuoi_3', '', 0, '25 - 44 tuổi'),	
	('survey', ".$i.", 'Bạn sử dụng loại pin Panasonic được bao lâu rồi', '', 0, 'image 03'),	
	('survey', ".$i.", 'Bạn mua pin Panasonic ở cửa hàng nào 1', '', 0, '3'),	
	('survey', ".$i.", 'Theo bạn chất lượng của pin Panasonic như thế nào 1 ', '', 0, 'image 03'),
	('survey', ".$i.", 'Bạn sử dụng loại pin Panasonic được bao lâu rồi 1', '', 0, 'image 03'),
	('survey', ".$i.", 'Bạn mua pin Panasonic ở cửa hàng nào 2', '', 0, 'image 04'),
	('survey', ".$i.", '1 + 2 + 3 + 4 = ? ', '', 0, '5'),	
	('survey', ".$i.", '1 + 2 + 3  = ? ', '', 0, '6'),	
	('survey', ".$i.", 'dia_chi', '', 0, 'q2'),
	('survey', ".$i.", 'email', '', 0, 'tien.huynh@tctav.com'),
	('survey', ".$i.", 'ho_va_ten', '', 0, 'tien'),
	('survey', ".$i.", 'so_dien_thoai', '', 0, '0908027730'),
	('survey', ".$i.", 'thanh_pho', '', 0, 'tan an');";
	//print_r($sql);exit;
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	}
			
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
echo 'update ok';
