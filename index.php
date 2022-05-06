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
                <form method="post">
                    Enter Your Text Here:<br>
                    <input type="text" name="name" placeholder="name" class="mb-2 form-control">
                    <input type="text" name="age" placeholder="age" class="mb-2 form-control">
                    <input type="text" name="dpt" placeholder="dpt" class="mb-2 form-control">
                    <input type="submit" name="submit" class="btn btn-success">
                </form>
            </div>
        </div>
    </div>


    <?php
        if (isset($_POST['name']) || isset($_POST['age']) || isset($_POST['dpt'])) {
            $data['name'] = $_POST['name'];
            $data['age'] = $_POST['age'];
            $data['dpt'] = $_POST['dpt'];

            $fp = fopen('data.txt', 'a');
            fwrite($fp, "Name: " .$data['name']."Age: " . $data['age'] ."Depertment" . $data['dpt']);
            fclose($fp);

            header("Location: index2.php");
            exit();
        }
    ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
