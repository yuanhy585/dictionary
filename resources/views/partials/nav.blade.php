

<nav class="navbar navbar-default navbar-fixed-top"
     role="navigation">

    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="">HY Dictionary</a>
        </div>

        @if(Auth::user())
        <div>
            <ul class="nav navbar-nav">
                <li><a href="/word/">词典</a></li>
                <li><a href="">翻译</a></li>
                <li><a href="">学堂</a></li>
                <li><a href="">云笔记</a></li>
                <li><a href="">惠惠</a></li>
                <li><a href="">更多产品</a></li>
            </ul>
        </div>
        @endif

        <div style="float:right;">
            <ul class="nav navbar-nav">
                @if(Auth::guest())
                    <li><a href="{{ url('/login') }}">登录</a></li>
                    <li><a href="{{ url('/register') }}">注册</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                           type="button" aria-haspopup="true" aria-expanded="false">
                            {{Auth::user()->name}} <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu"   style="float:right;">
                            <li><a href="#">修改密码</a></li>
                            <li><a href="/logout">退出</a></li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>