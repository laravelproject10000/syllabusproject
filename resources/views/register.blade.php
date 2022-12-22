<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="author" content="Kodinger">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>My Login Page</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="resources/css/app.css">
    <link rel="stylesheet" href="{{ URL::to('assets/app.css') }}">
    <style>
        ul {
  list-style-type: none;
  margin: 10;
  padding: 10;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

/* Change the link color to #111 (black) on hover */
li a:hover {
  background-color: #111;
}
        /* ul {
          list-style-type: none;
          margin: 0;
          padding: 0;
          overflow: hidden;
        }

        li {
          top: 0px;
          bottom: 100px;
          float: right;
        }

        li a {
          display: block;
          padding: 8px;
          background-color: #dddddd;
        /* } */
        </style>

    </head>


<body class="my-login-page">
	<section class="h-100">
		 <div>
            <section id="header">
                <div class="header container">
                  <div class="nav-bar">
                    <div class="banner">
                        <img src="../assets/banner.jpg" width="500px" height="100px" alt=""/>
                        </div>
                    <div class="nav-list">
                      <div class="hamburger">
                        <div class="bar"></div>
                      </div>
                      <ul>
                        <li><a href="#home" data-after="Home">Home</a></li>
                        <li><a href="#about" data-after="About">About</a></li>
                        <li><a href="#alumni" data-after="Alumni">Alumni</a></li>
                        <li><a href="#club" data-after="Club">Club</a></li>
                        <li><a href="#payment" data-after="Online payment">Online Payment</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </section>

</div>

		<div class="container h-100">
			<div class="row justify-content-md-center h-100">
				<div class="card-wrapper">

					<div class="shadow p-3 mb-5 bg-white rounded">
					<div class="card fat">
						<div class="card-body">
							<h4 class="card-title" align="center">Register</h4>
							<form action="{{route('register-user')}}" method="post">
                                @if(Session::has('success'))
                                <div class="alert alert-success">{{Session::get('success')}}</div>
                                @endif
                                @if(Session::has('fail'))
                                <div class="alert alert-danger">{{Session::get('fail')}}</div>
                                @endif

                                @csrf


								<div class="form-group">
									<label for="name">Name</label>
									<input id="name" type="name" class="form-control" name="name" placeholder="name" value="{{old('name')}}" required autofocus>
                                    <span class="text-danger">@error('name'){{$message}}@enderror</span>
                                </div>


								<div class="form-group">
									<label for="email">E-Mail Address</label>
									<input id="email" type="email" class="form-control" name="email" placeholder="abc@gmail.com" value="{{old('email')}}" required autofocus>
									<div class="invalid-feedback">
										Email is invalid
									</div>
                                    <span class="text-danger">@error('email'){{$message}}@enderror</span>
								</div>


								<div class="form-group">
									<label for="password">Password
										<a href="forgot.html" class="float-right">
											Forgot Password?
										</a>
									</label>
									<input id="password" type="password" class="form-control" name="password" placeholder="*******" required data-eye>
								    <div class="invalid-feedback">
								    	Password is required
							    	</div>
                                    <span class="text-danger">@error('password'){{$message}}@enderror</span>
								</div>

                                <div>Roles
                                <select class="form-control" id="role_name" name="role_name" required focus>
									<option value="Staff"  selected>Staff</option>
									<option value="Student" selected>Student</option>
								</select>
                                <span class="text-danger">@error('role_name'){{$message}}@enderror</span>
                                </div>
                                <br>



								<div class="form-group">
									<div class="custom-checkbox custom-control">
										<input type="checkbox" name="remember" id="remember" class="custom-control-input">
										<label for="remember" class="custom-control-label">Remember Me</label>
									</div>
								</div>
                                <span class="text-danger">@error('remember'){{$message}}@enderror</span>

								<div class="form-group m-0">
									<button type="submit" class="btn btn-primary btn-block">
										Sign Up
									</button>
								</div>
								<div class="mt-4 text-center">
									Already registed ?<a href="login">login</a>
								</div>
							</form>
						</div>
					</div>
				</div>


				</div>
			</div>
		</div>
	</section>
	{{-- <footer>
  <p>Footer<br>
  </p>
</footer> --}}
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script >
        'use strict';

$(function() {


    $("input[type='password'][data-eye]").each(function(i) {
        var $this = $(this),
            id = 'eye-password-' + i,
            el = $('#' + id);

        $this.wrap($("<div/>", {
            style: 'position:relative',
            id: id
        }));

        $this.css({
            paddingRight: 60
        });
        $this.after($("<div/>", {
            html: 'Show',
            class: 'btn btn-primary btn-sm',
            id: 'passeye-toggle-'+i,
        }).css({
                position: 'absolute',
                right: 10,
                top: ($this.outerHeight() / 2) - 12,
                padding: '2px 7px',
                fontSize: 12,
                cursor: 'pointer',
        }));

        $this.after($("<input/>", {
            type: 'hidden',
            id: 'passeye-' + i
        }));

        var invalid_feedback = $this.parent().parent().find('.invalid-feedback');

        if(invalid_feedback.length) {
            $this.after(invalid_feedback.clone());
        }

        $this.on("keyup paste", function() {
            $("#passeye-"+i).val($(this).val());
        });
        $("#passeye-toggle-"+i).on("click", function() {
            if($this.hasClass("show")) {
                $this.attr('type', 'password');
                $this.removeClass("show");
                $(this).removeClass("btn-outline-primary");
            }else{
                $this.attr('type', 'text');
                $this.val($("#passeye-"+i).val());
                $this.addClass("show");
                $(this).addClass("btn-outline-primary");
            }
        });
    });

    $(".my-login-validation").submit(function() {
        var form = $(this);
        if (form[0].checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.addClass('was-validated');
    });
});


    </script>

	</body>
</html>
