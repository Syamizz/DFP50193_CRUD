<!doctype html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>CRUD</title>

    
  </head>

    <style>
        body{
            background: skyblue;
            font-family: Arial, Helvetica, sans-serif;
        }

        h1,h2{
            color: black;
        }


        th{
            width: 180px;
            color: black;
        }

        #btn{
            background-image: linear-gradient(to right, #1FA2FF 0%, #12D8FA  51%, #1FA2FF  100%);
            margin: 10px;
            padding: 15px 45px;
            text-align: center;
            text-transform: uppercase;
            transition: 0.5s;
            background-size: 200% auto;
            color: white;            
            box-shadow: 0 0 20px #eee;
            border-radius: 10px;
            display: block;
          }

          #btn:hover {
            background-position: right center; /* change the direction of the change here */
            color: #fff;
            text-decoration: none;
          }
    </style>

  <body>
    <div class="container">
        <h2>INFO PELAJAR</h2>
        <hr>
        <div class="row">
           <div class="col-md-8">
               <form action="insert_data.php"method="post">
                    <table>
                        <tr>
                            <th>Nama</th>
                            <td><input required type="text" class="form-control" name="nama"></td>
                        </tr>
                        <tr>
                            <th>No. Matrik</th>
                            <td><input required type="text" class="form-control" minlength="12" maxlength="12" name="noMatrik"></td>
                        </tr>
                        <tr>
                            <th>Kelas</th>
                            <td><input required type="text" class="form-control" name="kelas"></td>
                        </tr>
                        <tr>
                            <th>No. Kad Pengenalan</th>
                            <td><input required type="text" class="form-control" minlength="12" maxlength="12" name="noKP"></td>
                        </tr>
                        
                    </table>
                    <hr>
                    <div class="form-group">
                       <button id="btn"name="submit" type="submit" class="btn btn-primary">Submit</button>
                   </div>
               </form>
           </div>
            
        </div>
    </div>
   
  </body>

</html>