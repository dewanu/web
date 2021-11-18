<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <title>Welcome to Our Personal Social Network</title>
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
          <img src="https://gambar.oss-ap-southeast-5.aliyuncs.com/alicloudlogo.png" class="rounded mx-left d-block" alt="alicloud">
          <br>
          <h1 class="display-4">Hello, Alibaba Cloud!</h1>
          <hr class="my-4">
          <p class="lead">This is a simple demo website using Alibaba Cloud ECS and SLB service.</p>
          <hr class="my-4">
          <p>
            <button class="btn btn-success" type="button" data-toggle="collapse" data-target="#collapsePHP" aria-expanded="false" aria-controls="collapsePHP">PHP Version</button>
            <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseSQL" aria-expanded="false" aria-controls="collapseSQL">SQL Query</button>
          </p>
          <div class="collapse" id="collapsePHP">
            <div class="card card-body">
              <?php echo 'Current PHP version: ' . phpversion(); ?>
            </div>
          </div>  
          <div class="collapse" id="collapseSQL">
            <div class="card card-body">
              <h1>Maunya sih ini nampilin data SQL.</h1>
            </div>
          </div>
        </div>
    </div>
  </body>
</html>
