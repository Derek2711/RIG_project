<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin</title>
    <!-- plugins:css -->
    @include('admin.css')
    <style>
        table {
            width: 90%;
            margin: auto;
            margin-top: 40px;

            /* text-align: center; */
        }

        th {
            text-align: center;
        }

        td {
            padding: 10px;
        }

        th,
        td {
            border: 1px solid white;
            height: 50px;
        }

        .h2 {
            text-align: center;
            font-size: 30px;
        }

        .image {
            width: 100px;
            height: 100px;
        }


        /* .center {
            text-align: center;
        } */
    </style>

</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_sidebar.html -->
        @include('admin.sidebar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_navbar.html -->
            @include('admin.header')


            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    @if(session()->has('message'))

                    <div class="alert alert-danger">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                        {{session()->get('message')}}
                    </div>

                    @endif
                    <div class="center">
                        <h2 class="h2">Product Table</h2>
                        <table class="show mb-5">
                            <tr>
                                <!-- <th>Id</th> -->
                                <th>Title</th>
                                <th>Description</th>
                                <th>Quantity</th>
                                <th>Catagory</th>
                                <th>Price</th>
                                <th>Discount Price</th>
                                <th>Product Image</th>
                                <th>Delete</th>
                                <th>Edit</th>
                            </tr>
                            @foreach($product as $product)
                            <tr>

                                <!-- <td>{{$product->id}}</td> -->
                                <td>{{$product->title}}</td>
                                <td>{{$product->description}}</td>
                                <td>{{$product->quantity}}</td>
                                <td>{{$product->catagory}}</td>
                                <td>${{$product->price}}</td>
                                <td>${{$product->discount_price}}</td>
                                <td class="">
                                    <img src="/product/{{$product->image}}" class="image" alt="{{$product->title}}">
                                </td>
                                <td><a onclick="return confirm('Are you sure to delete this product')" href="{{url('delete_product',$product->id)}}" class="btn btn-danger">Delete</a></td>
                                <td><a  href="{{url('update_product',$product->id)}}" class="btn btn-primary">Edit</a></td>
                                <!-- <td>air force</td>
                                <td>good</td>
                                <td>3</td>
                                <td>sneakers</td>
                                <td>260</td>
                                <td>30</td>
                                <td></td> -->
                            </tr>
                            @endforeach
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
</body>

</html>