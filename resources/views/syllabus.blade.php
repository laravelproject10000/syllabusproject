@extends('layouts.studentmaster')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="assests/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"/>
</head>

<body>
  <!---Existing code-->
  <div class="container">

    <!--Top Navbar-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <img src="assests/img/download.png" width="300"class="d-inline-block align-top"  alt="">
        {{-- <a class="navbar-brand" href="#">Bharathiar University</a> --}}
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
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


    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Syllabus</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Student Dashboard</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>



    <form action="" method="get" class="d-flex flex-row mb-3" style="margin: 2rem 0;">

        <div style="margin-right: 30px">
            <select name="Year_Regulate" id="Year_Regulate" class="btn btn-secondary dropdown-toggle" aria-label="Default select example">>
                <option value="">Year_Regulate</option>
                @if(!empty($articles))
                    @foreach ($articles as $article)
                        <option>{{ $article->Year_Regulate }}</option>
                    @endforeach
                @endif
            </select>
        </div>

        <div style="margin-right: 30px">
            <select name="Department " id="Department" class="btn btn-secondary dropdown-toggle" aria-label="Default select example">>
                <option value="">Department</option>
                    @if(!empty($articles))
                        @foreach ($articles as $article)
                            <option>{{ $article->Department }}</option>
                        @endforeach
                    @endif
            </select>
        </div>

        <div style="margin-right: 30px">
            <select name="Program" id="Program" class="btn btn-secondary dropdown-toggle" aria-label="Default select example">>
                <option value="">Program</option>
                @if(!empty($articles))
                    @foreach ($articles as $article)
                        <option>{{ $article->Program }}</option>
                    @endforeach
                @endif
            </select>
        </div>

        <div style="margin-right: 30px">
            <select name="Semester" id="Semester" class="btn btn-secondary dropdown-toggle" aria-label="Default select example">>
                <option value="">Semester</option>
                @if(!empty($articles))
                    @foreach ($articles as $article)
                        <option>{{ $article->Semester }}</option>
                    @endforeach
                @endif
            </select>
        </div>

        <button type="submit" class="btn btn-primary" style="margin-right: 30px">submit</button>
    </form>





    <table class="table" style="margin-top: 40px">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Year</th>
            <th scope="col">Department</th>
            <th scope="col">Program</th>
            <th scope="col">Semester</th>
            <th scope="col">DOWNLOAD</th>
            </tr>
        </thead>
        <tbody>
            @if(!empty($articles))
            @foreach ($articles as $article)
                <tr>
                    <td>{{ $article->id  }}</td>
                    <td>{{ $article->Year_Regulate  }}</td>
                    <td>{{$article->Department  }}</td>
                    <td>{{ $article->Program  }}</td>
                    <td>{{ $article->Semester  }}</td>
                    <td>
                        <a href=<?=url( "../images/$article->File") ?> class="btn btn-success" download>Download pdf</a>
                    </td>
                </tr>
            @endforeach
        @endif

        </tbody>
    </table>

</body>
</html>


@endsection
