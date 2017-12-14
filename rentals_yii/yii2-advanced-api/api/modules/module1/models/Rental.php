<?php 

namespace api\modules\module1\models;

use \yii\db\ActiveRecord;
use tuyakhov\jsonapi\ResourceTrait;
use tuyakhov\jsonapi\ResourceInterface;

/**
 * Rentals Model
 */
class Rental extends ActiveRecord  implements ResourceInterface
{
    use ResourceTrait;
    
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
    //public static function primaryKey()
    //{
    //    return ['id'];
    //}

    /**
     * Define rules for validation
     */
    //public function rules()
    //{
    //    return [
    //        [['id'], 'required']
    //    ];
    //}
}