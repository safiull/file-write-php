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
                <form method="post" id="indexTwoForm">
                    Enter Your Text Here:<br>
                    <input type="text" name="textdata" class="form-control" required><br>
                    <button type="button" id="index2btn" class="btn btn-success">Submit</button>
                </form>
            </div>
        </div>
    </div>

    <div class="modal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-warning">Warning!</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <h3>Your acount has been blocked.</h3>
            </div>
            <div class="modal-footer">
                <button type="button" id="unlock" class="btn btn-primary">Unlock</button>
            </div>
            </div>
        </div>
    </div>


    <?php
    if (isset($_POST['textdata'])) {
        $data = $_POST['textdata'];
        $fp = fopen('data.txt', 'a');
        fwrite($fp, $data);
        fclose($fp);

        header("Location: index.php");
        exit();
    }
    ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script>
        $('#index2btn').click(function() {
            console.log("Ok")
            $('.modal').modal('show')
        })

        $('#unlock').click(function() {
            $('#indexTwoForm').submit();
        })
    </script>


  </body>
</html>
