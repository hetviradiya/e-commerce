<?php
include '../db.php';

$message = "";

if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $check = mysqli_query(
        $conn,
        "SELECT * FROM users WHERE email='$email'"
    );

    if(mysqli_num_rows($check) > 0)
    {
        $message = "Email already exists!";
    }
    else
    {
        $sql = "INSERT INTO users(name,email,password)
                VALUES('$name','$email','$password')";

        if(mysqli_query($conn,$sql))
        {
            header("Location: login.php");
            exit();
        }
        else
        {
            $message = mysqli_error($conn);
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>NØIR Register</title>

<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Inter:wght@300;400;500&family=Playfair+Display:ital@1&display=swap" rel="stylesheet">

<style>

:root{
    --bg:#080808;
    --text:#F0EDE6;
    --accent:#C8FF00;
    --card:#111111;
    --muted:#3A3A3A;
    --danger:#FF2D2D;
}

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
}

body{
    background:var(--bg);
    color:var(--text);
    font-family:'Inter',sans-serif;
    min-height:100vh;
}

.container{
    display:flex;
    min-height:100vh;
}

.left{
    flex:1;
    display:flex;
    flex-direction:column;
    justify-content:center;
    padding:80px;
}

.small{
    color:var(--accent);
    letter-spacing:3px;
    font-size:12px;
    text-transform:uppercase;
}

.title{
    font-family:'Bebas Neue',sans-serif;
    font-size:90px;
    line-height:1;
    margin:20px 0;
}

.title span{
    font-family:'Playfair Display',serif;
    font-style:italic;
    color:transparent;
    -webkit-text-stroke:1px #F0EDE6;
}

.left p{
    color:#bdbdbd;
    max-width:500px;
    line-height:1.8;
}

.right{
    width:450px;
    background:var(--card);
    display:flex;
    justify-content:center;
    align-items:center;
    padding:40px;
}

.register-box{
    width:100%;
}

.register-box h2{
    color:var(--accent);
    margin-bottom:30px;
    font-family:'Bebas Neue';
    letter-spacing:2px;
    font-size:40px;
}

.input-group{
    margin-bottom:20px;
}

input{
    width:100%;
    padding:15px;
    background:#1b1b1b;
    border:1px solid #222;
    color:white;
}

input:focus{
    outline:none;
    border-color:var(--accent);
}

button{
    width:100%;
    padding:15px;
    background:var(--accent);
    border:none;
    color:#000;
    font-weight:700;
    cursor:pointer;
}

button:hover{
    opacity:.9;
}

.alert{
    background:#1b1b1b;
    border-left:4px solid var(--danger);
    padding:12px;
    margin-bottom:20px;
}

.login-link{
    margin-top:20px;
    text-align:center;
}

.login-link a{
    color:var(--accent);
    text-decoration:none;
}

.features{
    margin-top:30px;
}

.features p{
    margin-bottom:10px;
}

@media(max-width:900px){

.container{
    flex-direction:column;
}

.right{
    width:100%;
}

.title{
    font-size:60px;
}
}
select,
textarea{
    width:100%;
    padding:15px;
    background:#1b1b1b;
    border:1px solid #333;
    color:white;
    border-radius:5px;
}

textarea{
    resize:none;
}



</style>
<script>

document.addEventListener("DOMContentLoaded", function(){

    const stateSelect =
        document.getElementById("state");

    const citySelect =
        document.getElementById("city");

    // Load States
    fetch("https://countriesnow.space/api/v0.1/countries/states")
    .then(response => response.json())
    .then(data => {

        stateSelect.innerHTML =
            '<option value="">Select State</option>';

        const india =
            data.data.find(
                country => country.name === "India"
            );

        india.states.forEach(state => {

            const option =
                document.createElement("option");

            option.value = state.name;
            option.textContent = state.name;

            stateSelect.appendChild(option);

        });

    })
    .catch(error => {
        console.log(error);
    });

    // Load Cities
    stateSelect.addEventListener("change", function(){

        const state = this.value;

        citySelect.innerHTML =
            '<option value="">Loading Cities...</option>';

        fetch(
            "https://countriesnow.space/api/v0.1/countries/state/cities",
            {
                method:"POST",
                headers:{
                    "Content-Type":"application/json"
                },
                body:JSON.stringify({
                    country:"India",
                    state:state
                })
            }
        )
        .then(response => response.json())
        .then(data => {

            citySelect.innerHTML =
                '<option value="">Select City</option>';

            data.data.forEach(city => {

                const option =
                    document.createElement("option");

                option.value = city;
                option.textContent = city;

                citySelect.appendChild(option);

            });

        })
        .catch(error => {
            console.log(error);
        });

    });

});
</script>
</head>

<body>

<div class="container">

<div class="left">

<div class="small">
NEW COLLECTION SS 2026
</div>

<h1 class="title">
<span>Join</span> THE VOID
</h1>

<p>
Create your NØIR account and unlock exclusive collections,
premium member benefits, faster checkout and personalized
fashion recommendations.
</p>

<div class="features">
<p>✓ Exclusive Member Access</p>
<p>✓ Premium Collections</p>
<p>✓ Secure Shopping</p>
<p>✓ Fast Delivery</p>
</div>

</div>

<div class="right">

<div class="register-box">

<h2>CREATE ACCOUNT</h2>


<form method="POST">

<div class="input-group">
    <input type="text"
           name="name"
           placeholder="Full Name"
           required>
</div>

<div class="input-group">
    <input type="email"
           name="email"
           placeholder="Email Address"
           required>
</div>

<div class="input-group">
    <input type="tel"
           name="phone"
           placeholder="Phone Number"
           required>
</div>

<div class="input-group">
    <select name="gender" required>
        <option value="">Select Gender</option>
        <option value="Male">Male</option>
        <option value="Female">Female</option>
        <option value="Other">Other</option>
    </select>
</div>

<div class="input-group">
    <input type="date"
           name="dob"
           required>
</div>

<div class="input-group">
    <textarea name="address"
              placeholder="Address"
              rows="3"
              required></textarea>
</div>

<div class="input-group">
<select id="state" name="state" required>
    <option value="">Select State</option>
</select>
</div>

<div class="input-group">
<select id="city" name="city" required>
    <option value="">Select City</option>
</select>
</div>
<div class="input-group">
    <input type="password"
           name="password"
           placeholder="Password"
           required>
</div>

<div class="input-group">
    <input type="password"
           name="confirm_password"
           placeholder="Confirm Password"
           required>
</div>

<button type="submit" name="submit">
    CREATE ACCOUNT
</button>

</form>

<div class="login-link">
Already have an account?
<a href="login.php">Login</a>
</div>

</div>

</div>

</div>

</body>
</html>
```
