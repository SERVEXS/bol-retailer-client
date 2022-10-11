# # UpdateReplenishmentRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**state** | **string** | Update the state of the replenishment to cancel the replenishment. | [optional]
**delivery_info** | [**\ServeXS\BolRetailer\v7\Model\UpdateDeliveryInfo**](UpdateDeliveryInfo.md) |  | [optional]
**number_of_load_carriers** | **int** | The number of parcels in this replenishment. Note: if you are using the bol.com pickup service, the maximum number is 20. | [optional]
**load_carriers** | [**\ServeXS\BolRetailer\v7\Model\UpdateLoadCarrier[]**](UpdateLoadCarrier.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
