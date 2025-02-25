<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .table{
            border: 10px solid gray
        }
        .color-line {
            color: gray;
        }

        .ganjil {
            background-color: red;
        }

        .genap {
            background-color: green;
        }
    </style>
    <title>Latihan 2</title>
</head>

<body>
    <table  cellpadding='10' cellspacing='0' class="table">
        <?php for ($i = 1; $i <= 5; $i++) : ?>
            <?php if ($i % 2 == 0) : ?>
                <tr class="genap">
                    <?php else :?>
                        <tr class="ganjil">
                <?php endif; ?>
                <?php for ($j = 1; $j <= 5; $j++) : ?>
                    <td>
                        <?= "$i,$j" ?>
                    </td>
                <?php endfor; ?>
                </tr>
            <?php endfor; ?>
    </table>
</body>

</html>