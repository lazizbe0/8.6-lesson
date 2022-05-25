<main class="main">
    <section class="head">
        <h2 class="head__title"><?= $userInfo["user_login"] ?></h2>
        <p class="head__date"><?= $pageDate ?> </p>
    </section>
    <img class="user-img" src="<?= $userInfo["img_path"] ?>" alt="">
    <br>
    <form action="./includes/user-avatar.php" method="POST" enctype="multipart/form-data" class="userForm">

        <h3>Добавить фотографию</h3>
        <input name="avatar[]" type="file" accept="image/jpg, image/jpeg, image/png,image/svg, image/gfif" multiple>
        <button class="form__btn">Добавить</button>
    </form>
    <br>
    <form action="" method="POST" class="avatars">
        <? foreach ($getPhotos as $key => $value) : ?>
                <img src="<?= $value['img_path'] ?>" alt="" class="avatar__img">
        <? endforeach; ?>
    </form>
</main>