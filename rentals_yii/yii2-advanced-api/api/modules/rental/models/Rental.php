<?php 

namespace api\modules\rental\models;

use \yii\db\ActiveRecord;
/**
 * Rentals Model
 */
class Rental extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'rentals';
    }

    /**
     * @inheritdoc
     */
    public static function primaryKey()
    {
        return ['id'];
    }

    /**
     * Define rules for validation
     */
    public function rules()
    {
        return [
            [['id'], 'required']
        ];
    }
}