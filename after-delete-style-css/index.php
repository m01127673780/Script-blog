<?php
$file = 'test.text';
date_default_timezone_set('Africa/Cairo');
if($_SERVER['REQUEST_METHOD'] == "POST"){
$int =   $_POST["text"] ;
$opt = array(
'options' => array(
'min_range' => 11111,
'max_range' => 99999
)
);
$int      = filter_var($_POST['text'] , FILTER_SANITIZE_NUMBER_INT);

if( filter_var($int , FILTER_VALIDATE_INT, $opt) !==FALSE ) {
header("Location: https://www.google.com/");
}else{


// echo ' <div class="masege"> عفوا هذا  '.$int.'  ليس  رقم صحيح <span class="span-apan">  <img src="https://cdn1.iconfinder.com/data/icons/smashicons-emoticons-retro-vol-3/44/174_-_Dead_emoticon_emoji_face-512.png"> </span> </div>';
}

if(is_writable($file)){
//echo "Good THis File '.$file.' Is Found <hr>";

date_default_timezone_set('Africa/Cairo');
}else{
echo 'sory the file '.$file."IS Not  found ):Is Writable";
file_put_contents($file,'Created by php not Is Writable So i Can ');
}
$varData ='  ' .date ('Y-m-d/h:i');
$int = filter_var($int , FILTER_VALIDATE_INT) ; 
$text = $int ;

$textCo = $text ;
}
if($_SERVER["REQUEST_METHOD"] == 'POST'){
if(strlen($int) >=5 ){
$textCo = '('.$text . $varData.')  '  ;
 }else{
$textCo = '' ;
}
file_put_contents($file,$textCo,FILE_APPEND );
}else {
//echo "  Sorry This UserName Is Not Exist In our Client ARea :)   ";
}
 ?> 
<!DOCTYPE html>
    <html>
         <head>
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
                <link rel="icon" type="image/png" sizes="16x16" href="https://i.imgur.com/bPbfNAQ.png">
                <title>index </title>
                <!--   stylesheet CSS -->
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
                                <link rel="stylesheet" href="css/style.css">
                 <!--==========================================================-->
                 <style type="text/css">
                   
  body{
        background-color: #fff ;
    font-family: "ge ss two";

       }
    .btn-primr {
        font-weight: bold;
        text-align: center;
        margin: auto;
        display: block;
        background-color: #409fd7;
        
    }   

    .et-icon {
        position: absolute;
        color: #e93d3d;
        right: 53px;
        top: 122px;
        background: #409fd7;
        width: 54px;
        height: 54px;
        border-radius: 50%;
        text-align: center;
        line-height: 1.5;
        font-size: 38px;
        
    }


                    .fa {
        color: #f2be0f;
        position: absolute;
        color: #e93d3d;
        /* color: #3498db; */
        right: 53px;
    top: -120px;
            background: #409fd7;
        width: 54px;
        height: 54px;
        border-radius: 50%;
        text-align: center;
        line-height: 1.5;
        font-size: 38px;

        }     .title2 {
    margin-top: -110px;
            right: 24%;
        font-weight: bold;
        margin-right: 40px;
        position: absolute;
        margin-right: 77px;
        color: #4c4c4c;
         font-size: 30px;
        }






      p {
        margin-top: 53px;
         color: 000;
        font-size: 20px;
        font-weight: 400;
        max-width: 500px;
         text-align: right;

}
   
        .contain{
        position: relative;
        }
        .content-titel{
        position: absolute;
        right: 20%;
        }
        article{
        /*display: none;*/ 
        }
   .form-control {
        display: block;
         width: 48% !important;  
        height: 80px !important;  
        padding: .375rem .75rem;
        font-size: 1rem;
        line-height: 1.5;
        color: #495057;
        background-color: #fff;
        background-clip: padding-box;
        border-radius: .25rem;
        transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
        height: 200px;

    -webkit-box-shadow: 0 0 0px 3px #aaa;
    -moz-box-shadow: 0 0 0px 3px #aaa;
    box-shadow:  box-shadow: 0 0 0px 3px #aaa;
 
    }
        .btn-submit{
        margin-top: 30px;
        background-color: #409fd7;
            padding: 9px 57px;
        }

   
       .footer {
            font-weight: bold !important;
            text-align: right!important;
            max-width: 820px;
               } 


                         .masege {
 position: absolute;     /* display: block; */
     /* margin: 50% 0; */
     background: red;
    color: #fff;
    padding: 11px;
    font-weight: bold;
    margin-top: 100px;
 
}

 


img{

    width: 25px;
    height: 30px; 
  border-radius: 50%;
  position: relative;;
}
.span-apan{
position: relative;
}

.span-apan:after {
    content: " ";
    width: 0;
    height: 0;
    border-style: solid;
    border-width: 10px 10px 10px 10px;
    position: absolute;
    margin-top: -61px;
    border-color: transparent transparent red;
    right: 0;
 
}

           @media(max-width:1075px){

        .title2 {
    right: 7.6%;    }
        .fa {
    right: -100px
        } 
       }
             
   }
      @media(max-width:1600px){
  .form-control { 
         width: 48% !important;  

 }
      }

   @media (max-width: 992px){
.title2 {
    right: 4%;
}
             .form-control {
        width: 75% !important;
      }
    }
       
        @media(max-width:768px){
        .title2 {
       }
        .faa {
        right: -75px;
        }
           .form-control {
        width: 97% !important;
      }
   
}   
          @media(max-width:684px){
        .title2 {
    right: -2% !important;
          }
 
   }
       
             @media(max-width:500px){
        .title {
        right: -1.4%;}
        .fa {
        right: -75px;
        }
           .form-control {
        width: 97% !important;
      }
   }
 .Edit{
      margin-right: 30px;
 }
.Hedder {
    background-color: #f5f5f5;
    border-radius-t: 10%;
     height: 100px;
    display: block; 


    -webkit-box-shadow:0 4px 1px #677f89;
    -moz-box-shadow:0 4px 1px #677f89;
    box-shadow: 0 4px 1px #677f89;


}
     {

     }
     .p-footer{
        margin-right: 27px;
}



                 </style>
   </head>
          <body>     
               <div class="Hedder">   </div>
                  <div class="container">
                     <center>
                       <br><br>
                         <section class="mange-Page Add-mambers">
                            <div class="container">
                             <div class="contain"> 
                                 <center > 
                                  <article>
                                        <div class="content-titel wow bounceInRight">
                                 <img class="   fa fa-globe   "src="https://i.imgur.com/bPbfNAQ.png">
                            </div>  
                    <span class="title2" > نص هنا </span>
           </article>
            <br><br><br><br><br><br>
                <div class="col-sm-12    input-group-lg  "   >
           <p style=""> 
           ففقره فقره فقره فقره فقره فقره فقره فقره فقره فقره فقره فقره فقره فقره فقره فقره فقره فقره فقره فقره فقره فقره فقره فقره فقره فقره ففقره فقره فقره فقره فقره فقره فقره فقره فقره فقره فقره فقره فقره فقره فقره</p>

                 <form action="<?php echo $_SERVER['PHP_SELF']; ?> " method="post" class="wow bounceInUp " data-wow-duration="3s">
                    <!--start form-group text-->
                        <div class="form-group row">
                             <div class="col-sm-12    input-group-lg">
                                      <input type="text" name="text" class="form-control live" placeholder="" data-class=".live-desc" pattern=".{5,5}" title="من فضلك ادخل 5 ارقام فقد  1***5" required="" data-text="Price of the Item">
                                     <button type="submit" class="   btn-submit  btn btn-primary btn-lg" value="">   تاكيد
                               </button><!--start submit field-->
                            </center> 
                          <br> <br> <br> 
                     </div><!--End Email field-->
                </form><!--form-->
         <p class="p-footer">هنا يوضع نص للفوتر</p> 
             </div>
        </div><!--container-->
    </div><!--containt-->
 </section><!--section-->
     </body>
                 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
                 <!-- Popper JS -->
                 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
                 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
                 <script type="text/javascript">
                     $('.masege').fadeOut(900);
                 </script>
</html>
