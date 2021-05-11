    <div class="container">
        <p class="alert <?= $_SESSION['alert']?>"><?= $_SESSION['msg'] ?? '' ?></p>
        <form action="../indexfile/updatePost.php" method="post" enctype="multipart/form-data">
<!--            <input type="hidden" name="id" value="--><?//= $prod_id->id?><!--">-->
            <div class="mb-3">
                <label for="title" class="form-label">Название статьи</label>
                <input type="text" class="form-control" id="title" name="title" value="<?= $prod->name ?>">
            </div>
            <div class="mb-3">
                <label for="text" class="form-label">Тект статьи</label>

                <textarea class="form-control" id="text" name="text" rows="3"><?= $prod->discription ?></textarea>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Выберите изображение</label>
                <input type="file" class="form-control" name="image" id="image">
            </div>
            <img src="../img/<?= $image[0]->img ?> id="loadImage">
            <button type="submit" class="btn btn-primary" name="submitUpdate">Изменить </button>
        </form>
    </div>
<!--    <script>-->
<!--        let loadImage = document.querySelector("#loadImage"),-->
<!--            image = document.querySelector("#image");-->
<!--        7image.addEventListener('change', function (e){-->
<!--            loadImage.src = URL.createObjectURL(e.target.files[e]);-->
<!--            loadImage.style.display = 'block';-->
<!--            loadImage.onload() = function () {-->
<!--                URL.revokeObjectURL(e.target.src)-->
<!--            };-->
<!--        })-->
<!--    </script>-->