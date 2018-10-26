<nav class="navbar navbar-expand navbar-light bg-secondary">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" style="font-family: 'Pacifico', cursive"  href="{{ route('onlineShop.index') }}">ChukaZonia</a>
        </div>
        <ul class="nav navbar-nav" >
            <li class="active"><a class="nav-link" href="{{ route('onlineShop.index') }}">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('about.story') }}">About</a></li>
            <li class="nav-item"><a  class="nav-link" href="{{ route('admin.index') }}">Admin</a></li>
        </ul>
        <form class="navbar-form navbar-right ml-auto" action="/action_page.php">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Search" name="search">
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
        </form>
        <ul class="nav navbar-nav ml-auto navbar-right  ">
            <li class="nav-item"><a class="nav-link" href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
            <li class="nav-item"><a class="nav-link" href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        </ul>
</div>
</nav>