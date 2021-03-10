<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Objectdet\V20191230\Models\DetectIPCObjectResponseBody\data;

use AlibabaCloud\Tea\Model;

class elements extends Model
{
    /**
     * @var string
     */
    public $type;

    /**
     * @var float
     */
    public $score;

    /**
     * @var int[]
     */
    public $box;

    /**
     * @var float
     */
    public $targetRate;
    protected $_name = [
        'type'       => 'Type',
        'score'      => 'Score',
        'box'        => 'Box',
        'targetRate' => 'TargetRate',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->score) {
            $res['Score'] = $this->score;
        }
        if (null !== $this->box) {
            $res['Box'] = $this->box;
        }
        if (null !== $this->targetRate) {
            $res['TargetRate'] = $this->targetRate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return elements
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Score'])) {
            $model->score = $map['Score'];
        }
        if (isset($map['Box'])) {
            if (!empty($map['Box'])) {
                $model->box = $map['Box'];
            }
        }
        if (isset($map['TargetRate'])) {
            $model->targetRate = $map['TargetRate'];
        }

        return $model;
    }
}
