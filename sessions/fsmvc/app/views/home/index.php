<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title><?= $title ; ?></title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
</head>
<body>
    <h1><?= $h1; ?></h1>
  

    <ul>
        <?php foreach($data as $d) : ?>
                
                <li><?=  $d['name'] ; ?> </li>

        <?php endforeach; ?>
    </ul>

</body>
</html>