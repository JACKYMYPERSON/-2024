<!doctype html>
<html lang="zh">

<head>
    <title>武汉轻工大学金银湖校区</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
</head>

<body>
<!-- head -->
<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
    <div class="top-container">
        <a class="navbar-brand" href="#">
            <img height="40" src="{{asset('img/logo1.png')}}"/>
            <span class="top-title">迎新系统</span>
        </a>
    </div>
</nav>

<!-- contianer -->
<div class="body-container" style="padding: 20px">
    <div class="row">
        <div class="col-md-7 d-none d-md-block">
            <img src="https://www.whpu.edu.cn/img/lmpic1.jpg"
                 class="img-fluid" style="border-radius:15px;">
        </div>
        <div class="col-md-5">
            <div class="card">
                <div class="card-header">
                    <ul class="nav nav-pills card-header-pills" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="newStudent-tab" data-toggle="tab" href="#new" role="tab"
                               aria-controls="new" aria-selected="true">新生</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="oldStudent-tab" data-toggle="tab" href="#old" role="tab"
                               aria-controls="old" aria-selected="true">在校生</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="admin-tab" data-toggle="tab" href="#admin" role="tab"
                               aria-controls="admin" aria-selected="true">管理员</a>
                        </li>
                    </ul>
                </div>
                <div class="card-body tab-content">
                    <form class="tab-pane fade show active" id="new" role="tabpanel" aria-labelledby="newStudent-tab"
                          method="POST" action="./login">
                        <h4 class="card-title">新生登录</h4>
                        {{ csrf_field() }}
                        <input type="hidden" name="loginType" value="new">
                        <div class="form-group">
                            <label for="examId">考生号</label>
                            <input type="text" name="examId"
                                   value="{{old("examId")}}" class="form-control" id="examId" placeholder="填写您的考生号">
                        </div>
                        <div class="form-group">
                            <label for="nperId">身份证号</label>
                            <input type="text" name="perId" class="form-control" id="nperId" placeholder="填写身份证号">
                        </div>
                        <button type="submit" class="btn btn-block btn-primary" id="newLogin">登录</button>
                    </form>

                    <form class="tab-pane fade" id="old" role="tabpanel" aria-labelledby="oldStudent-tab" method="POST"
                          action="./login">
                        <h4 class="card-title">在校生登录</h4>
                        {{ csrf_field() }}
                        <input type="hidden" name="loginType" value="old">
                        <div class="form-group">
                            <label for="name">姓名</label>
                            <input type="text" name="name"
                                   value="{{old("name")}}" class="form-control" id="name" placeholder="填写您的姓名">
                        </div>
                        <div class="form-group">
                            <label for="operId">身份证号</label>
                            <input type="text" name="perId" class="form-control" id="operId" placeholder="填写身份证号">
                        </div>
                        <button type="submit" class="btn btn-block btn-secondary" id="oldLogin">登录</button>
                    </form>

                    <form class="tab-pane fade" id="admin" role="tabpanel" aria-labelledby="admin-tab" method="POST"
                          action="./login">
                        <h4 class="card-title">管理员登录</h4>
                        {{ csrf_field() }}
                        <input type="hidden" name="loginType" value="admin">
                        <div class="form-group">
                            <label for="userId">用户名</label>
                            <input type="text" name="userId"
                                   value="{{old("userId")}}" class="form-control" id="userId" placeholder="填写准用户名">
                        </div>
                        <div class="form-group">
                            <label for="password">密码</label>
                            <input type="password" name="psw" class="form-control" id="password" placeholder="填写密码">
                        </div>
                        <button type="submit" class="btn btn-block btn-danger" id="adminLogin">登录</button>
                    </form>
                </div>
                @if(isset($infoOut))
                <div class="alert alert-danger ml-2 mr-2">
                    {{ $infoOut }}
                </div>
                @endif
            </div>
        </div>
    </div>
</div>

<!-- tail -->
<div class="container-fluid">
    <div class="foot-color">
        <div class="foot-color-a"></div>
        <div class="foot-color-b"></div>
        <div class="foot-color-c"></div>
        <div class="foot-color-d"></div>
        <div class="foot-color-e"></div>
    </div>
    <div class="footer">
        <div class="row footer-contianer">
            <div class="col-sm-6 connect-info">
                <p>联系方式</p>
                <p>地址：湖北省武汉市东西湖区环湖中路36号</p>
                <p>邮编：430023</p>
                <p>电话：027-83928885</p>
                <p>传真：83928885</p>
                <p>电子邮箱：zsb@whpu.edu.cn</p>
            </div>
            <div class="col-sm-6" style="text-align: center;vertical-align:bottom; ">
                <embed class="footer-logo" src="img/logo1.png"/>
            </div>
        </div>
        <div class="copy-right">
            <div class="copyright-div">
                <p>武汉轻工大学 本科生招生办公室 版权所有</p>
                <p>Copyright©2024 Wuhan Polytechnic University , Jinyinhu</p>
            </div>
        </div>
    </div>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
</body>

</html>