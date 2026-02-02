<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Camb\Ai\CambAIClient;
use Camb\Ai\Model\CreateTTSRequestPayload;
use Camb\Ai\Model\Languages;
use Camb\Ai\Model\TaskStatus;

$apiKey = $argv[1] ?? getenv('CAMBAI_API_KEY');

if (!$apiKey) {
    echo "Usage: php tts.php <API_KEY>\n";
    exit(1);
}

$client = new CambAIClient($apiKey);

$payload = new CreateTTSRequestPayload();
$payload->setText("Hello from PHP SDK!");
$payload->setVoiceId(20303);
$payload->setLanguage(Languages::EN_US);

try {
    echo "Creating TTS task...\n";
    $response = $client->tts()->createTts($payload);
    $taskId = $response->getTaskId();
    echo "Task ID: $taskId\n";
    
    // Poll for status
    $finished = false;
    while (!$finished) {
        sleep(2);
        $statusResult = $client->getTextToSpeechApi()->getTtsResultTtsTaskIdGet($taskId);
        $status = $statusResult->getStatus();
        
        echo "Status: " . $status . "\n";
        
        if ($status === 'SUCCESS') { // Check Model for exact Enum values if possible, usually strings like 'SUCCESS'
            echo "Task Completed Successfully!\n";
            $finished = true;
        } elseif ($status === 'ERROR') {
            echo "Task Failed.\n";
            $finished = true;
        }
    }
    
} catch (Exception $e) {
    echo 'Exception when calling TTS: ', $e->getMessage(), PHP_EOL;
}
