<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE HTML>
<html class="no-js">
<head>
    <meta charset="<?php $this->options->charset(); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ' - '); ?><?php $this->options->title(); ?></title>

    <!-- 使用url函数转换相关路径 -->
    
    <link rel="stylesheet" href="<?php $this->options->themeUrl('style.css'); ?>">
	<link rel="stylesheet" href="<?php $this->options->themeUrl('my.css'); ?>">
	<link rel="stylesheet" href="<?php $this->options->themeUrl('iconfont/iconfont.css'); ?>">
	<script src="<?php $this->options->themeUrl('jquery.js'); ?>"></script>
    <!--[if lt IE 9]>
    <script src="//cdnjscn.b0.upaiyun.com/libs/html5shiv/r29/html5.min.js"></script>
    <script src="//cdnjscn.b0.upaiyun.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <!-- 通过自有函数输出HTML头部信息 -->
    <?php $this->header(); ?>
</head>
<body>
<!--[if lt IE 8]>
    <div class="browsehappy" role="dialog"><?php _e('当前网页 <strong>不支持</strong> 你正在使用的浏览器. 为了正常的访问, 请 <a href="http://browsehappy.com/">升级你的浏览器</a>'); ?>.</div>
<![endif]-->

<header id="header" class="header">
    <div class="container">
        <div class="row row1">
       
            <div class="site-name">
            <!--<?php if ($this->options->logoUrl): ?>
                <a id="logo" href="<?php $this->options->siteUrl(); ?>">
                    <img src="<?php $this->options->logoUrl() ?>" alt="<?php $this->options->title() ?>" />
                </a>
            <?php else: ?>-->
            		<h1>
                <a class="logo" href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title() ?></a><span class="description">
                	<?php $this->options->description() ?>
                </span>
                 </h1>
            <?php endif; ?>
            </div>
            <div class="nav-right">
   			 <!-- 分类菜单-->
	             <nav id="nav-menu" class="nav-menu clearfix" role="navigation">
	                    <a<?php if($this->is('index')): ?> class="current"<?php endif; ?> href="<?php $this->options->siteUrl(); ?>"><?php _e('首页'); ?></a>
	                    <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
	                    <?php while($pages->next()): ?>
	                    <a<?php if($this->is('page', $pages->slug)): ?> class="current"<?php endif; ?> href="<?php $pages->permalink(); ?>" title="<?php $pages->title(); ?>"><?php $pages->title(); ?></a>
	                    <?php endwhile; ?>
	             </nav>
            <!--search -->
            	<div class="search-ico"></div>
	            <div class="search">
	         	<form method="post" class="search-form" action="./">
							<input placeholder="let's search" onfocus="if(this.value=='let's search')this.value='';" onblur="if(this.value=='')this.value='search';" name="s" id="s"  autocomplete="off"  type="search"> 
							<input id="searchsubmit" value="Search" class="button hidden" type="submit">
				</form>
				</div>
			</div>
        </div><!-- end .row -->
    </div>
    
    	<aside class="mobile-left md-shadow">
			<div id="oneimg">
				<a id="oneimg-herf" href="https://app.haotown.cn">
					<img id="oneimgpic" src=""/>
				</a>
			</div>
			<ul class="mobile-nav">
				<li><form method="post"  action="./">
							<input placeholder="let's search" onfocus="if(this.value=='let's search')this.value='';" onblur="if(this.value=='')this.value='search';" name="s"   autocomplete="off"  class='mobile-search' type="search"> 
							<input id="searchsubmit" value="Search" class="button hidden" type="submit">
				</form></li>
				
				 <li><a<?php if($this->is('index')): ?> class="current"<?php endif; ?> href="<?php $this->options->siteUrl(); ?>"><?php _e('首页'); ?></a></li>
	                    <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
	                    <?php while($pages->next()): ?>
	                  	<li><a<?php if($this->is('page', $pages->slug)): ?> class="current"<?php endif; ?> href="<?php $pages->permalink(); ?>" title="<?php $pages->title(); ?>"><?php $pages->title(); ?></a></li>
	                    <?php endwhile; ?>
				
			</ul>
			<div class="mobile-swich mw1" ></div>
		</aside>
		
		<div class="mobile-swich mw2" ></div>
    
</header><!-- end #header -->
<div id="body">
    <div class="container">
        <div class="row">

    
    
