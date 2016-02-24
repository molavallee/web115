<!doctype html>
<html>
 <head>
    <title>PHP include</title>
   <style>
    body{
        background-color: darkslategray;
    }
    #container{
        width:960px;
        min-height: 600px;
        background: ivory;
        color: darkslateblue;
        font-family:fantasy;
        font-size:20px;
    }
    main{
        min-height: 500px;
    }
    footer{
        min-height: 50px;
    }
    </style>
    </head>
    <body>
    <div id="container">
        <h1>text should go here</h1>
        <main>
        </main>
        <footer>
        <?php include 'footer.php';?>
        
        </footer>
        </div>
    </body>
    
</html>