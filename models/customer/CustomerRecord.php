<?php
/**
 * Created by PhpStorm.
 * User: 윤수
 * Date: 2015-02-26
 * Time: 오전 3:15
 */

namespace app\models\customer;

use yii\db\ActiveRecord;

class CustomerRecord extends ActiveRecord
{
    public static function tableName()
    {
        return 'customer';
    }

    public function rules()
    {
        return [
            ['name', 'required'],
            ['id', 'number'],
            ['name', 'string', 'max' => '256'],
            ['birth_date', 'date', 'format'=>'Y-m-d'],
            ['notes', 'safe']
        ];
    }


}