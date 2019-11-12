<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/da093b66f4.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Inconsolata|McLaren&display=swap" rel="stylesheet">
    <title>Document</title>
    <style>

        body{
            border: 0;
            margin: 0;
            
            background-color: #D0D3D4;
        }

        .one{
            
            background-color: black;
            height: 60px;
            padding: 5px;
        }

        a{
            text-decoration: none;
            color: white;
            text-align: center;
            
        }

        a[href = "renderAddPizza"]{
            text-decoration: none;
            color: black;
            text-align: center;
            
        }

        #add{
            font-size: 50px;
            position: absolute;
            left: 47%;
            color: black;
        }

        .clr{
            clear: both;
        }

        h2{
            margin: 0;
            border: 0;
            padding: 10px;
            text-decoration: underline;
        }

        input[type = "text"]{
            margin: 0;
            border: 0;
            padding: 3px;
            border-bottom: 1px solid black;
            background-color: #D0D3D4;
            font-family: 'Inconsolata', monospace;
            font: 20px black;
            display: block;

        }

        form{
            padding: 3px;
            border: 2px dashed black;
            margin-top: 10px;
            position: absolute;
            left: 40%;
            
        }

        .error{
            color: red;
            font-family: 'Inconsolata', monospace;
        }

        input[type = "submit"]{

            background-color: 

        }

        .foot{
            position: fixed;
            bottom: 0%;
            background-color: black;
            color: white;
            width: 100%;
            text-align: center;
        }

        .pizzaCyl{
            background-color: #FFECEA;
            width: 50%;
            position: absolute;
            right: 26%;
            text-align: center;
        }

        .box{
            padding: 3px;
            border-bottom: 2px dashed #F2D1CE;
        }

        .pizzaName{
            font-size: 30px; 
        }
        

    </style>
</head>
<body class = "main">

<nav class="one">
<a href="render.php" class = "link"><h2>Pizza Recipies</h2></a>

</nav>