<!--<!DOCTYPE html>-->
<!--<html lang="ja">-->
<!--<head>-->
<!--    <meta http-equiv="Content-Type" content="text/html"; charset="UTF-8">-->
<!--    <title>Hello Page</title>-->
<!--</head>-->
<!--<body>-->
<h1>サンプル見出し</h1>
<p>フォームの送信</p>
<p>
    <?php print_r($result); ?>
</p>
<?php
echo $this->Form->create(null,['type'=>'post','url'=>['controller'=>'Hello','action'=>'index']])
?>
<?=$this->Form->text("HelloForm.text1") ?>
<?=$this->Form->submit("送信") ?>
<?=$this->Form->end(); ?>
<!--<form method="post" action="hello/sendForm">-->
<!--    <input type="text" name="text1">-->
<!--    <input type="submit" />-->
<!--</form>-->
<?php
echo $this->Form->create(null,['type'=>'post','url'=>['controller'=>'Hello','action' => 'date']]);
echo $this->Form->date('HelloForm.date');
echo $this->Form->submit("送信");
echo $this->Form->end();
?>
<br/><br/>
<form method="get" action=sendForm>
    <input type="hidden" name="check1" value="off">
    <input type="hidden" name="radio1" value="off">
    <input type="checkbox" name="check1" id="c1" />
    <label for="c1">チェック</label><br/>
    <input type="radio" name="radio1" id="r1" value="No.1" />
    <label for="r1">ラジオ1</label><br/>
    <input type="radio" name="radio1" id="r2" value="No.1" />
    <label for="r2">ラジオ2</label><br/>
    <select name="select1">
        <option value="Windows">Windows</option>
        <option value="Linux">Linux</option>
        <option value="MacOSX">MacOSX</option>
    </select>
    <input type="submit">
</form>

<br/>
<?=date('Y/m/d',time()) ?>
<!--</body>-->
<!--</html>-->