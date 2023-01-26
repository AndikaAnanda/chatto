<div class="container">
    <main class="form-signin w-100 m-auto">
        <form action="<?= BASEURL; ?>/signup/register" method="post">
            <a href="<?= BASEURL ?>">
                <img class="mb-2 mx-auto d-block" src="<?= BASEURL ?>/img/chatto-logo.png" width="60" height="60" alt="">
            </a>

            <h1 class="h3 mb-3 fw-normal text-center">Create account</h1>

            <div class="form-floating">
                <input name="nama" type="text" class="form-control" id="floatingInput" placeholder="Username" autocomplete="off">
                <label for="floatingInput">Username</label>
            </div>
            <div class="form-floating">
                <input name="email" type="email" class="form-control" id="floatingInput" placeholder="Your Email" autocomplete="off">
                <label for="floatingInput">Email address</label>
            </div>
            <div class="form-floating">
                <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password" autocomplete="off">
                <label for="floatingPassword">Password</label>
            </div>

            <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" value="remember-me"> Remember me
                </label>
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
        </form>
    </main>
</div>