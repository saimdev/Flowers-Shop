<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('app.css')}}">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Poiret+One&family=Quicksand:wght@300;400;500;600&display=swap" rel="stylesheet">
    <title>Shop | Flowers Shop</title>
</head>
<body>
    <div class="container-fluid py-3 px-5">
        <div class="d-flex justify-content-between align-items-center">
            <div>
                <a href="/user/{{$email}}"><h4 class="h4">Flowers Store</h4></a>
            </div>
            <div class="d-flex justify-content-around align-items-center">
                <a href="" class="mx-3">About Us</a>
                <a href="" class="mx-3">Blog</a>
                <a href="/shop/{{$email}}" class="mx-3">Shop</a>
                <a href="/cart/{{$email}}" class="mx-3">Cart</a>
                @if ($status==1)
                    <a href="/logout/{{$email}}" class="mx-3">Logout</a>
                @else
                    <a href="/login" class="mx-3">Login</a>
                @endif
            </div>
        </div>
        <div class="row my-5">
            <div class="col col-6 d-flex justify-content-end">
                <img src="{{asset('/imgs/shop.jpg')}}" style="width: 100%; border-radius:0.5rem;" alt="">
            </div>
            <div class="col col-6 d-flex flex-column justify-content-center">
                <h2 class="fw-light">Sunflower</h2>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deserunt modi provident ullam dolor magnam, est natus sed mollitia alias error iusto magni quidem velit commodi facilis atque eos quod libero dignissimos, laboriosam molestias! Harum ex deserunt tempore earum qui ab?</p>
                <a href="" class="btn btn-success w-25">More Details</a>
            </div>
        </div>
        <div class="row my-5">
            <h1 class="fw-light text-center" style="font-family: 'Poiret One', cursive;">Our Plants</h1>
            <div class="col col-12 d-flex justify-content-around flex-wrap">
                @foreach ($collection as $item)
                    <a href="/{{$email}}/product/{{$item->name}}">
                        <div class="products my-3 mx-2">
                            <img src="{{asset($item->image1)}}" style="width:15rem; height:15rem; border-radius:0.5rem;" alt="" class="post-image">
                            <div class="edit">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex flex-column align-items-center mx-1">
                                        <img src="{{asset('/imgs/logos/shopping-cart-add.svg')}}" alt="" class="hover-icon">
                                    </div>
                                    <div class="d-flex flex-column align-items-center mx-5">
                                        <img src="{{asset('/imgs/logos/heart.svg')}}" alt="" class="hover-icon">
                                    </div>
                                </div>
                            </div>
                            <p class="mt-2" style="margin-block-start: 0; margin-block-end:0;">{{$item->name}}</p>
                            <p style="margin-block-start: 0; margin-block-end:0;">{{$item->price}} $</p>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
        @component('components.footer')
        @endcomponent
    </div>
</body>
</html>