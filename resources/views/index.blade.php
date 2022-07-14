<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
@foreach ($regs as $r)
          <tr>
            <form method="post" action="">
      
              
              <td>id {{$r->id }}</td>
              <td> name {{$r->student->name}}</td>
             
          </form>
          </tr>
        @endforeach
</body>
</html>