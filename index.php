<?php
error_reporting(E_ALL & ~ E_NOTICE);

/**
 * Created by PhpStorm.
 * User: collinsnyamao
 * Date: 9/15/17
 * Time: 11:15 AM
 */


//DEFINITION OF VARIABLES

$key = "400593844:AAH57kP-ndJV-VbaeitQirBCFwiE9J-gmZI";

$website = "https://api.telegram.org/bot";

$methodme = "/getme";

$getupdates = "/getupdates";

$url = $website.$key.$getupdates;

$getcontent = file_get_contents($url,$getupdates);

$userdata = json_decode($getcontent,true);



//FUNCTION DEFINITIONS.

function access(){
    $key = "400593844:AAH57kP-ndJV-VbaeitQirBCFwiE9J-gmZI";

    $website = "https://api.telegram.org/bot";

    $methodme = "/getme";

    $getupdates = "/getupdates";

    $url = $website.$key.$getupdates;

    $getcontent = file_get_contents($url,$getupdates);

    $userdata = json_decode($getcontent,true);

}

function getallupdates(){
    $key = "400593844:AAH57kP-ndJV-VbaeitQirBCFwiE9J-gmZI";

    $website = "https://api.telegram.org/bot";

    $methodme = "/getme";

    $getupdates = "/getupdates";

    $url = $website.$key.$getupdates;

    $getcontent = file_get_contents($url,$getupdates);

    $userdata = json_decode($getcontent,true);

    print_r($userdata["result"]);
}





function getupdatebyindex($index){
    $key = "400593844:AAH57kP-ndJV-VbaeitQirBCFwiE9J-gmZI";

    $website = "https://api.telegram.org/bot";

    $methodme = "/getme";

    $getupdates = "/getupdates";

    $url = $website.$key.$getupdates;

    $getcontent = file_get_contents($url,$getupdates);

    $userdata = json_decode($getcontent,true);

    print_r($userdata["result"][$index]);

}

function getnames($xxx){
    $key = "400593844:AAH57kP-ndJV-VbaeitQirBCFwiE9J-gmZI";

    $website = "https://api.telegram.org/bot";

    $methodme = "/getme";

    $getupdates = "/getupdates";

    $url = $website.$key.$getupdates;

    $getcontent = file_get_contents($url,$getupdates);

    $userdata = json_decode($getcontent,true);


    if (isset($userdata["result"][$xxx]["message"]["from"]["first_name"])){

        echo "Full Names: ".$userdata["result"][$xxx]["message"]["from"]["last_name"]."<br><br>";
    }
    else{
    echo "Full Names: ".'Unset '."<br><br>";
    }

    if (isset($userdata["result"][$xxx]["message"]["from"]["last_name"])){

        echo "Full Names: ".$userdata["result"][$xxx]["message"]["from"]["last_name"]."<br><br>";
    }
    else{
    echo "Full Names: ".'Unset '."<br><br>";
    }

}


function getupdate(){
    $key = "400593844:AAH57kP-ndJV-VbaeitQirBCFwiE9J-gmZI";

    $website = "https://api.telegram.org/bot";

    $methodme = "/getme";

    $getupdates = "/getupdates";

    $url = $website.$key.$getupdates;

    $getcontent = file_get_contents($url,$getupdates);

    $userdata = json_decode($getcontent,true);

    $allarrays = $userdata['result'];

    $allarrayscount = count($allarrays);

    $finalindex = $allarrayscount - 1;

    $firstindex = 0;

    $tryindex = 0;


    for ($xxx = 0; $xxx < $finalindex; $xxx++){
        print_r("Update id: ".$userdata["result"][$xxx]["update_id"]."<br><br>");
        print_r("Message_id:".$userdata["result"][$xxx]["message"]["message_id"]."<br><br>");
        getnames($xxx);
        print_r("Message text: ".$userdata["result"][$xxx]["message"]["text"]."<br><br>");
        print_r("Username: ".$userdata["result"][$xxx]["message"]["from"]["username"]."<br><br><hr>");

    }
}

//ROC


getupdate();