<div id="main-container" class="flex items-center justify-center min-h-screen w-full m-auto p-10">
    <?php
    if(isset($data['token'])){
        echo '
        <div class="bg-green-400 py-1 px-2">
            Your account is now activated ! <a class="text-red-500" href="http://localhost/chatto/public/auth/login">Click here</a> to redirect
        </div>
        ';
        $this->model('User_model')->verifyToken($data['token']);
    }else{
        echo "<script type='text/javascript'>document.location.href='". BASEURL ."';</script>";
    }
    
    ?>
</div>