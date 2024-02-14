@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-body">
            <form action="">
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
        </div>            
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

        @endsection
