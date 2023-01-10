<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            background: #007bff;
            background: linear-gradient(to right, #0062E6, #33AEFF);
        }
        .btn-login {
            font-size: 0.9rem;
            letter-spacing: 0.05rem;
            padding: 0.75rem 1rem;
        }
        .btn-google {
            color: white !important;
            background-color: #ea4335;
        }
        .btn-facebook {
            color: white !important;
            background-color: #3b5998;
        }
    </style>
    <link href="{{ asset('backend/img/favicon.png') }}" rel="shortcut icon" />
</head>
<body>
<body>
  <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card border-0 shadow rounded-3 my-5">
          <div class="card-body p-4 p-sm-5">
            <h5 class="card-title text-center mb-5 fw-light fs-5">Đăng kí</h5>            
            <form action="{{ route('admin.register') }}" method="post">
                @csrf     
                @error('error')
                <div class="alert alert-danger">
                      <span>{{ $message }}</span>
                  </div>
                @enderror
                <div class="form-floating mb-3">
                    <input type="text" name="user_name" class="form-control" value="" id="floatingInput" placeholder="Enter user name">
                    <label for="floatingInput">User Name</label>
                    @error('user_name')
                      <span style="color: red;">{{ $message }}</span>
                    @enderror
                </div>
              <div class="form-floating mb-3">
                <input type="text" name="email" class="form-control" value="" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email</label>
                @error('email')
                  <span style="color: red;">{{ $message }}</span>
                @enderror
              </div>
              <div class="form-floating mb-3">
                <input type="password" class="form-control" id="floatingPassword" value="" name="password" placeholder="Password">
                <label for="floatingPassword">Password</label>
                @error('password')
                    <span style="color: red;">{{ $message }}</span>
                @enderror
              </div>

              <div class="form-floating mb-3">
                <input type="password" class="form-control" id="floatingPassword" value="" name="cp_password" placeholder="confirm password">
                <label for="floatingPassword">Confirm Password</label>
                @error('cp_password')
                    <span style="color: red;">{{ $message }}</span>
                @enderror
              </div>

              <div class="mb-3 d-flex">
                <div>                    
                    <label>
                        Bạn đã có tài khoản rồi?
                        <a href="{{ route('login') }}">Đăng nhập</a>
                    </label>
                </div>                
              </div>
              <div class="d-grid">
                <button class="btn btn-primary btn-login text-uppercase fw-bold" type="submit">Đăng kí</button>
              </div>
              <hr class="my-4">
              <div class="d-grid mb-2">
                <button class="btn btn-google btn-login text-uppercase fw-bold" type="submit">
                  <i class="fab fa-google me-2"></i> Đăng nhập với google
                </button>
              </div>
              <div class="d-grid">
                <button class="btn btn-facebook btn-login text-uppercase fw-bold" type="submit">
                  <i class="fab fa-facebook-f me-2"></i> Đăng nhập với facebook
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="{{ asset('backend/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>