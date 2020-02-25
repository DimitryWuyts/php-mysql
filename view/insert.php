<?php
declare(strict_types = 1);
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

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
<div class="container">
    <h1>Form to test MySQL</h1>

    <form method="post">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="email">ID:</label>
                <input type="text" id="id" name="id" class="form-control"/>
            </div>
        </div>

        <fieldset>
            <legend>Information</legend>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="street">First name:</label>
                    <input type="text" name="firstname" id="street" class="form-control">
                </div>
                <div class="form-group col-md-6">
                    <label for="streetnumber">Last name:</label>
                    <input type="text" id="username" name="lastname" class="form-control">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="city">Username</label>
                    <input type="text" id="username" name="username" class="form-control">
                </div>
                <div class="form-group col-md-6">
                    <label for="zipcode">Linkdin</label>
                    <input type="text" id="linkdin" name="linkdin" class="form-control">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="city">Github</label>
                    <input type="text" id="github" name="github" class="form-control">
                </div>
                <div class="form-group col-md-6">
                    <label for="zipcode">Email</label>
                    <input type="text" id="email" name="email" class="form-control">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="city">Preferred language</label>
                    <input type="text" id="preflang" name="preflang" class="form-control">
                </div>
                <div class="form-group col-md-6">
                    <label for="zipcode">Avatar</label>
                    <input type="text" id="avatar" name="avatar" class="form-control">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="city">Video</label>
                    <input type="text" id="video" name="video" class="form-control">
                </div>
                <div class="form-group col-md-6">
                    <label for="zipcode">Quote</label>
                    <input type="text" id="quote" name="quote" class="form-control">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="city">Quote Author</label>
                    <input type="text" id="quoteauthor" name="quoteauthor" class="form-control">
                </div>
                <div class="form-group col-md-6">
                    <label for="zipcode"> Created at: </label>
                    <input type="text" id="createdat" name="createdat" class="form-control">
                </div>
            </div>

        </fieldset>
        <button type="submit" class="btn btn-primary" name="submit">Send</button>

</div>

</body>
</html>

