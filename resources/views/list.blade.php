@extends('layouts.staffmaster')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Syllabus_View</title>

      <!--Bootstrap css-->
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

      <link rel="stylesheet" href="resources/css/style.css">

       <!-- ====== Fontawesome CDN Link ====== -->
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"/>

</head>
<body>

    <div class="container">

            <!--Top Navbar-->
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <img src="assets/buicon.jfif" width="30" height="30" class="d-inline-block align-top" alt="">
                <a class="navbar-brand" href="#">Bharathiar University</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                    <a class="nav-link" href="create">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                        Dropdown
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                    </li>

                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>

                    <!-- profile logout -->
                    <ion-icon name="log-out-outline"></ion-icon>
                </div>
            </nav>
            <!--Top Navbar end-->
                <!--TItle of dashbord-->
        <div class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1 class="m-0">View Page</h1>
              </div><!-- /.col -->
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="create">Home</a></li>
                  <li class="breadcrumb-item active">Admin Dashboard</li>
                </ol>
              </div><!-- /.col -->
            </div><!-- /.row -->
          </div><!-- /.container-fluid -->
        </div>

        <section class="content">
              <div class="container-fluid">
    <form action="<?=url('view')?>"method="put"  enctype="multipart/form-data">
    @method('PUT')
        <table class="table">
            <thead class="table-dark">
            <tr>

                <td>id</td>
                <td>Year/Regulate</td>
                <td>Department</td>
                <td>Program</td>
                <td>Semester</td>
                <td>Max_time</td>
                <td>Credits</td>
                <td>File</td>
                <td>Edit</td>
                <td>Delete</td>
            </tr>
            </thead>
            @foreach ($data as $syll)
            <tr>
                <td>{{$syll->id}}</td>
                <td>{{$syll->Year_Regulate}}</td>
                <td>{{$syll->Department}}</td>
                <td>{{$syll->Program}}</td>
                <td>{{$syll->Semester}}</td>
                <td>{{$syll->Max_time}}</td>
                <td>{{$syll->Credits}}</td>
                <td>{{($syll->File)}}</td>


                <td><a href="{{url('edit',$syll->id)}}">
                  <button type="button" class="btn btn-primary float-right">edit</button></a></td>
                <td>

                  <form method="POST" action="{{ url('delete', $syll->id) }}" accept-charset="UTF-8" style="display:inline">
                    {{ method_field('DELETE') }}
                    {{ csrf_field() }}
                    <button type="submit" class="btn btn-danger btn-sm" name="delete" title="Delete Contact" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                    </form>
                </td>
                <!-- @csrf

                <td><a href="{{url('delete'.$syll->id)}}" ><button  class="btn btn-danger">delete</button></a></td>  -->

            </tr>
            @endforeach

        </table>

         <!--bootstrap js-->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    </form>
</div>

</div>

</body>
</html>
@endsection
