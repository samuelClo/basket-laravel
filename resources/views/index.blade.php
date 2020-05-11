<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Jost&display=swap');
        @import url('https://fonts.googleapis.com/css?family=Roboto&display=swap');

        * {
            padding: 0;
            margin: 0;
            color: #0d1214;
        }
        body {
            font-family: 'Jost', sans-serif;
        }
        ul {
            list-style: none;
        }
        a {
            text-decoration: unset;
        }
        nav {
            display: flex;
            padding: 15px 0;
            border-bottom: 1px solid #d7d7d7;
            justify-content: center;
            margin-bottom: 20px;
            font-family: 'Roboto', sans-serif;
        }
        .product {
            display: inline-flex;
            flex-direction: column;
            padding: 15px;
            box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
            width: 200px;
            border-radius: 5px;
        }

        .aside_product {
            display: flex;
            justify-content: space-between;
        }

        .picture_product {
            width: 100%;
            height: 250px;
            object-fit: cover;
            margin-bottom: 15px;
            border-radius: 5px;
        }

        .title_product {
            margin-bottom: 15px;
        }

        #wrapper {
            display: grid;
            grid-gap: 30px;
            grid-template-columns: repeat(auto-fill, minmax(209px, 1fr));
            padding: 32px 32px 0;
        }
    </style>
</head>
<body>
<header>
    <nav>
        <ul>
            <li>
                <a href="#">Acceuil</a>
            </li>
        </ul>
    </nav>
</header>

<main id="wrapper">

    @foreach ($products as $product)
        <a class="product" href="product/{{$product->id}}">
            <span class="title_product">{{$product->name}}</span>
{{--            <img decoding="async" src="{{$product->picture_path}}" alt="{{$product->name}}">--}}
            <img class="picture_product" decoding="async" src="https://picsum.photos/200/300" alt="{{$product->name}}">

            <aside class="aside_product">
                <span style="color: {{$product->colors}}">{{$product->colors}}</span>
                <span>{{$product->size}}</span>
            </aside>
        </a>
    @endforeach
</main>
</body>
</html>
