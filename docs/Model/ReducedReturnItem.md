# # ReducedReturnItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**rma_id** | **string** | The RMA (Return Merchandise Authorization) identifier of the return. |
**order_id** | **string** | The id of the customer order this return item is in. |
**ean** | **string** | The EAN number associated with this product. |
**expected_quantity** | **int** | The quantity that is expected to be returned by the customer. Note: this can be greater than 1 in case the customer ordered a quantity greater than 1 of the same product in the same customer order. |
**return_reason** | [**\ServeXS\BolRetailer\v7\Model\ReturnReason**](ReturnReason.md) |  | [optional]
**handled** | **bool** | Indicates if this return item has been handled (by the retailer). | [optional]
**processing_results** | [**\ServeXS\BolRetailer\v7\Model\ReturnProcessingResult[]**](ReturnProcessingResult.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
