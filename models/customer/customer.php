<?php
/**
 * Created by PhpStorm.
 * User: 윤수
 * Date: 2015-02-26
 * Time: 오전 2:21
 */

namespace app\models\customer;

use yii\db\ActiveRecord;

class Customer extends ActiveRecord
{
    public $name;
    public $birth_date;
    public $notes = '';
    public $phones = [];

    public function __construct($name, $birth_date)
    {
        $this->name = $name;
        $this->birth_date = $name;
    }

}