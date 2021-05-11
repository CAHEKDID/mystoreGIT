<?php

function loadImg($validFileTypes, $uploadPath, $nameElem): string
{
    $error = "";

    if (isset($_FILES[$nameElem])) {
        $file = $_FILES[$nameElem];

        if (!empty($file["error"])) {
            $error = "Ошибка загрузки файлов...";
        }

        $type = mime_content_type($file["tmp_name"]);

        if (in_array($type, $validFileTypes)) {
            if (!move_uploaded_file($file["tmp_name"], $uploadPath . $file['name'])) {

                $error = "Не удалось загрузить файл...";
            }
        } else {
            $error = "Ошибка с разрешением файла(допустимые: jpg,jpeg,png)";
        };
        if (!empty($error)) {
            $error = $file['name'] . "-" . $error;
        }

    }
    return $error;
}


