@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initia-scale=1">
        <title></title>
        <!--<link rel="stylesheet" href="css/main.css">-->
        <title>Products</title>
    </head>
    <body>
        <style>
			body{
				background-size: 100%;
			}
			form{
				margin: auto;
				width: 20%;
				font-family: sans-serif;
				border: 1px solid black;
				height: 60%;
				border-radius: 5px;

			}
			h3{
				text-align: center;
				font-family: sans-serif;
				width: 100%;
				margin: auto;
				font-weight: bold;
				height: 20px;
			}
			.input{
				font-family: sans-serif;
			}
			input label{
				font-size: 20px;
			}
			.input input{
				height: 20px;
				width: 70%;
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
			.register a{
				text-decoration: none;
			}


		</style>
        <div class="container">
			<div class="card">
				<div class="card-body">
				<div class="form">
                <form action="" method="POST">
                    <div class="input">
                        <label for="Name">Name</label>
                        <input type="text" placeholder="Drug Name"  name="drugName">
                    </div>
                    <div class="input">
                        <label for="Dosage" >Dosage</label>
                        <input type="text" placeholder="Dosage" name="dosage">
                    </div>
                    <div class="input">
                        <label for="Drug Type">Drug Type</label>
                        <input type="text" placeholder="Drug Type" name="type">
                    </div>
                    
                    <div class="input">
                        <input type="submit" value="Save">
                    </div>

                </form>
            </div>
				</div>
			</div>
            
        </div>
		<div class="container">
            <div class="card">
                <div class="card-body">
                        <button>Add New Emplyee</button>
                        <div class="table">
                        <table>
                            <th>Name</th>
                            <th>Dosage</th>
                            <th>Drug Type</th>
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
    </body>
</html>
@endsection()