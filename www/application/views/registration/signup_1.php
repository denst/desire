<link rel="stylesheet" href="/css/library/signin.css">
<form class="form-signin">
    <h2 class="form-signin-heading">Please sign in</h2>
    <?=$form->input('username', '',
            array('class' => 'form-control required', 'placeholder' => 'Email address', 'autofocus'))?>
    <?=$form->password('password', '',
                array('type' => 'password', 'class' => 'form-control required'))?>
    <?=$form->password('password_confirm', '',
                array('type' => 'password', 'class' => 'form-control required'), 'Confirm Password')?>
    <!--<input type="text" class="form-control" placeholder="Email address" autofocus>-->
    <!--<input type="password" class="form-control" placeholder="Password">-->
    <label class="checkbox">
      <input type="checkbox" value="remember-me"> Remember me
    </label>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
</form>