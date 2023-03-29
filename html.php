<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML</title>
</head>
<body>
    <?php 
        if (!array_key_exists('key', $_GET)) {
            echo 'Provide GET query param "key"';
            die;
        }
        
        $users = json_decode(file_get_contents(__DIR__ . '/users.json'), true);
    ?>

    <?php foreach ($users as $user) : ?>
        <?php 
            switch ($_GET['key']) {
                case 'id':
                    echo "ID: {$user['id']}<br>";
                    break;
                case 'fullname': ?>
                    Full name: <?= $user['fullname'] ?><br>
                    <?php break;
                default:
                    throw new Exception('Unexpecto patronum');
            }    
        ?>
    <?php endforeach; ?>

    <h1>Register user</h1>

    <form action="./register.php" method="POST">
        <input type="text" name="fullname" placeholder="Full name..." />
        <input type="number" name="id" placeholder="ID..." />
        <button>Submit</button>
    </form>

</body>
</html>