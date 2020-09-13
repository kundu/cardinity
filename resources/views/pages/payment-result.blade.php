<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <link rel="stylesheet" href="{{asset('assets/css/bootstrap.css') }}" />
        <link rel="stylesheet" href="{{asset('assets/css/style.css') }}" />
        <title>WaleMart</title>
    </head>
    <body>
        <main class="cd-main container margin-top-xxl">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="/">WaleMart</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto"> 
                    </ul>
                     
                </div>
            </nav>

            <!-- Main -->
            <div class="container">
                @if (isset($msg))
                    <h1 style="text-align: center">{{ $msg }}</h1>    
                @endif
                
                
                @if (isset($msg2))
                    <h1 style="text-align: center">{{ $msg2 }}</h1>    
                    <p>
                        If your browser does not start loading the page,
                        press the button below.
                        You will be sent back to this site after you
                        authorize the transaction.
                    </p>
                    <form name="ThreeDForm" method="POST" action="{{$url}}">
                        <button type=submit>Click Here</button>
                        <input type="hidden" name="PaReq" value="{{$data}}" />
                        <input type="hidden" name="TermUrl" value="{{$your_callback_url}}" />
                        <input type="hidden" name="MD" value="{{$your_identifier}}" />
                    </form>
                @endif
            </div>
 
        </main>

        <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
        <script src="{{asset('assets/js/bootstrap.js')}}"></script>
        <script src="{{asset('assets/js/main.js')}}"></script>

        <script>
            shoppingCart.clearCart();
	        displayCart();
        </script>
    </body>
</html>
