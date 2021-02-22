<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>To do list</title>
</head>
<body>
    <div id="main-container">
        <form id="newToDo" action="" method="POST">
            <h2>
                Type here what task would you like to add <br>
                <input type="text" name="toDo" id="toDo">
            </h2>

            <p>
                <input type="button" id="send" value="Add to do">
            </p>
        </form>
    </div>

    <div id="show-to-do"> </div>

    <script src="main.js"></script>
    <script>
        uploadToDo();
    </script>
</body>
</html>