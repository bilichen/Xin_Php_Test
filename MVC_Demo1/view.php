<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title>PHP模版</title>
    <style type="text/css">
        table,th,td{
            border: 1px solid gray;
        }
        table{
            width: 500px;
            margin: auto;
        }
    </style>
</head>
<body>
<table>
    <tr>
        <th>用户名</th>
        <th>编号</th>
        <th>密码</th>
        <th>修改</th>
        <th>删除</th>
    </tr>
    <?php foreach($row as $item):?>
    <tr>
        <td><?php echo $item['id']?></td>
        <td><?php echo $item['username']?></td>
        <td><?php echo $item['pwd']?></td>
        <td><button value="修改">修改</button></td>
        <td><button value="删除" onclick="location.href='index.php?c=User&a=del&id=<?php echo $item['id']?>'">删除</button></td>
    </tr>
    <?php endforeach;?>

</table>


</body>
</html>