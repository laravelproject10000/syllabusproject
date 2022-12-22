@extends('layouts.staffmaster')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit_page</title>

    <!--Bootstrap css-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <link rel="stylesheet" href="resources/css/style.css">

     <!-- ====== Fontawesome CDN Link ====== -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"/>

</head>
<body>
<?=session('message')?>
    <form action="{{url('update/'.$syll->id)}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')


   <!---Existing code-->
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
                <h1 class="m-0">Dashboard</h1>
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

            <!-- Main content -->
            <section class="content">
              <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                  <div class="col-lg-3 col-6">
                    <!--dropdown 1-->
                    <div class="dropdown">
                      <select class="btn btn-secondary dropdown-toggle" value="{{$syll->Year_Regulate}}" type="button" data-toggle="dropdown" aria-expanded="false" name="year">
                        <option  value="Year/Reguate" href="#">Year/Reguate</option>
                        <option  value="2019 - 2020" href="#">2019 - 2020</option>
                        <option  value="2020 - 2021" href="#">2020 - 2021</option>
                        <option  value="2021 - 2022" href="#">2021 - 2022</option>
                      </select>
                    </div>


                  </div>
                  <!-- ./col -->
                  <div class="col-lg-3 col-6">
                    <!--dropdown 1-->
                    <div class="dropdown">
                      <select class="btn btn-secondary dropdown-toggle" value="{{$syll->Department}}" type="button" data-toggle="dropdown" aria-expanded="false" name="dept">
                        <option  value="department" href="#">Department</option>
                        <option  value="MCA" href="#">MCA</option>
                        <option  value="DA" href="#">DA</option>
                        <option  value="IT" href="#">IT</option>
                      </select>
                    </div>
                  </div>
                  <!-- ./col -->
                  <div class="col-lg-3 col-6">
                    <!-- dropdown 3 -->
                    <div class="dropdown">

                      <select class="btn btn-secondary dropdown-toggle" value="{{$syll->Program}}" type="button" data-toggle="dropdown" aria-expanded="false" name="prg">
                        <option  value="Program" href="#"> Program</option>
                        <option  value="DA" href="#">DA</option>
                        <option  value="AI" href="#">AI</option>
                        <option  value="BDA" href="#">BDA</option>
                      </select>
                    </div>
                  </div>
                  <!-- ./col -->
                  <div class="col-lg-3 col-6">
                    <!-- dropdown 4 -->
                    <div class="dropdown">

                      <select class="btn btn-secondary dropdown-toggle" value="{{$syll->Semester}}" type="button" data-toggle="dropdown" aria-expanded="false" name="sem">
                        <option  value="Semester" href="#"> Semester</option>
                        <option  value="1st" href="#">1st</option>
                        <option  value="2nd" href="#">2nd</option>
                        <option  value="3rd" href="#">3rd</option>
                        <option  value="4th" href="#">4th</option>
                      </select>
                      </div>
                    </div>
                  </div>
                  <!-- ./col -->
                </div>
              </li>
            </ul>
            <hr>

                <!--second-->
                <div class="row">
                  <div class="col-3">
                        <div class="form-group">
                          <label for="exampleFormControlInput1">Max Time</label>
                          <input type="text" class="form-control" name="maxtime" value="{{$syll->Max_time}}" id="exampleFormControlInput1" placeholder="Enter Time duration">
                        </div>
                    </div>
                   <div class="col-3">
                      <div class="form-group">
                        <label for="exampleFormControlInput1">Credits</label>
                        <input type="text" class="form-control" name="cred" value="{{$syll->Credits}}" id="exampleFormControlInput1" placeholder="Enter Credits">
                      </div>
                    </div>

                    <div class="col-4">
                      <label for="exampleFormControlInput1">Upload file</label>

                        <input type="file" name="image">
                        <!--input type="submit" -->



                    </div>

                    <div class="col-2">

                      <button type="submit" class="btn btn-primary" name="update">Update</button>
                        <!---span class="popuptext" id="myPopup">File uploaded Successfully</span-->
                      </div>

                    </div>



                </div>

    <!--bootstrap js-->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

</body>
</html>
@endsection
