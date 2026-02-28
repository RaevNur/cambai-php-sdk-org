# PHP SDK Quickstart

Get started with the Camb.ai PHP SDK in minutes

## Overview

The Camb.ai PHP SDK provides a simple interface to integrate high-quality text-to-speech into your applications. This quickstart will have you generating speech in under 5 minutes.

## Installation

Add the Camb.ai repository and package to your `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/Camb-ai/cambai-php-sdk.git"
    }
  ],
  "require": {
    "camb-ai/cambai-php-sdk": "*@dev"
  }
}
```

Then run:

```bash
composer install
```

## Authentication

Get your API key from [CAMB.AI Studio](https://studio.camb.ai/) and set it as an environment variable:

```bash
export CAMB_API_KEY=your_api_key_here
```

## Quick Start

### Streaming Text-to-Speech

Generate and stream speech in real-time:

```php
<?php
require_once __DIR__ . '/vendor/autoload.php';

use Camb\Ai\CambAIClient;
use Camb\Ai\Model\CreateStreamTTSRequestPayload;
use Camb\Ai\Model\Languages;

$client = new CambAIClient(getenv('CAMB_API_KEY'));

$payload = new CreateStreamTTSRequestPayload();
$payload->setText("Hello! Welcome to Camb.ai text-to-speech.");
$payload->setVoiceId(147320);
$payload->setLanguage(Languages::EN_US);
$payload->setSpeechModel("mars-8-flash");

// Stream the audio
$audioStream = $client->tts()->ttsTtsStreamPost($payload);

// Save to file
file_put_contents("output.wav", $audioStream);
echo "Audio saved to output.wav\n";
```

### Using the Helper Function

You can easily wrap the file saving into a helper function:

```php
function saveStreamToFile($stream, $filename) {
    return file_put_contents($filename, $stream);
}

// Usage:
$stream = $client->tts()->ttsTtsStreamPost($payload);
saveStreamToFile($stream, "output.wav");
```

## Choosing a Model

Camb.ai offers three MARS models optimized for different use cases:

### MARS Flash

```php
$payload->setSpeechModel("mars-8-flash");
$stream = $client->tts()->ttsTtsStreamPost($payload);
```

**Best for**: Real-time voice agents, low-latency applications  
**Sample rate**: 22.05kHz

### MARS Pro

```php
$payload->setSpeechModel("mars-8-pro");
$stream = $client->tts()->ttsTtsStreamPost($payload);
```

**Best for**: Audio production, high-quality content  
**Sample rate**: 48kHz

### MARS Instruct

```php
$payload->setSpeechModel("mars-8-instruct");
$payload->setUserInstructions("Speak in a warm, friendly tone");
$stream = $client->tts()->ttsTtsStreamPost($payload);
```

**Best for**: Fine-grained control over tone and style  
**Sample rate**: 22.05kHz

## Listing Available Voices

Discover available voices for your application:

```php
$voices = $client->voiceCloning()->listVoicesListVoicesGet();

foreach ($voices as $voice) {
    echo "ID: " . $voice->getId() . ", Name: " . $voice->getVoiceName() . "\n";
}
```

## Language Support

Camb.ai supports 140+ languages. Specify the language using the `Languages` constants:
Languages supported by each model mentioned at [MARS Models](https://docs.camb.ai/models).

```php
use Camb\Ai\Model\Languages;

// English (US)
$payload->setLanguage(Languages::EN_US);

// Spanish
$payload->setLanguage(Languages::ES_ES);

// French
$payload->setLanguage(Languages::FR_FR);
```

## Error Handling

Handle common errors gracefully:

```php
try {
    $stream = $client->tts()->ttsTtsStreamPost($payload);
} catch (Exception $e) {
    echo "Error generating speech: " . $e->getMessage() . "\n";
}
```

## Using Custom Provider

For more details check this guide [Custom Cloud Providers](https://docs.camb.ai/custom-cloud-providers)

### Baseten Deployment

Initialize the client with your custom provider implementation. [Baseten Provider Example](https://github.com/Camb-ai/cambai-php-sdk/blob/master/examples/baseten_provider_example.php)

```php
require_once 'examples/BasetenTtsProvider.php';

$basetenProvider = new BasetenTtsProvider("YOUR_BASETEN_API_KEY", "YOUR_BASETEN_URL");
$client->setTtsProvider($basetenProvider);
```

## Next Steps

| | |
| --- | --- |
| **🎙️ Voice Agents** <br> Build real-time voice agents with Pipecat <br> [Learn more](/tutorials/pipecat) | **🔗 LiveKit Integration** <br> Create voice agents with LiveKit <br> [Learn more](/tutorials/livekit) |
| **📄 API Reference** <br> Explore the full TTS API <br> [Learn more](/api-reference/endpoint/create-tts-stream) | **🔊 Voice Library** <br> Browse available voices <br> [Learn more](/api-reference/endpoint/list-voices) |

## Resources

* [GitHub: camb-ai/cambai-php-sdk](https://github.com/Camb-ai/cambai-php-sdk)
* [SDK Examples](https://github.com/Camb-ai/cambai-php-sdk/tree/master/examples)
* [API Reference](https://docs.camb.ai/api-reference/endpoint/create-tts-stream)
