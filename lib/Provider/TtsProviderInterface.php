<?php

namespace Camb\Ai\Provider;

use Camb\Ai\Model\CreateTTSRequestPayload;

interface TtsProviderInterface
{
    /**
     * @param CreateTTSRequestPayload $payload
     * @param int|null $run_id
     * @return \Camb.ai\Model\CreateTTSOut
     */
    public function createTts($payload, $run_id = null);
}
