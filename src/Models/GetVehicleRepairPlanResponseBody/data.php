<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Objectdet\V20191230\Models\GetVehicleRepairPlanResponseBody;

use AlibabaCloud\SDK\Objectdet\V20191230\Models\GetVehicleRepairPlanResponseBody\data\repairParts;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $frameNo;

    /**
     * @var repairParts[]
     */
    public $repairParts;
    protected $_name = [
        'frameNo'     => 'FrameNo',
        'repairParts' => 'RepairParts',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->frameNo) {
            $res['FrameNo'] = $this->frameNo;
        }
        if (null !== $this->repairParts) {
            $res['RepairParts'] = [];
            if (null !== $this->repairParts && \is_array($this->repairParts)) {
                $n = 0;
                foreach ($this->repairParts as $item) {
                    $res['RepairParts'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FrameNo'])) {
            $model->frameNo = $map['FrameNo'];
        }
        if (isset($map['RepairParts'])) {
            if (!empty($map['RepairParts'])) {
                $model->repairParts = [];
                $n                  = 0;
                foreach ($map['RepairParts'] as $item) {
                    $model->repairParts[$n++] = null !== $item ? repairParts::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
