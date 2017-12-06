<?php

namespace api\modules\rental\controllers;

use yii\rest\ActiveController;

/**
 * Country Controller API
 */
class RentalController extends ActiveController
{
    public $modelClass = 'api\modules\rental\models\Rental';
    
    public function behaviors()
    {
        $behaviors = parent::behaviors();
        $behaviors['corsFilter' ] = [
              'class' => \yii\filters\Cors::className(),
        ];
        // В это место мы будем добавлять поведения (читай ниже)
        $behaviors['contentNegotiator'] = [
            'class' => \yii\filters\ContentNegotiator::className(),
            'formats' => [
                'application/json' => \yii\web\Response::FORMAT_JSON,
            ],
        ];
        return $behaviors;
    }
}