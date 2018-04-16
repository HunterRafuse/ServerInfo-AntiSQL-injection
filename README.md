# ServerInfo-AntiSQL-injection
Just a little brushing up on Client, Server &amp; File info with PHP as well as safe form practices.

## First things first!

  So I ran into some bugs back in the day when using XAMPP to render PHP files. They say to use this file path when using XAMPP to
  render but I had an issue with said file path:
  
  ```
  C:\xampp\htdocs
  ```
  You see, my documents would just redirect to the normal dashboard .php file that was the default file within the htdocs directory.
  Instead I went a directory down and selected ```xampppkg```. Reasoning behind this, just because it set that path within Apache's
  ```httpd.config``` file. Now I hope you read this before continuing. If you did and have any issues, just re read this section. On
  to the next one.
  
  ## Second things secondly? 
  
   Next thing to do is to either clone with cmd or just click the fork and or straight download it. Whichever. This is meant as a 
   way to review from basics to further as it is always a must in the Development field. Which is to keep your wits about you and
   try to not forget the basics. We all do that sometimes, I know it's embarrassing even for me. Alright let's dive in.
   
   
   ## First Directory - Website 1
   
   In here I created a server-info.php which has scripts for all the Server & File info as well as the Client-side info. You can use
   this as a base for any project you may have but it's just to review server info code which is important to know. It should look like
   so:
   
   <img src="imgs/phpcapture1.JPG">
