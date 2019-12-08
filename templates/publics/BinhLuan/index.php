<div class="section-row">
    <div class="section-title">
        <h2><?= $binhluan["total_records"]?> Bình Luận</h2>
    </div>
<?php
if (is_array($binhluan["binhluan"]) || is_object($binhluan["binhluan"])) {
    foreach ($binhluan["binhluan"] as $item) {
        ?>
    <div class="post-comments">
        <div class="media">
            <div class="media-left">
                <img class="media-object" src="./img/avatar.png" alt="">
            </div>
            <div class="media-body">
                <div class="media-heading">
                    <h4><?= $item['hoten']?></h4>
                    <span class="time"><?=$item['ngaybinhluan']?></span>
<!--                    <a href="#" class="reply">Reply</a>-->
                </div>
                <p><?= $item['noidung']?></p>
            </div>
        </div>
    </div>
        <?php
    }
}
?>
</div>
