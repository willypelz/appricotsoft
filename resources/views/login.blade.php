<div class="col col-11 col-sm-6 col-md-4">
    <div class="text-center mb-4">
        <h1 class="mb-4 title title-dark ">Sign in</h1>
        <p class="fs-5 subtitle subtitle-dark">Sign in and start managing your candidates!</p>
    </div>
    <form action="{{ route('login') }}" method="post">
        {!! csrf_field() !!}
        @if(Session::has('errorMessage'))
            <div class="alert alert-danger" role="alert">
                <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                <span class="sr-only">Error:</span>
                {{ Session::get('errorMessage') }}
            </div>
        @endif
        <div class="mb-4">
            <label for="login" class="form-label visually-hidden">Login</label>
            <input type="text" name="username" class="form-control custom-form" id="login" placeholder="Login">
        </div>

        <div class="mb-4">
            <label for="password" class="form-label visually-hidden">Password</label>
            <input type="password" name="password" class="form-control custom-form" id="password" placeholder="Password">
        </div>

        <div class="d-flex justify-content-between mb-4">
            <div class="form-check">
                <input class="form-check-input custom-check-input" type="checkbox" value=""
                       id="flexCheckDefault">
                <label class="form-check-label remember-me remember-me-dark" for="flexCheckDefault">
                    Remember me
                </label>
            </div>

            <a href="#" class="text-decoration-none forgot-password forgot-password-dark">Forgot
                password?</a>
        </div>

        <div class="d-grid gap-2">
            <button type="submit" name="submit" class="btn btn-block btn-lg btn-green">Login</button>
        </div>
    </form>
</div>
