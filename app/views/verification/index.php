<div id="main-container" class="flex items-center justify-center min-h-screen w-full m-auto p-10">
    <div class="bg-green-400 py-1 px-2">
        Your account is now activated ! <a class="text-red-500" href="<?= BASEURL ?>/auth/login">Click here</a> to redirect
    </div>
    <?php
        $this->model('User_model')->verifyToken($data['token']);
    ?>
</div>