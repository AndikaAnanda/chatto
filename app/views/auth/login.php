<div id="main-container" class="flex flex-col items-center justify-center min-h-screen w-full m-auto p-10">
    <div class="col-lg-6">
        <?php Flasher::flashReg(); ?>
    </div>
    <main class="form-signin bg-gray p-5 rounded-md drop-shadow-md">
        <form action="<?= BASEURL; ?>/auth/signup/" class="flex flex-col gap-3 w-100" method="post">
            <div>
                <img class="mb-2 mx-auto d-block" src="<?= BASEURL ?>/img/chatto-logo.png" width="60" height="60" alt="">
            </div>

            <h1 class="font-semibold mb-3 text-xl text-center">Wellcome</h1>

            <div class="form-floating">
                <label for="floatingInput" class="block">Email address</label>
                <input name="email" type="email" class="form-control focus:outline-none focus:border-orange-400 focus:ring-1 focus:ring-orange-400 w-80 h-7 rounded-md p-5 max-w-screen" id="floatingInput" required placeholder="username@mail.com" autocomplete="off">
            </div>
            <div class="form-floating">
                <label for="floatingPassword" class="block">Password</label>
                <input name="password" type="password" class="form-control focus:outline-none focus:border-orange-400 focus:ring-1 focus:ring-orange-400 w-80 h-7 rounded-md p-5 max-w-screen" id="floatingPassword" required placeholder="Password" autocomplete="off">
            </div>

            <button class="inline-block rounded-lg px-3 mt-5 py-2 text-sm font-semibold leading-6 text-slate-100 shadow-sm hover:bg-orange-500 bg-orange-400" type="submit">Log in</button>
        </form>
    </main>
</div>