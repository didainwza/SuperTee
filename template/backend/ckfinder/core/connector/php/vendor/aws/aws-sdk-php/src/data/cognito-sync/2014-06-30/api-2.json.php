<?php
// This file was auto-generated from sdk-root/src/data/cognito-sync/2014-06-30/api-2.json
return [ 'version' => '2.0', 'metadata' => [ 'apiVersion' => '2014-06-30', 'endpointPrefix' => 'cognito-sync', 'jsonVersion' => '1.1', 'serviceFullName' => 'Amazon Cognito Sync', 'signatureVersion' => 'v4', 'protocol' => 'rest-json', 'uid' => 'cognito-sync-2014-06-30', ], 'operations' => [ 'BulkPublish' => [ 'name' => 'BulkPublish', 'http' => [ 'method' => 'POST', 'requestUri' => '/identitypools/{IdentityPoolId}/bulkpublish', 'responseCode' => 200, ], 'input' => [ 'shape' => 'BulkPublishRequest', ], 'output' => [ 'shape' => 'BulkPublishResponse', ], 'errors' => [ [ 'shape' => 'NotAuthorizedException', 'error' => [ 'code' => 'NotAuthorizedError', 'httpStatusCode' => 403, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'InvalidParameterException', 'error' => [ 'code' => 'InvalidParameter', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'ResourceNotFoundException', 'error' => [ 'code' => 'ResourceNotFound', 'httpStatusCode' => 404, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'InternalErrorException', 'error' => [ 'code' => 'InternalError', 'httpStatusCode' => 500, ], 'exception' => true, 'fault' => true, ], [ 'shape' => 'DuplicateRequestException', 'error' => [ 'code' => 'DuplicateRequest', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'AlreadyStreamedException', 'error' => [ 'code' => 'AlreadyStreamed', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], ], ], 'DeleteDataset' => [ 'name' => 'DeleteDataset', 'http' => [ 'method' => 'DELETE', 'requestUri' => '/identitypools/{IdentityPoolId}/identities/{IdentityId}/datasets/{DatasetName}', 'responseCode' => 200, ], 'input' => [ 'shape' => 'DeleteDatasetRequest', ], 'output' => [ 'shape' => 'DeleteDatasetResponse', ], 'errors' => [ [ 'shape' => 'NotAuthorizedException', 'error' => [ 'code' => 'NotAuthorizedError', 'httpStatusCode' => 403, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'InvalidParameterException', 'error' => [ 'code' => 'InvalidParameter', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'ResourceNotFoundException', 'error' => [ 'code' => 'ResourceNotFound', 'httpStatusCode' => 404, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'InternalErrorException', 'error' => [ 'code' => 'InternalError', 'httpStatusCode' => 500, ], 'exception' => true, 'fault' => true, ], [ 'shape' => 'TooManyRequestsException', 'error' => [ 'code' => 'TooManyRequests', 'httpStatusCode' => 429, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'ResourceConflictException', 'error' => [ 'code' => 'ResourceConflict', 'httpStatusCode' => 409, 'senderFault' => true, ], 'exception' => true, ], ], ], 'DescribeDataset' => [ 'name' => 'DescribeDataset', 'http' => [ 'method' => 'GET', 'requestUri' => '/identitypools/{IdentityPoolId}/identities/{IdentityId}/datasets/{DatasetName}', 'responseCode' => 200, ], 'input' => [ 'shape' => 'DescribeDatasetRequest', ], 'output' => [ 'shape' => 'DescribeDatasetResponse', ], 'errors' => [ [ 'shape' => 'NotAuthorizedException', 'error' => [ 'code' => 'NotAuthorizedError', 'httpStatusCode' => 403, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'InvalidParameterException', 'error' => [ 'code' => 'InvalidParameter', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'ResourceNotFoundException', 'error' => [ 'code' => 'ResourceNotFound', 'httpStatusCode' => 404, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'InternalErrorException', 'error' => [ 'code' => 'InternalError', 'httpStatusCode' => 500, ], 'exception' => true, 'fault' => true, ], [ 'shape' => 'TooManyRequestsException', 'error' => [ 'code' => 'TooManyRequests', 'httpStatusCode' => 429, 'senderFault' => true, ], 'exception' => true, ], ], ], 'DescribeIdentityPoolUsage' => [ 'name' => 'DescribeIdentityPoolUsage', 'http' => [ 'method' => 'GET', 'requestUri' => '/identitypools/{IdentityPoolId}', 'responseCode' => 200, ], 'input' => [ 'shape' => 'DescribeIdentityPoolUsageRequest', ], 'output' => [ 'shape' => 'DescribeIdentityPoolUsageResponse', ], 'errors' => [ [ 'shape' => 'NotAuthorizedException', 'error' => [ 'code' => 'NotAuthorizedError', 'httpStatusCode' => 403, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'InvalidParameterException', 'error' => [ 'code' => 'InvalidParameter', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'ResourceNotFoundException', 'error' => [ 'code' => 'ResourceNotFound', 'httpStatusCode' => 404, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'InternalErrorException', 'error' => [ 'code' => 'InternalError', 'httpStatusCode' => 500, ], 'exception' => true, 'fault' => true, ], [ 'shape' => 'TooManyRequestsException', 'error' => [ 'code' => 'TooManyRequests', 'httpStatusCode' => 429, 'senderFault' => true, ], 'exception' => true, ], ], ], 'DescribeIdentityUsage' => [ 'name' => 'DescribeIdentityUsage', 'http' => [ 'method' => 'GET', 'requestUri' => '/identitypools/{IdentityPoolId}/identities/{IdentityId}', 'responseCode' => 200, ], 'input' => [ 'shape' => 'DescribeIdentityUsageRequest', ], 'output' => [ 'shape' => 'DescribeIdentityUsageResponse', ], 'errors' => [ [ 'shape' => 'NotAuthorizedException', 'error' => [ 'code' => 'NotAuthorizedError', 'httpStatusCode' => 403, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'InvalidParameterException', 'error' => [ 'code' => 'InvalidParameter', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'ResourceNotFoundException', 'error' => [ 'code' => 'ResourceNotFound', 'httpStatusCode' => 404, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'InternalErrorException', 'error' => [ 'code' => 'InternalError', 'httpStatusCode' => 500, ], 'exception' => true, 'fault' => true, ], [ 'shape' => 'TooManyRequestsException', 'error' => [ 'code' => 'TooManyRequests', 'httpStatusCode' => 429, 'senderFault' => true, ], 'exception' => true, ], ], ], 'GetBulkPublishDetails' => [ 'name' => 'GetBulkPublishDetails', 'http' => [ 'method' => 'POST', 'requestUri' => '/identitypools/{IdentityPoolId}/getBulkPublishDetails', 'responseCode' => 200, ], 'input' => [ 'shape' => 'GetBulkPublishDetailsRequest', ], 'output' => [ 'shape' => 'GetBulkPublishDetailsResponse', ], 'errors' => [ [ 'shape' => 'NotAuthorizedException', 'error' => [ 'code' => 'NotAuthorizedError', 'httpStatusCode' => 403, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'InvalidParameterException', 'error' => [ 'code' => 'InvalidParameter', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'ResourceNotFoundException', 'error' => [ 'code' => 'ResourceNotFound', 'httpStatusCode' => 404, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'InternalErrorException', 'error' => [ 'code' => 'InternalError', 'httpStatusCode' => 500, ], 'exception' => true, 'fault' => true, ], ], ], 'GetCognitoEvents' => [ 'name' => 'GetCognitoEvents', 'http' => [ 'method' => 'GET', 'requestUri' => '/identitypools/{IdentityPoolId}/events', 'responseCode' => 200, ], 'input' => [ 'shape' => 'GetCognitoEventsRequest', ], 'output' => [ 'shape' => 'GetCognitoEventsResponse', ], 'errors' => [ [ 'shape' => 'InvalidParameterException', 'error' => [ 'code' => 'InvalidParameter', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'ResourceNotFoundException', 'error' => [ 'code' => 'ResourceNotFound', 'httpStatusCode' => 404, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'NotAuthorizedException', 'error' => [ 'code' => 'NotAuthorizedError', 'httpStatusCode' => 403, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'InternalErrorException', 'error' => [ 'code' => 'InternalError', 'httpStatusCode' => 500, ], 'exception' => true, 'fault' => true, ], [ 'shape' => 'TooManyRequestsException', 'error' => [ 'code' => 'TooManyRequests', 'httpStatusCode' => 429, 'senderFault' => true, ], 'exception' => true, ], ], ], 'GetIdentityPoolConfiguration' => [ 'name' => 'GetIdentityPoolConfiguration', 'http' => [ 'method' => 'GET', 'requestUri' => '/identitypools/{IdentityPoolId}/configuration', 'responseCode' => 200, ], 'input' => [ 'shape' => 'GetIdentityPoolConfigurationRequest', ], 'output' => [ 'shape' => 'GetIdentityPoolConfigurationResponse', ], 'errors' => [ [ 'shape' => 'NotAuthorizedException', 'error' => [ 'code' => 'NotAuthorizedError', 'httpStatusCode' => 403, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'InvalidParameterException', 'error' => [ 'code' => 'InvalidParameter', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'ResourceNotFoundException', 'error' => [ 'code' => 'ResourceNotFound', 'httpStatusCode' => 404, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'InternalErrorException', 'error' => [ 'code' => 'InternalError', 'httpStatusCode' => 500, ], 'exception' => true, 'fault' => true, ], [ 'shape' => 'TooManyRequestsException', 'error' => [ 'code' => 'TooManyRequests', 'httpStatusCode' => 429, 'senderFault' => true, ], 'exception' => true, ], ], ], 'ListDatasets' => [ 'name' => 'ListDatasets', 'http' => [ 'method' => 'GET', 'requestUri' => '/identitypools/{IdentityPoolId}/identities/{IdentityId}/datasets', 'responseCode' => 200, ], 'input' => [ 'shape' => 'ListDatasetsRequest', ], 'output' => [ 'shape' => 'ListDatasetsResponse', ], 'errors' => [ [ 'shape' => 'NotAuthorizedException', 'error' => [ 'code' => 'NotAuthorizedError', 'httpStatusCode' => 403, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'InvalidParameterException', 'error' => [ 'code' => 'InvalidParameter', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'InternalErrorException', 'error' => [ 'code' => 'InternalError', 'httpStatusCode' => 500, ], 'exception' => true, 'fault' => true, ], [ 'shape' => 'TooManyRequestsException', 'error' => [ 'code' => 'TooManyRequests', 'httpStatusCode' => 429, 'senderFault' => true, ], 'exception' => true, ], ], ], 'ListIdentityPoolUsage' => [ 'name' => 'ListIdentityPoolUsage', 'http' => [ 'method' => 'GET', 'requestUri' => '/identitypools', 'responseCode' => 200, ], 'input' => [ 'shape' => 'ListIdentityPoolUsageRequest', ], 'output' => [ 'shape' => 'ListIdentityPoolUsageResponse', ], 'errors' => [ [ 'shape' => 'NotAuthorizedException', 'error' => [ 'code' => 'NotAuthorizedError', 'httpStatusCode' => 403, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'InvalidParameterException', 'error' => [ 'code' => 'InvalidParameter', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'InternalErrorException', 'error' => [ 'code' => 'InternalError', 'httpStatusCode' => 500, ], 'exception' => true, 'fault' => true, ], [ 'shape' => 'TooManyRequestsException', 'error' => [ 'code' => 'TooManyRequests', 'httpStatusCode' => 429, 'senderFault' => true, ], 'exception' => true, ], ], ], 'ListRecords' => [ 'name' => 'ListRecords', 'http' => [ 'method' => 'GET', 'requestUri' => '/identitypools/{IdentityPoolId}/identities/{IdentityId}/datasets/{DatasetName}/records', 'responseCode' => 200, ], 'input' => [ 'shape' => 'ListRecordsRequest', ], 'output' => [ 'shape' => 'ListRecordsResponse', ], 'errors' => [ [ 'shape' => 'InvalidParameterException', 'error' => [ 'code' => 'InvalidParameter', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'NotAuthorizedException', 'error' => [ 'code' => 'NotAuthorizedError', 'httpStatusCode' => 403, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'TooManyRequestsException', 'error' => [ 'code' => 'TooManyRequests', 'httpStatusCode' => 429, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'InternalErrorException', 'error' => [ 'code' => 'InternalError', 'httpStatusCode' => 500, ], 'exception' => true, 'fault' => true, ], ], ], 'RegisterDevice' => [ 'name' => 'RegisterDevice', 'http' => [ 'method' => 'POST', 'requestUri' => '/identitypools/{IdentityPoolId}/identity/{IdentityId}/device', 'responseCode' => 200, ], 'input' => [ 'shape' => 'RegisterDeviceRequest', ], 'output' => [ 'shape' => 'RegisterDeviceResponse', ], 'errors' => [ [ 'shape' => 'NotAuthorizedException', 'error' => [ 'code' => 'NotAuthorizedError', 'httpStatusCode' => 403, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'InvalidParameterException', 'error' => [ 'code' => 'InvalidParameter', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'ResourceNotFoundException', 'error' => [ 'code' => 'ResourceNotFound', 'httpStatusCode' => 404, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'InternalErrorException', 'error' => [ 'code' => 'InternalError', 'httpStatusCode' => 500, ], 'exception' => true, 'fault' => true, ], [ 'shape' => 'InvalidConfigurationException', 'error' => [ 'code' => 'InvalidConfiguration', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'TooManyRequestsException', 'error' => [ 'code' => 'TooManyRequests', 'httpStatusCode' => 429, 'senderFault' => true, ], 'exception' => true, ], ], ], 'SetCognitoEvents' => [ 'name' => 'SetCognitoEvents', 'http' => [ 'method' => 'POST', 'requestUri' => '/identitypools/{IdentityPoolId}/events', 'responseCode' => 200, ], 'input' => [ 'shape' => 'SetCognitoEventsRequest', ], 'errors' => [ [ 'shape' => 'InvalidParameterException', 'error' => [ 'code' => 'InvalidParameter', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'ResourceNotFoundException', 'error' => [ 'code' => 'ResourceNotFound', 'httpStatusCode' => 404, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'NotAuthorizedException', 'error' => [ 'code' => 'NotAuthorizedError', 'httpStatusCode' => 403, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'InternalErrorException', 'error' => [ 'code' => 'InternalError', 'httpStatusCode' => 500, ], 'exception' => true, 'fault' => true, ], [ 'shape' => 'TooManyRequestsException', 'error' => [ 'code' => 'TooManyRequests', 'httpStatusCode' => 429, 'senderFault' => true, ], 'exception' => true, ], ], ], 'SetIdentityPoolConfiguration' => [ 'name' => 'SetIdentityPoolConfiguration', 'http' => [ 'method' => 'POST', 'requestUri' => '/identitypools/{IdentityPoolId}/configuration', 'responseCode' => 200, ], 'input' => [ 'shape' => 'SetIdentityPoolConfigurationRequest', ], 'output' => [ 'shape' => 'SetIdentityPoolConfigurationResponse', ], 'errors' => [ [ 'shape' => 'NotAuthorizedException', 'error' => [ 'code' => 'NotAuthorizedError', 'httpStatusCode' => 403, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'InvalidParameterException', 'error' => [ 'code' => 'InvalidParameter', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'ResourceNotFoundException', 'error' => [ 'code' => 'ResourceNotFound', 'httpStatusCode' => 404, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'InternalErrorException', 'error' => [ 'code' => 'InternalError', 'httpStatusCode' => 500, ], 'exception' => true, 'fault' => true, ], [ 'shape' => 'TooManyRequestsException', 'error' => [ 'code' => 'TooManyRequests', 'httpStatusCode' => 429, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'ConcurrentModificationException', 'error' => [ 'code' => 'ConcurrentModification', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], ], ], 'SubscribeToDataset' => [ 'name' => 'SubscribeToDataset', 'http' => [ 'method' => 'POST', 'requestUri' => '/identitypools/{IdentityPoolId}/identities/{IdentityId}/datasets/{DatasetName}/subscriptions/{DeviceId}', 'responseCode' => 200, ], 'input' => [ 'shape' => 'SubscribeToDatasetRequest', ], 'output' => [ 'shape' => 'SubscribeToDatasetResponse', ], 'errors' => [ [ 'shape' => 'NotAuthorizedException', 'error' => [ 'code' => 'NotAuthorizedError', 'httpStatusCode' => 403, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => P��    P��                    ���             ?�    ���            p��     @      p��            Fault' => true, ], 'exception' => true, ], [ 'shape' => 'ResourceNotFoundException', 'error' => [ 'code' => 'ResourceNotFound', 'httpStatusCode' => 404, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'InternalErrorException', 'error' => [ 'code' => 'InternalError', 'httpStatusCode' => 500, ], 'exception' => true, 'fault' => true, ], [ 'shape' => 'InvalidConfigurationException', 'error' => [ 'code' => 'InvalidConfiguration', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'TooManyRequestsException', 'error' => [ 'code' => 'TooManyRequests', 'httpStatusCode' => 429, 'senderFault' => true, ], 'exception' => true, ], ], ], 'UnsubscribeFromDataset' => [ 'name' => 'UnsubscribeFromDataset', 'http' => [ 'method' => 'DELETE', 'requestUri' => '/identitypools/{IdentityPoolId}/identities/{IdentityId}/datasets/{DatasetName}/subscriptions/{DeviceId}', 'responseCode' => 200, ], 'input' => [ 'shape' => 'UnsubscribeFromDatasetRequest', ], 'output' => [ 'shape' => 'UnsubscribeFromDatasetResponse', ], 'errors' => [ [ 'shape' => 'NotAuthorizedException', 'error' => [ 'code' => 'NotAuthorizedError', 'httpStatusCode' => 403, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'InvalidParameterException', 'error' => [ 'code' => 'InvalidParameter', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'ResourceNotFoundException', 'error' => [ 'code' => 'ResourceNotFound', 'httpStatusCode' => 404, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'InternalErrorException', 'error' => [ 'code' => 'InternalError', 'httpStatusCode' => 500, ], 'exception' => true, 'fault' => true, ], [ 'shape' => 'InvalidConfigurationException', 'error' => [ 'code' => 'InvalidConfiguration', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'TooManyRequestsException', 'error' => [ 'code' => 'TooManyRequests', 'httpStatusCode' => 429, 'senderFault' => true, ], 'exception' => true, ], ], ], 'UpdateRecords' => [ 'name' => 'UpdateRecords', 'http' => [ 'method' => 'POST', 'requestUri' => '/identitypools/{IdentityPoolId}/identities/{IdentityId}/datasets/{DatasetName}', 'responseCode' => 200, ], 'input' => [ 'shape' => 'UpdateRecordsRequest', ], 'output' => [ 'shape' => 'UpdateRecordsResponse', ], 'errors' => [ [ 'shape' => 'InvalidParameterException', 'error' => [ 'code' => 'InvalidParameter', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'LimitExceededException', 'error' => [ 'code' => 'LimitExceeded', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'NotAuthorizedException', 'error' => [ 'code' => 'NotAuthorizedError', 'httpStatusCode' => 403, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'ResourceNotFoundException', 'error' => [ 'code' => 'ResourceNotFound', 'httpStatusCode' => 404, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'ResourceConflictException', 'error' => [ 'code' => 'ResourceConflict', 'httpStatusCode' => 409, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'InvalidLambdaFunctionOutputException', 'error' => [ 'code' => 'InvalidLambdaFunctionOutput', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'LambdaThrottledException', 'error' => [ 'code' => 'LambdaThrottled', 'httpStatusCode' => 429, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'TooManyRequestsException', 'error' => [ 'code' => 'TooManyRequests', 'httpStatusCode' => 429, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'InternalErrorException', 'error' => [ 'code' => 'InternalError', 'httpStatusCode' => 500, ], 'exception' => true, 'fault' => true, ], ], ], ], 'shapes' => [ 'AlreadyStreamedException' => [ 'type' => 'structure', 'required' => [ 'message', ], 'members' => [ 'message' => [ 'shape' => 'ExceptionMessage', ], ], 'error' => [ 'code' => 'AlreadyStreamed', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], 'ApplicationArn' => [ 'type' => 'string', 'pattern' => 'arn:aws:sns:[-0-9a-z]+:\\d+:app/[A-Z_]+/[a-zA-Z0-9_.-]+', ], 'ApplicationArnList' => [ 'type' => 'list', 'member' => [ 'shape' => 'ApplicationArn', ], ], 'AssumeRoleArn' => [ 'type' => 'string', 'min' => 20, 'max' => 2048, 'pattern' => 'arn:aws:iam::\\d+:role/.*', ], 'Boolean' => [ 'type' => 'boolean', ], 'BulkPublishRequest' => [ 'type' => 'structure', 'required' => [ 'IdentityPoolId', ], 'members' => [ 'IdentityPoolId' => [ 'shape' => 'IdentityPoolId', 'location' => 'uri', 'locationName' => 'IdentityPoolId', ], ], ], 'BulkPublishResponse' => [ 'type' => 'structure', 'members' => [ 'IdentityPoolId' => [ 'shape' => 'IdentityPoolId', ], ], ], 'BulkPublishStatus' => [ 'type' => 'string', 'enum' => [ 'NOT_STARTED', 'IN_PROGRESS', 'FAILED', 'SUCCEEDED', ], ], 'ClientContext' => [ 'type' => 'string', ], 'CognitoEventType' => [ 'type' => 'string', ], 'CognitoStreams' => [ 'type' => 'structure', 'members' => [ 'StreamName' => [ 'shape' => 'StreamName', ], 'RoleArn' => [ 'shape' => 'AssumeRoleArn', ], 'StreamingStatus' => [ 'shape' => 'StreamingStatus', ], ], ], 'ConcurrentModificationException' => [ 'type' => 'structure', 'required' => [ 'message', ], 'members' => [ 'message' => [ 'shape' => 'String', ], ], 'error' => [ 'code' => 'ConcurrentModification', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], 'Dataset' => [ 'type' => 'structure', 'members' => [ 'IdentityId' => [ 'shape' => 'IdentityId', ], 'DatasetName' => [ 'shape' => 'DatasetName', ], 'CreationDate' => [ 'shape' => 'Date', ], 'LastModifiedDate' => [ 'shape' => 'Date', ], 'LastModifiedBy' => [ 'shape' => 'String', ], 'DataStorage' => [ 'shape' => 'Long', ], 'NumRecords' => [ 'shape' => 'Long', ], ], ], 'DatasetList' => [ 'type' => 'list', 'member' => [ 'shape' => 'Dataset', ], ], 'DatasetName' => [ 'type' => 'string', 'min' => 1, 'max' => 128, 'pattern' => '[a-zA-Z0-9_.:-]+', ], 'Date' => [ 'type' => 'timestamp', ], 'DeleteDatasetRequest' => [ 'type' => 'structure', 'required' => [ 'IdentityPoolId', 'IdentityId', 'DatasetName', ], 'members' => [ 'IdentityPoolId' => [ 'shape' => 'IdentityPoolId', 'location' => 'uri', 'locationName' => 'IdentityPoolId', ], 'IdentityId' => [ 'shape' => 'IdentityId', 'location' => 'uri', 'locationName' => 'IdentityId', ], 'DatasetName' => [ 'shape' => 'DatasetName', 'location' => 'uri', 'locationName' => 'DatasetName', ], ], ], 'DeleteDatasetResponse' => [ 'type' => 'structure', 'members' => [ 'Dataset' => [ 'shape' => 'Dataset', ], ], ], 'DescribeDatasetRequest' => [ 'type' => 'structure', 'required' => [ 'IdentityPoolId', 'IdentityId', 'DatasetName', ], 'members' => [ 'IdentityPoolId' => [ 'shape' => 'IdentityPoolId', 'location' => 'uri', 'locationName' => 'IdentityPoolId', ], 'IdentityId' => [ 'shape' => 'IdentityId', 'location' => 'uri', 'locationName' => 'IdentityId', ], 'DatasetName' => [ 'shape' => 'DatasetName', 'location' => 'uri', 'locationName' => 'DatasetName', ], ], ], 'DescribeDatasetResponse' => [ 'type' => 'structure', 'members' => [ 'Dataset' => [ 'shape' => 'Dataset', ], ], ], 'DescribeIdentityPoolUsageRequest' => [ 'type' => 'structure', 'required' => [ 'IdentityPoolId', ], 'members' => [ 'IdentityPoolId' => [ 'shape' => 'IdentityPoolId', 'location' => 'uri', 'locationName' => 'IdentityPoolId', ], ], ], 'DescribeIdentityPoolUsageResponse' => [ 'type' => 'structure', 'members' => [ 'IdentityPoolUsage' => [ 'shape' => 'IdentityPoolUsage', ], ], ], 'DescribeIdentityUsageRequest' => [ 'type' => 'structure', 'required' => [ 'IdentityPoolId', 'IdentityId', ], 'members' => [ 'IdentityPoolId' => [ 'shape' => 'IdentityPoolId', 'location' => 'uri', 'locationName' => 'IdentityPoolId', ], 'IdentityId' => [ 'shape' => 'IdentityId', 'location' => 'uri', 'locationName' => 'IdentityId', ], ], ], 'DescribeIdentityUsageResponse' => [ 'type' => 'structure', 'members' => [ 'IdentityUsage' => [ 'shape' => 'IdentityUsage', ], ], ], 'DeviceId' => [ 'type' => 'string', 'min' => 1, 'max' => 256, ], 'DuplicateRequestException' => [ 'type' => 'structure', 'required' => [ 'message', ], 'members' => [ 'message' => [ 'shape' => 'ExceptionMessage', ], ], 'error' => [ 'code' => 'DuplicateRequest', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], 'Events' => [ 'type' => 'map', 'key' => [ 'shape' => 'CognitoEventType', ], 'value' => [ 'shape' => 'LambdaFunctionArn', ], 'max' => 1, ], 'ExceptionMessage' => [ 'type' => 'string', ], 'GetBulkPublishDetailsRequest' => [ 'type' => 'structure', 'required' => [ 'IdentityPoolId', ], 'members' => [ 'IdentityPoolId' => [ 'shape' => 'IdentityPoolId', 'location' => 'uri', 'locationName' => 'IdentityPoolId', ], ], ], 'GetBulkPublishDetailsResponse' => [ 'type' => 'structure', 'members' => [ 'IdentityPoolId' => [ 'shape' => 'IdentityPoolId', ], 'BulkPublishStartTime' => [ 'shape' => 'Date', ], 'BulkPublishCompleteTime' => [ 'shape' => 'Date', ], 'BulkPublishStatus' => [ 'shape' => 'BulkPublishStatus', ], 'FailureMessage' => [ 'shape' => 'String', ], ], ], 'GetCognitoEventsRequest' => [ 'type' => 'structure', 'required' => [ 'IdentityPoolId', ], 'members' => [ 'IdentityPoolId' => [ 'shape' => 'IdentityPoolId', 'location' => 'uri', 'locationName' => 'IdentityPoolId', ], ], ], 'GetCognitoEventsResponse' => [ 'type' => 'structure', 'members' => [ 'Events' => [ 'shape' => 'Events', ], ], ], 'GetIdentityPoolConfigurationRequest' => [ 'type' => 'structure', 'required' => [ 'IdentityPoolId', ], 'members' => [ 'IdentityPoolId' => [ 'shape' => 'IdentityPoolId', 'location' => 'uri', 'locationName' => 'IdentityPoolId', ], ], ], 'GetIdentityPoolConfigurationResponse' => [ 'type' => 'structure', 'members' => [ 'IdentityPoolId' => [ 'shape' => 'IdentityPoolId', ], 'PushSync' => [ 'shape' => 'PushSync', ], 'CognitoStreams' => [ 'shape' => 'CognitoStreams', ], ], ], 'IdentityId' => [ 'type' => 'string', 'min' => 1, 'max' => 55, 'pattern' => '[\\w-]+:[0-9a-f-]+', ], 'IdentityPoolId' => [ 'type' => 'string', 'min' => 1, 'max' => 55, 'pattern' => '[\\w-]+:[0-9a-f-]+', ], 'IdentityPoolUsage' => [ 'type' => 'structure', 'members' => [ 'IdentityPoolId' => [ 'shape' => 'IdentityPoolId', ], 'SyncSessionsCount' => [ 'shape' => 'Long', ], 'DataStorage' => [ 'shape' => 'Long', ], 'LastModifiedDate' => [ 'shape' => 'Date', ], ], ], 'IdentityPoolUsageList' => [ 'type' => 'list', 'member' => [ 'shape' => 'IdentityPoolUsage', ], ], 'IdentityUsage' => [ 'type' => 'structure', 'members' => [ 'IdentityId' => [ 'shape' => 'IdentityId', ], 'IdentityPoolId' => [ 'shape' => 'IdentityPoolId', ], 'LastModifiedDate' => [ 'shape' => 'Date', ], 'DatasetCount' => [ 'shape' => 'Integer', ], 'DataStorage' => [ 'shape' => 'Long', ], ], ], 'Integer' => [ 'type' => 'integer', ], 'IntegerString' => [ 'type' => 'integer', ], 'InternalErrorException' => [ 'type' => 'structure', 'required' => [ 'message', ], 'members' => [ 'message' => [ 'shape' => 'ExceptionMessage', ], ], 'error' => [ 'code' => 'InternalError', 'httpStatusCode' => 500, ], 'exception' => true, 'fault' => true, ], 'InvalidConfigurationException' => [ 'type' => 'structure', 'required' => [ 'message', ], 'members' => [ 'message' => [ 'shape' => 'ExceptionMessage', ], ], 'error' => [ 'code' => 'InvalidConfiguration', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], 'InvalidLambdaFunctionOutputException' => [ 'type' => 'structure', 'required' => [ 'message', ], 'members' => [ 'message' => [ 'shape' => 'ExceptionMessage', ], ], 'error' => [ 'code' => 'InvalidLambdaFunctionOutput', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], 'InvalidParameterException' => [ 'type' => 'structure', 'required' => [ 'message', ], 'members' => [ 'message' => [ 'shape' => 'ExceptionMessage', ], ], 'error' => [ 'code' => 'InvalidParameter', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], 'LambdaFunctionArn' => [ 'type' => 'string', ], 'LambdaThrottledException' => [ 'type' => 'structure', 'required' => [ 'message', ], 'members' => [ 'message' => [ 'shape' => 'ExceptionMessage', ], ], 'error' => [ 'code' => 'LambdaThrottled', 'httpStatusCode' => 429, 'senderFault' => true, ], 'exception' => true, ], 'LimitExceededException' => [ 'type' => 'structure', 'required' => [ 'message', ], 'members' => [ 'message' => [ 'shape' => 'ExceptionMessage', ], ], 'error' => [ 'code' => 'LimitExceeded', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], 'ListDatasetsRequest' => [ 'type' => 'structure', 'required' => [ 'IdentityId', 'IdentityPoolId', ], 'members' => [ 'IdentityPoolId' => [ 'shape' => 'IdentityPoolId', 'location' => 'uri', 'locationName' => 'IdentityPoolId', ], 'IdentityId' => [ 'shape' => 'IdentityId', 'location' => 'uri', 'locationName' => 'IdentityId', ], 'NextToken' => [ 'shape' => 'String', 'location' => 'querystring', 'locationName' => 'nextToken', ], 'MaxResults' => [ 'shape' => 'IntegerString', 'location' => 'querystring', 'locationName' => 'maxResults', ], ], ], 'ListDatasetsResponse' => [ 'type' => 'structure', 'members' => [ 'Datasets' => [ 'shape' => 'DatasetList', ], 'Count' => [ 'shape' => 'Integer', ], 'NextToken' => [ 'shape' => 'String', ], ], ], 'ListIdentityPoolUsageRequest' => [ 'type' => 'structure', 'members' => [ 'NextToken' => [ 'shape' => 'String', 'location' => 'querystring', 'locationName' => 'nextToken', ], 'MaxResults' => [ 'shape' => 'IntegerString', 'location' => 'querystring', 'locationName' => 'maxResults', ], ], ], 'ListIdentityPoolUsageResponse' => [ 'type' => 'structure', 'members' => [ 'IdentityPoolUsages' => [ 'shape' => 'IdentityPoolUsageList', ], 'MaxResults' => [ 'shape' => 'Integer', ], 'Count' => [ 'shape' => 'Integer', ], 'NextToken' => [ 'shape' => 'String', ], ], ], 'ListRecordsRequest' => [ 'type' => 'structure', 'required' => [ 'IdentityPoolId', 'IdentityId', 'DatasetName', ], 'members' => [ 'IdentityPoolId' => [ 'shape' => 'IdentityPoolId', 'location' => 'uri', 'locationName' => 'IdentityPoolId', ], 'IdentityId' => [ 'shape' => 'IdentityId', 'location' => 'uri', 'locationName' => 'IdentityId', ], 'DatasetName' => [ 'shape' => 'DatasetName', 'location' => 'uri', 'locationName' => 'DatasetName', ], 'LastSyncCount' => [ 'shape' => 'Long', 'location' => 'querystring', 'locationName' => 'lastSyncCount', ], 'NextToken' => [ 'shape' => 'String', 'location' => 'querystring', 'locationName' => 'nextToken', ], 'MaxResults' => [ 'shape' => 'IntegerString', 'location' => 'querystring', 'locationName' => 'maxResults', ], 'SyncSessionToken' => [ 'shape' => 'SyncSessionToken', 'location' => 'querystring', 'locationName' => 'syncSessionToken', ], ], ], 'ListRecordsResponse' => [ 'type' => 'structure', 'members' => [ 'Records' => [ 'shape' => 'RecordList', ], 'NextToken' => [ 'shape' => 'String', ], 'Count' => [ 'shape' => 'Integer', ], 'DatasetSyncCount' => [ 'shape' => 'Long', ], 'LastModifiedBy' => [ 'shape' => 'String', ], 'MergedDatasetNames' => [ 'shape' => 'MergedDatasetNameList', ], 'DatasetExists' => [ 'shape' => 'Boolean', ], 'DatasetDeletedAfterRequestedSyncCount' => [ 'shape' => 'Boolean', ], 'SyncSessionToken' => [ 'shape' => 'String', ], ], ], 'Long' => [ 'type' => 'long', ], 'MergedDatasetNameList' => [ 'type' => 'list', 'member' => [ 'shape' => 'String', ], ], 'NotAuthorizedException' => [ 'type' => 'structure', 'required' => [ 'message', ], 'members' => [ 'message' => [ 'shape' => 'ExceptionMessage', ], ], 'error' => [ 'code' => 'NotAuthorizedError', 'httpStatusCode' => 403, 'senderFault' => true, ], 'exception' => true, ], 'Operation' => [ 'type' => 'string', 'enum' => [ 'replace', 'remove', ], ], 'Platform' => [ 'type' => 'string', 'enum' => [ 'APNS', 'APNS_SANDBOX', 'GCM', 'ADM', ], ], 'PushSync' => [ 'type' => 'structure', 'members' => [ 'ApplicationArns' => [ 'shape' => 'ApplicationArnList', ], 'RoleArn' => [ 'shape' => 'AssumeRoleArn', ], ], ], 'PushToken' => [ 'type' => 'string', ], 'Record' => [ 'type' => 'structure', 'members' => [ 'Key' => [ 'shape' => 'RecordKey', ], 'Value' => [ 'shape' => 'RecordValue', ], 'SyncCount' => [ 'shape' => 'Long', ], 'LastModifiedDate' => [ 'shape' => 'Date', ], 'LastModifiedBy' => [ 'shape' => 'String', ], 'DeviceLastModifiedDate' => [ 'shape' => 'Date', ], ], ], 'RecordKey' => [ 'type' => 'string', 'min' => 1, 'max' => 1024, ], 'RecordList' => [ 'type' => 'list', 'member' => [ 'shape' => 'Record', ], ], 'RecordPatch' => [ 'type' => 'structure', 'required' => [ 'Op', 'Key', 'SyncCount', ], 'members' => [ 'Op' => [ 'shape' => 'Operation', ], 'Key' => [ 'shape' => 'RecordKey', ], 'Value' => [ 'shape' => 'RecordValue', ], 'SyncCount' => [ 'shape' => 'Long', ], 'DeviceLastModifiedDate' => [ 'shape' => 'Date', ], ], ], 'RecordPatchList' => [ 'type' => 'list', 'member' => [ 'shape' => 'RecordPatch', ], ], 'RecordValue' => [ 'type' => 'string', 'max' => 1048575, ], 'RegisterDeviceRequest' => [ 'type' => 'structure', 'required' => [ 'IdentityPoolId', 'IdentityId', 'Platform', 'Token', ], 'members' => [ 'IdentityPoolId' => [ 'shape' => 'IdentityPoolId', 'location' => 'uri', 'locationName' => 'IdentityPoolId', ], 'IdentityId' => [ 'shape' => 'IdentityId', 'location' => 'uri', 'locationName' => 'IdentityId', ], 'Platform' => [ 'shape' => 'Platform', ], 'Token' => [ 'shape' => 'PushToken', ], ], ], 'RegisterDeviceResponse' => [ 'type' => 'structure', 'members' => [ 'DeviceId' => [ 'shape' => 'DeviceId', ], ], ], 'ResourceConflictException' => [ 'type' => 'structure', 'required' => [ 'message', ], 'members' => [ 'message' => [ 'shape' => 'ExceptionMessage', ], ], 'error' => [ 'code' => 'ResourceConflict', 'httpStatusCode' => 409, 'senderFault' => true, ], 'exception' => true, ], 'ResourceNotFoundException' => [ 'type' => 'structure', 'required' => [ 'message', ], 'members' => [ 'message' => [ 'shape' => 'ExceptionMessage', ], ], 'error' => [ 'code' => 'ResourceNotFound', 'httpStatusCode' => 404, 'senderFault' => true, ], 'exception' => true, ], 'SetCognitoEventsRequest' => [ 'type' => 'structure', 'required' => [ 'IdentityPoolId', 'Events', ], 'members' => [ 'IdentityPoolId' => [ 'shape' => 'IdentityPoolId', 'location' => 'uri', 'locationName' => 'IdentityPoolId', ], 'Events' => [ 'shape' => 'Events', ], ], ], 'SetIdentityPoolConfigurationRequest' => [ 'type' => 'structure', 'required' => [ 'IdentityPoolId', ], 'members' => [ 'IdentityPoolId' => [ 'shape' => 'IdentityPoolId', 'location' => 'uri', 'locationName' => 'IdentityPoolId', ], 'PushSync' => [ 'shape' => 'PushSync', ], 'CognitoStreams' => [ 'shape' => 'CognitoStreams', ], ], ], 'SetIdentityPoolConfigurationResponse' => [ 'type' => 'structure', 'members' => [ 'IdentityPoolId' => [ 'shape' => 'IdentityPoolId', ], 'PushSync' => [ 'shape' => 'PushSync', ], 'CognitoStreams' => [ 'shape' => 'CognitoStreams', ], ], ], 'StreamName' => [ 'type' => 'string', 'min' => 1, 'max' => 128, ], 'StreamingStatus' => [ 'type' => 'string', 'enum' => [ 'ENABLED', 'DISABLED', ], ], 'String' => [ 'type' => 'string', ], 'SubscribeToDatasetRequest' => [ 'type' => 'structure', 'required' => [ 'IdentityPoolId', 'IdentityId', 'DatasetName', 'DeviceId', ], 'members' => [ 'IdentityPoolId' => [ 'shape' => 'IdentityPoolId', 'location' => 'uri', 'locationName' => 'IdentityPoolId', ], 'IdentityId' => [ 'shape' => 'IdentityId', 'location' => 'uri', 'locationName' => 'IdentityId', ], 'DatasetName' => [ 'shape' => 'DatasetName', 'location' => 'uri', 'locationName' => 'DatasetName', ], 'DeviceId' => [ 'shape' => 'DeviceId', 'location' => 'uri', 'locationName' => 'DeviceId', ], ], ], 'SubscribeToDatasetResponse' => [ 'type' => 'structure', 'members' => [], ], 'SyncSessionToken' => [ 'type' => 'string', ], 'TooManyRequestsException' => [ 'type' => 'structure', 'required' => [ 'message', ], 'members' => [ 'message' => [ 'shape' => 'ExceptionMessage', ], ], 'error' => [ 'code' => 'TooManyRequests', 'httpStatusCode' => 429, 'senderFault' => true, ], 'exception' => true, ], 'UnsubscribeFromDatasetRequest' => [ 'type' => 'structure', 'required' => [ 'IdentityPoolId', 'IdentityId', 'DatasetName', 'DeviceId', ], 'members' => [ 'IdentityPoolId' => [ 'shape' => 'IdentityPoolId', 'location' => 'uri', 'locationName' => 'IdentityPoolId', ], 'IdentityId' => [ 'shape' => 'IdentityId', 'location' => 'uri', 'locationName' => 'IdentityId', ], 'DatasetName' => [ 'shape' => 'DatasetName', 'location' => 'uri', 'locationName' => 'DatasetName', ], 'DeviceId' => [ 'shape' => 'DeviceId', 'location' => 'uri', 'locationName' => 'DeviceId', ], ], ], 'UnsubscribeFromDatasetResponse' => [ 'type' => 'structure', 'members' => [], ], 'UpdateRecordsRequest' => [ 'type' => 'structure', 'required' => [ 'IdentityPoolId', 'IdentityId', 'DatasetName', 'SyncSessionToken', ], 'members' => [ 'IdentityPoolId' => [ 'shape' => 'IdentityPoolId', 'location' => 'uri', 'locationName' => 'IdentityPoolId', ], 'IdentityId' => [ 'shape' => 'IdentityId', 'location' => 'uri', 'locationName' => 'IdentityId', ], 'DatasetName' => [ 'shape' => 'DatasetName', 'location' => 'uri', 'locationName' => 'DatasetName', ], 'DeviceId' => [ 'shape' => 'DeviceId', ], 'RecordPatches' => [ 'shape' => 'RecordPatchList', ], 'SyncSessionToken' => [ 'shape' => 'SyncSessionToken', ], 'ClientContext' => [ 'shape' => 'ClientContext', 'location' => 'header', 'locationName' => 'x-amz-Client-Context', ], ], ], 'UpdateRecordsResponse' => [ 'type' => 'structure', 'members' => [ 'Records' => [ 'shape' => 'RecordList', ], ], ], ],];
