<?php
/**
 * 恋爱时间线模版
 *
 * @package custom
 */
?>
<?php 
$categoryPosts = null;
$this->widget('Widget_Archive@love', 'pageSize=100&type=category', 'mid=1')->to($categoryPosts);
$t1=strtotime (date("y-m-d h:i:s"));
$t2=strtotime ("2017-7-15 00:00:00");
$loveDays=ceil(($t1-$t2)/86400)-1;
?>
<div class="header-bg"></div>
<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>
<link rel="mask-icon" type="" href="//production-assets.codepen.io/assets/favicon/logo-pin-f2d2b6d2c61838f7e76325261b7195c27224080bc099486ddd6dccb469b8e8e6.svg" color="#111" />
<link rel='stylesheet prefetch' href='https://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css'>
<style class="cp-pen-styles">.timeline {
  list-style: none;
  padding: 20px 0 20px;
  position: relative;
}
.timeline:before {
  top: 0;
  bottom: 0;
  position: absolute;
  content: " ";
  width: 3px;
  background-color: #eeeeee;
  left: 50%;
  margin-left: -1.5px;
}
.timeline > li {
  margin-bottom: 20px;
  position: relative;
}
.timeline > li:before,
.timeline > li:after {
  content: " ";
  display: table;
}
.timeline > li:after {
  clear: both;
}
.timeline > li:before,
.timeline > li:after {
  content: " ";
  display: table;
}
.timeline > li:after {
  clear: both;
}
.timeline > li > .timeline-panel {
  width: 46%;
  float: left;
  border: 1px solid #d4d4d4;
  border-radius: 2px;
  padding: 20px;
  position: relative;
  -webkit-box-shadow: 0 1px 6px rgba(0, 0, 0, 0.175);
  box-shadow: 0 1px 6px rgba(0, 0, 0, 0.175);
}
.timeline > li > .timeline-panel:before {
  position: absolute;
  top: 26px;
  right: -15px;
  display: inline-block;
  border-top: 15px solid transparent;
  border-left: 15px solid #ccc;
  border-right: 0 solid #ccc;
  border-bottom: 15px solid transparent;
  content: " ";
}
.timeline > li > .timeline-panel:after {
  position: absolute;
  top: 27px;
  right: -14px;
  display: inline-block;
  border-top: 14px solid transparent;
  border-left: 14px solid #fff;
  border-right: 0 solid #fff;
  border-bottom: 14px solid transparent;
  content: " ";
}
.timeline > li > .timeline-badge {
  color: #fff;
  width: 50px;
  height: 50px;
  line-height: 50px;
  font-size: 1.4em;
  text-align: center;
  position: absolute;
  top: 16px;
  left: 50%;
  margin-left: -25px;
  background-color: #999999;
  z-index: 100;
  border-top-right-radius: 50%;
  border-top-left-radius: 50%;
  border-bottom-right-radius: 50%;
  border-bottom-left-radius: 50%;
}
.timeline > li.timeline-inverted > .timeline-panel {
  float: right;
}
.timeline > li.timeline-inverted > .timeline-panel:before {
  border-left-width: 0;
  border-right-width: 15px;
  left: -15px;
  right: auto;
}
.timeline > li.timeline-inverted > .timeline-panel:after {
  border-left-width: 0;
  border-right-width: 14px;
  left: -14px;
  right: auto;
}
.timeline-badge.primary {
  background-color: #2e6da4 !important;
}
.timeline-badge.success {
  background-color: #3f903f !important;
}
.timeline-badge.warning {
  background-color: #f0ad4e !important;
}
.timeline-badge.danger {
  background-color: #d9534f !important;
}
.timeline-badge.info {
  background-color: #5bc0de !important;
}
.timeline-title {
  margin-top: 0;
  color: inherit;
}
.timeline-body > p,
.timeline-body > ul {
  margin-bottom: 0;
}
.timeline-body > p + p {
  margin-top: 5px;
}
.header-bg {
  background-color: #FFF;
  background-size: cover;
  background-position: center center;
  width: 100%;
  height: 360px;
  background-image: url(http://winke-uploads.stor.sinaapp.com/picture/bg.png);
  }
body img {
  width:100%;
}
</style></head>
<div class="container">
    <div class="page-header">
        <h3 id="timeline" style="text-align:center">与你相遇 <?php echo $loveDays; ?> 天，与你相爱 <?php echo $loveDays; ?> 天</h3>
    </div>
    <ul class="timeline">
        <?php 
         $count = 0;
         while($categoryPosts->next()){
             $count++;
        ?>
        <li class="<?php if($count%2==0) echo "timeline-inverted"; ?>">
          <div class="timeline-badge danger"><i class="glyphicon glyphicon-heart" style="margin-top:15px;"></i></div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4 class="timeline-title"><?php $categoryPosts->title(); ?></h4>
              <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i><?php $categoryPosts->date(); ?></small></p>
            </div>
            <div class="timeline-body">
              <?php $categoryPosts->content('More'); ?>
            </div>
          </div>
        </li>
        <?php } ?>
    </ul>
</div>
<?php $this->need('footer.php'); ?>
<!-- <script src="http://libs.baidu.com/jquery/2.1.3/jquery.min.js"></script> -->