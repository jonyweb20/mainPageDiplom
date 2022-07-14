<?php


namespace app\models;
use Yii;

/**
 * This is the model class for table "cards".
 *
 * @property int $idcard
 * @property string $article
 * @property string $brand
 * @property string $colorframe
 * @property string $colorlens
 * @property string $flex
 * @property string $formframe
 * @property string $gender
 * @property int $higthlens
 * @property int $lengthbracket
 * @property string $material
 * @property string $nameproduct
 * @property int $nosebridge
 * @property string $polarization
 * @property string $rxable
 * @property string $typeform
 * @property int $widthlens
 * @property int $curvature
 */

class Product extends \yii\db\ActiveRecord
{
    public static function tableName()
    {
        return 'cards';
    }
}