<!DOCTYPE >
<html >
 <head>
   <title>Logged in</title>
 </head>
 <body>
   <h1>Home</h1>
   <h2>Welcome <?php echo 'hi'; ?>!</h2>
   <a href="home/logout">Logout</a>
   <?php echo $this -> session -> userdata('email'); ?>
 </body>
</html>