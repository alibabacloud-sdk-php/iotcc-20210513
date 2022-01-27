<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IoTCC\V20210513\Models\ListDiagnoseInfoForSingleCardResponseBody;

use AlibabaCloud\Tea\Model;

class diagnoseInfo extends Model
{
    /**
     * @var int
     */
    public $beginTime;

    /**
     * @var string
     */
    public $cardIp;

    /**
     * @var string
     */
    public $destination;

    /**
     * @var int
     */
    public $diagnoseTime;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $iccid;

    /**
     * @var string
     */
    public $ioTCloudConnectorId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $taskId;
    protected $_name = [
        'beginTime'           => 'BeginTime',
        'cardIp'              => 'CardIp',
        'destination'         => 'Destination',
        'diagnoseTime'        => 'DiagnoseTime',
        'endTime'             => 'EndTime',
        'iccid'               => 'Iccid',
        'ioTCloudConnectorId' => 'IoTCloudConnectorId',
        'status'              => 'Status',
        'taskId'              => 'TaskId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->beginTime) {
            $res['BeginTime'] = $this->beginTime;
        }
        if (null !== $this->cardIp) {
            $res['CardIp'] = $this->cardIp;
        }
        if (null !== $this->destination) {
            $res['Destination'] = $this->destination;
        }
        if (null !== $this->diagnoseTime) {
            $res['DiagnoseTime'] = $this->diagnoseTime;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->iccid) {
            $res['Iccid'] = $this->iccid;
        }
        if (null !== $this->ioTCloudConnectorId) {
            $res['IoTCloudConnectorId'] = $this->ioTCloudConnectorId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return diagnoseInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BeginTime'])) {
            $model->beginTime = $map['BeginTime'];
        }
        if (isset($map['CardIp'])) {
            $model->cardIp = $map['CardIp'];
        }
        if (isset($map['Destination'])) {
            $model->destination = $map['Destination'];
        }
        if (isset($map['DiagnoseTime'])) {
            $model->diagnoseTime = $map['DiagnoseTime'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Iccid'])) {
            $model->iccid = $map['Iccid'];
        }
        if (isset($map['IoTCloudConnectorId'])) {
            $model->ioTCloudConnectorId = $map['IoTCloudConnectorId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
