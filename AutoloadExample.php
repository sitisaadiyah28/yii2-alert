<?php

namespace sitisaadiyah28\alert;

/**
 * This is just an example.
 */
/*class AutoloadExample extends \yii\base\Widget
{
    public function run()
    {
        return "Hello!";
    }
}
*/

class Alert extends \yii\bootstrap\Widget
{
    
    public function init()
    {
        parent::init();
        if(Yii::$app->session->hasFlash('success')){
            echo '<div class="alert alert-success">';
            echo Yii::$app->session->getFlash('success');
            echo '</div>';
        }
        else if(Yii::$app->session->hasFlash('error')){
            echo '<div class="alert alert-danger">';
            echo Yii::$app->session->getFlash('error');
            echo '</div>';
        }
    }
}