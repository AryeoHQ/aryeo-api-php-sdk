# # Listing

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | ID of the listing. UUID Version 4. |
**address** | [**\Aryeo\Model\Address**](Address.md) |  |
**mls_number** | **string** | The identifier for a listing on its local MLS. | [optional]
**type** | **string** | General type of the listing, primarily categorizing its use case. Examples include residential and commercial. | [optional]
**sub_type** | **string** | Further specifies the listing type. Examples include family residence and condominium. | [optional]
**status** | **string** | Local, regional, or otherwise custom status for the listing used by the parties involved in the listing transaction. While variable, these statuses are typically mapped to the listing&#39;s standard status. | [optional]
**standard_status** | **string** | The status of the listing as it reflects the state of the contract between the listing agent and seller or an agreement with a buyer, including Active, Active Under Contract, Canceled, Closed, Expired, Pending, and Withdrawn. | [optional]
**description** | **string** | Description of the selling points of the building and/or land for sale. | [optional]
**lot** | [**\Aryeo\Model\ListingLot**](ListingLot.md) |  | [optional]
**building** | [**\Aryeo\Model\ListingBuilding**](ListingBuilding.md) |  | [optional]
**price** | [**\Aryeo\Model\ListingPrice**](ListingPrice.md) |  | [optional]
**list_agent** | [**\Aryeo\Model\Group**](Group.md) |  | [optional]
**co_list_agent** | [**\Aryeo\Model\Group**](Group.md) |  | [optional]
**images** | [**\Aryeo\Model\Image[]**](Image.md) | images | [optional]
**videos** | [**\Aryeo\Model\Video[]**](Video.md) | videos | [optional]
**floor_plans** | [**\Aryeo\Model\FloorPlan[]**](FloorPlan.md) | floor_plans | [optional]
**interactive_content** | [**\Aryeo\Model\InteractiveContent[]**](InteractiveContent.md) | interactive_content | [optional]
**property_website** | [**\Aryeo\Model\PropertyWebsite**](PropertyWebsite.md) |  | [optional]
**orders** | [**\Aryeo\Model\Order[]**](Order.md) | orders | [optional]
**downloads_enabled** | **bool** | Are downloads enabled for this listing? |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
