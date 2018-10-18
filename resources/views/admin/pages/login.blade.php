<!DOCTYPE html>
<html lang="en">
@include('admin.partials._head')

<body class="login">
<div>
    <a class="hiddenanchor" id="signup"></a>
    <a class="hiddenanchor" id="signin"></a>

    <div class="login_wrapper">
        <div class="animate form login_form">
            <section class="login_content">
                <form action="{{route('login')}}" method="POST">
                    <h1>Login</h1>
                    {{csrf_field()}}
                    <div>
                        <input type="email" name="email" class="form-control" placeholder="Email" required="" />
                    </div>
                    <div>
                        <input type="password" name="password" class="form-control" placeholder="Password" required="" />
                    </div>
                    <div>
                        <button type="submit" name="submit" class="btn btn-primary">Log In</button>
                    </div>


                    <div class="clearfix"></div>

                </form>
            </section>
        </div>

    </div>
</div>
</body>
</html>
