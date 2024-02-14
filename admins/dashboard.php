@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initia-scale=1">
        <title></title>
        <title>Dashbord</title>
        <!--<link  href="{{asset('css/main.css')}}" type="text/css" rel="stylesheet"/>-->
    </head>
    <body>
        <div class="container">
            <div class="card">
                <div class="card-body">
                    <h4>Employees</h4>
                    <a href="{{url('login')}}">View Employees</a>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h4>Products</h4>
                    <a href="">View products</a>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h4>Expiry</h4>
                    <a href="">View epiry of products</a>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h4>Orders</h4>
                    <a href="">View products orders done</a>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h4>supliers</h4>
                    <a href="">View supliers </a>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h4>Sales</h4>
                    <a href="">View Sales Made</a>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h4>Users</h4>
                    <a href="">View System Users</a>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h4>Stock</h4>
                    <a href="">View Stock</a>
                </div>
            </div>


        </div>
    </body>
    </body>
</html>
@endsection()
