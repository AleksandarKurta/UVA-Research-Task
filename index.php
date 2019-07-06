<?php require_once 'SacramentoRealEstate.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UVA Research</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body class="bg-dark">
    <div class="container mt-3 mb-3">
        <div class="text-center text-white mt-3 mb-5">
            <h1>Sacramento Real Estate Transactions</h1>
        </div>

        <div class="col-md-12">
            <div class="row">
                <div class="input-group mb-3 col-md-4">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">City</span>
                    </div>
                    <input type="text" class="form-control" id="city" onkeyup="filterTable()" aria-describedby="basic-addon1">
                </div>

                <div class="input-group mb-3 col-md-4">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">Sq_ft From</span>
                    </div>
                    <input type="number" class="form-control" id="sqftFrom" step="50" min="0" onkeyup="filterTable()" oninput="filterTable()" aria-describedby="basic-addon1">
                </div>

                <div class="input-group mb-3 col-md-4">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">Sq_ft To</span>
                    </div>
                    <input type="number" class="form-control" id="sqftTo" min="0" step="50" onkeyup="filterTable()" oninput="filterTable()" aria-describedby="basic-addon1">
                </div>
            </div>

            <div class="row">
                <div class="input-group mb-3 col-md-4">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">Beds</span>
                    </div>
                    <input type="number" class="form-control" id="beds" min="0" onkeyup="filterTable()" oninput="filterTable()" aria-describedby="basic-addon1">
                </div>

                <div class="input-group mb-3 col-md-4">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">Price From</span>
                    </div>
                    <input type="number" class="form-control" id="priceFrom" min="0" step="5000" onkeyup="filterTable()" oninput="filterTable()" aria-describedby="basic-addon1">
                </div>

                <div class="input-group mb-3 col-md-4">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">Price To</span>
                    </div>
                    <input type="number" class="form-control" id="priceTo" min="0" step="5000" onkeyup="filterTable()" oninput="filterTable()" aria-describedby="basic-addon1">
                </div>
            </div>

            <div class="row">
                <div class="input-group mb-3 col-md-4">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">Baths</span>
                    </div>
                    <input type="number" class="form-control" id="baths" min="0" onkeyup="filterTable()" oninput="filterTable()" aria-describedby="basic-addon1">
                </div>
            </div>
        </div>
    </div>

    <table class="table table-dark" id="myTable">
        <thead class="thead-dark">
            <tr>
                <?php foreach($sacramentoRealEstate->getThead() as $theadValue): ?>
                    <th scope="col"><?php echo $theadValue ?></th>
                <?php endforeach; ?>
            </tr>
        </thead>
        <tbody>
            <?php foreach($sacramentoRealEstate->getTbody() as $tbodyValue): ?>
                    <tr>
                        <?php foreach($tbodyValue as $value): ?>
                            <td><?php echo $value ?></td>
                        <?php endforeach; ?>
                    </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div id="search" class="text-white text-center mt-5"></div>
</body>
<script src="js/main.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>

