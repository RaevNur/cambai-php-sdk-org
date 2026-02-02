<?php
require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/BasetenTtsProvider.php';

use Camb\Ai\CambAIClient;
use Camb\Ai\Model\CreateTTSRequestPayload;
use Camb\Ai\Model\Languages;

$apiKey = $argv[1] ?? getenv('CAMBAI_API_KEY');
// API Key not strictly needed for this mock proof-of-concept unless we init the default client
$client = new CambAIClient($apiKey ?? "dummy_key");

// User implements their custom provider
$basetenProvider = new BasetenTtsProvider("baseten_key_123", "https://model-id.api.baseten.co/production/predict");

// Register it
$client->setTtsProvider($basetenProvider);

// Use standard API interface
$payload = new CreateTTSRequestPayload();
$payload->setText("Hello from Baseten Provider!");
$payload->setLanguage(Languages::EN_US);

echo "Creating TTS via Custom Provider...\n";
$response = $client->tts()->createTts($payload);
echo "Result Task ID: " . $response->getTaskId() . "\n";
