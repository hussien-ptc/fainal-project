
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
 </head>
 <body>
     {{-- <!-- <?php echo $name; ?>
     <br>

      --}}
     <form action="/about" method="post">
         @csrf
     Input your name: <input type="text" name="name" id="name">
     <input type="submit" value="أرسل">

      </form>
     <h1> My name is :{{$name}}</h1>    {{-- print code --}}
     <br>
     {{-- <h1> My age is :{{$age}}</h1>     print code --}}













 </body>
 </html>
