<?php
/**
 * Created by PhpStorm.
 * User: Dani
 * Date: 2017. 05. 01.
 * Time: 17:49
 */

namespace Controllers;


class Cropper {
	
	const ALLOWED_EXTS = ["gif", "jpeg", "jpg", "png", "GIF", "JPEG", "JPG", "PNG"];
	const USER_IMAGE_BASE_PATH = "Uploads/files/MODULES/Users/";
	
	public function upload_image(){
		global $user;
		
		//Create a folder for the user if not exists
		if (!file_exists(static::USER_IMAGE_BASE_PATH . $user['user_id'] . '/')) {
			mkdir(static::USER_IMAGE_BASE_PATH . $user['user_id'] . '/', 0777, true);
		}
		
		//Temp file data
		//$imagePath = "temp/";
		$imagePath = static::USER_IMAGE_BASE_PATH . $user['user_id'] . '/';
		$temp = explode(".", $_FILES["img"]["name"]);
		$extension = end($temp);
		
		//Check write Access to Directory
		if(!is_writable($imagePath)){
			$response = Array("status" => 'error', "message" => 'Can`t upload File; no write Access');
			die(json_encode($response));
		}
		
		if(in_array($extension, static::ALLOWED_EXTS)){
			if($_FILES["img"]["error"] > 0) {
				$response = array("status" => 'error', "message" => 'ERROR Return Code: '. $_FILES["img"]["error"]);
			}
			else {
				$filename = $_FILES["img"]["tmp_name"];
				list($width, $height) = getimagesize($filename);
				move_uploaded_file($filename,  $imagePath . $_FILES["img"]["name"]);
				$response = array(
					"status" => 'success',
					//"url" => $imagePath . $_FILES["img"]["name"],
					"url" => slash(preg_replace('/[^\/]*$/','', $_SERVER["PHP_SELF"]) . $imagePath . $_FILES["img"]["name"]),
					"width" => $width,
					"height" => $height
				);
			}
		} else {
			$response = array("status" => 'error', "message" => 'File extension not allowed');
		}
		die(json_encode($response));
	}
	
	public function delete_image(){
		$details = $_POST;
		
		unlink($details['path']);
	}
	
	public function crop_image(){
		global $db, $user;
		
		//$imgUrl = str_replace(BASE,"",$_POST['imgUrl']);
		$imgUrl = preg_replace('/\\.[^.\\s]{3,4}$/', '', $_POST['imgUrl']);
		
		// original sizes
		$imgInitW = $_POST['imgInitW'];
		$imgInitH = $_POST['imgInitH'];
		// resized sizes
		$imgW = $_POST['imgW'];
		$imgH = $_POST['imgH'];
		// offsets
		$imgY1 = $_POST['imgY1'];
		$imgX1 = $_POST['imgX1'];
		// crop box
		$cropW = $_POST['cropW'];
		$cropH = $_POST['cropH'];
		// rotation angle
		$angle = $_POST['rotation'];
		
		$jpeg_quality = 100;
		
		//$output_filename = preg_replace('/[^\/]*$/','',$_SERVER["PHP_SELF"]) . "temp/croppedImg_".rand();
		
		// uncomment line below to save the cropped image in the same location as the original image.
		$output_filename = '.'.$imgUrl . '_croppedImg_'.rand();
		//$output_filename = dirname($imgUrl). "/croppedImg_".rand();
		
		$what = getimagesize('.'.$_POST['imgUrl']);
		
		switch(strtolower($what['mime']))
		{
			case 'image/png':
				$img_r = imagecreatefrompng($imgUrl);
				$source_image = imagecreatefrompng($imgUrl);
				$type = '.png';
				break;
			case 'image/jpeg':
				$img_r = imagecreatefromjpeg('.'.$_POST['imgUrl']);
				$source_image = imagecreatefromjpeg('.'.$_POST['imgUrl']);
				error_log("jpg");
				$type = '.jpeg';
				break;
			case 'image/gif':
				$img_r = imagecreatefromgif($imgUrl);
				$source_image = imagecreatefromgif($imgUrl);
				$type = '.gif';
				break;
			default: die('Cant handle image format');
		}
		
		
		//Check write Access to Directory
		
		if(!is_writable(dirname($output_filename))){
			$response = Array(
				"status" => 'error',
				"message" => 'cant write file',
			);
		}else{
			
			// resize the original image to size of editor
			$resizedImage = imagecreatetruecolor($imgW, $imgH);
			imagecopyresampled($resizedImage, $source_image, 0, 0, 0, 0, $imgW, $imgH, $imgInitW, $imgInitH);
			// rotate the rezized image
			$rotated_image = imagerotate($resizedImage, -$angle, 0);
			// find new width & height of rotated image
			$rotated_width = imagesx($rotated_image);
			$rotated_height = imagesy($rotated_image);
			// diff between rotated & original sizes
			$dx = $rotated_width - $imgW;
			$dy = $rotated_height - $imgH;
			// crop rotated image to fit into original rezized rectangle
			$cropped_rotated_image = imagecreatetruecolor($imgW, $imgH);
			imagecolortransparent($cropped_rotated_image, imagecolorallocate($cropped_rotated_image, 0, 0, 0));
			imagecopyresampled($cropped_rotated_image, $rotated_image, 0, 0, $dx / 2, $dy / 2, $imgW, $imgH, $imgW, $imgH);
			// crop image into selected area
			$final_image = imagecreatetruecolor($cropW, $cropH);
			imagecolortransparent($final_image, imagecolorallocate($final_image, 0, 0, 0));
			imagecopyresampled($final_image, $cropped_rotated_image, 0, 0, $imgX1, $imgY1, $cropW, $cropH, $cropW, $cropH);
			// finally output png image
			//imagepng($final_image, $output_filename.$type, $png_quality);
			imagejpeg($final_image, $output_filename.$type, $jpeg_quality);
			$db->query("UPDATE xyz_users SET avatar = '".$output_filename.$type."' WHERE user_id = ".$user['user_id']."");
			$response = Array(
				"status" => 'success',
				"url" => slash(BASE.$output_filename.$type)
			);
		}
		print json_encode($response);
	}
	
}