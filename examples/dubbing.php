<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Camb.ai\CambAIClient;
use Camb.ai\Model\EndToEndDubbingRequestPayload;
use Camb.ai\Model\Languages;

$apiKey = $argv[1] ?? getenv('CAMBAI_API_KEY');

if (!$apiKey) {
    echo "Usage: php dubbing.php <API_KEY>\n";
    exit(1);
}

$client = new CambAIClient($apiKey);

$payload = new EndToEndDubbingRequestPayload();
$payload->setVideoUrl("https://github.com/Camb-ai/cambai-python-sdk/raw/main/tests/data/test_video.mp4");
$payload->setSourceLanguage(Languages::EN_US);
$payload->setTargetLanguages([Languages::FR_FR, Languages::ES_ES]);

try {
    echo "Creating dubbing task...\n";
    $result = $client->getDubApi()->endToEndDubbingDubPost($payload);
    echo "Task ID: " . $result->getTaskId() . "\n";
    
    // Polling logic for status...
    
} catch (Exception $e) {
    echo 'Error: ', $e->getMessage(), PHP_EOL;
}
