<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>index</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<link rel="stylesheet" href="/thinkphp_3.2.3_full/Public/css/bootstrap-3.3.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="/thinkphp_3.2.3_full/Public/css/index.css">
</head>
<body>
<div class="body">
	<div class="header">
		<div class="logo">logo</div>
	</div>
	<div class="nav_bar">
		<div class="touxiang">
			<div class="box">头像</div>
			<p>姓名</p>
		</div>
		<div class="nav_item">
			<div class="item job">
				<div class="tit">
					<span class="icon_job"></span>
					<p>职位</p>
					<span class="i_open"></span>
				</div>
				<ul style="display: none">
					<li><a href="add_job.html">新职位</a></li>
					<li><a href="job_list.html">已发布职位</a></li>
				</ul>
			</div>
			<div class="item user">
				<div class="tit">
					<span class="icon_user"></span>
					<p>牛人</p>
					<span class="i_open"></span>
				</div>
				<ul style="display: none">
					<li>看过我</li>
					<li>收藏我</li>
					<li>搜索</li>
				</ul>
			</div>
			<div class="item select">
				<div class="tit">
					<span class="icon_select"></span>
					<p>候选人</p>
				</div>
			</div>
			<div class="item mess">
				<div class="tit">
					<span class="icon_mess"></span>
					<p>消息</p>
				</div>
			</div>
			<div class="item me">
				<div class="tit">
					<span class="icon_me"></span>
					<p>我的</p>
					<span class="i_open"></span>
				</div>
				<ul style="display: none">
					<li>我的公司</li>
				</ul>
			</div>
		</div>
		<div class="tool">
			<div class="logout">
				<span class="i_logout"></span>
				<p>退出登录</p>
			</div>
			<div class="setting">
				<span class="i_logout"></span>
				<p>设置</p>
			</div>
		</div>
	</div>
</div>

<link rel="stylesheet" href="/thinkphp_3.2.3_full/Public/public/css/add.css">

    <div class="container">
        <div class="content">
            <div class="content_box">
                <h5>公司基本信息<span style="color: red ;font-weight: 600;font-size: 22px">*</span></h5>
                <p>如果公司信息还未通过审核，您将不能发布招聘信息！！</p>
                <form action="" method="post">
                    <div class="form-group">
                        <div class="tit">公司全称</div>
                        <input type="text" name="" >
                    </div>
                    <div class="form-group">
                        <div class="tit">公司基本信息</div>
                        <input type="text" name="" >
                    </div>
                </form>
            </div>
            <div class="content_box">
                <h5>职业基本信息<span style="color: red ;font-weight: 600;font-size: 22px">*</span></h5>
                <form action="" method="post">
                    <div class="form-group">
                        <div class="tit">职位名称</div>
                        <input type="text" name="" >
                    </div>
                    <div class="form-group">
                        <div class="tit">职位类型</div>
                        <input type="text" name="" >
                    </div>
                    <div class="form-group">
                        <div class="tit">技能要求</div>
                        <input type="text" name="" >
                    </div>
                    <div class="form-group">
                        <div class="tit">工作地点</div>
                        <input type="text" name="" >
                    </div>
                    <div class="form-group">
                        <div class="tit">薪酬范围</div>
                        <input type="text" name="" >
                    </div>
                    <div class="form-group">
                        <div class="tit">学历要求</div>
                        <input type="text" name="" >
                    </div>
                    <div class="form-group job-require">
                        <div class="tit">职业描述</div>
                        <textarea  name="" ></textarea>
                    </div>
                </form>
            </div>
            <div class="content_box">
                <h5>其他信息<span style="color: red ;font-weight: 600;font-size: 22px">*</span></h5>
                <form action="" method="post">
                    <div class="form-group">
                        <div class="tit">简历接收邮箱</div>
                        <input type="text" name="" >
                    </div>
                </form>
            </div>
            <div class="content_box">
                <input type="button" value="保存" class="btn">
            </div>
        </div>
    </div>
</div>
</body>
</html>
<script type="text/javascript" src="/thinkphp_3.2.3_full/Public/js/jquery.1.11.1.min.js"></script>
<script src="/thinkphp_3.2.3_full/Public/js/index.js?3"></script>