<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row d-flex align-content-center justify-content-center" style="height: 100vh;">
            <div class="col-7">
                <form action="POST" id="form2">
                    <h1 class="mb-5">
                        FIGMA API
                    </h1>

                    <div class="form-group">
                        <!-- ok -->
                        <input type="text" class="form-control" name="client_id" id="" aria-describedby="helpId" placeholder="client_id" value="S4sCUPIMRdlWLuUPknQYtj">
                    </div>

                    <div class="form-group">
                        <!-- ok -->
                        <input type="text" class="form-control" name="client_secret" id="" aria-describedby="helpId" placeholder="client_secret" value="a8pQUfwu6ByDep09wRkntCGx3vd1b0">
                    </div>
                    <div class="form-group">
                        <!-- ok -->
                        <input type="text" class="form-control" name="redirect_uri" id="" aria-describedby="helpId" placeholder="callback" value="http://127.0.0.1/2019/APIs-Repository/Figma/callback.php">
                    </div>
                    <div class="form-group">
                        <!-- ok -->
                        <input type="text" class="form-control" name="code" id="" aria-describedby="helpId" placeholder="code" value="<?php echo $_GET['code']; ?>">
                    </div>
                     <div class="form-group">
                        <!-- ok -->
                        <input type="text" class="form-control" name="grant_type" id="" aria-describedby="helpId" placeholder="grant_type" value="authorization_code">
                    </div>

                    <button type="submit" class="btn btn-primary w-100">Submit</button> 
                </form>
            </div>
        </div>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="./assets/js/main.js?55008000"></script>
</body>

</html>