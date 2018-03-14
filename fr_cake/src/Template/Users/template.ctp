<html><head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">  <title>Welcome</title>
  <link href="/favicon.ico?1490751435" type="image/x-icon" rel="icon"><link href="/favicon.ico?1490751435" type="image/x-icon" rel="shortcut icon">
	<link rel="stylesheet" type="text/css" href="/css/bootstrap.css?1490751434">
	<link rel="stylesheet" type="text/css" href="/css/bootstrapValidator.min.css?1490751434">
	<link rel="stylesheet" type="text/css" href="/css/font-awesome.css?1490751434">
	<link rel="stylesheet" type="text/css" href="/css/login.css?1490751434">

	<script type="text/javascript" src="/js/jquery-1.11.3.js?1490751434"></script>
	<script type="text/javascript" src="/js/bootstrap.js?1490751434"></script>
	<script type="text/javascript" src="/js/login.js?1490751434"></script>
	<script type="text/javascript" src="/js/bootstrapValidator.js?1490751434"></script>
</head>
<body>
	<div class="container">
    <div id="loginbox" class="mainbox col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3">
        <div class="panel panel-info">
            <div class="panel-heading">
                <div class="panel-title text-center">JVB SYSTEM</div>
            </div>

            <div class="panel-body">
                <form action="/users/login" class="form-horizontal" role="form" id="form" method="post" accept-charset="utf-8"><div style="display:none;"><input type="hidden" name="_method" value="POST"></div>                <div class="form-group " style="text-align: center;">
                    
                    <div class="input-group">

                        <span class="input-group-addon"><i class="fa fa-user fa-lg"></i></span>
                        <input name="data[User][username]" class="form-control" id="username" placeholder="Tên" maxlength="40" type="text" required="required">                    </div>
                </div>

                <div class="form-group ">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-lock fa-lg"></i></span>
                        <input name="data[User][password]" class="form-control" id="password" placeholder="Mật khẩu" type="password" required="required">                    </div>
                </div>
                <div class="form-group">
                    <div class="checkbox">
                        <label>
                            <input type="hidden" name="data[User][remember_me]" id="login-remembe_" value="0"><input type="checkbox" name="data[User][remember_me]" id="login-remembe" value="1">                            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>Ghi nhớ mật khẩu
                        </label>
                        <a href="/Users/lost_password" style="float: right; text-decoration: underline;">Quên mật khẩu</a>
                    </div>
                </div>
                <!-- <div class="form-group"> -->
                <!-- Button -->
                <div class="col-md-6 col-md-offset-1">
                    <button id="__login" type="submit" href="#" class="btn btn-success pull-right">Đăng nhập</button>
                </div>
                <!-- </div> -->
                <!-- </div> -->
                </form>            </div>
        </div>
    </div>
</div>

<div id="particles"><canvas class="pg-canvas" width="968" height="662"></canvas></div>



</body></html>