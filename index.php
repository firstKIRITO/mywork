<?php

use App\CoderLast\Framework;
use App\CoderLast\Plugins;

require "vendor/autoload.php";

$bot = new Framework("5129441007:AAFkSuHoLxdStCQgAvuB27YUEreE1yLlzx4");
$plugins = new Plugins("5129441007:AAFkSuHoLxdStCQgAvuB27YUEreE1yLlzx4");

$input = $bot->getInput();
if(isset($input->message)){
	$message = $input->message;
	$chat_id = $message->chat->id;
	$text = $message->text;
	$userid	= $message->from->id;
	$name = $message->from->first_name." ".$message->from->last_name;
}


$menu = [
    ['🔍 Найти','🎥 Смотреть'],
    ['📩 Настройки увидамлений'],
    ['📆 Расписание','🗑️ История'],
    ['💞 Мои подписки'],
    ['❤️ Подписаться','💔 Отписаться'],
    ['⚙️ Команды бота'],
];

if ($text == "/start") {

	$bot->sendMessage($chat_id, "sjghisgisggujghsihs sj", [
		'reply_markup'=>$plugins->Keyboards($menu)
	]);
}