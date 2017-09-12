<?php
/**
 * 电影模版
 *
 * @package custom
 */
?>
<?php 
$categoryPosts = null;
$mid = $this->fields->mid;
$this->widget('Widget_Archive@my', 'pageSize=1000&type=category', 'mid='.$mid)->to($categoryPosts);
?>
<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>
<style>
.link-box {
    overflow: hidden;
    padding: 4.375rem 2.1875rem 2.1875rem;
    margin: -3.125rem
}

.link-box a {
    width: 33.75rem;
    background: #fff;
    float: left;
    margin: 0 0 4.375rem;
    color: #2e2e2e;
    text-decoration: none;
    box-shadow: 0 .0625rem .0625rem rgba(0,0,0,0.1);
    -webkit-box-shadow: 0 .0625rem .0625rem rgba(0,0,0,0.1);
    transform: translate3d(0,0,0);
    -webkit-transform: translate3d(0,0,0);
    -webkit-transition: .3s;
    transition: .3s;
    -webkit-user-select: none;
    -webkit-touch-callout: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    border-bottom: 0
}

.link-box a .thumb {
    font-size: 0;
    overflow: hidden;
    background-color: #fff
}

.link-box a .thumb img {
    width: 100%;
    height: auto;
    position: relative;
    -webkit-transition: .4s;
    transition: .4s;
    margin: 0;
    padding: 0
}

.link-box a .content .title h3 {
    vertical-align: middle;
    font-weight: 300;
    font-size: 1.875rem;
    line-height: 3.3125rem;
    letter-spacing: -0.09375rem;
    margin: 0;
    padding: 0;
    color: #2e2e2e;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis
}

.link-box a .content {
    text-align: center
}

.link-box a .content .title {
    padding: .625rem 0;
    width: 100%
}

@media screen and (max-width:19.875rem) {
    .link-box {
        overflow: visible;
        margin: 0;
        padding-left: .625rem;
        padding-right: .625rem
    }

    .link-box a {
        width: 100%;
        margin: 0 auto 3.75rem;
        max-width: 25rem;
        float: none;
        display: block
    }

    .link-box a .content .title h3 {
        font-size: 2.375rem;
        line-height: 5.625rem;
        letter-spacing: 0
    }
}

@media screen and (max-width:21.25rem) and (min-width:19.9375rem) {
    .link-box a {
        margin: 0 0 2rem
    }

    .link-box a .content .title h3 {
        font-size: 1.375rem;
        line-height: 1.5rem
    }
}

@media screen and (max-width:24rem) and (min-width:21.27rem) {
    .link-box a {
        margin: 0 0 2.5rem
    }

    .link-box a .content .title h3 {
        font-size: 1.625rem;
        line-height: 2.25rem
    }
}

@media screen and (max-width:28.125rem) and (min-width:24.05rem) {
    .link-box a {
        margin: 0 0 3rem
    }

    .link-box a .content .title h3 {
        font-size: 1.6875rem;
        line-height: 2.625rem
    }
}

@media screen and (max-width:44.375rem) and (min-width:19.9375rem) {
    .link-box {
        padding: 4.375rem 3.125rem 3.125rem;
        margin: -3.125rem
    }

    .link-box a {
        width: -webkit-calc(50% - 1.25rem);
        width: calc(50% - 1.25rem)
    }

    .link-box a:nth-of-type(even) {
        float: right
    }
}

@media screen and (max-width:73.125rem) and (min-width:44.4375rem) {
    .link-box a {
        width: -webkit-calc(100% / 3 - 1.875rem);
        width: calc(100% / 3 - 1.875rem);
        margin: 0 .9375rem 3.75rem
    }
}

@media screen and (min-width:73.1875rem) {
    .link-box a {
        width: -webkit-calc(100% / 3 - 1.875rem);
        width: calc(100% / 3 - 1.875rem);
        margin: 0 .9375rem 3.75rem
    }
}
</style>
<div class="link-box">
<?php
while($categoryPosts->next()){
?>
<a href="<?php $categoryPosts->permalink(); ?>" target="_blank" class="no-underline"><div class="thumb"><img width="200" height="200" src="<?php echo $categoryPosts->fields->pic;  ?>" alt="<?php  $categoryPosts->title(); ?>"></div><div class="content"><div class="title"><h3><?php  $categoryPosts->title(); ?></h3></div></div></a>
<?php } ?>
</div>
<?php $this->need('footer.php'); ?>