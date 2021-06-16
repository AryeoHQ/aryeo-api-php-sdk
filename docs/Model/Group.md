# # Group

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | ID of the group. |
**group_type** | **string** | The type of group. |
**name** | **string** | The name of the group. |
**logo** | **string** | Group logo. | [optional]
**email** | **string** | Email. | [optional]
**phone** | **string** | Phone number. | [optional]
**website** | **string** | Website. | [optional]
**is_brokerage_or_brokerage_agent** | **bool** | Does this group represent a brokerage or an agent who belongs to a brokerage? |
**social_profiles** | [**\Aryeo\Model\SocialProfiles**](SocialProfiles.md) |  | [optional]
**agent_properties** | [**\Aryeo\Model\GroupAgentProperties**](GroupAgentProperties.md) |  | [optional]
**users** | [**\Aryeo\Model\User[]**](User.md) | users | [optional]
**default_order_form** | [**\Aryeo\Model\OrderForm**](OrderForm.md) |  | [optional]
**order_forms** | [**\Aryeo\Model\OrderForm[]**](OrderForm.md) | An array of order forms. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
