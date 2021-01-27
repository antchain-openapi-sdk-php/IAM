<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AntChain\IAM\Models;

use AlibabaCloud\Tea\Model;

class Condition extends Model {
    protected $_name = [
        'key' => 'key',
        'value' => 'value',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->key) {
            $res['key'] = $this->key;
        }
        if (null !== $this->value) {
            $res['value'] = $this->value;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return Condition
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['key'])){
            $model->key = $map['key'];
        }
        if(isset($map['value'])){
            $model->value = $map['value'];
        }
        return $model;
    }
    /**
     * @example 
     * @var string
     */
    public $key;

    /**
     * @example 
     * @var string
     */
    public $value;

}
