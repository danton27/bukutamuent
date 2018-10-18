<!DOCTYPE html>
<html lang="en">
@include('admin.partials._head')
<body class="login">
<div>
    <div class="login_wrapper">
        <div class="animate form">
            <section class="login_content">
                <form action="{{ route('register') }}" method="POST" role="form">
                    <h1>Create Account</h1>
                    {{csrf_field()}}
                    <div>
                        @if($errors->has('name'))
                            <div class="invalid-feedback btn btn-danger">
                                {{$errors->first('name')}}
                            </div>
                        @endif
                        <input type="text" name="name" class="form-control {{$errors->has('name') ? 'is-invalid' : ""}}" value="{{old('name')}}" placeholder="Name" required="" />
                    </div>
                    <div>
                        @if($errors->has('email'))
                            <div class="invalid-feedback btn btn-danger">
                                {{$errors->first('email')}}
                            </div>
                        @endif
                        <input type="email" name="email" value="{{old('email')}}" class="form-control {{$errors->has('email') ? 'is-invalid' : ''}}" placeholder="Email" required="" />

                    </div>
                    <div>
                        @if($errors->has('password'))
                            <div class="invalid-feedback btn btn-danger">
                                {{$errors->first('password')}}
                            </div>
                        @endif
                        <input type="password" name="password" class="form-control {{$errors->has('password') ? 'is-invalid' : ''}}" placeholder="Password" required="" />

                    </div>
                    <div>
                        @if($errors->has('password_confirmation'))
                            <div class="invalid-feedback btn btn-danger">
                                {{$errors->first('password_confirmation')}}
                            </div>
                        @endif
                        <input type="password" name="password_confirmation" class="form-control {{$errors->has('password_confirmation') ? 'is-invalid' : ''}}" placeholder="Password Confirmation" required="" />

                    </div>
                    <div>
                        <button type="submit" name="submit" class="btn btn-primary">Create</button>
                    </div>
                    <div class="clearfix"></div>
                </form>
            </section>
        </div>
    </div>
</div>
</body>
</html>
