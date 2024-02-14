@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initia-scale=1">
        <title>Suplier page</title>
    </head>
    <body>
        <div class="container">
            <div class="card">
                <div class="card-body">
                <form action="">
                <div class="input">
                    <label for="supplier name">Supplier Name:</label>
                    <input type="text" placeholder="name" name="supplier">
                </div>
                <div class="input">
                    <label for="Contact">Contact:</label>
                    <input type="number" placeholder="contact" name="contact">
                </div>
                <div class="input">
                    <label for="Email">Email:</label>
                    <input type="email" placeholder="name" name="email">
                </div>
                <div class="input">
                    <input type="submit" value="Save">
                </div>
            </form>
        </div>
        </div>
        <div class="container">
            <div class="card">
                <div class="card-body">
                        <button>Add New Emplyee</button>
                        <div class="table">
                        <table>
                            <th>Name</th>
                            <th>Contact</th>
                            <th>Email</th>
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
