# # CreateOfferRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ean** | **string** | The EAN number associated with this product. Note: in case an ISBN is provided, the ISBN will be replaced with the actual EAN belonging to this ISBN. |
**condition** | [**\ServeXS\BolRetailer\v7\Model\Condition**](Condition.md) |  |
**reference** | **string** | A user-defined reference that helps you identify this particular offer when receiving data from us. This element can optionally be left empty and has a maximum amount of 20 characters. | [optional]
**on_hold_by_retailer** | **bool** | Indicates whether or not you want to put this offer for sale on the bol.com website. Defaults to false. | [optional]
**unknown_product_title** | **string** | In case the item is not known to bol.com you can use this field to identify this particular product. Note: in case the product is known to bol.com, the unknown product title will not be stored. | [optional]
**pricing** | [**\ServeXS\BolRetailer\v7\Model\Pricing**](Pricing.md) |  |
**stock** | [**\ServeXS\BolRetailer\v7\Model\StockCreate**](StockCreate.md) |  |
**fulfilment** | [**\ServeXS\BolRetailer\v7\Model\Fulfilment**](Fulfilment.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
