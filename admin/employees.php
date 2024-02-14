

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initia-scale=1">
        <title></title>
        <title>Employees</title>

    <script type="text/javascript">
        function openForm{
            document.getElementById("form").style.display="none";
        }
    </script>
 
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
                width: 60%;
            }
			form{
				margin: auto;
				width: 50%;
				font-family: sans-serif;
				border: 2px solid black;
				height: 100%;
                border-radius: 5px;
                margin-top: 50px;
                background-color: purple;

			}
			.input{
				font-family: sans-serif;
			}
			.input label{
				font-size: 30px;
                color: white;
			}
			.input input{
				height: 40px;
				width: 95%;
			}
            .input button{
                background-color: red;
                color: white;
                font-weight: bold;
                font-size: 22px;
                font-family: sans-serif;
                padding: 10px;
                margin-left: 130px;
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
                font-size: 26px;
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
                                    <?php echo display_error(); ?> 
                                    <div class="input">
                                        <label for="Name">Name</label><br>
                                        <input type="text" placeholder="Name"  name="name">
                                    </div>
                                    <div class="input">
                                        <label for="Contact" >Contact</label><br>
                                        <input type="text" placeholder="Contact" name="contact">
                                    </div>
                                    <div class="input">
                                        <label for="email">Email</label><br>
                                        <input type="email" placeholder="email" name="email">
                                    </div>
                                    <div class="input">
                                        <label for="Id Number">Id Number</label><br>
                                        <input type="number" placeholder="number" name="idno">
                                    </div>
                                    <div class="input">
                                        <input type="submit" value="Save"  style="background-color: blue; color: white; font-family: sans-serif;font-weight: bold;" name="emp_btn">
                                    </div>
                                    <div class="input">
                                        <button onclick="openForm()">Close</button>
                                    </div>
                                </form>
            </div>
            <div class="table">
                        <button onclick="openForm()">Add New Emplyee</button>
                        <div class="table">
                        <table>
                            <th>Mfg Date</th>
                            <th>Exp Date</th>
                            <th>Quantity</th>
                            <th>Update</th>
                            <th>Delete</th>
                            <tbody></tbody>
                        </table>
                    </div>
                </div>

    </div>
    </body>
    </body>
</html>
