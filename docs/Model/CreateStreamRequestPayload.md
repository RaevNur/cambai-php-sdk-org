# # CreateStreamRequestPayload

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** |  | [optional]
**description** | **string** |  | [optional]
**initial_delay** | **int** | The initial delay in seconds before starting the stream creation process. | [optional] [default to 120]
**timeout_in_mins** | **int** |  | [optional]
**voices** | **int[]** | List of voice identifiers to be used in the stream. |
**dictionaries** | **int[]** | List of dictionary identifiers to be used in the stream. |
**config** | [**\Camb.ai\Model\ConfigStream**](ConfigStream.md) | The shared configuration for the streaming pipeline. |
**source_stream** | [**\Camb.ai\Model\SourceStream**](SourceStream.md) | The source stream configuration details. |
**target_streams** | [**\Camb.ai\Model\TargetStream[]**](TargetStream.md) | List of target stream configurations. |
**start_time** | **\DateTime** |  | [optional]
**end_time** | **\DateTime** |  | [optional]
**timezone** | **string** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
