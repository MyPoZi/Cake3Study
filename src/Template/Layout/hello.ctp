<!DOCTYPE html>
<html lang="ja">
<head>
    <?=$this->HTML->charset();?>
    <title><?=$this->fetch('title')?></title>
    <?php
    echo $this->HTML->css('cake.hello');
    echo $this->HTML->script('cake.hello');
    echo $this->fetch('meta');
    echo $this->fetch('css');
    echo $this->fetch('script');
    ?>
</head>
<body>
<div id="container">
<!--    <div id="header">** Header **</div>-->
    <div id="header">
        <?=$this->element('Hello\header',['msg'=>$msg]) ?>
    </div>
    <div id="content">
        <?=$this->fetch('content') ?>
    </div>
<!--    <div id="footer">** this is test. **</div>-->
    <div id="footer">
        <?=$this->element($footer) ?>
    </div>
</div>
</body>
</html>