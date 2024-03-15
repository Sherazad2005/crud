<head>
    <meta charset="UTF-8">
    <title>Accueil</title>
    <pre>












    <h1>Gestion du stock LPRS</h1>
    </pre>
    <style>
        * {
            box-sizing: border-box;
        }

        .box {
            display: inline-block;
            width: 100px;
            height: 100px;
            background: red;
            color: white;
        }
        .box {
            display: inline-block;
            width: 100px;
            height: 100px;
            background: #08ff00;
            color: white;
        }

        .box {
            display: inline-block;
            width: 100px;
            height: 100px;
            background: #0051ff;
            color: white;
        }
        .box {
            display: inline-block;
            width: 100px;
            height: 100px;
            background: #ffd500;
            color: white;
        }
        h1 {
            text-align: center;5center


        text-transform: uppercase;
        }
        p {
            text-align: center;
            text-transform: uppercase;
        }

        .button{
            background-color: #f10822;
        }
        .button2{
            background-color: #e1cc3f;
        }
        .button3{
            background-color: #0051ff;
        }
        .button4{
            background-color: #17c715;
        }

        body{
            height: 100vh;
            background-size: cover;
            background-position: center;
            text-align: center;
        }

    </style>
</head>
<body>

</body>


<p>Mise à jour base de données:  <button class="button" onclick="window.location.href = 'miseajourbdd.php';" style="width: 30px; height: 20px;"></button></p>
<p>Etat des stocks :  <button class="button button2" onclick="window.location.href = 'etatstock.php';" style="width: 30px; height: 20px;"></button></p>
<p>Bon de commande :  <button class="button button3" onclick="window.location.href = 'boncommande.php';" style="width: 30px; height: 20px;"></button></p>
<p>Bon de debit matière :  <button class="button button4" onclick="window.location.href = 'bondebit.php';" style="width: 30px; height: 20px;"></button></p>
