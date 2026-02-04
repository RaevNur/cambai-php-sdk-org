<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Camb\Ai\Provider\TtsProviderInterface;
use Camb\Ai\Model\CreateTTSRequestPayload;
use Camb\Ai\Model\CreateTTSOut;

class BasetenTtsProvider implements TtsProviderInterface
{
    private $apiKey;
    private $basetenUrl;

    public function __construct($apiKey, $basetenUrl)
    {
        $this->apiKey = $apiKey;
        $this->basetenUrl = $basetenUrl;
    }

    public function createTts($payload, $run_id = null)
    {
        // Mock implementation of calling Baseten
        // In reality, use Guzzle or curl to POST to basetenUrl
        
        echo "[BasetenProvider] Calling Baseten API at " . $this->basetenUrl . "\n";
        echo "[BasetenProvider] Payload content: " . $payload->getText() . "\n";
        
        // Return a dummy CreateTTSOut object
        $out = new CreateTTSOut();
        $out->setTaskId("baseten-task-" . rand(1000, 9999));
        // Note: run_id might not be strictly settable if it wasn't in constructor or has no setter in generated model,
        // but let's assume standard behavior or just ignore for mock.
        
        return $out;
    }
}
