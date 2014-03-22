   <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/">Family Desire</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>
          </ul>
           <ul class="nav navbar-nav navbar-right">
               <? if(! isset($login)):?>
               <li><a href="/signup">Sign Up</a></li>
               <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Log In <b class="caret"></b></a>
                  <ul class="dropdown-menu" style="padding: 15px;min-width: 250px;">
                     <li>
                        <div class="row">
                           <div class="col-md-12">
                              <form action="/login" class="form" role="form" method="post" action="login" accept-charset="UTF-8" id="login-nav">
                                 <div class="form-group">
                                    <label class="sr-only" for="exampleInputEmail2">Email address</label>
                                    <input name="email" type="email" class="form-control" id="exampleInputEmail2" placeholder="Email address" required>
                                 </div>
                                 <div class="form-group">
                                    <label class="sr-only" for="exampleInputPassword2">Password</label>
                                    <input name="password" type="password" class="form-control" id="exampleInputPassword2" placeholder="Password" required>
                                 </div>
                                 <div class="checkbox">
                                    <label>
                                    <input type="checkbox"> Remember me
                                    </label>
                                 </div>
                                 <div class="form-group">
                                    <button type="submit" class="btn btn-success btn-block">Sign in</button>
                                 </div>
                              </form>
                           </div>
                        </div>
                     </li>
                  </ul>
               </li>
           <? else:?>
               <li><a href="/logout">Log out</a></li>
            <? endif?>
            </ul>
        </div>
        </div><!--/.navbar-collapse -->
      </div>