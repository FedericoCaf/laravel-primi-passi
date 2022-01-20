<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>

  <header>
    <ul>
      <li>
        LOGO
      </li>
      <li>
        <a href=" {{ route('home') }} ">HOME</a>
      </li>
      <li>
        <a href=" {{ route('about') }} ">ABOUT</a>
      </li>
      <li>
        <a href=" {{ route('contacts') }} ">CONTACTS</a>
      </li>
   </ul>
 
   <h2>Ciao {{$name}} </h2>
 
   <ul>
     @foreach ($nomi as $nome)
         <li> {{ $nome }} </li>
     @endforeach
   </ul>
 
   <div>
     @if ($stampa)
       <h3>devo stampare </h3> 
     @else
     <h3>non devo stampare </h3> 
     @endif
   </div>
  </header>
  

</body>
</html>