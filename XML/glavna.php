<?php $xml = simplexml_load_file("xml.xml"); ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Lorem Ipsum</title>
    <link href="css.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</head>
<body>


<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Random knjižara</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="https://www.kgz.hr/hr">Knjižnice Grada Zagreba</a>
        </li>

      </ul>

    </div>
  </div>
</nav>

<br/>
<br/>

<?php foreach ($xml->knjiga as $knjiga): ?>

<div class="container-fluid">
  <div class="row">
    <div class="col-sm-4"></div>
    <div class="col-sm-3">
        <div class="<?php echo $knjiga->id; ?>">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-8">
                        <h3 class="text-left"><?php echo $knjiga->naslov; ?></h3>
                        <h4 class="text-left"><?php echo $knjiga->pisac; ?></h4>
                        <p class="text-left"><?php echo $knjiga->opis; ?></p>
                    </div>
                    <div class="col-sm-4">
                        <img src="<?php echo $knjiga->slika; ?>" width="130px" height="180px" class="float-end">
                    </div>
                </div>
            </div>
        </div> 
    </div>
    <div class="col-sm-4"></div>
  </div>
</div>
<br/>
<br/>
<?php endforeach; ?>

<div class="container-fluid">
  <div class="row">
    <div class="col-sm-4"></div>
    <div class="col-sm-3">
        <p class="text-center">Erik Panić</p>
    </div>
    <div class="col-sm-4"></div>
  </div>
</div>
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-4"></div>
    <div class="col-sm-3">
        <p class="text-center">XML programiranje</p>
    </div>
    <div class="col-sm-4"></div>
  </div>
</div>



</body>
</html>