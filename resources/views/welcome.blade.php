<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Homepage</h1>

      <div>
            <form action="/form" method="post">
                @csrf
                
                
                <label for="name">Name</label>
                <input type="text" name="name" id="name" >

                <label for="email">Email</label>
                <input type="text" name="email" id="email" >    
                
                <label for="password">Password</label>
                <input type="text" name="password" id="password" >

                <button type="submit">Click</button>
            </form>
        </div>

        
    
</body>
</html>