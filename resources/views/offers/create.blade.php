<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 30px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
        <li class="nav-item active">
    <a class="nav-link" href="{{ LaravelLocalization::getLocalizedURL($localeCode,null, [], true) }}">
        {{ $properties['native'] }} <span class="sr-only">(current)</span></a>
        </li>
            @endforeach

          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </nav>
??<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
            {{__('masseges.Add Your Offer')}}
            @if(Session::has('success'))
            <div class="alert alert-success" role="alert">
                {{(Session::get('success'))}}
            </div>
                @endif

            <br>
            <br>
            <form  action ="{{route('offers.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="disabledTextInput"> {{__('masseges.Add Your Id')}}</label>


                    <input type="text"  class="form-control" name="id"
                     placeholder="{{__('masseges.Add Your Id')}}">
                    @error('id')
                    <small class="form-text text-danger" >{{$message}}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="disabledTextInput"> {{__('masseges.Add Your Photo')}}</label>
                    <input type="file" class="form-control" name="photo">
                    @error('photo')
                    <small class=" form-text text-danger" >{{$message}}</small>
                    @enderror
                </div>

                <div class="form-group">
                        <label for="disabledTextInput"> {{__('masseges.Add Your Offer Name_en')}}</label>
                        <input type="text"  class="form-control" name="name_en" placeholder=
                        "{{__('masseges.Add Your Offer Name_en')}}">
                        @error('name_en')
                        <small class=" form-text text-danger" >{{$message}}</small>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="disabledTextInput"> {{__('masseges.Add Your Offer Name_ar')}}</label>
                        <input type="text"  class="form-control" name="name_ar" placeholder=
                        "{{__('masseges.Add Your Offer Name_ar')}}">
                        @error('name_ar')
                        <small class=" form-text text-danger" >{{$message}}</small>
                        @enderror
                    </div>
                <div class="form-group">
                    <label for="disabledTextInput"> {{__('masseges.Add Your Offer price')}}</label>
                    <input type="text"  class="form-control" name="price"
                     placeholder="{{__('masseges.Add Your Offer price')}}">
                    @error('price')
                    <small class="form-text text-danger" >{{$message}}</small>
                    @enderror
                </div>


                    <button type="submit" class="btn btn-primary">{{__('masseges.Save Offer')}}</button>
                </fieldset>
            </form>
        </div>

        <div class="links">
            {{--                    <h1> {{_('massages.hello')}}</h1>--}}
            {{--                    <p>{{ $obj->name }}...{{$obj->id}}..{{$obj->gender}}</p>--}}
            {{--                    <a href="{{route('b')}}">b</a>--}}
            {{--

            --}}

        </div>
    </div>
</div>
</body>
</html>
