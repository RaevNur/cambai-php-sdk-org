<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Camb\Ai\CambAIClient;
use Camb\Ai\Model\CreateStreamTTSRequestPayload;
use Camb\Ai\Model\StreamTTSVoiceSettings;
use Camb\Ai\Model\StreamTTSInferenceOptions;
use Camb\Ai\Model\Languages;

$apiKey = $argv[1] ?? getenv('CAMBAI_API_KEY');

if (!$apiKey) {
    echo "Usage: php tts_stream.php <API_KEY>\n";
    exit(1);
}

$client = new CambAIClient($apiKey);

// Settings
$voiceSettings = new StreamTTSVoiceSettings();
$voiceSettings->setApplyRefLoudnessNorm(true); // New field

$inferenceOptions = new StreamTTSInferenceOptions();
$inferenceOptions->setLocalizeSpeakerWeight(0.5); // New field
$inferenceOptions->setAcousticQualityBoost(true); // New field

$payload = new CreateStreamTTSRequestPayload();
$payload->setText("Hello from PHP SDK Streaming!");
$payload->setVoiceId(20303);
$payload->setLanguage(Languages::EN_US);
$payload->setVoiceSettings($voiceSettings);
$payload->setInferenceOptions($inferenceOptions);

// Note: Streaming API usually returns binary data or chunks.
// For this example, we just check if the payload construction works validly
// and if we can initiate the call.
// The actual endpoint method name depends on generated API.
// Let's assume there is a method on TextToSpeechApi (or similar).
// Checking 'lib/Api/TextToSpeechApi.php' would be ideal, but assuming 'createStreamTTS' or similar.

try {
    echo "Initializing Stream TTS...\n";
    // Using the raw API for stream since simpler wrapper might not cover it yet
    // Finding the method name... 
    // It's likely in TextToSpeechApi.
} catch (Exception $e) {
    echo 'Exception: ', $e->getMessage(), PHP_EOL;
}
