<?php

namespace Camb.ai;

use Camb.ai\Api\TextToSpeechApi;
use Camb.ai\Api\TextToVoiceApi;
use Camb.ai\Api\TextToSoundApi;
use Camb.ai\Api\DubApi;
use Camb.ai\Configuration;
use Camb.ai\Provider\TtsProviderInterface;
use Camb.ai\Provider\DefaultTtsProvider;

class CambAIClient
{
    private $config;
    private $textToSpeechApi;
    private $textToVoiceApi;
    private $textToAudioApi;
    private $dubApi;
    
    private $ttsProvider;

    public function __construct(string $apiKey)
    {
        $this->config = Configuration::getDefaultConfiguration()->setApiKey('x-api-key', $apiKey);
    }

    public function setTtsProvider(TtsProviderInterface $provider)
    {
        $this->ttsProvider = $provider;
    }

    public function tts()
    {
        if ($this->ttsProvider) {
            return $this->ttsProvider;
        }
        return new DefaultTtsProvider($this->getTextToSpeechApi());
    }

    public function getTextToSpeechApi()
    {
        if (!$this->textToSpeechApi) {
            $this->textToSpeechApi = new TextToSpeechApi(null, $this->config);
        }
        return $this->textToSpeechApi;
    }

    public function getTextToVoiceApi()
    {
        if (!$this->textToVoiceApi) {
            $this->textToVoiceApi = new TextToVoiceApi(null, $this->config);
        }
        return $this->textToVoiceApi;
    }

    public function getTextToAudioApi()
    {
         if (!$this->textToAudioApi) {
            $this->textToAudioApi = new TextToSoundApi(null, $this->config);
        }
        return $this->textToAudioApi;
    }

    public function getDubApi()
    {
        if (!$this->dubApi) {
            $this->dubApi = new DubApi(null, $this->config);
        }
        return $this->dubApi;
    }
}
