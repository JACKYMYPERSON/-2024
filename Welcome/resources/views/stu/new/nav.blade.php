<!DOCTYPE html>
<html lang="zh">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>迎新系统-哈尔滨工业大学（威海）</title>

    <!-- Custom fonts for this template-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.7.2/css/all.min.css"
          integrity="sha256-nAmazAk6vS34Xqo0BSrTb+abbtFlgsFK7NKSi6o7Y78="
          crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
            rel="stylesheet">
    <!-- Smallpop -->
    <link href="https://cdn.jsdelivr.net/gh/RioHsc/Smallpop/dist/spop.min.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('css/sb-admin-2.min.css')}}" rel="stylesheet">
    <script>
	window.difyChatbotConfig = { 
	 token: 'FKFU1qihn8fihmCt'
	}
   </script>
   <script
	src="https://udify.app/embed.min.js"
	id="FKFU1qihn8fihmCt"
	defer>
   </script>
</head>

<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-laugh-wink"></i>
            </div>
            <div class="sidebar-brand-text mx-3">迎新系统 <sup id="user-type">{{$sysType}}</sup></div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item">
            <a class="nav-link" href="{{url('/stu')}}">
                <i class="fas fa-fw fa-home"></i>
                <span>首页</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            信息查询
        </div>

        <!-- Nav Item - Information Query -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseInfo"
               aria-expanded="true" aria-controls="collapseInfo">
                <i class="fas fa-fw fa-laptop"></i>
                <span>信息查询</span>
            </a>
            <div id="collapseInfo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">你可以查看：</h6>
                    <a class="collapse-item" href="{{url('/stu/queryClass')}}">你的班级</a>
                    <a class="collapse-item" href="{{url('/stu/queryDorm')}}">你的宿舍</a>
                    <a class="collapse-item" href="{{url('/stu/queryCountryFolk')}}">你的老乡</a>
                </div>
            </div>
        </li>

        <!-- Nav Item - Arrived -->
        <li class="nav-item active">
            <a class="nav-link" href="{{url('/stu/nav')}}">
                <i class="fas fa-fw fa-plane-arrival"></i>
                <span>ai信息</span>
            </a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            通知服务
        </div>

        <!-- Nav Item - Notice -->
        <li class="nav-item">
            <a class="nav-link" href="{{url('/stu/posts')}}">
                <i class="fas fa-fw fa-bell"></i>
                <span>所有通知</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            迎新服务
        </div>

        <!-- Nav Item - welcome -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseWel"
               aria-expanded="true" aria-controls="collapseWel">
                <i class="fas fa-fw fa-route"></i>
                <span>报到流程</span>
            </a>
            <div id="collapseWel" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">你可以查看：</h6>
                    <a class="collapse-item" href="{{url('/stu/enrollInfo')}}">报到说明</a>
                    <a class="collapse-item" href="{{url('/stu/enrollGuide')}}">开始报到</a>
                </div>
            </div>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Heading -->
        <div class="sidebar-heading">
            信息填报
        </div>

        <!-- Nav Item - selfInfo -->
        <li class="nav-item">
            <a class="nav-link" href="{{url('/stu/personalInfo')}}">
                <i class="fas fa-fw fa-info"></i>
                <span>个人信息</span></a>
        </li>

        <!-- Nav Item - GreenPath -->
        <li class="nav-item">
            <a class="nav-link" href="{{url('/stu/greenPath')}}">
                <i class="fas fa-fw fa-hands-helping"></i>
                <span>绿色通道</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <div class="sidebar-heading">
            ai1
        </div>

        <!-- Nav Item - selfInfo -->
        <li class="nav-item">
            <a class="nav-link" href="{{url('/stu/personalInfo')}}">
                <i class="fas fa-fw fa-info"></i>
                <span>ai信息分析</span></a>
        </li>

        <!-- Nav Item - GreenPath -->
        <li class="nav-item">
            <a class="nav-link" href="{{url('/stu/greenPath')}}">
                <i class="fas fa-fw fa-hands-helping"></i>
                <span>信息推荐</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>
    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                <!-- Sidebar Toggle (Topbar) -->
                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                </button>

                <!-- Topbar Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Nav Item - Messages -->
                    <li class="nav-item dropdown no-arrow mx-1">
                        <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-envelope fa-fw"></i>
                            <!-- Counter - Messages -->
                            @if($messages['unreadNum'] > 0)
                                <span class="badge badge-danger badge-counter">{{$messages['unreadNum']}}</span>
                            @endif
                        </a>
                        <!-- Dropdown - Messages -->
                        <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                             aria-labelledby="messagesDropdown">
                            <h6 class="dropdown-header">
                                消息中心
                            </h6>
                            @if(count($messages['showMessage'])!=0) @foreach ($messages['showMessage'] as $message)
                                <a class="dropdown-item d-flex align-items-center" href="{{url($message['toURL'])}}">
                                    <div @if ($message['readed'] == false) class="font-weight-bold" @endif>
                                        <div class="text-truncate">{{$message['title']}}</div>
                                        <div class="small text-gray-500">{{$message['context']}}</div>
                                    </div>
                                </a>
                            @endforeach
                            @else
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div>
                                        <div class="text-truncate">暂时没有消息哦~</div>
                                    </div>
                                </a>
                            @endif
                            <a class="dropdown-item text-center small text-gray-500"
                               href="{{url($messages['moreInfoUrl'])}}">更多信息...</a>
                        </div>
                    </li>

                    <div class="topbar-divider d-none d-sm-block"></div>

                    <!-- Nav Item - User Information -->
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true"
                           aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small">您好，{{$user}}</span>
                            <img class="img-profile rounded-circle"
                                 src="{{url($userImg)}}">
                        </a>
                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                             aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="{{url($toInfomationURL)}}">
                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i> 个人信息
                            </a>

                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i> 登出
                            </a>
                        </div>
                    </li>

                </ul>

            </nav>
            <!-- End of Topbar -->

            <!-- Begin Page Content -->
            <iframe
 src="https://udify.app/chatbot/FKFU1qihn8fihmCt"
 style="width: 100%; min-height: 700px"
 frameborder="0" 
 allow="microphone">
</iframe>

<!-- Bootstrap core JavaScript-->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.3.1/dist/jquery.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.bundle.js"
        integrity="sha256-pVreZ67fRaATygHF6T+gQtF1NI700W9kzeAivu6au9U="
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery.easing@1.4.1/jquery.easing.min.js"
        integrity="sha256-H3cjtrm/ztDeuhCN9I4yh4iN2Ybx/y1RM7rMmAesA0k=" crossorigin="anonymous"></script>
<!-- Custom scripts for all pages-->
<script src="{{asset('js/sb-admin-2.min.js')}}"></script>
<!-- Smallpop -->
<script src="https://cdn.jsdelivr.net/gh/RioHsc/Smallpop/dist/spop.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8.12.0/dist/sweetalert2.all.min.js"
        integrity="sha256-wWhZbmmAXb1JDP1U+ywgt4FHA4XIxzcYyGEFnInYJMQ=" crossorigin="anonymous"></script>
<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    Date.prototype.Format = function (fmt) {
        var o = {
            "M+": this.getMonth() + 1,      //月份
            "d+": this.getDate(),           //日
            "H+": this.getHours(),          //小时
            "m+": this.getMinutes(),        //分
            "s+": this.getSeconds(),        //秒
        };
        if (/(y+)/.test(fmt)) fmt =
            fmt.replace(RegExp.$1, (this.getFullYear() + "").substr(4 - RegExp.$1.length));
        for (var k in o)
            if (new RegExp("(" + k + ")").test(fmt)) fmt =
                fmt.replace(RegExp.$1, (RegExp.$1.length === 1) ?
                    (o[k]) : (("00" + o[k]).substr(("" + o[k]).length)));
        return fmt;
    }

    $("#book_station").change(function () {
        let selectVal = $(this).select().val();
        if(selectVal !== "-1"){
            $.ajax({
                async: true,   		//是否为异步请求
                cache: false,  		//是否缓存结果
                type: "POST", 		//请求方式
                dataType: "jsonp", 	//服务器返回的数据是什么类型
                url: "{{url($getNavTime)}}",
                data: {"target": selectVal},

                success: function (data) {
                    if (data.code === 200) {
                        let dataAera = data.data;
                        let table = $("#book_time");
                        table.html("<option value=\"-1\" selected>选择时间</option>");
                        $.each(dataAera,function (index,val) {
                            table.append("<option value=\""+val+
                                "\">"+(new Date(val*1000)).Format("MM月dd日 HH:mm")+"</option>");
                        });

                    } else {
                        spop({
                            template: "<h4>请求失败（" + data.code + "）</h4>" +
                                "<p>" + data.data + "</p>",
                            style: 'warning',
                            autoclose: false,
                            position: 'bottom-right',
                            icon: true,
                            group: "getNavTime",
                        });
                    }
                },
                error: function (XMLHttpRequest, textStatus, errorThrown) {
                    // 状态码
                    console.log("status:" + XMLHttpRequest.status + "\n");
                    // 状态
                    console.log("readyState:" + XMLHttpRequest.readyState + "\n");
                    // 错误信息
                    console.log("textStatus:" + textStatus + "\n");
                    spop({
                        template: "请求失败（" + XMLHttpRequest.status + "）",
                        style: 'error',
                        autoclose: false,
                        position: 'bottom-right',
                        icon: true,
                        group: "getNavTime",
                    });
                }
            });
        }
    });
    
    $("#bookSubmit").click(function () {
        let port = $("#book_station").select().val();
        let time = $("#book_time").select().val();
        if(port==="-1"||time==="-1"){
            spop({
                template: "<h4>提交失败</h4>" +
                    "<p>站点、时间都必须选择</p>",
                style: 'warning',
                autoclose: false,
                position: 'bottom-right',
                icon: true,
                group: "submitBook",
            });
            return;
        }
        $.ajax({
            async: true,   		//是否为异步请求
            cache: false,  		//是否缓存结果
            type: "POST", 		//请求方式
            dataType: "jsonp", 	//服务器返回的数据是什么类型
            url: "{{url($submitBook)}}",
            data: {
                "bookPort": port,
                "bookTime":time
            },

            success: function (data) {
                if (data.code === 200) {
                    spop({
                        template: "已成功提交",
                        style: 'success',
                        autoclose: 5000,
                        position: 'bottom-right',
                        icon: true,
                        group: "submitBook",
                    });
                } else {
                    spop({
                        template: "<h4>请求失败（" + data.code + "）</h4>" +
                            "<p>" + data.data + "</p>",
                        style: 'warning',
                        autoclose: false,
                        position: 'bottom-right',
                        icon: true,
                        group: "submitBook",
                    });
                }
            },
            error: function (XMLHttpRequest, textStatus, errorThrown) {
                // 状态码
                console.log("status:" + XMLHttpRequest.status + "\n");
                // 状态
                console.log("readyState:" + XMLHttpRequest.readyState + "\n");
                // 错误信息
                console.log("textStatus:" + textStatus + "\n");
                spop({
                    template: "请求失败（" + XMLHttpRequest.status + "）",
                    style: 'error',
                    autoclose: false,
                    position: 'bottom-right',
                    icon: true,
                    group: "submitBook",
                });
            }
        });
    });

    $("#deleteBook").click(function () {
        let target = $(this).data('target');
        let thisBtn = $(this);
        if(target<1) {
            spop({
                template: "<h4>数据错误</h4>" +
                    "<p>信息戳可能有误，请刷新页面/p>",
                style: 'warning',
                autoclose: false,
                position: 'bottom-right',
                icon: true,
                group: "deleteBook",
            });
            return;
        }
        Swal.fire({
            title: '确定要删除吗',
            text: "你将要删除预约吗",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: "确定删除",
            cancelButtonText: "取消",
        }).then((result) =>{
            if (result.value){
                $.ajax({
                    async: true,   		//是否为异步请求
                    cache: false,  		//是否缓存结果
                    type: "POST", 		//请求方式
                    dataType: "jsonp", 	//服务器返回的数据是什么类型
                    url: "{{url($deleteBook)}}",
                    data: {
                        "target": target
                    },

                    success: function (data) {
                        if (data.code === 200) {
                            spop({
                                template: "已成功删除",
                                style: 'success',
                                autoclose: 5000,
                                position: 'bottom-right',
                                icon: true,
                                group: "deleteBook",
                            });
                            thisBtn.parent().parent().parent().remove();
                        } else {
                            spop({
                                template: "<h4>请求失败（" + data.code + "）</h4>" +
                                    "<p>" + data.data + "</p>",
                                style: 'warning',
                                autoclose: false,
                                position: 'bottom-right',
                                icon: true,
                                group: "deleteBook",
                            });
                        }
                    },
                    error: function (XMLHttpRequest, textStatus, errorThrown) {
                        // 状态码
                        console.log("status:" + XMLHttpRequest.status + "\n");
                        // 状态
                        console.log("readyState:" + XMLHttpRequest.readyState + "\n");
                        // 错误信息
                        console.log("textStatus:" + textStatus + "\n");
                        spop({
                            template: "请求失败（" + XMLHttpRequest.status + "）",
                            style: 'error',
                            autoclose: false,
                            position: 'bottom-right',
                            icon: true,
                            group: "deleteBook",
                        });
                    }
                });
            }
        });
    });
</script>
    
</body>

</html>