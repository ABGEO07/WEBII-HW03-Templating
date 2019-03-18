<html lang="en">
<head>
    <title>Hello, World</title>
</head>
<body>
    <?php $sum = $num1 + $num2; ?>

    <h1><?php echo "{$num1} + {$num2} = {$sum}" ?></h1>

    <?php include_once __DIR__ . "/../layouts/footer.template.php"; ?>
</body>
</html>