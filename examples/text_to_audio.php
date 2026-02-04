<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Camb\Ai\CambAIClient;
use Camb\Ai\Model\CreateTextToAudioRequestPayload;

$apiKey = $argv[1] ?? getenv('CAMBAI_API_KEY');
if (!$apiKey) {
    echo "Usage: php text_to_audio.php <API_KEY>\n";
    exit(1);
}

$client = new CambAIClient($apiKey);

$payload = new CreateTextToAudioRequestPayload();
$payload->setPrompt("Sound of a car engine starting.");
$payload->setDuration(5.0);

try {
    echo "Creating sound effect...\n";
    $result = $client->getTextToAudioApi()->createTextToAudioTextToSoundPost($payload);
    echo "Task ID: " . $result->getTaskId() . "\n";
    
} catch (Exception $e) {
    echo 'Error: ', $e->getMessage(), PHP_EOL;
}
