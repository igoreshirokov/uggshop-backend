<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
    </head>
    <body>
        <h1>Shoplaraproject</h1>


        <script>

            let product;

            product = fetch('http://shoplaraproject.test/api/v1/product/1')
            .then((response) => response.json())
            // .then((product) => console.log(product))
            .then((json) => product = json)
            .then(((product) => {
                document.querySelector('h1')
                .innerHTML = "<li>"+product[0].title+"</li><li>"+product[0].price+"</li><li><img src="+ JSON.parse(  product[0].images )+" /></li>";
            }));

            // <img src="+ JSON.parse(  product[0].images )+" />



                // fetch('http://shoplaraproject.test/api/v1/products/10')
                // .then((response) => response.json())
                // .then((json) => console.log(json))
                // .then(() => console.log('One product 1 = product_id /n'));
                // fetch('http://shoplaraproject.test/api/v1/categories')
                // .then((response) => response.json())
                // .then((json) => console.log(json))
                // .then(() => console.log('all categories /n'));


            </script>

    </body>
