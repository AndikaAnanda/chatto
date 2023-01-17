<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $data['judul']; ?></title>
    <link rel="icon" href="<?= BASEURL; ?>/img/chatto-logo.ico">
    <link rel="stylesheet" href="<?= BASEURL; ?>/dist/output.css">


</head>

<body>

    <nav class="relative drop-shadow-md bg-white w-full">
        <div class="flex items-center lg:justify-between border-b-2 border-gray-100 py-4 px-8 md:justify-start md:space-x-10 gap-2">
            <nav class="">
                <a class="flex align-center gap-2" href="<?= BASEURL ?>">
                    <img src="<?= BASEURL ?>/img/chatto-logo.png" class="w-10" alt="">
                    <p class="text-2xl">Chatto</p>
                </a>
            </nav>
            <button class="" type="button" aria-expanded="false" aria-label="Toggle navigation">
                <span></span>
            </button>

            <div class="flex gap-10">
                <a class="hover:text-orange-400" href="<?= BASEURL ?>">Home</a>
                <a class="hover:text-orange-400" href="<?= BASEURL ?>/mahasiswa">Mahasiswa</a>
                <a class="hover:text-orange-400" href="<?= BASEURL ?>/about">About</a>
            </div>
        </div>
    </nav>