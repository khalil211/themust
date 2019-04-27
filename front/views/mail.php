<?php
if (isset($_POST['titre'])&&isset($_POST['contenu'])&&!empty($_POST['titre'])&&!empty($_POST['contenu']))
{
  include '../../admin/views/PHPMailer-master/PHPMailerAutoload.php';
  include '../../front/core/abonneC.php';
  $abonneC=new abonneC;
  $liste=$abonneC->recupererabonne();
  foreach ($liste as $a)
  {
    $mail = new PHPMailer();
    $mailSub = 'The Must';
    $mailMsg = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>[SUBJECT]</title>
  <style type="text/css">
  body {
   padding-top: 0 !important;
   padding-bottom: 0 !important;
   padding-top: 0 !important;
   padding-bottom: 0 !important;
   margin:0 !important;
   width: 100% !important;
   -webkit-text-size-adjust: 100% !important;
   -ms-text-size-adjust: 100% !important;
   -webkit-font-smoothing: antialiased !important;
 }
 .tableContent img {
   border: 0 !important;
   display: block !important;
   outline: none !important;
 }
 a{
  color:#cccccc;
}

p, h2,li{
  color:#ffffff;
  margin:0;
}

div,p,ul,h2{
  margin:0;
}
h2{
color:#DAB679; 
font-size:21px;
font-weight:normal;
}
p{

}
a.link1{
font-weight:bold;
color:#DAB679;
font-size:13px;
text-decoration:none;font-weight:bold;
}
a.link2{
padding:8px 20px;
border-radius:5px;
-moz-border-radius:5px;
-webkit-border-radius:5px;
color:#DAB679;
font-size:13px;
font-weight:bold;
text-decoration:none;
border:1px solid #DAB679;
font-weight:bold;
background:#1B150C;
}

@media only screen and (max-width:480px)
    
{
    
table[class="MainContainer"], td[class="cell"] 
  {
    width: 100% !important;
    height:auto !important; 
  }
td[class="specbundle"] 
  {
    width: 100% !important;
    float:left !important;
    font-size:13px !important;
    line-height:17px !important;
    display:block !important;
    padding-bottom:5px !important;
  } 
td[class="specbundle2"] 
  {
    width: 100% !important;
    float:left !important;
    font-size:14px !important;
    line-height:18px !important;
    display:block !important;
    padding-bottom:45px !important;
  }
    
td[class="spechide"] 
  {
    display:none !important;
  }
      img[class="banner"] 
  {
            width: 100% !important;
            height: auto !important;
  }
    td[class="left_pad"] 
  {
      padding-left:15px !important;
      padding-right:15px !important;
  }
     
}
  
@media only screen and (max-width:540px) 

{
    
table[class="MainContainer"], td[class="cell"] 
  {
    width: 100% !important;
    height:auto !important; 
  }
td[class="specbundle"] 
  {
    width: 100% !important;
    float:left !important;
    font-size:13px !important;
    line-height:17px !important;
    display:block !important;
    padding-bottom:5px !important;
  } 
td[class="specbundle2"] 
  {
    width: 100% !important;
    float:left !important;
    font-size:14px !important;
    line-height:18px !important;
    display:block !important;
    padding-bottom:45px !important;
  }
    
td[class="spechide"] 
  {
    display:none !important;
  }
      img[class="banner"] 
  {
            width: 100% !important;
            height: auto !important;
  }
    td[class="left_pad"] 
  {
      padding-left:15px !important;
      padding-right:15px !important;
  }
    
}

</style>
<script type="colorScheme" class="swatch active">
  {
    "name":"Default",
    "bgBody":"000000",
    "link":"DAB679",
    "color":"ffffff",
    "bgItem":"000000",
    "title":"DAB679"
  }
</script>

</head>
<body paddingwidth="0" paddingheight="0" bgcolor="#d1d3d4"  style=" margin:0 0 0 0; padding-top: 0; padding-bottom: 0; padding-top: 0; padding-bottom: 0; background-repeat: repeat; width: 100% !important; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; -webkit-font-smoothing: antialiased;" offset="0" toppadding="0" leftpadding="0">
    
  <table width="100%" border="0" cellspacing="0" cellpadding="0" class="tableContent" align="center" bgcolor="#000000" style=\'font-family:Georgia, times, sans-serif;\'>
  <tbody>
    <tr>
      <td><table width="600" border="0" cellspacing="0" cellpadding="0" align="center" style=\'font-family:Georgia, times, sans-serif;\' bgcolor=\'#000000\' class="MainContainer">
  <tbody>
    <tr>
      <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tbody>
    <tr>
      <td valign="top" width="20" align="left">&nbsp;</td>
      <!--  =========================== The header ===========================  -->                
                
                
                <!--  =========================== The body ===========================  -->
      <td valign="top" align="center" width="560">
          <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tbody>
    <tr>
      <td class=\'movableContentContainer\'>
        <div class="movableContent" style="border: 0px; padding-top: 0px; position: relative;">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tbody>
    <tr>
      <td><table width="100%" border="0" cellspacing="0" cellpadding="0" align="center" >
                        <tr><td height=\'25\'>&nbsp;</td></tr>
                        <tr>
                          <td>
                            <table width="100%" border="0" cellspacing="0" cellpadding="0" align="center" >
                              <tr>

                                <td align=\'left\' valign=\'middle\'>
                                  <div class="contentEditableContainer contentImageEditable">
                                    <div class="contentEditable" >
                                      <img src="http://localhost/themust/admin/views/images/logo.png" alt=\'Compagnie logo\' data-default="placeholder" data-max-width="400" width=\'110\' height=\'47\' border="0">
                                    </div>
                                  </div>
                                </td>

                                <td align=\'right\' valign=\'top\'>
                                  <div class="contentEditableContainer contentTextEditable" style=\'display:inline-block;\'>
                                    <div class="contentEditable" >
                                    </div>
                                  </div>
                                </td>

                              </tr>
                            </table>
                          </td>  
                        </tr>
                      </table></td>
    </tr>
  </tbody>
</table>

            </div>
            <div class="movableContent" style="border: 0px; padding-top: 0px; position: relative;">
            </div>
            <div class="movableContent" style="border: 0px; padding-top: 0px; position: relative;">
              <table width="100%" border="0" cellspacing="0" cellpadding="0" align="center" >
                        <tr><td height=\'10\'>&nbsp;</td></tr>
                        <tr>
                          <td align=\'left\' valign=\'top\'>
                            <div class="contentEditableContainer contentTextEditable">
                              <div class="contentEditable" >
                                <h2>'.$_POST['titre'].'</h2>
                              </div>
                            </div>
                          </td>
                        </tr>
                        <tr><td height=\'15\'>&nbsp;</td></tr>
                        <tr>
                          <td align=\'left\' valign=\'top\'>
                            <div class="contentEditableContainer contentTextEditable">
                              <div class="contentEditable" >
                                <p style=\'font-size:13px;\'>'.$_POST['contenu'].'</p>
                              </div>
                            </div>
                          </td>
                        </tr>
                        <tr><td height=\'25\'>&nbsp;</td></tr>
                        <tr>
                          <td align=\'right\' valign=\'top\'>
                            <div class="contentEditableContainer contentTextEditable">
                              <div class="contentEditable" >
                                <a target=\'_blank\' href="" class=\'link2\'>Find out more</a>
                              </div>
                            </div>
                          </td>
                        </tr>
                      </table>
            </div>
            <div class="movableContent" style="border: 0px; padding-top: 0px; position: relative;">
              <table width="100%" border="0" cellspacing="0" cellpadding="0" align="center" >
                        <tr><td height=\'35\'>&nbsp;</td></tr>
                        <tr><td><img class="banner" src="images/line.png" alt=\'featured image\' data-default="placeholder" data-max-width="560" height=\'23\' width=\'560\' border="0"></td></tr>
                        <tr><td height=\'25\'>&nbsp;</td></tr>
                      </table>
            </div>
            <div class="movableContent" style="border: 0px; padding-top: 0px; position: relative;">
              <table width="100%" border="0" cellspacing="5" cellpadding="0" align="center" >
                        <tr><td height=\'10\' colspan=\'3\'>&nbsp;</td></tr>
                        <tr>
                          <td valign=\'top\' >
                            <div class="contentEditableContainer contentImageEditable">
                              <div class="contentEditable" >
                               <img class="banner" src="images/smallImg.jpg" alt=\'featured image\' data-default="placeholder" data-max-width="179" height=\'112\' width=\'179\'>
                             </div>
                           </div>
                         </td>
                         <td valign=\'top\'>
                          <div class="contentEditableContainer contentImageEditable">
                            <div class="contentEditable" >
                             <img class="banner" src="images/smallImg.jpg" alt=\'featured image\' data-default="placeholder" data-max-width="179" height=\'112\' width=\'179\'>
                           </div>
                         </div>
                       </td>
                       <td valign=\'top\'>
                        <div class="contentEditableContainer contentImageEditable">
                          <div class="contentEditable" >
                           <img class="banner" src="images/smallImg.jpg" alt=\'featured image\' data-default="placeholder" data-max-width="179" height=\'112\' width=\'179\'>
                         </div>
                       </div>
                     </td>
                   </tr>
                   <tr>
                    <td valign=\'top\'>
                      <div class="contentEditableContainer contentImageEditable">
                        <div class="contentEditable" >
                         <img class="banner" src="images/smallImg.jpg" alt=\'featured image\' data-default="placeholder" data-max-width="179" height=\'112\' width=\'179\'>
                       </div>
                     </div>
                   </td>
                   <td valign=\'top\'>
                    <div class="contentEditableContainer contentImageEditable">
                      <div class="contentEditable" >
                       <img class="banner" src="images/smallImg.jpg" alt=\'featured image\' data-default="placeholder" data-max-width="179" height=\'112\' width=\'179\'>
                     </div>
                   </div>
                 </td>
                 <td valign=\'top\'>
                  <div class="contentEditableContainer contentImageEditable">
                    <div class="contentEditable" >
                     <img class="banner" src="images/smallImg.jpg" alt=\'featured image\' data-default="placeholder" data-max-width="179" height=\'112\' width=\'179\'>
                   </div>
                 </div>
               </td>
             </tr>
           </table>
            </div>
            <div class="movableContent" style="border: 0px; padding-top: 0px; position: relative;">
              <table width="100%" border="0" cellspacing="0" cellpadding="0" align="center" >
            <tr><td height=\'40\'>&nbsp;</td></tr>
            <tr>
              <td style=\'border:1px solid #333333;border-radius:10px;-moz-border-radius:10px;-webkit-border-radius:10px;\'>
                <table width="100%" border="0" cellspacing="0" cellpadding="0" align="center">
                  <tr><td height=\'25\' colspan=\'3\'></td></tr>
                  <tr>
                    <td width=\'30\'></td>
                    <td width=\'503\' align=\'left\' valign=\'top\'>
                      <div class="contentEditableContainer contentTextEditable">
                        <div class="contentEditable" >
                          <h2 >On the runways</h2>
                        </div>
                      </div>
                    </td>
                    <td width=\'25\'></td>
                  </tr>
                  <tr><td height=\'8\' colspan=\'3\'></td></tr>
                  <tr>
                    <td width=\'30\'></td>
                    <td width=\'503\' align=\'left\' valign=\'top\'>
                      <div class="contentEditableContainer contentTextEditable">
                        <div class="contentEditable" >
                          <p style=\'font-size:13px;\'>Have lots of pictures of upcoming fashions? Recently went to an event? Love a pinterest board? Hint with a few teaser pics up top, and get them to see more on your landing page</p>
                        </div>
                      </div>
                    </td>
                    <td width=\'25\'></td>
                  </tr>
                  <tr><td height=\'25\' colspan=\'3\'>&nbsp;</td></tr>
                  <tr>
                    <td width=\'30\'></td>
                    <td width=\'503\' align=\'right\' valign=\'top\'>
                      <div class="contentEditableContainer contentTextEditable">
                        <div class="contentEditable" >
                          <a target=\'_blank\' href="" class=\'link2\'>Learn more</a>
                        </div>
                      </div>
                    </td>
                    <td width=\'25\'></td>
                  </tr>
                  <tr><td height=\'25\' colspan=\'3\'></td></tr>
                </table>
              </td>
            </tr>
          </table>
            </div>
            <div class="movableContent" style="border: 0px; padding-top: 0px; position: relative;">

              <table width="100%" border="0" cellspacing="0" cellpadding="0" align="center" >
          <tr><td height=\'35\'>&nbsp;</td></tr>
          <tr><td><img class="banner" src="images/line.png" alt=\'featured image\' data-default="placeholder" data-max-width="560" height=\'23\' width=\'560\'></td></tr>
          <tr><td height=\'25\'>&nbsp;</td></tr>
        </table>
            </div>
          <div class="movableContent" style="border: 0px; padding-top: 0px; position: relative;">
              <table width="100%" border="0" cellspacing="0" cellpadding="0" align="center" >
          <tr><td height=\'10\'>&nbsp;</td></tr>
          <tr><td>
           <div class="contentEditableContainer contentImageEditable">
            <div class="contentEditable" >
              <img class="banner" src="http://localhost/themust/front/views/assets/img/banner/img3-top-mirora1.jpg" alt=\'featured image\' data-default="placeholder" data-max-width="560" height=\'350\' width=\'560\' border="0">
            </div>
          </div>
        </td></tr>
        <tr>
          <td>
            <table width="100%" border="0" cellspacing="0" cellpadding="0" align="center">
              <tr><td height=\'12\' colspan=\'3\'></td></tr>
              <tr>
                <td width=\'40\'></td>
                <td width=\'480\' align=\'center\' valign=\'top\'>
                  <div class="contentEditableContainer contentTextEditable">
                    <div class="contentEditable" >
                      <h2 >Don’t forget to visit our website</h2>
                    </div>
                  </div>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      </table>
            </div>
            <div class="movableContent" style="border: 0px; padding-top: 0px; position: relative;">
              <table width="100%" border="0" cellspacing="0" cellpadding="0" align="center">
        <tr>
          <td>
           <table width="100%" border="0" cellspacing="0" cellpadding="0" align="center" >
            <tr><td height=\'35\'>&nbsp;</td></tr>
            <tr><td><img class="banner" src="images/line.png" alt=\'featured image\' data-default="placeholder" data-max-width="560" height=\'23\' width=\'560\'></td></tr>
            <tr><td height=\'25\'>&nbsp;</td></tr>
          </table>
        </td>
        </tr>
      </table>
            </div>
            <div class="movableContent" style="border: 0px; padding-top: 0px; position: relative;">
              <table width="100%" border="0" cellspacing="0" cellpadding="0" align="center">
        <tr>
          <td >
            <table width="100%" border="0" cellspacing="0" cellpadding="0" align="center" >
              <tr>
                <td width=\'205\'></td>
                <td width=\'75\' align=\'center\'>
                  <div class=\'contentEditableContainer contentFacebookEditable\'>
                    <div class="contentEditable">
                      <a target=\'_blank\' href="https://www.facebook.com/MontresTheMust/?ref=br_rs"><img src="images/facebook.png" alt=\'facebook link\' data-default="placeholder" data-max-width="60" width=\'60\' height=\'60\' data-customIcon="true"></a>
                    </div>
                  </div>
                </td>
                <td width=\'205\'></td>
              </tr>
            </table>
          </td>
        </tr>    
      </table>
            </div>
            <div class="movableContent" style="border: 0px; padding-top: 0px; position: relative;">
              <table width="100%" border="0" cellspacing="0" cellpadding="0" align="center">
        <tr><td height=\'28\'></td></tr>
        <tr>
          <td valign=\'top\' align=\'center\'>
            <div class="contentEditableContainer contentTextEditable">
              <div class="contentEditable" >
                <p style=\'color:#CCCCCC; font-weight:bold;font-size:13px;line-height: 30px;font-style:italic;\'>The Must</p>
              </div>
            </div>
            <div class="contentEditableContainer contentTextEditable">
              <div class="contentEditable" >
                <p style=\'color:#CCCCCC;font-size:13px;line-height: 15px;font-style:italic;\'>[CLIENTS.ADDRESS]</p>
              </div>
            </div>
            <div class="contentEditableContainer contentTextEditable">
              <div class="contentEditable" >
                <a target=\'_blank\' href="[FORWARD]" style=\'color:#CCCCCC; font-size:13px;line-height: 20px;font-style:italic;\'>Forward to a friend</a><br/>
                <a target=\'_blank\' href=\'[UNSUBSCRIBE]\' style=\'color:#CCCCCC; font-size:13px;line-height: 20px;font-style:italic;\'>Unsubscribe</a>
              </div>
            </div>
          </td>
        </tr>
      </table>
            </div>
            <div class="movableContent" style="border: 0px; padding-top: 0px; position: relative;">
              <tr><td height=\'28\'></td></tr>
            </div>
      </td>
    </tr>
  </tbody>
</table>

      </td>
      <td valign="top" width="20">&nbsp;</td>
    </tr>
  </tbody>
</table>
</td>
    </tr>
  </tbody>
</table>
</td>
    </tr>
  </tbody>
</table>
  </body>
  </html>
';


    $mail ->IsSmtp();
    $mail ->SMTPDebug = 0;
    $mail ->SMTPAuth = true;
    $mail ->SMTPSecure = 'ssl';
    $mail ->Host = "smtp.gmail.com";
    $mail ->Port = 465; // or 587
    $mail ->IsHTML(true);
    $mail ->Username = 'themust.gammarth@gmail.com';
    $mail ->Password = "themust123";
    $mail ->SetFrom("yourmail@gmail.com");
    $mail ->Subject = $mailSub;
    $mail ->Body = $mailMsg;
    $mail ->AddAddress($a['adresse_mail']);
    $mail->Send();
  }
}
header('Location: ../../admin/views/newsletter.php');
?>