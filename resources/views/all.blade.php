<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    
<!-- Optional theme -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <title>test</title>
</head>
<body>
         {{View::make('header')}}    
         @yield('content')
         
         
</body>
{{View::make('footer')}}

<style>
    .custom-login{
        height: 500px; 
        padding-top: 100px;
    }
    img.slider-img{
        height: 400px !important ; 
    }
    .custom-product{
        height: 600px ; 
    }
    img.trending-img{
        height: 120px ; 
    }
    .trending-item{
        float: left ;
        width: 25% ;  
    }
    .trending-waper{
        margin : 20px ; 
         
    }
    .carousel-caption.slider-text {
    background-color: #00000040;
     
    }
    .details-img{
        height : 200px ; 
    }
    .cart-list{
        border-bottom: 1px solid #ccc ;  
        padding-bottom: 20px ; 
        margin-bottom: 20px ; 
    }
    footer{
        margin-top: 400px ; 
    }
</style>    
</html>