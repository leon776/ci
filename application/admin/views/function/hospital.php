<div class="function-content">

<div  style="margin: 9px 0 15px;">
  <p style="margin-bottom:0;">
    <a href="<?php echo base_url('index.php/hospital/add')?>" class="btn  btn-primary" style="margin-left:0;">添加</a>
    <span style="float:right; font-size:14px">
    共 <?php echo $count?> 条数据
  </span>
  </p>
</div>

<table class="table table-bordered table-striped">
    <tr>
        <td width="">中文名</td>
        <td width="">英文名</td>
        <td width="">所属城市</td>
        <td width="">电话号码</td>
        <td width="">联系地址</td>
        <td width="">发布日期</td>
        <td width="110px">管理</td>
    </tr>
    <?php
     if(!empty($newsList)) {
        foreach ($newsList as $key => $value) {
            ?>
            <tr>
                <td><?php echo $value['cn_name']?></td>
                <td><?php echo $value['en_name']?></td>
                <td><?php echo $value['city']?></td>
                <td><?php echo $value['tel']?></td>
                <td><?php echo $value['addr']?></td>
                <td><?php echo Date('Y-m-d',$value['create_time'])?></td>
                <td>
                  <a href="<?php echo base_url('index.php/hospital/edit/').'/'.$value['id'];?>" class="btn">编辑</a>
                  <a href="javascript:" onclick="
                    if(confirm('确定删除这条信息吗？')) {
                      location.href = '<?php echo base_url('index.php/hospital/del/').'/'.$value['id'];?>'
                    }
                  " class="btn">删除</a>
                </td>
            </tr>
            <?php
        }
      }
    ?>
</table>
</div>
<?php echo $page;?>
