<h1>Databaseサンプル</h1>
<table>
    <thead>
    <tr>
        <th>ID</th>
        <th>NAME</th>
        <th>TITLE</th>
        <th>CONTENT</th>
    </tr>
    </thead>

    <?php
    $arr = $data->toArray();
    for ($i = 0; $i < count($arr); $i++){
        echo $this->Html->tableCells(
        $arr[$i]->toArray(),
        ['style'=>'background-color:#f0f0f0'],
        ['style'=>'font-weight:bold'],
        true);
    }
    ?>
<!--    <tbody>-->
<!--    --><?php //foreach ($data as $obj): ?>
<!--        <tr>-->
<!--            <td>--><?php //echo $obj->id ?><!--</td>-->
<!--            <td>--><?php //echo h($obj->name) ?><!--</td>-->
<!--            <td>--><?php //echo h($obj->title) ?><!--</td>-->
<!--            <td>--><?php //echo h($obj->content) ?><!--</td>-->
<!--        </tr>-->
<!--    --><?php //endforeach; ?>
<!--    </tbody>-->
</table>

