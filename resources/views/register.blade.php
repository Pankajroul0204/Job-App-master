<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Job-Application</title>

    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" type="text/css">
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
</head>
<body>


@if ($errors->any())
    @foreach ($errors->all() as $err)
    <div class="text-center">
        <span class="fw-bolder text-danger">{{$err}}</span>
    </div>
        
    @endforeach
@endif
    

    <div class="container mt-3">
        @if (Session::has('success'))
        <div class="alert alert-success" role="alert">
            <p class="fw-bolder text-black">{{Session::get('success')}}</p>
          </div>
        
    
        @endif
       <div class="card mx-auto" style="width:70%">
        <div class="card-header bg-info">
            <h4 class="text-center text-white fw-bolder">User Registration</h4>
        </div>
        <div class="card-body">
            <form action="{{route('UsersRegister')}}" method="POST">
                @csrf
            
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <label for="name" class="form-label fw-bolder">Name:</label>
                        <input type="text" name="name" class="form-control" id="name" placeholder="Enter Name...">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="email" class="form-label fw-bolder">Email:</label>
                        <input type="email" name="email" class="form-control" id="email" placeholder="Enter Email...">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="password" class="form-label fw-bolder">Password:</label>
                        <input type="password" name="password" class="form-control" id="password" placeholder="Enter Password...">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="password" class="form-label fw-bolder">Confirm Password:</label>
                        <input type="password" name="password_confirmation" class="form-control" id="password" placeholder="Enter Password...">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="contact" class="form-label fw-bolder">Contact:</label>
                        <input type="text" name="contact" class="form-control" id="contact" placeholder="Enter Contact...">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="gender" class="form-label fw-bolder">Gender:</label>
                        <select name="gender" id="gender" class="form-select">
                            <option selected disabled>Select</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Other">Others</option>
                        </select>
                    </div>
                    <div class="col-md-4-mb-3">
                        <label for="address" class="form-label fw-bolder">Address</label>
                        <textarea class="form-control" name="address" id="address" rows="3" placeholder="Enter Address.."></textarea>
                    </div>
                </div>
                <div class="text-center mt-2">
                    <button type="submit" class=" btn btn-info fw-bolder text-white" name="submit">REGISTER</button>
                </div>
                <div class="text-end mt-2">
                    <span class="">
                        <a href="/" class="fw-bolder ">Have An Account</a>
                    </span>
                </div>
            </form>
        </div>
       </div>
    </div>
    






    <script src="{{asset('js/bootstrap.min.js')}}"></script>
   
</body>
</html>