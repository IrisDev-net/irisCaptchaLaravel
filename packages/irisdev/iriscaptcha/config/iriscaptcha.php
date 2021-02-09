<?php
return [
     'IrisCaptcha_Secret_Key' => env('IrisCaptcha_Secret_Key',''),
     'IrisCaptcha_Publick_Key' => str_replace("\\n", "\n", env('IrisCaptcha_Publick_Key',''))
];