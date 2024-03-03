<?php

namespace tests\unit\models;

use Yii;
use app\models\SignupForm;

class SignupFormTest extends \Codeception\Test\Unit
{
    
    public function testRules()
    {
        $model = new SignupForm();

        // Test valid data
        $model->username = 'dev01';
        $model->email = 'dev01@example.com';
        $model->password = '123456';
        $this->assertTrue($model->validate());

    }
}
?>