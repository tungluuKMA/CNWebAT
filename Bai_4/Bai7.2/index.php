<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./css/drawTable.css">
    <link rel="stylesheet" href="./css/calculate.css">
    <link rel="stylesheet" href="./css/center.css">
    <link rel="stylesheet" href="./css/register.css">
</head>

<body>
    <div class="container-app">
        <?php include './pages/head.php'; ?>
        <div class="content">
            <?php include './pages/left.php'; ?>
            <div class="content-right">
                <?php
                if (isset($_GET['page'])) {
                    $page = $_GET['page'];
                    switch ($page) {
                        case 'drawTable':
                            include './pages/' . $page . '.php';
                            break;
                        case 'calculate':
                            include './pages/' . $page . '.php';
                            break;
                        case 'register':
                            include './pages/' . $page . '.php';
                            break;
                        default:
                            break;
                    }
                }
                ?>
            </div>
        </div>
        <?php include './pages/footer.php'; ?>
    </div>
</body>

</html>