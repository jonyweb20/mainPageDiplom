<?php 

namespace app\models;
use yii\db\ActiveRecord;

class Cards extends ActiveRecord
{
    public static function tableName()
    {
        return 'cards';
    }
}
?>