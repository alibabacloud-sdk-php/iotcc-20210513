<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IoTCC\V20210513\Models;

use AlibabaCloud\Tea\Model;

class MoveGroupAuthorizationRuleToDNSServiceRequest extends Model
{
    /**
     * @var string
     */
    public $authorizationRuleId;

    /**
     * @var string
     */
    public $clientToken;

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
    public $regionId;
    protected $_name = [
        'authorizationRuleId'      => 'AuthorizationRuleId',
        'clientToken'              => 'ClientToken',
        'dryRun'                   => 'DryRun',
        'ioTCloudConnectorGroupId' => 'IoTCloudConnectorGroupId',
        'regionId'                 => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authorizationRuleId) {
            $res['AuthorizationRuleId'] = $this->authorizationRuleId;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }
        if (null !== $this->ioTCloudConnectorGroupId) {
            $res['IoTCloudConnectorGroupId'] = $this->ioTCloudConnectorGroupId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return MoveGroupAuthorizationRuleToDNSServiceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuthorizationRuleId'])) {
            $model->authorizationRuleId = $map['AuthorizationRuleId'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }
        if (isset($map['IoTCloudConnectorGroupId'])) {
            $model->ioTCloudConnectorGroupId = $map['IoTCloudConnectorGroupId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
