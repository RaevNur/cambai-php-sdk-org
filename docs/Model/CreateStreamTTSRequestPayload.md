# # CreateStreamTTSRequestPayload

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**text** | **string** |  |
**language** | **string** |  |
**voice_id** | **int** |  |
**speech_model** | **string** |  | [optional] [default to 'auto']
**user_instructions** | **string** |  | [optional]
**enhance_named_entities_pronunciation** | **bool** |  | [optional] [default to false]
**output_configuration** | [**\Camb.ai\Model\StreamTTSOutputConfiguration**](StreamTTSOutputConfiguration.md) |  | [optional]
**voice_settings** | [**\Camb.ai\Model\StreamTTSVoiceSettings**](StreamTTSVoiceSettings.md) |  | [optional]
**inference_options** | [**\Camb.ai\Model\StreamTTSInferenceOptions**](StreamTTSInferenceOptions.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
