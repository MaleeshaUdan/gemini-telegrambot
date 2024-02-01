<?php
require 'vendor/autoload.php';
use GeminiAPI\Client as GeminiClient;
use GeminiAPI\Resources\Parts\TextPart;

$botToken = "BOT_TOKEN";
$website = "https://api.telegram.org/bot" . $botToken;
$sessionFolder = "session/"; // Define the session folder path

function sendMessage($chatId, $message, $website, $keyboard = null) {
    $url = $website . "/sendMessage";
    $postData = [
        'chat_id' => $chatId,
        'text' => $message,
        'parse_mode' => 'Markdown',
    ];
    if ($keyboard) {
        $postData['reply_markup'] = json_encode($keyboard);
    }
    $options = [
        'http' => [
            'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
            'method'  => 'POST',
            'content' => http_build_query($postData),
        ]
    ];
    $context  = stream_context_create($options);
    file_get_contents($url, false, $context);
}

function getGeminiResponse($prompt) {
    $client = new GeminiClient('GOOGLE_API_FOR_GEMINI');
    $chat = $client->geminiPro()->startChat();
    $response = $chat->sendMessage(new TextPart($prompt));
    return $response->text();
}

function getKeyboard() {
    return [
        'inline_keyboard' => [
            [['text' => '/bard 🚀', 'callback_data' => '/bard']],
            [['text' => '/end 🔚', 'callback_data' => '/end']],
            [['text' => '/dev 👨‍💻', 'callback_data' => '/dev']],
        ]
    ];
}

$content = file_get_contents("php://input");
$update = json_decode($content, TRUE);

$chatId = isset($update["message"]) ? $update["message"]["chat"]["id"] : null;
$message = isset($update["message"]) ? $update["message"]["text"] : null;
$callbackQuery = isset($update["callback_query"]) ? $update["callback_query"] : null;

if ($callbackQuery) {
    $chatId = $callbackQuery["message"]["chat"]["id"];
    $message = $callbackQuery["data"];
    $url = $website . "/answerCallbackQuery";
    $postData = [
        'callback_query_id' => $callbackQuery["id"],
        'text' => "Processing your request...",
        'show_alert' => false,
    ];
    $options = [
        'http' => [
            'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
            'method'  => 'POST',
            'content' => http_build_query($postData),
        ]
    ];
    $context  = stream_context_create($options);
    file_get_contents($url, false, $context);
}

$sessionFile = $sessionFolder . "chat_session_{$chatId}.txt"; // Prepend the session folder to the file name

if ($message === "/start") {
    $menuMessage = "🌟 *Welcome! Choose an option to proceed.* 🌟";
    sendMessage($chatId, $menuMessage, $website, getKeyboard());
} elseif ($message === "/bard") {
    file_put_contents($sessionFile, "in_session");
    sendMessage($chatId, "✨ Chat session started. *Enter your prompt:*", $website);
} elseif ($message === "/end") {
    if (file_exists($sessionFile)) {
        unlink($sessionFile);
        sendMessage($chatId, "Chat session ended. ✅", $website);
    }
} elseif ($message === "/dev") {
    $devMessage = "👨‍💻 *Developer:* Maleesha Udan Aththanayaka from Sri Lanka 🇱🇰\n";
    $devMessage .= "🔖 *Code name:* #SparrowHawk\n";
    $devMessage .= "📧 *Contact:* maleeshaudan6@gmail.com";
    $devMessage .= "🔗 *GitHub:* [MaleeshaUdan](https://github.com/MaleeshaUdan)";
    sendMessage($chatId, $devMessage, $website);
} elseif (file_exists($sessionFile)) {
    $geminiResponse = getGeminiResponse($message);
    sendMessage($chatId, $geminiResponse, $website);
} elseif (isset($update["message"]) && !isset($update["message"]["text"])) {
    sendMessage($chatId, "Sorry, these files are not allowed.", $website);
} else {
    sendMessage($chatId, "Type /start to see the menu.", $website);
}
?>
