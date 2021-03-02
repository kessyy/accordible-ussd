<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class UssdController extends Controller
{
    public function onlineUssdMenu(Request $request)
    {
       $sessionId   = $request->get('sessionId');
       $serviceCode = $request->get('serviceCode');
       $phoneNumber = $request->get('phoneNumber');
       $text        = $request->get('text');
        $ussd_string_exploded = explode('*', $text);
        $level = count($ussd_string_exploded);
        if ($text == "") {
            $response  = "CON Welcome to AccordibleHR \n";
            $response .= "1. Book Appointment \n";
            $response .= "2. About AccordibleHR";
        }
        elseif ($text == "1") {
            $response = "CON What is your area of interest \n";
            $response .= "1. HR Analysis \n";
            $response .= "2. Recruitment \n";
            $response .= "3. Talent Management \n";
            $response .= "4. Learning and Development \n";
            $response .= "5. Policy Development and Compliance \n";
            $response .= "6. Perfomance Management";
        }
        elseif ($text == "1*1") {
            $response = "CON Please enter your first name";
        }
        elseif ($ussd_string_exploded[0] == 1 && $ussd_string_exploded[1] == 1 && $level == 3) {
            $response = "CON Please enter your last name";
        }
        elseif ($ussd_string_exploded[0] == 1 && $ussd_string_exploded[1] == 1 && $level == 4) {
            $response = "CON Please enter your email";
        }
        elseif ($ussd_string_exploded[0] == 1 && $ussd_string_exploded[1] == 1 && $level == 5) {
            // save data in the database
            $response = "END Your data has been captured successfully! We Will be in touch shortly.";
        }
        elseif ($text == "1*2") {
            // when use response with option Recruitment
            $response = "CON Please enter your first name. ";
        }
        elseif ($ussd_string_exploded[0] == 1 && $ussd_string_exploded[1] == 2 && $level == 3) {
            $response = "CON Please enter your last name";
        }
        elseif ($ussd_string_exploded[0] == 1 && $ussd_string_exploded[1] == 2 && $level == 4) {
            $response = "CON Please enter your email";
        }
        elseif ($ussd_string_exploded[0] == 1 && $ussd_string_exploded[1] == 2 && $level == 5) {
            // save data in the database
            $response = "END Your data has been captured successfully! Thank you for registering for Laravel online classes at HLAB.";
        }
        elseif ($text == "1*3") {
            // when use response with option Talent Management
            $response = "CON Please enter your first name. ";
        }
        elseif ($ussd_string_exploded[0] == 1 && $ussd_string_exploded[1] == 3 && $level == 3) {
            $response = "CON Please enter your last name";
        }
        elseif ($ussd_string_exploded[0] == 1 && $ussd_string_exploded[1] == 3 && $level == 4) {
            $response = "CON Please enter your email";
        }
        elseif ($ussd_string_exploded[0] == 1 && $ussd_string_exploded[1] == 3 && $level == 5) {
            // save data in the database
            $response = "END Your data has been captured successfully! Thank you for registering for Laravel online classes at HLAB.";
        }
        elseif ($text == "1*4") {
            // when use response with option Learning and Development
            $response = "CON Please enter your first name. ";
        }
        elseif ($ussd_string_exploded[0] == 1 && $ussd_string_exploded[1] == 4 && $level == 3) {
            $response = "CON Please enter your last name";
        }
        elseif ($ussd_string_exploded[0] == 1 && $ussd_string_exploded[1] == 4 && $level == 4) {
            $response = "CON Please enter your email";
        }
        elseif ($ussd_string_exploded[0] == 1 && $ussd_string_exploded[1] == 4 && $level == 5) {
            // save data in the database
            $response = "END Your data has been captured successfully! Thank you for registering for Laravel online classes at HLAB.";
        }
        elseif ($text == "1*5") {
            // when use response with option Policy development and compliance
            $response = "CON Please enter your first name. ";
        }
        elseif ($ussd_string_exploded[0] == 1 && $ussd_string_exploded[1] == 5 && $level == 3) {
            $response = "CON Please enter your last name";
        }
        elseif ($ussd_string_exploded[0] == 1 && $ussd_string_exploded[1] == 5 && $level == 4) {
            $response = "CON Please enter your email";
        }
        elseif ($ussd_string_exploded[0] == 1 && $ussd_string_exploded[1] == 5 && $level == 5) {
            // save data in the database
            $response = "END Your data has been captured successfully! Thank you for registering for Laravel online classes at HLAB.";
        }
        elseif ($text == "1*6") {
            // when use response with option Perfomance management
            $response = "CON Please enter your first name. ";
        }
        elseif ($ussd_string_exploded[0] == 1 && $ussd_string_exploded[1] == 6 && $level == 3) {
            $response = "CON Please enter your last name";
        }
        elseif ($ussd_string_exploded[0] == 1 && $ussd_string_exploded[1] == 6 && $level == 4) {
            $response = "CON Please enter your email";
        }
        elseif ($ussd_string_exploded[0] == 1 && $ussd_string_exploded[1] == 6 && $level == 5) {
            // save data in the database
            $response = "END Your data has been captured successfully! Thank you for registering for Laravel online classes at HLAB.";
        }
        
        elseif ($text == "2") {
            // Our response a user respond with input 2 from our first level
            $response = "END We work with the employers to get the best value of their workforce in order to meet the
            company strategy.";
        }
        // send your response back to the API
        header('Content-type: text/plain');
        echo $response;
    }
}