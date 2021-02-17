# IrisCaptchaLaravel

IrisCaptchaLaravel is a PHP library for use in Laravel Freamwork.

## Installation

Use Composer in root Project Folder Laraverl to install IrisCaptchaLaravel.

```bash
composer require irisdev/iriscaptchalaravel

php artisan vendor:publish


Adding This Line To Env  

Note : This Value Changed For Your Registered Option In irisdev.net

IrisCaptcha_Developing_Mode="True"
IrisCaptcha_Secret_Key="df059a421e1b5a2eac14d646114f816f342c04fdff84b063f81561b9e7dc62be0x2715"
IrisCaptcha_Publick_Key=""

```

## Usage

```

Sample web.php Route For Using IrisCaptchaLaravel

use Illuminate\Http\Request;

Route::get('/', function (Request $request) {
    $irisCaptcha=new \IrisDev\iriscaptchalaravel\iriscaptchalaravel;
          if($request->has("irisCaptcha")) {
            $res = $irisCaptcha->Check_Answer($request->irisCaptcha,$request->ip(),false);
            //var_dump($request->get["irisCaptcha"]);die();
            if ($res->is_valid) {
                // Captcha verified - continue ...
                return "HOOOORAAAA";
            }else{
                return $res->error;
            }

                
        }else{
        
        $html='
        <!DOCTYPE html>
        <html lang="en">
        <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Test Iris Captcha</title>
        </head>
        <body style="padding:100px;">
        <form Method="get" action="/" >
        <input type="hidden" name="_token" value="' . csrf_token() . '">
        <input name="Username" required type="text" placeholder="Username" />
        <input name="Password" required type="passowrd" placeholder="Password" />
        <button type="submit">Submit | Click Me!</button>
        <iris-captcha name="irisCaptcha" />
        </form>
        </body>
        </html>';
        echo $html;
        echo $irisCaptcha->Get_Js();
        } 
        
        
});






```

