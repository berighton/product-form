<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>


    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">


    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="align-content-center">
        <h1>Product form</h1>
    </div>
    <form>
        <div class="form-group">
            <label for="productName">Product name</label>
            <input type="text" class="form-control" id="productName" placeholder="Product name" required="required">
        </div>
        <div class="form-group">
            <label for="quantity">Quantity in stock</label>
            <input type="number" class="form-control" id="quantity" placeholder="1" required="required">
        </div>
        <div class="form-group">
            <label for="price">Price per item</label>
            <input type="number" step="0.01" class="form-control" id="price" placeholder="1" required="required">
        </div>

        <button type="submit" id="formSubmit" class="btn btn-primary">Add</button>
    </form>

    <?php if($data = json_decode(file_get_contents(\App\Product::getFileName()), true)): ?>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Product Name</th>
            <th scope="col">Quantity in stock</th>
            <th scope="col">Price per item</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach($data as $index=>$row): ?>
        <tr>
            <th scope="row"><?= $index+1; ?></th>
            <td><?= $row['name']; ?></td>
            <td><?= $row['qty']; ?></td>
            <td><?= $row['price']; ?></td>
        </tr>
        <?php endforeach; ?>
        </tbody>
    </table>




    <?php endif; ?>
</div>

<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>

</body>
</html>
