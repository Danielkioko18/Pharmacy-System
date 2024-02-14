<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>expiry</title>
</head>
<body>
    <?php include 'common/actions.php'; ?>
        <style>
            body{
                background-size: 100%;
            }
            .container{
                margin-left: 20%;
                width: 80%;
            }
            .form{
                position: fixed;
                z-index: 10;
                margin-left: 200px;
                display: none;
            }
            form{
                margin: auto;
                width: 140%;
                font-family: sans-serif;
                border: 2px solid black;
                height: 118%;
                border-radius: 5px;
                margin-top: 50px;

            }
            .input{
                font-family: sans-serif;
            }
            .input label{
                font-size: 30px;
            }
            .input input{
                height: 40px;
                width: 95%;
            }
            .input button{
                background-color: red;
                color: white;
                font-weight: bold;
                font-family: sans-serif;
            }
            .login{
                margin-left: 60px;

            }
            .login input{
                border: 1px solid blue;
                background-color: blue;
                border-radius: 2px;
                color: white;
                font-family: inherit;
                font-size: 20px;

            }
            .table{
                width: 800px;
                margin: auto;
                font-family: sans-serif;
                background-color: yellow;
            }
            .table button{
                background-color: blue;
                padding: 10px;
                border-radius: 2px;
                border: none;
                color: white;
                font-size: 20px;
                font-weight: bold;
                margin-left: 300px;
            }
            table{
                background-color: darkblue;
                color: white;
            }
            .table table,th,tr,td{
                border: 1px solid yellowgreen;
                border-collapse: collapse;
            }
            th,td{
                width: 170px;
            }
        </style> 
    <div class="container">
       <div class="form" id="form">
            <form action="" method="POST">
                <div class="input">
                    <label for="Mnfg Date">Mnfg Date</label>
                    <input type="text" placeholder="Mnfg Date" name="mfgdate">
                </div>
                <div class="input">
                    <label for="Exp Date">Exp Date</label>
                    <input type="text" placeholder="Exp Date" name="expdate">
                </div>
                <div class="input">
                    <label for="quantity">Quantity</label>
                    <input type="text" placeholder="quantity" name="quantity">
                </div>
                <div class="input">
                    <input type="submit" value="Save">
                </div>
            </form>
        </div>
    <div class="card">
                <div class="card-body">
                        <button>Add New Emplyee</button>
                        <div class="table">
                        <table>
                            <th>Mfg Date/th>
                            <th>Exp Date</th>
                            <th>Quantity</th>
                            <tbody>
                                <tr  style=" counter-increment: rowNumber;">
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>


</body>
</html>

