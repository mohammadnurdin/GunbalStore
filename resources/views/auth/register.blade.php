<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Register</title>

    <!-- Custom fonts for this template -->
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="{{ asset('vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body class="bg-gradient-primary">
    <div class="container">
        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                            </div>
                            <form action="{{ route('register.save') }}" method="POST" class="user">
                                @csrf
                                <div class="form-group">
                                    <input name="name" type="text"
                                        class="form-control @error('name')is-invalid @enderror"
                                        id="exampleInputName" placeholder="Name">
                                    @error('name')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                                {{-- <div class="form-group">
                                    <input name="jk" type="text"
                                        class="form-control form-control-user  @error('jk')is-invalid @enderror"
                                        id="exampleInputName" placeholder="Jenis Kelamin">
                                    @error('jk')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div> --}}
                                <div class="form-group">
                                    {{-- <label for="jk" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" @error('jk') is-invalid @enderror"
                                    id="exampleFormControlSelect1">Jenis Kelamin</label> --}}
                                    <select name="jk"
                                    class="form-control @error('jk') is-invalid @enderror"
                                    id="exampleFormControlSelect1" placeholder="Jenis Kelamin">
                                    <option value="">Pilih Jenis Kelamin</option>
                                    <option value="0">Laki-laki</option>
                                    <option value="1">Perempuan</option>
                                </select>
                                @error('jk')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                                </div>
                                {{-- <div class="form-group">
                                    <select name="jk" type="select"
                                        class="form-control form-control-user @error('jk') is-invalid @enderror"
                                        id="exampleFormControlSelect1" placeholder="Jenis Kelamin">
                                        <option value="0">Laki-laki</option>
                                        <option value="1">Perempuan</option>
                                    </select>
                                    @error('jk')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div> --}}

                                <div class="form-group">
                                    <input name="alamat" type="text"
                                        class="form-control   @error('alamat')is-invalid @enderror"
                                        id="exampleInputName" placeholder="Alamat">
                                    @error('alamat')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input name="no_telp" type="text"
                                        class="form-control  @error('no_telp')is-invalid @enderror"
                                        id="exampleInputName" placeholder="No Telpon">
                                    @error('no_telp')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input name="email" type="email"
                                        class="form-control  @error('email')is-invalid @enderror"
                                        id="exampleInputEmail" placeholder="Email Address">
                                    @error('email')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input name="password" type="password"
                                            class="form-control  @error('password')is-invalid @enderror"
                                            id="exampleInputPassword" placeholder="Password">
                                        @error('password')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-sm-6">
                                        <input name="password_confirmation" type="password"
                                            class="form-control  @error('password_confirmation')is-invalid @enderror"
                                            id="exampleRepeatPassword" placeholder="Repeat Password">
                                        @error('password_confirmation')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                {{-- <div class="form-group">
                                    <select name="role" class="form-control form-control-user @error('role') is-invalid @enderror" id="exampleInputName" placeholder="Role">
                                        <option value="">Pilih Role</option>
                                        <option value="A">Admin</option>
                                        <option value="T">Teknisi</option>
                                        <option value="O">Owner</option>
                                    </select>
                                    @error('role')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div> --}}
                                <div class="form-group">
                                    <select name="role"
                                    class="form-control @error('role') is-invalid @enderror"
                                    id="exampleFormControlSelect1" placeholder="Role">
                                    <option value="">Pilih Role</option>
                                    <option value="A">Admin</option>
                                    <option value="T">Teknisi</option>
                                </select>
                                @error('role')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                                </div>
                                <div class="form-group">
                                    <select name="status"
                                    class="form-control @error('status') is-invalid @enderror"
                                    id="exampleFormControlSelect1" placeholder="Status">
                                    <option value="">Pilih status</option>
                                    <option value="1">Active</option>
                                    <option value="0">Inactive</option>
                                </select>
                                @error('status')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                                </div>

                                {{-- <div class="form-group">
                                    <input name="status" type="text"
                                        class="form-control @error('status')is-invalid @enderror"
                                        id="exampleInputName" placeholder="Status">
                                    @error('status')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div> --}}
                                <button type="submit" class="btn btn-primary btn-user btn-block">Register
                                    Account</button>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="{{ route('login') }}">Already have an account? Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('js/sb-admin-2.min.js') }}"></script>

    <!-- Page level plugins -->
    <script src="{{ asset('vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('js/demo/datatables-demo.js') }}"></script>

</body>

</html>
