<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Objectdet\V20191230\Models;

use AlibabaCloud\Tea\Model;

class DetectObjectElement extends Model
{
    /**
     * @description 目标高度(像素)
     *
     * @var int
     */
    public $height;

    /**
     * @description 目标置信度，范围为[0.0, 1.0]
     *
     * @var float
     */
    public $score;

    /**
     * @description 目标类型：PERSON, VEHICLE, PET
     *
     * @var string
     */
    public $type;

    /**
     * @description 目标宽度(像素)
     *
     * @var int
     */
    public $width;

    /**
     * @description 左上角x坐标(像素)
     *
     * @var int
     */
    public $x;

    /**
     * @description 左上角y坐标(像素)
     *
     * @var int
     */
    public $y;
    protected $_name = [
        'height' => 'Height',
        'score'  => 'Score',
        'type'   => 'Type',
        'width'  => 'Width',
        'x'      => 'X',
        'y'      => 'Y',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->height) {
            $res['Height'] = $this->height;
        }
        if (null !== $this->score) {
            $res['Score'] = $this->score;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->width) {
            $res['Width'] = $this->width;
        }
        if (null !== $this->x) {
            $res['X'] = $this->x;
        }
        if (null !== $this->y) {
            $res['Y'] = $this->y;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DetectObjectElement
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Height'])) {
            $model->height = $map['Height'];
        }
        if (isset($map['Score'])) {
            $model->score = $map['Score'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Width'])) {
            $model->width = $map['Width'];
        }
        if (isset($map['X'])) {
            $model->x = $map['X'];
        }
        if (isset($map['Y'])) {
            $model->y = $map['Y'];
        }

        return $model;
    }
}
