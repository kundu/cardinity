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
                    <form class="form-inline my-2 my-lg-0">
                        <div class="row">
                            <div class="col">
                                <button type="button" class="btn btn-dark button-css" data-toggle="modal" data-target="#cart">
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cart4" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            fill-rule="evenodd"
                                            d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"
                                        />
                                    </svg>
                                    (<span class="total-count"></span>)
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </nav>

            <!-- Main -->
            <div class="container">
                <div class="product-list row">
                    <div class="col-lg-3 col-md-3 col-sm-2 col-xs-1">
                        <div class="card">
                            <img class="card-img-top" src="assets/img/monica.jpg" alt="Card image cap" />
                            <div class="card-block">
                                <h4 class="card-title">Flope</h4>
                                <p class="card-text">Price: $12.5</p>
                                <a href="#" data-name="Flope" data-price="12.5" class="add-to-cart btn btn-dark">
                                    Add to cart
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cart-check-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            fill-rule="evenodd"
                                            d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zM4 14a1 1 0 1 1 2 0 1 1 0 0 1-2 0zm7 0a1 1 0 1 1 2 0 1 1 0 0 1-2 0zm.354-7.646a.5.5 0 0 0-.708-.708L8 8.293 6.854 7.146a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3z"
                                        />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-2 col-xs-1">
                        <div class="card">
                            <img class="card-img-top" src="assets/img/Pro-1.jpg" alt="Card image cap" />
                            <div class="card-block">
                                <h4 class="card-title">Pyso</h4>
                                <p class="card-text">Price: $25</p>
                                <a href="#" data-name="Pyso" data-price="25" class="add-to-cart btn btn-dark">
                                    Add to cart
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cart-check-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            fill-rule="evenodd"
                                            d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zM4 14a1 1 0 1 1 2 0 1 1 0 0 1-2 0zm7 0a1 1 0 1 1 2 0 1 1 0 0 1-2 0zm.354-7.646a.5.5 0 0 0-.708-.708L8 8.293 6.854 7.146a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3z"
                                        />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-2 col-xs-1">
                        <div class="card">
                            <img class="card-img-top" src="assets/img/pro-12.jpg" alt="Card image cap" />
                            <div class="card-block">
                                <h4 class="card-title">Shyto</h4>
                                <p class="card-text">Price: $9</p>
                                <a href="#" data-name="Shyto" data-price="9" class="add-to-cart btn btn-dark">
                                    Add to cart
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cart-check-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            fill-rule="evenodd"
                                            d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zM4 14a1 1 0 1 1 2 0 1 1 0 0 1-2 0zm7 0a1 1 0 1 1 2 0 1 1 0 0 1-2 0zm.354-7.646a.5.5 0 0 0-.708-.708L8 8.293 6.854 7.146a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3z"
                                        />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-2 col-xs-1">
                        <div class="card">
                            <img class="card-img-top" src="assets/img/pro-13.jpg" alt="Card image cap" />
                            <div class="card-block">
                                <h4 class="card-title">Derio</h4>
                                <p class="card-text">Price: $33</p>
                                <a href="#" data-name="Derio" data-price="33" class="add-to-cart btn btn-dark">
                                    Add to cart
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cart-check-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            fill-rule="evenodd"
                                            d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zM4 14a1 1 0 1 1 2 0 1 1 0 0 1-2 0zm7 0a1 1 0 1 1 2 0 1 1 0 0 1-2 0zm.354-7.646a.5.5 0 0 0-.708-.708L8 8.293 6.854 7.146a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3z"
                                        />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-2 col-xs-1">
                        <div class="card">
                            <img class="card-img-top" src="assets/img/pro-5.jpg" alt="Card image cap" />
                            <div class="card-block">
                                <h4 class="card-title">Flopy</h4>
                                <p class="card-text">Price: $19</p>
                                <a href="#" data-name="Flopy" data-price="19" class="add-to-cart btn btn-dark">
                                    Add to cart
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cart-check-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            fill-rule="evenodd"
                                            d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zM4 14a1 1 0 1 1 2 0 1 1 0 0 1-2 0zm7 0a1 1 0 1 1 2 0 1 1 0 0 1-2 0zm.354-7.646a.5.5 0 0 0-.708-.708L8 8.293 6.854 7.146a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3z"
                                        />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-2 col-xs-1">
                        <div class="card">
                            <img class="card-img-top" src="assets/img/pro-8.jpg" alt="Card image cap" />
                            <div class="card-block">
                                <h4 class="card-title">Uiol</h4>
                                <p class="card-text">Price: $41</p>
                                <a href="#" data-name="Uiol" data-price="41" class="add-to-cart btn btn-dark">
                                    Add to cart
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cart-check-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            fill-rule="evenodd"
                                            d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zM4 14a1 1 0 1 1 2 0 1 1 0 0 1-2 0zm7 0a1 1 0 1 1 2 0 1 1 0 0 1-2 0zm.354-7.646a.5.5 0 0 0-.708-.708L8 8.293 6.854 7.146a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3z"
                                        />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-2 col-xs-1">
                        <div class="card">
                            <img class="card-img-top" src="assets/img/pro-9.jpg" alt="Card image cap" />
                            <div class="card-block">
                                <h4 class="card-title">Wriko</h4>
                                <p class="card-text">Price: $20</p>
                                <a href="#" data-name="Wriko" data-price="20" class="add-to-cart btn btn-dark">
                                    Add to cart
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cart-check-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            fill-rule="evenodd"
                                            d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zM4 14a1 1 0 1 1 2 0 1 1 0 0 1-2 0zm7 0a1 1 0 1 1 2 0 1 1 0 0 1-2 0zm.354-7.646a.5.5 0 0 0-.708-.708L8 8.293 6.854 7.146a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3z"
                                        />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="cart" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Cart</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <table class="show-cart table"></table>
                            <div class="total-price">Total price: $<span class="total-cart"></span></div>
                        </div>
                        <div class="modal-footer">
                            <button class="clear-cart btn btn-danger">Clear Cart</button>
                            <form onsubmit="return orderClick()" action="{{URL::to('/payment')}}" method="post">
                                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                                <input type="hidden" name="amount" required readonly id="amount" />
                                <button type="submit" class="btn btn-success" onclick="orderClick()">Check Out</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
        <script src="{{asset('assets/js/bootstrap.js')}}"></script>
        <script src="{{asset('assets/js/main.js')}}"></script>

        <script>
            function orderClick() {
                if (document.getElementById("amount").value == "0") {
                    return false;
                } else {
                    return true;
                } 
            }
        </script>
    </body>
</html>
