<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Style of the plugin -->
     <link rel="stylesheet" href="plugin/components/Font Awesome/css/font-awesome.min.css">
     <link rel="stylesheet" href="plugin/whatsapp-chat-support.css">

</head>
<body>
    

    <!-- Button Whatsapp Structure -->
  <div class="whatsapp_chat_support wcs_fixed_right" id="button-w">
    <div class="wcs_button_label">
            Contáctanos
        </div>  
    <div class="wcs_button wcs_button_circle">
        <span class="fa fa-whatsapp"></span>
    </div>  
 
    <div class="wcs_popup">
        <div class="wcs_popup_close">
            <span class="fa fa-close"></span>
        </div>
        <div class="wcs_popup_header">
            <span class="fa fa-whatsapp"></span>
            <strong>Servicio al cliente</strong>
            
            <div class="wcs_popup_header_description">¿Necesidad de ayuda? Chatea con nosotros en Whatsapp</div>

        </div>  
        <div class="wcs_popup_input" 
            data-number="51962562426"
            data-availability='{ "monday":"07:00-22:30", "tuesday":"07:00-22:30", "wednesday":"07:7030-22:30", "thursday":"07:00-22:30", "friday":"07:00-22:30", "saturday":"09:00-18:30", "sunday":"09:00-22:30" }'>
            <input type="text" placeholder="Escribir pregunta!" />
            <i class="fa fa-play"></i>
        </div>
        <div class="wcs_popup_avatar">
            <img src="https://cdn-icons-png.flaticon.com/512/7081/7081025.png" alt="">
        </div>
    </div>
</div>

<style>

    span{

        color:#fbfbfb !important;
    }
</style>
    <!-- jQuery 1.8+ -->
<script src="plugin/components/jQuery/jquery-1.11.3.min.js"></script>
    <!-- Plugin JS file -->
<script src="plugin/components/moment/moment.min.js"></script>
<script src="plugin/components/moment/moment-timezone-with-data.min.js"></script> <!-- spanish language (es) -->
<script src="plugin/whatsapp-chat-supportt.js"></script>
<script>
   $('#button-w').whatsappChatSupport({
        defaultMsg : '',
    });
</script>

</body>
</html>
