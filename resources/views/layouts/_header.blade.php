<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
   <a class="navbar-brand" href="{{route('home')}}">Weibo App</a>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="{{route('help')}}">帮助</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="{{route('about')}}">关于我们</a>
        </li>
      </ul>

      <button class="btn btn-outline-success my-4 my-sm-0" onclick="window.location.href='{{route('signup')}}'" >立即注册</button>
      <button class="btn btn-outline-success my-2 my-sm-0" >登陆</button>

    </div>
  </nav>
