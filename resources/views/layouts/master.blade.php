<!DOCTYPE html>
<html lang="en">

    @include('partials.head')

<body>

    @include('partials.header')

    <div class="container">

        <div class="row">

            <div class="col-sm-8 blog-main">

                @yield('content')

            </div>

            <div class="col-sm-3 offset-sm-1 blog-sidebar">

                @include('partials.sidebar')

            </div>

        </div><!-- /.row -->

    </div><!-- /.container -->

    @include('partials.footer')

</body>
</html>
