<?php
/**
 * 需要密码的模版
 *
 * @package custom
 */
?>
<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<div class="col-mb-12 col-8" id="main" role="main">
    <article class="post" itemscope itemtype="http://schema.org/BlogPosting">
        <h1 class="post-title" itemprop="name headline"><a itemprop="url" href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h1>
        <div class="post-content" itemprop="articleBody">
            <?php if ($_POST['p'] == $this->fields->passwd || $_SESSION['template_p'] == true){  $_SESSION['template_p'] = true; $this->content();} else { ?>
            <form class="protected" action="" method="post"><p class="word">请输入密码访问</p><p><input name="p" class="text" type="password">
            <input class="submit" type="submit" value="提交"></p></form>
            <?php } ?>
        </div>
    </article>
    <?php $this->need('comments.php'); ?>
</div><!-- end #main-->

<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>