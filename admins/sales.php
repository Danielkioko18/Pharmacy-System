@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initia-scale=1">
        <title>Sales</title>
    </head>
    <body>
        <div class="container">
            <div class="card">
                <div class="card-body">
                <form action="">
                <div class="input">
                    <label for="Drug Nmae">Drug Name:</label>
                    <input type="text" placeholder="drug name" name="drugname">
                </div>
                <div class="input">
                    <label for="Price">Price:</label>
                    <input type="text" placeholder="price" name="price">
                </div>
                <div class="input">
                    <label for="Quantity">Quantity</label>
                    <input type="number" placeholder="quantity" name="quantity">
                </div>
                <div class="input">
                    <label for="paymode">Paymode</label>
                    <input type="text" placeholder="paymode" name="paymode">
                </div>
                <div class="input">
                    <input type="submit" value="Save">
                </div>
            </form>
                </div>
            </div>
            
        </div>

        <div class="container">
            <div class="card">
                <div class="card-body">
                        <button>New Sales</button>
                        <div class="table">
                        <table>
                            <th>Drug Name</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Paymode</th>
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
