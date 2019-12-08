<?php
while($dong = mysqli_fetch_array($tincapnhat)) {
    ?>
    <div class="post post-widget">
        <a class="post-img" href="<?= 'index.php?ctl=Tin&act=chitiet&idbaiviet='.$dong['idbaiviet'].'&id='.$dong['idloaitin']?>"><img src="<?= $dong['anhminhhoa']?>" alt=""></a>
        <div class="post-body">
            <h3 class="post-title"><a href="<?= 'index.php?ctl=Tin&act=chitiet&idbaiviet='.$dong['idbaiviet'].'&id='.$dong['idloaitin']?>"><?= $dong['tenbaiviet']?></a></h3>
        </div>
    </div>
    <?php
}
?>