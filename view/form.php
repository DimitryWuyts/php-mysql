<?php
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" type="text/css"
          rel="stylesheet"/>
    <title>MySQL</title>
</head>
<body>

<form action="" method="post">
    <h1>Login</h1>
    <section>
        <label for="email">Email here</label>
        <input id="email" name="email" >
    </section>
    <section>
        <label for="password">Password here</label>
        <input id="password" name="password" >
    </section>
    <input type="submit" value="register" id="register" name="register">
    <input type="submit"  value= "login" name="login">
</form>
<br><br>
<div class="container">
    <legend>Information</legend>
    <form method="post">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label>ID:</label>
                <input type="text"  name="id" class="form-control"/>
            </div>
            <div></div>
        </div>

        <fieldset>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label >First name:</label>
                    <input type="text" name="first_name" class="form-control">
                </div>
                <div class="form-group col-md-6">
                    <label >Last name:</label>
                    <input type="text"  name="last_name" class="form-control">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Username</label>
                    <input type="text" name="username" class="form-control">
                </div>
                <div class="form-group col-md-6">
                    <label>Linkedin</label>
                    <input type="text"  name="linkedin" class="form-control">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Github</label>
                    <input type="text" name="github" class="form-control">
                </div>
                <div class="form-group col-md-6">
                    <label>Email</label>
                    <input type="text"  name="email" class="form-control">
                </div>
                <div class="form-group col-md-6">
                    <label>Avatar</label>
                    <input type="text" name="avatar" class="form-control">
                </div>
                <div class="form-group col-md-6">
                    <label> Created at: </label>
                    <input type="text" name="created_at" class="form-control">
                </div>
                <div class="form-group col-md-6">
                    <label>Video</label>
                    <input type="text" name="video" class="form-control">
                </div>
                <div class="form-group col-md-6">
                    <label>Quote</label>
                    <input type="text" name="quote" class="form-control">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Quote Author</label>
                    <input type="text" name="quote_author" class="form-control">
                </div>
            </div>
        </fieldset>
        <hr> <label for="preferred_language"> Choose language here</label>
        <select name="preferred_language">
            <option value="be">nl</option>
            <option value="de">de</option>
            <option value="en">en</option>
            <option value="fr">fr</option>
            <option value="ru">ru</option>
        </select>
            <button type="submit" class="btn btn-primary">Submit</button>

</div>
<br><br>
<table border="1">
    <?php
    $newConnection = new Connection();
    $newConnection = $newConnection->Connect();
    $query = new Query();
    $query->createUserArray();
    foreach (($query->getUserArray()) as $user):
        ?>
        <tr>
            <td>
                <?php echo $user['firstName'] ?>
            </td>


            <td>
                <?php echo $user['lastName'] ?>
            </td>


            <td>
                <?php echo $user['email'] ?>
            </td>

            <td>
                <img src="<?php echo 'images/' . $user['preferred_language'] . '.png' ?>" alt="flag">
            </td>

            <td><a href="?user=<?php echo $user['id'] ?>">Profile</a></td>

        </tr>
    <?php endforeach; ?>
</table>