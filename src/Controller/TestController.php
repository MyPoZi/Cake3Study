<?php
namespace App\Controller;

class TestController extends AppController{

// http://localhost/cake3app/test/ttest
    public function ttest(){
        $this->name = 'test';
        $this->autoRender = false;
        echo "hello world!!!!!";
    }
}
?>