<?php

namespace App\Http\Controllers;
 
use Illuminate\Http\Request; 
use Exception;

use Cardinity\Client;
use Cardinity\Method\Payment;
use Redirect;

class PaymentController extends Controller
{
    public function index(Request $request){ 

        if($request->post()){
            $data = array(
                "amount" => $request->post('amount')
            );
            return view('pages.payment')->with($data); 
        }
        else{ 
            Redirect::to('/')->send(); 
        } 
    } 

    public function paymentResult(Request $request){
        if($request->post()){  
            try{
                $client = Client::create([
                    'consumerKey' => 'test_jhcm1kuiowcs2s9dj03vryr4v8yf4e',
                    'consumerSecret' => 'uczqtwmhh2dj1m2vkulspssqisqc2qzjo8v23auqssux4opvag',
                ]);
                $orderId = uniqid();
                $method = new Payment\Create([
                    'amount' => (float)$request->post('amount'),
                    'currency' => 'EUR',
                    'settle' => false,
                    'description' => 'This is order data',
                    'order_id' => $orderId,
                    'country' => 'LT',
                    'payment_method' => Payment\Create::CARD,
                    'payment_instrument' => [
                        'pan' => str_replace(" ", "", $request->post('cardNumber')),
                        'exp_year' => (int)$request->post('cardYear'),
                        'exp_month' => (int)$request->post('cardMonth'),
                        'cvc' => $request->post('cardCvv'),
                        'holder' => $request->post('cardName')
                    ],
                ]);
     
                try { 
                    $payment = $client->call($method);
                    $status = $payment->getStatus(); 
                    if($status == 'approved') {  
                        $method = new Payment\Create([
                            'amount' => (float)$request->post('amount'),
                            'currency' => 'EUR',
                            'settle' => false,
                            'description' => 'This is order data',
                            'order_id' => $orderId,
                            'country' => 'LT',
                            'payment_method' => Payment\Create::RECURRING,
                            'payment_instrument' => [
                                'payment_id' => $payment->getId()
                            ],
                        ]);

                        try { 
                            $payment = $client->call($method);
                            // dd($payment);
                            $status = $payment->getStatus(); 
                            if($status == 'approved') {  
                                $data = array(
                                    "msg" => "Your order id ".$orderId." Payment is ".$status.". Thank you!!!" 
                                );
                                return view('pages.payment-result')->with($data); 
                            }
                        } catch (Exception\Declined $exception) { 
                            $data = array(
                                "msg" => "Sorry!!! There is a problem in your card information. please try again" 
                            );
                            return view('pages.payment-result')->with($data); 
                            $payment = $exception->getResult();
                            $status = $payment->getStatus(); // value will be 'declined'
                            $errors = $exception->getErrors(); // list of errors occured
                        }
                    }
    
                    if($status == 'pending') { 
                    //   Retrieve information for 3D-Secure authorization
                      $data3D = array(
                          "url" => $payment->getAuthorizationInformation()->getUrl(),
                          "data" => $payment->getAuthorizationInformation()->getData(),
                          "your_identifier" => $orderId,
                          "your_callback_url" => url::to('/'),
                          "msg2" => "Your order id ".$orderId." Payment is ".$status.". Follow the below instruction!!!" 
                      ); 
                      return view('pages.payment-result')->with($data3D); 
                    }
                    $data = array(
                        "msg" => "Sorry!!! There is a problem in your card information. please try again" 
                    );
                    return view('pages.payment-result')->with($data); 
    
                } catch (Exception\Declined $exception) {
                    $data = array(
                        "msg" => "Sorry!!! There is a problem in your card information. please try again" 
                    );
                    return view('pages.payment-result')->with($data);
                    /** @type Cardinity\Method\Payment\Payment */
                    $payment = $exception->getResult();
                    $status = $payment->getStatus(); // value will be 'declined'
                    $errors = $exception->getErrors(); // list of errors occured
                } catch (Exception\ValidationFailed $exception) {
                    $data = array(
                        "msg" => "Sorry!!! There is a problem in your card information. please try again" 
                    );
                    return view('pages.payment-result')->with($data);
                    /** @type Cardinity\Method\Payment\Payment */
                    $payment = $exception->getResult();
                    $status = $payment->getStatus(); // value will be 'declined'
                    $errors = $exception->getErrors(); // list of errors occured
                }
            }
            catch(Exception $e){
                $data = array(
                    "msg" => "Sorry!!! There is a problem in your card information. please try again" 
                );
                return view('pages.payment-result')->with($data);
            }
        }
        else{ 
            Redirect::to('/')->send(); 
        }
    }

    public function paymentTest(){

        try{
            $client = Client::create([
                'consumerKey' => 'test_jhcm1kuiowcs2s9dj03vryr4v8yf4e',
                'consumerSecret' => 'uczqtwmhh2dj1m2vkulspssqisqc2qzjo8v23auqssux4opvag',
            ]);

            $method = new Payment\Create([
                'amount' => 50.00,
                'currency' => 'EUR',
                'settle' => false,
                'description' => 'some description',
                'order_id' => '12345678',
                'country' => 'LT',
                'payment_method' => Payment\Create::CARD,
                'payment_instrument' => [
                    'pan' => '4111111111111111',
                    'exp_year' => 2021,
                    'exp_month' => 12,
                    'cvc' => '456',
                    'holder' => 'Mike Dough'
                ],
            ]);

            /**
            * In case payment could not be processed exception will be thrown.
            * In this example only Declined and ValidationFailed exceptions are handled. However there is more of them.
            * See Error Codes section for detailed list.
            */
            try {
                /** @type Cardinity\Method\Payment\Payment */
                $payment = $client->call($method);
                $status = $payment->getStatus();
                dd($payment);
                if($status == 'approved') {
                  // Payment is approved
                  echo "asa";
                }

                if($status == 'pending') {
                  // Retrieve information for 3D-Secure authorization
                  $url = $payment->getAuthorizationInformation()->getUrl();
                  $data = $payment->getAuthorizationInformation()->getData();
                }

            } catch (Exception\Declined $exception) {
                /** @type Cardinity\Method\Payment\Payment */
                $payment = $exception->getResult();
                $status = $payment->getStatus(); // value will be 'declined'
                $errors = $exception->getErrors(); // list of errors occured
            } catch (Exception\ValidationFailed $exception) {
                /** @type Cardinity\Method\Payment\Payment */
                $payment = $exception->getResult();
                $status = $payment->getStatus(); // value will be 'declined'
                $errors = $exception->getErrors(); // list of errors occured
            }
        }
        catch(Exception $e){
            echo $e->getMessage();
        }

    }



}
