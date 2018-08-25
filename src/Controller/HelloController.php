<?php

namespace App\Controller;

class HelloController extends AppController{

    public function initialize(){
//        $this->name = 'Hello';
//        $this->autoRender = false;
//        $this->viewBuilder()->autoLayout(false);
        $this->viewBuilder()->layout('Hello');
        $this->set('msg','Hello/index');
        $this->set('footer','Hello/footer2');
    }

    public function index(){
        $result = "";
        if ($this->request->isPost()) {
            $result = "<pre>※送信された情報<br>";
            foreach ($this->request->data('HelloForm') as $key => $val) {
                $result .= $key . ' => ' . $val;
            }
            $result .= "</pre>";
        } else {
            $result = "※なにか書いて送信してください";
        }
        $this->set("result", $result);

//        $this->viewBuilder()->autoLayout(false);

//        $this->setAction("other"); // フォワード
//        $this->redirect("/hello/other"); // リダイレクト
//        echo "hello world!!!!!";
    }

    public function date(){

        $result = "";

        if ($this->request->isPost()){
            $result = $this->request->data['HelloForm']['date'];
        }else{
            $result = "※なにか書いて送信してください";
        }
        $this->set("result",$result);

    }


    public function other(){
        $this->viewBuilder()->autoLayout(false);
        $this->autoRender = true;
//        echo "これは、index以外の表示です。";
    }

    public function sendForm(){
//        $str = $this->request->query('text1');
        $result = "";
//        if ($str != ""){
//            $result = "you type: " . $str;
//        }else{
//            $result= "aa" .$str;
//        }
        foreach ($this->request->query as $key => $val){
            $result .= $key . "=>" . $val. " ";
        }
        $this->set("result", h($result));
    }
}