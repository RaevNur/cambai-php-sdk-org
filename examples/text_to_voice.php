<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Camb.ai\CambAIClient;
use Camb.ai\Model\CreateTextToVoiceRequestPayload;

$apiKey = $argv[1] ?? getenv('CAMBAI_API_KEY');

if (!$apiKey) {
    echo "Usage: php text_to_voice.php <API_KEY>\n";
    exit(1);
}

$client = new CambAIClient($apiKey);

$payload = new CreateTextToVoiceRequestPayload();
$payload->setText("A brave new voice.");
$payload->setVoiceDescription("A generic male voice, around 30, deep and calm.");

try {
    echo "Creating custom voice...\n";
    $result = $client->getTextToVoiceApi()->createTextToVoiceTextToVoicePost($payload);
    echo "Task ID: " . $result->getTaskId() . "\n";
    
    // Polling is similar to TTS...
} catch (Exception $e) {
    echo 'Error: ', $e->getMessage(), PHP_EOL;
}
