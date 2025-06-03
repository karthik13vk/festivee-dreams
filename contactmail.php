<?php
error_reporting(0);
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  date_default_timezone_set("Asia/Calcutta");
  $h_name = isset($_POST["h_name"]) ? $_POST["h_name"] : "";
  $h_phone = isset($_POST["h_phone"]) ? $_POST["h_phone"] : "";
  $h_plan = isset($_POST["h_plan"]) ? $_POST["h_plan"] : "";
  $h_date = isset($_POST["h_date"]) ? $_POST["h_date"] : "";
  $h_location = isset($_POST["h_location"]) ? $_POST["h_location"] : "";

  if (empty($h_name) ||  empty($h_phone) || empty($h_plan)  ||  empty($h_date) ||  empty($h_location)) {
    // echo 1;
    echo json_encode(array(0 => "validation"));
    exit;
  }
  $to = 'paul@blazon.in';




  // if ($h_capchaans !== $h_capchaques) {
  //   // echo 2;
  //   echo json_encode(array(0 => "capcha"));
  //   exit;
  // } else {

    //$to = 'info@blazon.in';
    $subject = "Enquiry Form from Festivee Dreams Website";
    $headers = "From: no-reply@paul@blazon.in\r\n";
    $headers .= "Reply-To:  paul@blazon.in\r\n";
    $headers .= "BCC: paul@blazon.in \r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

    $msg = "<table width=70% border=0 cellspacing=0 cellpadding=0>  
    <tr>
      <td valign=top>Name</td>
      <td valign=top>:</td>
      <td valign=top>" . $h_name . "</td>
    </tr>
    <tr>
    <td valign=top>Phone</td>
    <td valign=top>:</td> 
    <td valign=top>" . $h_phone . "</td>
  </tr>
    <tr>
    <td valign=top>Plan</td>
    <td valign=top>:</td>
    <td valign=top>" . $h_plan . "</td>
  </tr>   
    <tr>
      <td valign=top>Date</td>
      <td valign=top>:</td> 
      <td valign=top>" . $h_date . "</td>
    </tr>
    <tr>
      <td valign=top>Location</td>
      <td valign=top>:</td> 
      <td valign=top>" . $h_location . "</td>
    </tr>
  </table>";

    $result = mail($to, $subject, $msg, $headers);

    if ($result) {
      // echo 3;
      echo json_encode(array(0 => "success"));
      exit;
    } else {
      // echo 4;
      echo json_encode(array(0 => "tryagain"));
      exit;
    }



    // echo 5;
    echo json_encode(array(0 => "tryagain"));
    exit(0);
  // };
};
