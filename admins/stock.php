@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initia-scale=1">
        <title>Employees</title>
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
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-body">
                                <div>
                                    @if(session('status'))
                                    <div>
                                        {{session('status')}}
                                    </div>
                                    @endif
                                <form action="" method="POST">
                                    <div class="input">
                                        <label for="Name">Supplier</label>
                                        <input type="text" placeholder="Name"  name="name">
                                    </div>
                                    <div class="input">
                                        <label for="Contact" >Date</label>
                                        <input type="date"name="date">
                                    </div>
                                    <div class="input">
                                        <label for="Sell Price">Sell Price</label>
                                        <input type="number" placeholder="price" name="price">
                                    </div>
                                    <div class="input">
                                        <label for="Tax">Tax</label>
                                        <input type="number" placeholder="tax" name="tax">
                                    </div>
                                    <div class="input">
                                        <label for="Quantity">Quantity:</label>
                                        <input type="number" placeholder="Quantity" name="quantity">
                                    </div>
                                    <div class="input">
                                        <label for="price">Buying Price:</label>
                                        <input type="number" placeholder="price" name="bPrice">
                                    </div>
                                    <div class="input">
                                        <input type="submit">
                                    </div>
                                </form>
                                </div>

                            </div>
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
                            <th>Supplier</th>
                            <th>Date</th>
                            <th>Sell Price</th>
                            <th>Tax</th>
                            <th>Quantity</th>
                            <th>Buying Price</th>
                            <tbody>
                                <tr style=" counter-increment: rowNumber;">
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
    </body>
</html>
@endsection()
