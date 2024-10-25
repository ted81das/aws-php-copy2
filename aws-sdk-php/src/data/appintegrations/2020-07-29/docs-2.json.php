<?php
// This file was auto-generated from sdk-root/src/data/appintegrations/2020-07-29/docs-2.json
return [ 'version' => '2.0', 'service' => '<ul> <li> <p> <a href="https://docs.aws.amazon.com/connect/latest/APIReference/API_Operations_Amazon_AppIntegrations_Service.html">Amazon AppIntegrations actions</a> </p> </li> <li> <p> <a href="https://docs.aws.amazon.com/connect/latest/APIReference/API_Types_Amazon_AppIntegrations_Service.html">Amazon AppIntegrations data types</a> </p> </li> </ul> <p>The Amazon AppIntegrations service enables you to configure and reuse connections to external applications.</p> <p>For information about how you can use external applications with Amazon Connect, see the following topics in the <i>Amazon Connect Administrator Guide</i>:</p> <ul> <li> <p> <a href="https://docs.aws.amazon.com/connect/latest/adminguide/3p-apps.html">Third-party applications (3p apps) in the agent workspace</a> </p> </li> <li> <p> <a href="https://docs.aws.amazon.com/connect/latest/adminguide/amazon-q-connect.html">Use Amazon Q in Connect for generative AI–powered agent assistance in real-time</a> </p> </li> </ul>', 'operations' => [ 'CreateApplication' => '<p>Creates and persists an Application resource.</p>', 'CreateDataIntegration' => '<p>Creates and persists a DataIntegration resource.</p> <note> <p>You cannot create a DataIntegration association for a DataIntegration that has been previously associated. Use a different DataIntegration, or recreate the DataIntegration using the <code>CreateDataIntegration</code> API.</p> </note>', 'CreateDataIntegrationAssociation' => '<p>Creates and persists a DataIntegrationAssociation resource.</p>', 'CreateEventIntegration' => '<p>Creates an EventIntegration, given a specified name, description, and a reference to an Amazon EventBridge bus in your account and a partner event source that pushes events to that bus. No objects are created in the your account, only metadata that is persisted on the EventIntegration control plane.</p>', 'DeleteApplication' => '<p>Deletes the Application. Only Applications that don\'t have any Application Associations can be deleted.</p>', 'DeleteDataIntegration' => '<p>Deletes the DataIntegration. Only DataIntegrations that don\'t have any DataIntegrationAssociations can be deleted. Deleting a DataIntegration also deletes the underlying Amazon AppFlow flow and service linked role. </p> <note> <p>You cannot create a DataIntegration association for a DataIntegration that has been previously associated. Use a different DataIntegration, or recreate the DataIntegration using the <a href="https://docs.aws.amazon.com/appintegrations/latest/APIReference/API_CreateDataIntegration.html">CreateDataIntegration</a> API.</p> </note>', 'DeleteEventIntegration' => '<p>Deletes the specified existing event integration. If the event integration is associated with clients, the request is rejected.</p>', 'GetApplication' => '<p>Get an Application resource.</p>', 'GetDataIntegration' => '<p>Returns information about the DataIntegration.</p> <note> <p>You cannot create a DataIntegration association for a DataIntegration that has been previously associated. Use a different DataIntegration, or recreate the DataIntegration using the <a href="https://docs.aws.amazon.com/appintegrations/latest/APIReference/API_CreateDataIntegration.html">CreateDataIntegration</a> API.</p> </note>', 'GetEventIntegration' => '<p>Returns information about the event integration.</p>', 'ListApplicationAssociations' => '<p>Returns a paginated list of application associations for an application.</p>', 'ListApplications' => '<p>Lists applications in the account.</p>', 'ListDataIntegrationAssociations' => '<p>Returns a paginated list of DataIntegration associations in the account.</p> <note> <p>You cannot create a DataIntegration association for a DataIntegration that has been previously associated. Use a different DataIntegration, or recreate the DataIntegration using the <a href="https://docs.aws.amazon.com/appintegrations/latest/APIReference/API_CreateDataIntegration.html">CreateDataIntegration</a> API.</p> </note>', 'ListDataIntegrations' => '<p>Returns a paginated list of DataIntegrations in the account.</p> <note> <p>You cannot create a DataIntegration association for a DataIntegration that has been previously associated. Use a different DataIntegration, or recreate the DataIntegration using the <a href="https://docs.aws.amazon.com/appintegrations/latest/APIReference/API_CreateDataIntegration.html">CreateDataIntegration</a> API.</p> </note>', 'ListEventIntegrationAssociations' => '<p>Returns a paginated list of event integration associations in the account. </p>', 'ListEventIntegrations' => '<p>Returns a paginated list of event integrations in the account.</p>', 'ListTagsForResource' => '<p>Lists the tags for the specified resource.</p>', 'TagResource' => '<p>Adds the specified tags to the specified resource.</p>', 'UntagResource' => '<p>Removes the specified tags from the specified resource.</p>', 'UpdateApplication' => '<p>Updates and persists an Application resource.</p>', 'UpdateDataIntegration' => '<p>Updates the description of a DataIntegration.</p> <note> <p>You cannot create a DataIntegration association for a DataIntegration that has been previously associated. Use a different DataIntegration, or recreate the DataIntegration using the <a href="https://docs.aws.amazon.com/appintegrations/latest/APIReference/API_CreateDataIntegration.html">CreateDataIntegration</a> API.</p> </note>', 'UpdateDataIntegrationAssociation' => '<p>Updates and persists a DataIntegrationAssociation resource.</p> <note> <p> Updating a DataIntegrationAssociation with ExecutionConfiguration will rerun the on-demand job. </p> </note>', 'UpdateEventIntegration' => '<p>Updates the description of an event integration.</p>', ], 'shapes' => [ 'AccessDeniedException' => [ 'base' => '<p>You do not have sufficient access to perform this action.</p>', 'refs' => [], ], 'ApplicationApprovedOrigins' => [ 'base' => NULL, 'refs' => [ 'ExternalUrlConfig$ApprovedOrigins' => '<p>Additional URLs to allow list if different than the access URL.</p>', ], ], 'ApplicationAssociationSummary' => [ 'base' => '<p>Summary information about the Application Association.</p>', 'refs' => [ 'ApplicationAssociationsList$member' => NULL, ], ], 'ApplicationAssociationsList' => [ 'base' => NULL, 'refs' => [ 'ListApplicationAssociationsResponse$ApplicationAssociations' => '<p>List of Application Associations for the Application.</p>', ], ], 'ApplicationName' => [ 'base' => NULL, 'refs' => [ 'ApplicationSummary$Name' => '<p>The name of the application.</p>', 'CreateApplicationRequest$Name' => '<p>The name of the application.</p>', 'GetApplicationResponse$Name' => '<p>The name of the application.</p>', 'UpdateApplicationRequest$Name' => '<p>The name of the application.</p>', ], ], 'ApplicationNamespace' => [ 'base' => NULL, 'refs' => [ 'ApplicationSummary$Namespace' => '<p>The namespace of the application.</p>', 'CreateApplicationRequest$Namespace' => '<p>The namespace of the application.</p>', 'GetApplicationResponse$Namespace' => '<p>The namespace of the application.</p>', ], ], 'ApplicationSourceConfig' => [ 'base' => '<p>The configuration for where the application should be loaded from.</p>', 'refs' => [ 'CreateApplicationRequest$ApplicationSourceConfig' => '<p>The configuration for where the application should be loaded from.</p>', 'GetApplicationResponse$ApplicationSourceConfig' => '<p>The configuration for where the application should be loaded from.</p>', 'UpdateApplicationRequest$ApplicationSourceConfig' => '<p>The configuration for where the application should be loaded from.</p>', ], ], 'ApplicationSummary' => [ 'base' => '<p>Summary information about the Application.</p>', 'refs' => [ 'ApplicationsList$member' => NULL, ], ], 'ApplicationTrustedSource' => [ 'base' => NULL, 'refs' => [ 'ApplicationApprovedOrigins$member' => NULL, ], ], 'ApplicationsList' => [ 'base' => NULL, 'refs' => [ 'ListApplicationsResponse$Applications' => '<p>The Applications associated with this account.</p>', ], ], 'Arn' => [ 'base' => NULL, 'refs' => [ 'ApplicationAssociationSummary$ApplicationAssociationArn' => '<p>The Amazon Resource Name (ARN) of the Application Association.</p>', 'ApplicationAssociationSummary$ApplicationArn' => '<p>The Amazon Resource Name (ARN) of the Application.</p>', 'ApplicationSummary$Arn' => '<p>The Amazon Resource Name (ARN) of the Application.</p>', 'CreateApplicationResponse$Arn' => '<p>The Amazon Resource Name (ARN) of the Application.</p>', 'CreateDataIntegrationAssociationResponse$DataIntegrationArn' => '<p>The Amazon Resource Name (ARN) for the DataIntegration.</p>', 'CreateDataIntegrationResponse$Arn' => '<p>The Amazon Resource Name (ARN)</p>', 'CreateEventIntegrationResponse$EventIntegrationArn' => '<p>The Amazon Resource Name (ARN) of the event integration. </p>', 'DataIntegrationAssociationSummary$DataIntegrationAssociationArn' => '<p>The Amazon Resource Name (ARN) of the DataIntegration association.</p>', 'DataIntegrationAssociationSummary$DataIntegrationArn' => '<p>The Amazon Resource Name (ARN) of the DataIntegration.</p>', 'DataIntegrationSummary$Arn' => '<p>The Amazon Resource Name (ARN) of the DataIntegration.</p>', 'EventIntegration$EventIntegrationArn' => '<p>The Amazon Resource Name (ARN) of the event integration.</p>', 'EventIntegrationAssociation$EventIntegrationAssociationArn' => '<p>The Amazon Resource Name (ARN) for the event integration association.</p>', 'GetApplicationResponse$Arn' => '<p>The Amazon Resource Name (ARN) of the Application.</p>', 'GetDataIntegrationResponse$Arn' => '<p>The Amazon Resource Name (ARN) for the DataIntegration.</p>', 'GetEventIntegrationResponse$EventIntegrationArn' => '<p>The Amazon Resource Name (ARN) for the event integration.</p>', 'ListTagsForResourceRequest$resourceArn' => '<p>The Amazon Resource Name (ARN) of the resource. </p>', 'TagResourceRequest$resourceArn' => '<p>The Amazon Resource Name (ARN) of the resource.</p>', 'UntagResourceRequest$resourceArn' => '<p>The Amazon Resource Name (ARN) of the resource.</p>', ], ], 'ArnOrUUID' => [ 'base' => NULL, 'refs' => [ 'DeleteApplicationRequest$Arn' => '<p>The Amazon Resource Name (ARN) of the Application.</p>', 'GetApplicationRequest$Arn' => '<p>The Amazon Resource Name (ARN) of the Application.</p>', 'ListApplicationAssociationsRequest$ApplicationId' => '<p>A unique identifier for the Application.</p>', 'UpdateApplicationRequest$Arn' => '<p>The Amazon Resource Name (ARN) of the Application.</p>', ], ], 'ClientAssociationMetadata' => [ 'base' => NULL, 'refs' => [ 'CreateDataIntegrationAssociationRequest$ClientAssociationMetadata' => '<p>The mapping of metadata to be extracted from the data.</p>', 'EventIntegrationAssociation$ClientAssociationMetadata' => '<p>The metadata associated with the client.</p>', ], ], 'ClientId' => [ 'base' => NULL, 'refs' => [ 'ApplicationAssociationSummary$ClientId' => '<p>The identifier for the client that is associated with the Application Association.</p>', 'CreateDataIntegrationAssociationRequest$ClientId' => '<p>The identifier for the client that is associated with the DataIntegration association.</p>', 'DataIntegrationAssociationSummary$ClientId' => '<p>The identifier for the client that is associated with the DataIntegration association.</p>', 'EventIntegrationAssociation$ClientId' => '<p>The identifier for the client that is associated with the event integration.</p>', ], ], 'CreateApplicationRequest' => [ 'base' => NULL, 'refs' => [], ], 'CreateApplicationResponse' => [ 'base' => NULL, 'refs' => [], ], 'CreateDataIntegrationAssociationRequest' => [ 'base' => NULL, 'refs' => [], ], 'CreateDataIntegrationAssociationResponse' => [ 'base' => NULL, 'refs' => [], ], 'CreateDataIntegrationRequest' => [ 'base' => NULL, 'refs' => [], ], 'CreateDataIntegrationResponse' => [ 'base' => NULL, 'refs' => [], ], 'CreateEventIntegrationRequest' => [ 'base' => NULL, 'refs' => [], ], 'CreateEventIntegrationResponse' => [ 'base' => NULL, 'refs' => [], ], 'DataIntegrationAssociationSummary' => [ 'base' => '<p>Summary information about the DataIntegration association.</p>', 'refs' => [ 'DataIntegrationAssociationsList$member' => NULL, ], ], 'DataIntegrationAssociationsList' => [ 'base' => NULL, 'refs' => [ 'ListDataIntegrationAssociationsResponse$DataIntegrationAssociations' => '<p>The Amazon Resource Name (ARN) and unique ID of the DataIntegration association.</p>', ], ], 'DataIntegrationSummary' => [ 'base' => '<p>Summary information about the DataIntegration.</p>', 'refs' => [ 'DataIntegrationsList$member' => NULL, ], ], 'DataIntegrationsList' => [ 'base' => NULL, 'refs' => [ 'ListDataIntegrationsResponse$DataIntegrations' => '<p>The DataIntegrations associated with this account.</p>', ], ], 'DeleteApplicationRequest' => [ 'base' => NULL, 'refs' => [], ], 'DeleteApplicationResponse' => [ 'base' => NULL, 'refs' => [], ], 'DeleteDataIntegrationRequest' => [ 'base' => NULL, 'refs' => [], ], 'DeleteDataIntegrationResponse' => [ 'base' => NULL, 'refs' => [], ], 'DeleteEventIntegrationRequest' => [ 'base' => NULL, 'refs' => [], ], 'DeleteEventIntegrationResponse' => [ 'base' => NULL, 'refs' => [], ], 'Description' => [ 'base' => NULL, 'refs' => [ 'CreateApplicationRequest$Description' => '<p>The description of the application.</p>', 'CreateDataIntegrationRequest$Description' => '<p>A description of the DataIntegration.</p>', 'CreateDataIntegrationResponse$Description' => '<p>A description of the DataIntegration.</p>', 'CreateEventIntegrationRequest$Description' => '<p>The description of the event integration.</p>', 'EventIntegration$Description' => '<p>The event integration description.</p>', 'GetApplicationResponse$Description' => '<p>The description of the application.</p>', 'GetDataIntegrationResponse$Description' => '<p>The KMS key ARN for the DataIntegration.</p>', 'GetEventIntegrationResponse$Description' => '<p>The description of the event integration.</p>', 'Publication$Description' => '<p>The description of the publication.</p>', 'Subscription$Description' => '<p>The description of the subscription.</p>', 'UpdateApplicationRequest$Description' => '<p>The description of the application.</p>', 'UpdateDataIntegrationRequest$Description' => '<p>A description of the DataIntegration.</p>', 'UpdateEventIntegrationRequest$Description' => '<p>The description of the event integration.</p>', ], ], 'DestinationURI' => [ 'base' => NULL, 'refs' => [ 'CreateDataIntegrationAssociationRequest$DestinationURI' => '<p>The URI of the data destination.</p>', 'DataIntegrationAssociationSummary$DestinationURI' => '<p>The URI of the data destination.</p>', ], ], 'DuplicateResourceException' => [ 'base' => '<p>A resource with the specified name already exists.</p>', 'refs' => [], ], 'EventBridgeBus' => [ 'base' => NULL, 'refs' => [ 'CreateEventIntegrationRequest$EventBridgeBus' => '<p>The EventBridge bus.</p>', 'EventIntegration$EventBridgeBus' => '<p>The Amazon EventBridge bus for the event integration.</p>', 'GetEventIntegrationResponse$EventBridgeBus' => '<p>The EventBridge bus.</p>', ], ], 'EventBridgeRuleName' => [ 'base' => NULL, 'refs' => [ 'EventIntegrationAssociation$EventBridgeRuleName' => '<p>The name of the EventBridge rule.</p>', ], ], 'EventDefinitionSchema' => [ 'base' => NULL, 'refs' => [ 'Publication$Schema' => '<p>The JSON schema of the publication event.</p>', ], ], 'EventFilter' => [ 'base' => '<p>The event filter.</p>', 'refs' => [ 'CreateEventIntegrationRequest$EventFilter' => '<p>The event filter.</p>', 'EventIntegration$EventFilter' => '<p>The event integration filter.</p>', 'GetEventIntegrationResponse$EventFilter' => '<p>The event filter.</p>', ], ], 'EventIntegration' => [ 'base' => '<p>The event integration.</p>', 'refs' => [ 'EventIntegrationsList$member' => NULL, ], ], 'EventIntegrationAssociation' => [ 'base' => '<p>The event integration association.</p>', 'refs' => [ 'EventIntegrationAssociationsList$member' => NULL, ], ], 'EventIntegrationAssociationsList' => [ 'base' => NULL, 'refs' => [ 'ListEventIntegrationAssociationsResponse$EventIntegrationAssociations' => '<p>The event integration associations.</p>', ], ], 'EventIntegrationsList' => [ 'base' => NULL, 'refs' => [ 'ListEventIntegrationsResponse$EventIntegrations' => '<p>The event integrations.</p>', ], ], 'EventName' => [ 'base' => NULL, 'refs' => [ 'Publication$Event' => '<p>The name of the publication.</p>', 'Subscription$Event' => '<p>The name of the subscription.</p>', ], ], 'ExecutionConfiguration' => [ 'base' => '<p>The configuration for how the files should be pulled from the source.</p>', 'refs' => [ 'CreateDataIntegrationAssociationRequest$ExecutionConfiguration' => '<p>The configuration for how the files should be pulled from the source.</p>', 'DataIntegrationAssociationSummary$ExecutionConfiguration' => NULL, 'UpdateDataIntegrationAssociationRequest$ExecutionConfiguration' => '<p>The configuration for how the files should be pulled from the source.</p>', ], ], 'ExecutionMode' => [ 'base' => NULL, 'refs' => [ 'ExecutionConfiguration$ExecutionMode' => '<p>The mode for data import/export execution.</p>', ], ], 'ExecutionStatus' => [ 'base' => NULL, 'refs' => [ 'LastExecutionStatus$ExecutionStatus' => '<p>The job status enum string.</p>', ], ], 'ExternalUrlConfig' => [ 'base' => '<p>The external URL source for the application.</p>', 'refs' => [ 'ApplicationSourceConfig$ExternalUrlConfig' => '<p>The external URL source for the application.</p>', ], ], 'Fields' => [ 'base' => NULL, 'refs' => [ 'FieldsList$member' => NULL, ], ], 'FieldsList' => [ 'base' => NULL, 'refs' => [ 'FieldsMap$value' => NULL, ], ], 'FieldsMap' => [ 'base' => NULL, 'refs' => [ 'FileConfiguration$Filters' => '<p>Restrictions for what files should be pulled from the source.</p>', 'ObjectConfiguration$value' => NULL, ], ], 'FileConfiguration' => [ 'base' => '<p>The configuration for what files should be pulled from the source.</p>', 'refs' => [ 'CreateDataIntegrationRequest$FileConfiguration' => '<p>The configuration for what files should be pulled from the source.</p>', 'CreateDataIntegrationResponse$FileConfiguration' => '<p>The configuration for what files should be pulled from the source.</p>', 'GetDataIntegrationResponse$FileConfiguration' => '<p>The configuration for what files should be pulled from the source.</p>', ], ], 'FolderList' => [ 'base' => NULL, 'refs' => [ 'FileConfiguration$Folders' => '<p>Identifiers for the source folders to pull all files from recursively.</p>', ], ], 'GetApplicationRequest' => [ 'base' => NULL, 'refs' => [], ], 'GetApplicationResponse' => [ 'base' => NULL, 'refs' => [], ], 'GetDataIntegrationRequest' => [ 'base' => NULL, 'refs' => [], ], 'GetDataIntegrationResponse' => [ 'base' => NULL, 'refs' => [], ], 'GetEventIntegrationRequest' => [ 'base' => NULL, 'refs' => [], ], 'GetEventIntegrationResponse' => [ 'base' => NULL, 'refs' => [], ], 'IdempotencyToken' => [ 'base' => NULL, 'refs' => [ 'CreateApplicationRequest$ClientToken' => '<p>A unique, case-sensitive identifier that you provide to ensure the idempotency of the request. If not provided, the Amazon Web Services SDK populates this field. For more information about idempotency, see <a href="https://aws.amazon.com/builders-library/making-retries-safe-with-idempotent-APIs/">Making retries safe with idempotent APIs</a>.</p>', 'CreateDataIntegrationAssociationRequest$ClientToken' => '<p>A unique, case-sensitive identifier that you provide to ensure the idempotency of the request. If not provided, the Amazon Web Services SDK populates this field. For more information about idempotency, see <a href="https://aws.amazon.com/builders-library/making-retries-safe-with-idempotent-APIs/">Making retries safe with idempotent APIs</a>.</p>', 'CreateDataIntegrationRequest$ClientToken' => '<p>A unique, case-sensitive identifier that you provide to ensure the idempotency of the request. If not provided, the Amazon Web Services SDK populates this field. For more information about idempotency, see <a href="https://aws.amazon.com/builders-library/making-retries-safe-with-idempotent-APIs/">Making retries safe with idempotent APIs</a>.</p>', 'CreateDataIntegrationResponse$ClientToken' => '<p>A unique, case-sensitive identifier that you provide to ensure the idempotency of the request. If not provided, the Amazon Web Services SDK populates this field. For more information about idempotency, see <a href="https://aws.amazon.com/builders-library/making-retries-safe-with-idempotent-APIs/">Making retries safe with idempotent APIs</a>.</p>', 'CreateEventIntegrationRequest$ClientToken' => '<p>A unique, case-sensitive identifier that you provide to ensure the idempotency of the request. If not provided, the Amazon Web Services SDK populates this field. For more information about idempotency, see <a href="https://aws.amazon.com/builders-library/making-retries-safe-with-idempotent-APIs/">Making retries safe with idempotent APIs</a>.</p>', ], ], 'Identifier' => [ 'base' => NULL, 'refs' => [ 'CreateDataIntegrationAssociationRequest$DataIntegrationIdentifier' => '<p>A unique identifier for the DataIntegration.</p>', 'DeleteDataIntegrationRequest$DataIntegrationIdentifier' => '<p>A unique identifier for the DataIntegration.</p>', 'GetDataIntegrationRequest$Identifier' => '<p>A unique identifier.</p>', 'ListDataIntegrationAssociationsRequest$DataIntegrationIdentifier' => '<p>A unique identifier for the DataIntegration.</p>', 'UpdateDataIntegrationAssociationRequest$DataIntegrationIdentifier' => '<p>A unique identifier for the DataIntegration.</p>', 'UpdateDataIntegrationAssociationRequest$DataIntegrationAssociationIdentifier' => '<p>A unique identifier. of the DataIntegrationAssociation resource</p>', 'UpdateDataIntegrationRequest$Identifier' => '<p>A unique identifier for the DataIntegration.</p>', ], ], 'InternalServiceError' => [ 'base' => '<p>Request processing failed due to an error or failure with the service.</p>', 'refs' => [], ], 'InvalidRequestException' => [ 'base' => '<p>The request is not valid. </p>', 'refs' => [], ], 'LastExecutionStatus' => [ 'base' => '<p>The execution status of the last job.</p>', 'refs' => [ 'DataIntegrationAssociationSummary$LastExecutionStatus' => '<p>The execution status of the last job.</p>', ], ], 'ListApplicationAssociationsRequest' => [ 'base' => NULL, 'refs' => [], ], 'ListApplicationAssociationsResponse' => [ 'base' => NULL, 'refs' => [], ], 'ListApplicationsRequest' => [ 'base' => NULL, 'refs' => [], ], 'ListApplicationsResponse' => [ 'base' => NULL, 'refs' => [], ], 'ListDataIntegrationAssociationsRequest' => [ 'base' => NULL, 'refs' => [], ], 'ListDataIntegrationAssociationsResponse' => [ 'base' => NULL, 'refs' => [], ], 'ListDataIntegrationsRequest' => [ 'base' => NULL, 'refs' => [], ], 'ListDataIntegrationsResponse' => [ 'base' => NULL, 'refs' => [], ], 'ListEventIntegrationAssociationsRequest' => [ 'base' => NULL, 'refs' => [], ], 'ListEventIntegrationAssociationsResponse' => [ 'base' => NULL, 'refs' => [], ], 'ListEventIntegrationsRequest' => [ 'base' => NULL, 'refs' => [], ], 'ListEventIntegrationsResponse' => [ 'base' => NULL, 'refs' => [], ], 'ListTagsForResourceRequest' => [ 'base' => NULL, 'refs' => [], ], 'ListTagsForResourceResponse' => [ 'base' => NULL, 'refs' => [], ], 'MaxResults' => [ 'base' => NULL, 'refs' => [ 'ListApplicationAssociationsRequest$MaxResults' => '<p>The maximum number of results to return per page.</p>', 'ListApplicationsRequest$MaxResults' => '<p>The maximum number of results to return per page.</p>', 'ListDataIntegrationAssociationsRequest$MaxResults' => '<p>The maximum number of results to return per page.</p>', 'ListDataIntegrationsRequest$MaxResults' => '<p>The maximum number of results to return per page.</p>', 'ListEventIntegrationAssociationsRequest$MaxResults' => '<p>The maximum number of results to return per page.</p>', 'ListEventIntegrationsRequest$MaxResults' => '<p>The maximum number of results to return per page.</p>', ], ], 'Message' => [ 'base' => NULL, 'refs' => [ 'AccessDeniedException$Message' => NULL, 'DuplicateResourceException$Message' => NULL, 'InternalServiceError$Message' => NULL, 'InvalidRequestException$Message' => NULL, 'ResourceNotFoundException$Message' => NULL, 'ResourceQuotaExceededException$Message' => NULL, 'ThrottlingException$Message' => NULL, 'UnsupportedOperationException$Message' => NULL, ], ], 'Name' => [ 'base' => NULL, 'refs' => [ 'CreateDataIntegrationRequest$Name' => '<p>The name of the DataIntegration.</p>', 'CreateDataIntegrationResponse$Name' => '<p>The name of the DataIntegration.</p>', 'CreateEventIntegrationRequest$Name' => '<p>The name of the event integration.</p>', 'DataIntegrationSummary$Name' => '<p>The name of the DataIntegration.</p>', 'DeleteEventIntegrationRequest$Name' => '<p>The name of the event integration.</p>', 'EventIntegration$Name' => '<p>The name of the event integration.</p>', 'EventIntegrationAssociation$EventIntegrationName' => '<p>The name of the event integration.</p>', 'GetDataIntegrationResponse$Name' => '<p>The name of the DataIntegration.</p>', 'GetEventIntegrationRequest$Name' => '<p>The name of the event integration. </p>', 'GetEventIntegrationResponse$Name' => '<p>The name of the event integration. </p>', 'ListEventIntegrationAssociationsRequest$EventIntegrationName' => '<p>The name of the event integration. </p>', 'UpdateDataIntegrationRequest$Name' => '<p>The name of the DataIntegration.</p>', 'UpdateEventIntegrationRequest$Name' => '<p>The name of the event integration.</p>', ], ], 'NextToken' => [ 'base' => NULL, 'refs' => [ 'ListApplicationAssociationsRequest$NextToken' => '<p>The token for the next set of results. Use the value returned in the previous response in the next request to retrieve the next set of results.</p>', 'ListApplicationAssociationsResponse$NextToken' => '<p>If there are additional results, this is the token for the next set of results.</p>', 'ListApplicationsRequest$NextToken' => '<p>The token for the next set of results. Use the value returned in the previous response in the next request to retrieve the next set of results.</p>', 'ListApplicationsResponse$NextToken' => '<p>If there are additional results, this is the token for the next set of results.</p>', 'ListDataIntegrationAssociationsRequest$NextToken' => '<p>The token for the next set of results. Use the value returned in the previous response in the next request to retrieve the next set of results.</p>', 'ListDataIntegrationAssociationsResponse$NextToken' => '<p>If there are additional results, this is the token for the next set of results.</p>', 'ListDataIntegrationsRequest$NextToken' => '<p>The token for the next set of results. Use the value returned in the previous response in the next request to retrieve the next set of results.</p>', 'ListDataIntegrationsResponse$NextToken' => '<p>If there are additional results, this is the token for the next set of results.</p>', 'ListEventIntegrationAssociationsRequest$NextToken' => '<p>The token for the next set of results. Use the value returned in the previous response in the next request to retrieve the next set of results.</p>', 'ListEventIntegrationAssociationsResponse$NextToken' => '<p>If there are additional results, this is the token for the next set of results.</p>', 'ListEventIntegrationsRequest$NextToken' => '<p>The token for the next set of results. Use the value returned in the previous response in the next request to retrieve the next set of results.</p>', 'ListEventIntegrationsResponse$NextToken' => '<p>If there are additional results, this is the token for the next set of results.</p>', ], ], 'NonBlankLongString' => [ 'base' => NULL, 'refs' => [ 'FolderList$member' => NULL, ], ], 'NonBlankString' => [ 'base' => NULL, 'refs' => [ 'ClientAssociationMetadata$key' => NULL, 'ClientAssociationMetadata$value' => NULL, 'CreateDataIntegrationRequest$KmsKey' => '<p>The KMS key ARN for the DataIntegration.</p>', 'CreateDataIntegrationResponse$KmsKey' => '<p>The KMS key ARN for the DataIntegration.</p>', 'FieldsMap$key' => NULL, 'GetDataIntegrationResponse$KmsKey' => '<p>The KMS key ARN for the DataIntegration.</p>', 'LastExecutionStatus$StatusMessage' => '<p>The status message of a job.</p>', 'ObjectConfiguration$key' => NULL, 'OnDemandConfiguration$StartTime' => '<p>The start time for data pull from the source as an Unix/epoch string in milliseconds</p>', 'OnDemandConfiguration$EndTime' => '<p>The end time for data pull from the source as an Unix/epoch string in milliseconds</p>', 'ScheduleConfiguration$FirstExecutionFrom' => '<p>The start date for objects to import in the first flow run as an Unix/epoch timestamp in milliseconds or in ISO-8601 format.</p>', 'ScheduleConfiguration$ScheduleExpression' => '<p>How often the data should be pulled from data source.</p>', ], ], 'Object' => [ 'base' => NULL, 'refs' => [ 'ScheduleConfiguration$Object' => '<p>The name of the object to pull from the data source.</p>', ], ], 'ObjectConfiguration' => [ 'base' => '<p>The configuration for what data should be pulled from the source.</p>', 'refs' => [ 'CreateDataIntegrationAssociationRequest$ObjectConfiguration' => NULL, 'CreateDataIntegrationRequest$ObjectConfiguration' => '<p>The configuration for what data should be pulled from the source.</p>', 'CreateDataIntegrationResponse$ObjectConfiguration' => '<p>The configuration for what data should be pulled from the source.</p>', 'GetDataIntegrationResponse$ObjectConfiguration' => '<p>The configuration for what data should be pulled from the source.</p>', ], ], 'OnDemandConfiguration' => [ 'base' => '<p>The start and end time for data pull from the source.</p>', 'refs' => [ 'ExecutionConfiguration$OnDemandConfiguration' => NULL, ], ], 'Permission' => [ 'base' => '<p>The permission of an event or request that the application has access to.</p>', 'refs' => [ 'PermissionList$member' => NULL, ], ], 'PermissionList' => [ 'base' => NULL, 'refs' => [ 'CreateApplicationRequest$Permissions' => '<p>The configuration of events or requests that the application has access to.</p>', 'GetApplicationResponse$Permissions' => '<p>The configuration of events or requests that the application has access to.</p>', 'UpdateApplicationRequest$Permissions' => '<p>The configuration of events or requests that the application has access to.</p>', ], ], 'Publication' => [ 'base' => '<p>The configuration of an event that the application publishes.</p>', 'refs' => [ 'PublicationList$member' => NULL, ], ], 'PublicationList' => [ 'base' => NULL, 'refs' => [ 'CreateApplicationRequest$Publications' => '<p>The events that the application publishes.</p>', 'GetApplicationResponse$Publications' => '<p>The events that the application publishes.</p>', 'UpdateApplicationRequest$Publications' => '<p>The events that the application publishes.</p>', ], ], 'ResourceNotFoundException' => [ 'base' => '<p>The specified resource was not found.</p>', 'refs' => [], ], 'ResourceQuotaExceededException' => [ 'base' => '<p>The allowed quota for the resource has been exceeded.</p>', 'refs' => [], ], 'ScheduleConfiguration' => [ 'base' => '<p>The name of the data and how often it should be pulled from the source.</p>', 'refs' => [ 'CreateDataIntegrationRequest$ScheduleConfig' => '<p>The name of the data and how often it should be pulled from the source.</p>', 'CreateDataIntegrationResponse$ScheduleConfiguration' => '<p>The name of the data and how often it should be pulled from the source.</p>', 'ExecutionConfiguration$ScheduleConfiguration' => NULL, 'GetDataIntegrationResponse$ScheduleConfiguration' => '<p>The name of the data and how often it should be pulled from the source.</p>', ], ], 'Source' => [ 'base' => NULL, 'refs' => [ 'EventFilter$Source' => '<p>The source of the events.</p>', ], ], 'SourceURI' => [ 'base' => NULL, 'refs' => [ 'CreateDataIntegrationRequest$SourceURI' => '<p>The URI of the data source.</p>', 'CreateDataIntegrationResponse$SourceURI' => '<p>The URI of the data source.</p>', 'DataIntegrationSummary$SourceURI' => '<p>The URI of the data source.</p>', 'GetDataIntegrationResponse$SourceURI' => '<p>The URI of the data source.</p>', ], ], 'Subscription' => [ 'base' => '<p>The configuration of an event that the application subscribes.</p>', 'refs' => [ 'SubscriptionList$member' => NULL, ], ], 'SubscriptionList' => [ 'base' => NULL, 'refs' => [ 'CreateApplicationRequest$Subscriptions' => '<p>The events that the application subscribes.</p>', 'GetApplicationResponse$Subscriptions' => '<p>The events that the application subscribes.</p>', 'UpdateApplicationRequest$Subscriptions' => '<p>The events that the application subscribes.</p>', ], ], 'TagKey' => [ 'base' => NULL, 'refs' => [ 'TagKeyList$member' => NULL, 'TagMap$key' => NULL, ], ], 'TagKeyList' => [ 'base' => NULL, 'refs' => [ 'UntagResourceRequest$tagKeys' => '<p>The tag keys.</p>', ], ], 'TagMap' => [ 'base' => NULL, 'refs' => [ 'CreateApplicationRequest$Tags' => '<p>The tags used to organize, track, or control access for this resource. For example, { "tags": {"key1":"value1", "key2":"value2"} }.</p>', 'CreateDataIntegrationRequest$Tags' => '<p>The tags used to organize, track, or control access for this resource. For example, { "tags": {"key1":"value1", "key2":"value2"} }.</p>', 'CreateDataIntegrationResponse$Tags' => '<p>The tags used to organize, track, or control access for this resource. For example, { "tags": {"key1":"value1", "key2":"value2"} }.</p>', 'CreateEventIntegrationRequest$Tags' => '<p>The tags used to organize, track, or control access for this resource. For example, { "tags": {"key1":"value1", "key2":"value2"} }.</p>', 'EventIntegration$Tags' => '<p>The tags used to organize, track, or control access for this resource. For example, { "tags": {"key1":"value1", "key2":"value2"} }.</p>', 'GetApplicationResponse$Tags' => '<p>The tags used to organize, track, or control access for this resource. For example, { "tags": {"key1":"value1", "key2":"value2"} }.</p>', 'GetDataIntegrationResponse$Tags' => '<p>The tags used to organize, track, or control access for this resource. For example, { "tags": {"key1":"value1", "key2":"value2"} }.</p>', 'GetEventIntegrationResponse$Tags' => '<p>The tags used to organize, track, or control access for this resource. For example, { "tags": {"key1":"value1", "key2":"value2"} }.</p>', 'ListTagsForResourceResponse$tags' => '<p>Information about the tags.</p>', 'TagResourceRequest$tags' => '<p>The tags used to organize, track, or control access for this resource. For example, { "tags": {"key1":"value1", "key2":"value2"} }.</p>', ], ], 'TagResourceRequest' => [ 'base' => NULL, 'refs' => [], ], 'TagResourceResponse' => [ 'base' => NULL, 'refs' => [], ], 'TagValue' => [ 'base' => NULL, 'refs' => [ 'TagMap$value' => NULL, ], ], 'ThrottlingException' => [ 'base' => '<p>The throttling limit has been exceeded.</p>', 'refs' => [], ], 'Timestamp' => [ 'base' => NULL, 'refs' => [ 'ApplicationSummary$CreatedTime' => '<p>The time when the application was created.</p>', 'ApplicationSummary$LastModifiedTime' => '<p>The time when the application was last modified.</p>', 'GetApplicationResponse$CreatedTime' => '<p>The created time of the Application.</p>', 'GetApplicationResponse$LastModifiedTime' => '<p>The last modified time of the Application.</p>', ], ], 'URL' => [ 'base' => NULL, 'refs' => [ 'ExternalUrlConfig$AccessUrl' => '<p>The URL to access the application.</p>', ], ], 'UUID' => [ 'base' => NULL, 'refs' => [ 'ApplicationSummary$Id' => '<p>A unique identifier for the Application.</p>', 'CreateApplicationResponse$Id' => '<p>A unique identifier for the Application.</p>', 'CreateDataIntegrationAssociationResponse$DataIntegrationAssociationId' => '<p>A unique identifier. for the DataIntegrationAssociation.</p>', 'CreateDataIntegrationResponse$Id' => '<p>A unique identifier.</p>', 'EventIntegrationAssociation$EventIntegrationAssociationId' => '<p>The identifier for the event integration association.</p>', 'GetApplicationResponse$Id' => '<p>A unique identifier for the Application.</p>', 'GetDataIntegrationResponse$Id' => '<p>A unique identifier.</p>', ], ], 'UnsupportedOperationException' => [ 'base' => '<p>The operation is not supported.</p>', 'refs' => [], ], 'UntagResourceRequest' => [ 'base' => NULL, 'refs' => [], ], 'UntagResourceResponse' => [ 'base' => NULL, 'refs' => [], ], 'UpdateApplicationRequest' => [ 'base' => NULL, 'refs' => [], ], 'UpdateApplicationResponse' => [ 'base' => NULL, 'refs' => [], ], 'UpdateDataIntegrationAssociationRequest' => [ 'base' => NULL, 'refs' => [], ], 'UpdateDataIntegrationAssociationResponse' => [ 'base' => NULL, 'refs' => [], ], 'UpdateDataIntegrationRequest' => [ 'base' => NULL, 'refs' => [], ], 'UpdateDataIntegrationResponse' => [ 'base' => NULL, 'refs' => [], ], 'UpdateEventIntegrationRequest' => [ 'base' => NULL, 'refs' => [], ], 'UpdateEventIntegrationResponse' => [ 'base' => NULL, 'refs' => [], ], ],];