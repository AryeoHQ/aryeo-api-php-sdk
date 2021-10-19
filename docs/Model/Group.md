# # Group

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**object** | **string** | String representing the object’s type. Objects of the same type share the same schema. | [optional]
**id** | **string** | ID of the group. UUID Version 4. |
**type** | **string** | The type of the group. Can be CREATOR, AGENT, or BROKERAGE, and may dictate the attributes of the group returned. |
**name** | **string** | The name of the group. |
**email** | **string** | The email address of a group. | [optional]
**phone** | **string** | A phone number represented in whichever standards specified by the group, typically ###-###-#### (separated by hyphens). | [optional]
**website_url** | **string** | The website URL of a group. | [optional]
**logo_url** | **string** | The logo URL of a group. | [optional]
**avatar_url** | **string** | The profile image URL of a real estate agent. Only returned if group&#39;s type is AGENT. | [optional]
**office_name** | **string** | The name of the brokerage or team of a real estate agent. Only returned if group&#39;s type is AGENT. | [optional]
**license_number** | **string** | The license number of a real estate agent. Only returned if group&#39;s type is AGENT. | [optional]
**social_profiles** | [**\Aryeo\Model\SocialProfiles**](SocialProfiles.md) |  | [optional]
**default_order_form** | [**\Aryeo\Model\OrderForm**](OrderForm.md) |  | [optional]
**order_forms** | [**\Aryeo\Model\OrderForm[]**](OrderForm.md) | An array of order forms a vendor group provides for placing orders. Only returned if group&#39;s type is CREATOR. | [optional]
**owner** | [**\Aryeo\Model\User**](User.md) |  | [optional]
**users** | [**\Aryeo\Model\User[]**](User.md) | The Aryeo users associated with this group. | [optional]
**is_brokerage_or_brokerage_agent** | **bool** | Does this group represent a brokerage or an agent who belongs to a brokerage? |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
