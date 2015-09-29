<div class="function-content">

<div  style="margin: 9px 0 15px;">
  <p style="margin-bottom:0;">
    <a href="<?php echo base_url('index.php/faq/add')?>" class="btn  btn-primary" style="margin-left:0;">添加</a>
    <span style="float:right; font-size:14px">
    共 <?php echo $count?> 篇
  </span>
  </p>
</div>

<table class="table table-bordered table-striped">
    <tr>
        <td width="100px">问题位置</td>
        <td width="">问题标题</td>
        <td width="500px">问题内容</td>
        <td width="">发布日期</td>
        <td width="110px">管理</td>
    </tr>
    <?php
     if(!empty($newsList)) {
        foreach ($newsList as $key => $value) {
            ?>
            <tr>
                <td><?php echo $value['place']?></td>
                <td><?php echo $value['title']?></td>
                <td><?php echo $value['content']?></td>
                <td><?php echo Date('Y-m-d',$value['create_time'])?></td>
                <td>
                  <a href="<?php echo base_url('index.php/faq/edit/').'/'.$value['id'];?>" class="btn">编辑</a>
                  <a href="javascript:" onclick="
                    if(confirm('确定删除这条信息吗？')) {
                      location.href = '<?php echo base_url('index.php/faq/del/').'/'.$value['id'];?>'
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
