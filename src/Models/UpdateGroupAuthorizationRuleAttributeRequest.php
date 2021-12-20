<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IoTCC\V20210513\Models;

use AlibabaCloud\Tea\Model;

class UpdateGroupAuthorizationRuleAttributeRequest extends Model
{
    /**
     * @var string
     */
    public $authorizationRuleDescription;

    /**
     * @var string
     */
    public $authorizationRuleId;

    /**
     * @var string
     */
    public $authorizationRuleName;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $destination;

    /**
     * @var string
     */
    public $destinationType;

    /**
     * @var bool
     */
    public $dryRun;

    /**
     * @var string
     */
    public $ioTCloudConnectorGroupId;

    /**
     * @var string
     */
    public $policy;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string[]
     */
    public $sourceCidrs;
    protected $_name = [
        'authorizationRuleDescription' => 'AuthorizationRuleDescription',
        'authorizationRuleId'          => 'AuthorizationRuleId',
        'authorizationRuleName'        => 'AuthorizationRuleName',
        'clientToken'                  => 'ClientToken',
        'destination'                  => 'Destination',
        'destinationType'              => 'DestinationType',
        'dryRun'                       => 'DryRun',
        'ioTCloudConnectorGroupId'     => 'IoTCloudConnectorGroupId',
        'policy'                       => 'Policy',
        'regionId'                     => 'RegionId',
        'sourceCidrs'                  => 'SourceCidrs',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authorizationRuleDescription) {
            $res['AuthorizationRuleDescription'] = $this->authorizationRuleDescription;
        }
        if (null !== $this->authorizationRuleId) {
            $res['AuthorizationRuleId'] = $this->authorizationRuleId;
        }
        if (null !== $this->authorizationRuleName) {
            $res['AuthorizationRuleName'] = $this->authorizationRuleName;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->destination) {
            $res['Destination'] = $this->destination;
        }
        if (null !== $this->destinationType) {
            $res['DestinationType'] = $this->destinationType;
        }
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }
        if (null !== $this->ioTCloudConnectorGroupId) {
            $res['IoTCloudConnectorGroupId'] = $this->ioTCloudConnectorGroupId;
        }
        if (null !== $this->policy) {
            $res['Policy'] = $this->policy;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->sourceCidrs) {
            $res['SourceCidrs'] = $this->sourceCidrs;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateGroupAuthorizationRuleAttributeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuthorizationRuleDescription'])) {
            $model->authorizationRuleDescription = $map['AuthorizationRuleDescription'];
        }
        if (isset($map['AuthorizationRuleId'])) {
            $model->authorizationRuleId = $map['AuthorizationRuleId'];
        }
        if (isset($map['AuthorizationRuleName'])) {
            $model->authorizationRuleName = $map['AuthorizationRuleName'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['Destination'])) {
            $model->destination = $map['Destination'];
        }
        if (isset($map['DestinationType'])) {
            $model->destinationType = $map['DestinationType'];
        }
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }
        if (isset($map['IoTCloudConnectorGroupId'])) {
            $model->ioTCloudConnectorGroupId = $map['IoTCloudConnectorGroupId'];
        }
        if (isset($map['Policy'])) {
            $model->policy = $map['Policy'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SourceCidrs'])) {
            if (!empty($map['SourceCidrs'])) {
                $model->sourceCidrs = $map['SourceCidrs'];
            }
        }

        return $model;
    }
}
