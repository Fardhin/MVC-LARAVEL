<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <h1>Buat Akun Baru!</h1>
    
    <form action="\welcome" id="form" method="post">
        {{@csrf_field()}}
    <h3>Sign Up Form</h3>
    First name: <p>
    <input type="text" name="first_name" id="first_name"> <p>
    Last name: <p>
    <input type="text" name="last_name" id="last_name"> <p>

    Gender: <p>
    <input type="radio" name="" id=""> Male <br>
    <input type="radio" name="" id=""> Female <br>
    <input type="radio" name="" id=""> Other <br>
    <p>
    Nationality: <p>
    <select name="" id="">
       <option value="Indonesian">Indonesian</option>
       <option value="Inggris">Inggris</option>
    </select>
    <p>
        Language Spoken: <p>
        <input type="checkbox" name="" id=""> Bahasa Indonesia <br>
        <input type="checkbox" name="" id=""> English <br>
        <input type="checkbox" name="" id=""> Other <br>
    <p>
        Bio:
        <p>
            <textarea name="" id="" cols="30" rows="10"></textarea>
<br>
<input type="submit" name="" value="Sign Up"> 
</form>
        </body>
</html>