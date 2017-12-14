<?php

namespace api\modules\module1\controllers;

use api\modules\module1\models\Rental;
//use \yii\web\Controller;
use \yii\rest\Controller;
//use \yii\rest\ActiveController;
use \yii\web\Response;
use \yii\filters\ContentNegotiator;
use \yii\helpers\Json;
use \yii\helpers\ArrayHelper;
use tuyakhov\jsonapi\Serializer;
use yii; 


/**
 * Country Controller API
 */
class RentalController extends Controller
//class RentalController extends ActiveController
{
    //public $modelClass = 'api\modules\parser\models\Rental';
//    public $serializer = 'tuyakhov\jsonapi\Serializer';
    
    
    public $serializer = [
        'class' => 'tuyakhov\jsonapi\Serializer',
        'pluralize' => true,  // makes {"type": "user"}, instead of {"type": "users"}
    ];
    
    
    
    public function behaviors()
    {
        return ArrayHelper::merge(parent::behaviors(), [
            'contentNegotiator' => [
                'class' => ContentNegotiator::className(),
                'formats' => [
                    'application/vnd.api+json' => Response::FORMAT_JSON,
                    'application/json' => Response::FORMAT_JSON,
                ],
            ]
        ]);
    }


    public function actionRentals()
    {
        
        //return ['aa' => 'hello world'];
        $request = Yii::$app->request;
        $city = $request->get('city');

        if ($city === null) {
            $rentals = Rental::find()->all();//findAll([1,2,3]);
            //$rental = Rental::findOne(1);
        } else {
            $rentals = Rental::find()->filterWhere(['like', 'city', $city])->all();
            //findAll(['like', 'city', $city]);
        }
        
        //print_r($rental); //return;
        //echo ($rentals);
        //print_r($rentals); //return;
        //$response = Curl::RemotePageGet(Constants::LIVEFEED_GET_SPORTS_URL.'?lng=by&country=1', 'https://1xbetua.com/');
        //$result = json_decode($response);
        
        /*
        if ($result && $result->Success) {
            $sportsData = new SportsData;
        	return $sportsData->sportsSerializer($result->Value);
        }
        */
        //echo "\n-----------------------\n";
        //$serializer = new Serializer();
        //echo Json::encode($serializer->serialize($rental));
        //echo "\n-----------------------\n";
        //$serializer = new Serializer();
        //echo Json::encode($serializer->serialize($rentals));
        //echo "\n<br>\n";
        return $rentals;
        
    }
    
}