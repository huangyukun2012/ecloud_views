<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Base Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="../dist/css/timeline.css" rel="stylesheet">
    <link href="../bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">


    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../bower_components/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        table tr td {
            text-align: center;
        }
        table tr th {
            text-align: center;
        }
        #resume {
            width : 100%;
            margin: 0 auto;
            margin-top: 20px;
        }
        .info {
            width: 100%;
        }
        .medical_history {
            width: 100%
        }
        .bs-callout {
            -moz-border-bottom-colors: none;
            -moz-border-left-colors: none;
            -moz-border-right-colors: none;
            -moz-border-top-colors: none;
            border-color: #eee;
            border-image: none;
            border-radius: 3px;
            border-style: solid;
            border-width: 1px 1px 1px 5px;
            margin-bottom: 5px;
            padding: 20px;
        }
        .bs-callout:last-child {
            margin-bottom: 0px;
        }
        .bs-callout h4 {
            margin-bottom: 10px;
            margin-top: 0;
        }

        .bs-callout-danger {
            border-left-color: #d9534f;
        }

        .bs-callout-danger h4{
            color: #d9534f;
        }
    </style>

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Eye Cloud 眼底稽查云系统</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-envelope fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <a href="#">
                                <div>
                                    <strong>管理员</strong>
                                    <span class="pull-right text-muted">
                                        <em>昨天</em>
                                    </span>
                                </div>
                                <div>您今天还剩10个指标</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>管理员</strong>
                                    <span class="pull-right text-muted">
                                        <em>昨天</em>
                                    </span>
                                </div>
                                <div>您今天还剩10个指标</div>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-messages -->
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> 退出登录</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li class="active">
                        <a href="dashboard.html"><i class="fa fa-fw fa-dashboard"></i> 主页 </a>
                        </li>
                        <li>
                            <a href="diagnose.html"><i class="fa fa-fw fa-bar-chart-o"></i> 诊断 </a>
                        </li>
                        <li>
                            <a href="search_history.html"><i class="fa fa-fw fa-table"></i> 诊断历史 </a>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
           <div class="row">
            </div>
            <div class="row" style="margin-top:20px">
                    <div class="col-lg-12">
                       
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="dashboard.html">个人信息</a>
                            </li>
                            <li>
                                <i class="fa fa-bar-chart-o"></i> <a href="diagnose.html">诊断 </a>
                            </li>
                            <li class="active">
                                <i class="fa fa-table"></i> 诊断历史
                            </li>

                        </ol>
                    </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            历史诊断记录
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>编号</th>
                                            <th>年龄</th>
                                            <th>性别</th>
                                            <th>初诊时间</th>
                                            <th>复诊时间</th>
                                            <th>当前状态</th>
                                            <th>查看</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="odd gradeX">
                                            <td>12345</td>
                                            <td>21</td>
                                            <td>男</td>
                                            <td>已初诊</td>
                                            <td>2016年5月1日</td>
                                            <td>2016年5月3日</td>
                                            <td><button class="btn btn-success show_detail"> 查看 </button></td>
                                        </tr>
                                        <tr class="odd gradeX">
                                            <td>12345</td>
                                            <td>21</td>
                                            <td>男</td>
                                            <td>已初诊</td>
                                            <td>2016年5月1日</td>
                                            <td>2016年5月3日</td>
                                            <td><button class="btn btn-success show_detail"> 查看 </button></td>
                                        </tr>
                                        <tr class="odd gradeX">
                                            <td>12345</td>
                                            <td>21</td>
                                            <td>男</td>
                                            <td>已初诊</td>
                                            <td>2016年5月1日</td>
                                            <td>2016年5月3日</td>
                                            <td><button class="btn btn-success show_detail"> 查看 </button></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="modal fade" id="myModal" role="dialog">
                    <div class="modal-dialog">
                        <div class="modal-content">
        
                            <div class="modal-body">
                                <div id="resume">
                                    <div></div>
                                    <div class="info">
                                        <div style="background-color:yellow">
                                            <ul class="list-group">
                                                <li class="list-group-item"><i class="fa fa-age"></i>年龄 : 19</li>
                                                <li class="list-group-item">性别 : 男 <i class="fa fa-male"></i></li>               
                                            </ul>
                                        </div>
                                    </div>
                                    <div></div>
                                    <div class="medical_history">
                                        <div class="bs-callout bs-callout-danger">
                                            <h4>病史</h4>
                                            <p>
											起病情况与患病的时间。包括起病时间，发病急缓，原因或诱因，均与疾病的诊断有关，如脑栓塞、心绞痛、急性肾盂肾炎等，均起病急骤，而肿瘤、风湿性心脏病等则较缓慢。
                                            </p>
                                            <p>
											起病情况与患病的时间。包括起病时间，发病急缓，原因或诱因，均与疾病的诊断有关，如脑栓塞、心绞痛、急性肾盂肾炎等，均起病急骤，而肿瘤、风湿性心脏病等则较缓慢。
                                            </p>
                                        </div>
                                    </div>
                                    <div class="eye_pic">
                                    </div>
                                    <div></div>
                                    <div class="first_diagnose">
                                        <div class="bs-callout bs-callout-danger">
                                            <h4>诊断结果</h4>
                                            <p>
											患者为远视伴散光，并导致弱视
                                            </p>
                                        </div>
                                    </div>
                                    <div class="second_diagnose">
                                    </div>
                                 </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                            </div>
                        </div>
      
                    </div>
                </div>
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../bower_components/raphael/raphael-min.js"></script>
    <script src="../bower_components/morrisjs/morris.min.js"></script>
    
    <!-- Custom Theme JavaScript -->
    <script src="../bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="../bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $(".show_detail").click(function(){
            $("#myModal").modal();
        });
    });
    </script>

</body>

