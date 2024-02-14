@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initia-scale=1">
        <title>Order Page</title>
        <link rel="stylesheet" type="text/css" href="css/main.css" >
    </head>
    <body>
        <div class="container">
            <form action="">
                <div class="input">
                    <label for="date">Date:</label>
                    <input type="date" placeholder="date ordered" name="order">
                </div>
                <div class="input">
                    <label for="Quantity">Quantity:</label>
                    <input type="number" placeholder="quantity" name="quantity">
                </div>
                <div class="input">
                    <label for="amount">Amount:</label>
                    <input type="number" placeholder="amount" name="amount">
                </div>
                <div class="input">
                    <label for="disount">Discount:</label>
                    <input type="number" placeholder="discount" name="discount">
                </div>
                <div class="input">
                    <label for="paymode">Paymode:</label>
                    <input type="text" placeholder="paymode" name="paymode">
                </div>
                <div class="input">
                    <label for="product">Product:</label>
                    <input type="text" placeholder="product name" name="product">
                </div>
                <div class="input">
                    <input type="submit" value="Save">
                </div>
            </form>
        </div>
        <div class="container">
            <div class="card">
                <div class="card-body">
                        <button>Add New Emplyee</button>
                        <div class="table">
                        <table>
                            <th>Date</th>
                            <th>Quantity</th>
                            <th>Amount</th>
                            <th>Discount</th>
                            <th>Paymode</th>
                            <th>Product</th>
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
@endsection()
