<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IoTCC\V20210513\Models;

use AlibabaCloud\Tea\Model;

class ListGroupAuthorizationRulesRequest extends Model
{
    /**
     * @var string[]
     */
    public $authorizationRuleIds;

    /**
     * @var string[]
     */
    public $authorizationRuleName;

    /**
     * @var string[]
     */
    public $authorizationRuleStatus;

    /**
     * @var string[]
     */
    public $destination;

    /**
     * @var string[]
     */
    public $destinationPort;

    /**
     * @var string[]
     */
    public $destinationType;

    /**
     * @var string
     */
    public $ioTCloudConnectorGroupId;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string[]
     */
    public $policy;

    /**
     * @var string[]
     */
    public $protocol;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'authorizationRuleIds'     => 'AuthorizationRuleIds',
        'authorizationRuleName'    => 'AuthorizationRuleName',
        'authorizationRuleStatus'  => 'AuthorizationRuleStatus',
        'destination'              => 'Destination',
        'destinationPort'          => 'DestinationPort',
        'destinationType'          => 'DestinationType',
        'ioTCloudConnectorGroupId' => 'IoTCloudConnectorGroupId',
        'maxResults'               => 'MaxResults',
        'nextToken'                => 'NextToken',
        'policy'                   => 'Policy',
        'protocol'                 => 'Protocol',
        'regionId'                 => 'RegionId',
        'type'                     => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authorizationRuleIds) {
            $res['AuthorizationRuleIds'] = $this->authorizationRuleIds;
        }
        if (null !== $this->authorizationRuleName) {
            $res['AuthorizationRuleName'] = $this->authorizationRuleName;
        }
        if (null !== $this->authorizationRuleStatus) {
            $res['AuthorizationRuleStatus'] = $this->authorizationRuleStatus;
        }
        if (null !== $this->destination) {
            $res['Destination'] = $this->destination;
        }
        if (null !== $this->destinationPort) {
            $res['DestinationPort'] = $this->destinationPort;
        }
        if (null !== $this->destinationType) {
            $res['DestinationType'] = $this->destinationType;
        }
        if (null !== $this->ioTCloudConnectorGroupId) {
            $res['IoTCloudConnectorGroupId'] = $this->ioTCloudConnectorGroupId;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->policy) {
            $res['Policy'] = $this->policy;
        }
        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListGroupAuthorizationRulesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuthorizationRuleIds'])) {
            if (!empty($map['AuthorizationRuleIds'])) {
                $model->authorizationRuleIds = $map['AuthorizationRuleIds'];
            }
        }
        if (isset($map['AuthorizationRuleName'])) {
            if (!empty($map['AuthorizationRuleName'])) {
                $model->authorizationRuleName = $map['AuthorizationRuleName'];
            }
        }
        if (isset($map['AuthorizationRuleStatus'])) {
            if (!empty($map['AuthorizationRuleStatus'])) {
                $model->authorizationRuleStatus = $map['AuthorizationRuleStatus'];
            }
        }
        if (isset($map['Destination'])) {
            if (!empty($map['Destination'])) {
                $model->destination = $map['Destination'];
            }
        }
        if (isset($map['DestinationPort'])) {
            if (!empty($map['DestinationPort'])) {
                $model->destinationPort = $map['DestinationPort'];
            }
        }
        if (isset($map['DestinationType'])) {
            if (!empty($map['DestinationType'])) {
                $model->destinationType = $map['DestinationType'];
            }
        }
        if (isset($map['IoTCloudConnectorGroupId'])) {
            $model->ioTCloudConnectorGroupId = $map['IoTCloudConnectorGroupId'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['Policy'])) {
            if (!empty($map['Policy'])) {
                $model->policy = $map['Policy'];
            }
        }
        if (isset($map['Protocol'])) {
            if (!empty($map['Protocol'])) {
                $model->protocol = $map['Protocol'];
            }
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
