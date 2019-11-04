<?php

include "vk_api.php";


const VK_KEY = "e623a42029cb26a27a62411e452585de60891a8612bbc2722d4a789018d1563ee1658613e1d3e23aef3f4";
const ACCESS_KEY = "e472dadf";
const VERSION = "5.81";


$vk = new vk_api(VK_KEY,VERSION);
$data = json_decode(file_get_contents('php://input'));

if ($data->type == 'confirmation') {
	exit(ACCESS_KEY);
}
$vk->sendOK();

$id = $data->object->from_id;
$message + $data->object->text;


if ($data->type == 'message_new') {

   if ($message == 'бот') {

   	 $vk->sendMessage($id, "Привет :-)")

   } 

}