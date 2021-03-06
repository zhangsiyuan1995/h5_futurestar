<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>
    <title>老师主页</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" media="screen and (min-width: 800px) and (max-device-width: 1100px)" href="/FS/Public/front/teacher/css/index1024.css" />
    <link rel="stylesheet" type="text/css" media="screen and (min-width: 1240px) and (max-device-width: 2000px)" href="/FS/Public/front/teacher/css/index.css" />
    <link rel="stylesheet" type="text/css" href="/FS/Public/front/teacher/css/bootstrap.min.css">
    <script src="/FS/Public/front/teacher/js/jquery.js"></script>
    <script src="/FS/Public/front/teacher/js/bootstrap.min.js"></script>
</head>

<body style="background: RGB(189, 235, 141)">
    <!--导航-->
    <div class="row clearfix" id="header">
        <div class="col-md-4 column" id="logo">
            <img alt="35x35" src="/FS/Public/front/teacher/images/logo.png" />
        </div>
        <div class="col-md-4 column">
        </div>
        <div class="col-md-4 column">
            <ul id="nav">
                <li>
                    <a href="/FS/index.php/Home/Teacher/guestbook.html"><img src="/FS/Public/front/teacher/images/email.png" /></a>
                </li>
                <li id="new"><a href="/FS/index.php/Home/Teacher/guestbook.html">消息</a></li>
                <li id="circle"><img src="<?php echo ($tea["thumb"]); ?>" width="40px" height="40px" class="img-circle" /></li>
                <li id="drop">
                    <li class="dropdown">
                        <a href="#" id="navbarDrop1" class="dropdown-toggle" data-toggle="dropdown"><span id="navbarDrop2"><?php echo ($tea["realname"]); ?></span><span class="caret"></span></a>
                        <ul class="dropdown-menu" id="navbarDrop3">
                            <li><a href="/FS/index.php/Home/Teacher/personCenter.html">个人资料</a></li>
                            <li><a href="/FS/index.php/Home/Teacher/update.html">修改资料</a></li>
                            <li><a href="/FS/index.php/Home/Teacher/logout">退出</a></li>
                        </ul>
                    </li>
                </li>
            </ul>
        </div>
    </div>
    <!--内容-->
    <div class="row clearfix" id="content">
        <!--内容导航-->
        <div class="col-md-3 column" id="content_left1">
            <div class="row clearfix" id="left1">
                <div class="col-md-6 column" id="pic">
                    <img src="<?php echo ($tea["thumb"]); ?>" width="70px" height="70px" class="img-rounded" />
                </div>
                <div class="col-md-6 column" id="left2">
                    <div class="row clearfix">
                        <div class="col-md-12 column">
                            <p id="tec"><a href="/FS/index.php/Home/Teacher/personCenter.html"><?php echo ($tea["realname"]); ?></a></p>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-md-12 column">
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                    <span class="sr-only">50%</span>
                                </div>
                            </div>
                            <p id="lvo">LV0</p>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-md-12 column">
                            <a href="#">
                                <p id="flower">鲜花:0</p>
                            </a>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-md-12 column">
                            <input type="button" id="zheng" value="证">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-md-12 column" id="list">
                    <div class="panel-group" id="panel-493390">
                        <ul class="list-group">
                            <li>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <a class="panel-title" data-toggle="collapse" data-parent="#panel-493390" href="#panel-element-682792"><a href="/FS/index.php/Home/Teacher/index.html">首页</a></a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <a class="panel-title collapsed" data-toggle="collapse" data-parent="#panel-493390" href="#panel-element-749900">英语作业<span class="glyphicon glyphicon-chevron-down" id="test"></span></a>
                                    </div>
                                    <div id="panel-element-749900" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <ul class="homeworkList_e">
                                                <li class="list-group-item"><a href="/FS/index.php/Home/Teacher/assignment.html">布置作业</a></li>
                                                <li class="list-group-item"><a href="/FS/index.php/Home/Teacher/workpaper.html">作业情况</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <a class="panel-title" data-toggle="collapse" data-parent="#panel-493390" href="#panel-element-682792"><a href="/FS/index.php/Home/Teacher/myClass.html">我的班级</a></a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <a class="panel-title" data-toggle="collapse" data-parent="#panel-493390" href="#panel-element-682792"><a href="/FS/index.php/Home/Teacher/resource.html">资源箱</a></a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <a class="panel-title" data-toggle="collapse" data-parent="#panel-493390" href="#panel-element-682792"><a href="/FS/index.php/Home/Teacher/guestbook.html">留言板</a></a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--今日任务-->
        <div class="col-md-6 column" id="right1">
            <h4 id="task">今日任务</h4>
            <div class="row clearfix">
                <div class="col-md-12 column" id="task1">
                    <h4 class="task_t">
                       任务一 &nbsp;&nbsp;给学生布置作业
                    </h4>
                    <?php if(is_array($homework)): $i = 0; $__LIST__ = $homework;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><div class="row">
                            <div class="col-md-4 column">
                                <ul id="task1_n">
                                    <li>
                                        <p><?php echo ($data["username"]); ?></p>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-4 column">
                                <ul class="task1_s">
                                    <li>
                                        <p id="task1_s"><?php echo ($data["subject"]); ?></p>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-4 column">
                                <a href="/FS/index.php/Home/Teacher/workpaper.html">
                                    <input type="button" id="task1_b" value="查看">
                                </a>
                            </div>
                        </div><?php endforeach; endif; else: echo "" ;endif; ?>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-md-12 column" id="task2">
                    <h4 class="task_t">
                       任务二 &nbsp;&nbsp;让小朋友来到这里吧
                    </h4>
                    <div id="task2_p">
                        <p id="tel"><?php echo ($tea["tel"]); ?></p>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <h4 id="task4_t">认证</h4>
                <div class="col-md-12 column" id="task4">
                    <h4 class="task4_t">请上传你的相关证件经工作人员审核即可通过认证</h4>
                    <a href="/FS/index.php/Home/Teacher/upload.html">
                        <button type="button" class="btn btn-lg" id="task4_b">点击上传</button>
                    </a>
                    <ol>
                        <li id="te">教师证</li>
                        <li id="zy">职业证</li>
                    </ol>
                </div>
            </div>
        </div>
        <!--完成作业-->
        <div class="col-md-3 column" id="homework">
            <p id="acc_h">完成作业</p>
            <div class="row clearfix">
                <?php if(is_array($stuFinish)): $i = 0; $__LIST__ = $stuFinish;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$sf): $mod = ($i % 2 );++$i;?><div class="col-md-6 column">
                        <img alt="<?php echo ($sf["realname"]); ?>" width="40px" height="40px" src="<?php echo ($sf["thumb"]); ?>" class="finishstu-thumb" />
                        <p class="finishstu-p"><?php echo ($sf["realname"]); ?></p>
                    </div><?php endforeach; endif; else: echo "" ;endif; ?>
            </div>
        </div>
    </div>
    <!--尾部-->
    <div class="row clearfix" id="footer">
        <div class="col-md-12 column" id="footer1">
            <p>Copyright @ 2011-2016 futurestar Corporation. All Rights Reserved.</p>
        </div>
        <div class="col-md-12 column">
            <div class="col-md-3 column">
            </div>
            <div class="col-md-5 column">
                <ul class="footer_nav">
                    <li id="footer2">后台管理</li>
                    <li>关于我们</li>
                    <li>各界声音</li>
                    <li>加入我们</li>
                </ul>
            </div>
            <div class="col-md-4 column">
            </div>
        </div>
    </div>
</body>

</html>