<div style="width:80%">

<div  style="margin: 9px 0 15px;">
  <p style="margin-bottom:0;">
    <a href="javascript:" class="btn disabled btn-primary" style="margin-left:0;">添加</a>
    <span style="float:right; font-size:14px">
    共 <?php echo $count?> 个城市
  </span>
  </p>
</div>

<table class="table table-bordered table-striped">
    <tr>
        <td width="">城市ID</td>
        <td width="">城市名称</td>
        <td width="110px">管理</td>
    </tr>
    <?php
     if(!empty($newsList)) {
        foreach ($newsList as $key => $value) {
            ?>
            <tr>
                <td><?php echo $value['id']?></td>
                <td><?php echo $value['name']?></td>
                <td>
                  <a href="javascript:" class="btn disabled">编辑</a>
                  <a href="javascript:" class="btn disabled">删除</a>
                </td>
            </tr>
            <?php
        }
      }
    ?>
</table>
</div>
<?php echo $page;?>
