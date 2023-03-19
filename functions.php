<?php
 
 function loadStyleSheets(){
    wp_register_style("Montserrat","https://fonts.googleapis.com/css?family=Montserrat:400,700",[],1,"all");
    wp_enqueue_style("Montserrat");

    wp_register_style("Lato","https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic",[],1,"all");
    wp_enqueue_style("Lato");

    wp_register_style("styles", get_template_directory_uri() ."/css/styles.css",[],1,"all");
    wp_enqueue_style("styles");
 }

 add_action("wp_enqueue_scripts","loadStyleSheets");


 function loadJavascriptFiles(){
    wp_register_script("fontawesome","https://use.fontawesome.com/releases/v5.15.1/js/all.js",[],1,false);
    wp_enqueue_script("fontawesome");

    //wp_deregister_script("jquery");
    wp_register_script("myjquery","https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js",[],1,true);
    wp_enqueue_script("myjquery");

    wp_register_script("bootstrap","https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js",[],1,true);
    wp_enqueue_script("bootstrap");

    wp_register_script("jquery_easing","https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js",[],1,true);
    wp_enqueue_script("jquery_easing");

    wp_register_script("bootstrap_validation", get_template_directory_uri() ."/assets/mail/jqBootstrapValidation.js",[],1,true);
    wp_enqueue_script("bootstrap_validation");

    wp_register_script("contact_me", get_template_directory_uri() ."/assets/mail/contact_me.js",[],1,true);
    wp_enqueue_script("contact_me");

    wp_register_script("scripts", get_template_directory_uri() ."/js/scripts.js",[],1,true);
    wp_enqueue_script("scripts");
 }

 add_action("wp_enqueue_scripts","loadJavascriptFiles");

 function getImageUrl($optionName, $size="null"){
     $id = get_option($optionName)[0];
     $imageUrl = pods_image_url($id,$size);
     return $imageUrl;
 }

 function getFormatedText($optionName){
    return wpautop(get_option($optionName));
 }

 function getFileUrl($optionName){
   $id = get_option($optionName)[0];
   $fileUrl = wp_get_attachment_url($id);
   return $fileUrl;
 }

 add_theme_support('post-thumbnails');
 add_image_size('project-thumbnail',350);

          
?>