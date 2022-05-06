<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Hello!</title>
  </head>
  <body>

    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h1>This is index 2</h1>
                <form method="post">
                    Enter Your Text Here:<br>
                    <input type="text" name="textdata" class="form-control"><br>
                    <input type="submit" name="submit" class="btn btn-success">
                </form>
            </div>
        </div>
    </div>


    <?php
        if (isset($_POST['textdata'])) {
            $data = $_POST['textdata'];
            $fp = fopen('data.txt', 'a');
            fwrite($fp, $data);
            fclose($fp);
        }
    ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
