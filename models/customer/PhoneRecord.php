<?php
/**
 * Created by PhpStorm.
 * User: 윤수
 * Date: 2015-02-26
 * Time: 오전 3:15
 */

namespace app\models\customer;

use yii\db\ActiveRecord;

class PhoneRecord extends ActiveRecord
{
    public static function tableName()
    {
        return 'phone';
    }

    public function rules()
    {
        return [
            [['customer_id', 'number'], 'required'],
            ['customer_id', 'number'],
            ['number', 'string'],
        ];
    }

}