<?php include('layout.php'); ?>

<div class="container"> 
    <form action="/login" method="POST">
        <h2>Login</h2>
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password"   
 required>
        <button type="submit">Login</button>   

    </form>
</div>