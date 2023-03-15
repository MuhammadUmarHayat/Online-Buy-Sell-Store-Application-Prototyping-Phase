<?php include_once "header.php"; ?>
<main>
    <section>
    <?php include_once "nav.php"; ?>
    </section>
    
    <section>
    <form method="post" action="buyar-signup-process.php">
<div>
<table>

<tr> <td>Name <span class="error" >*</span ></td> <td><input type="text" name="name" required>    </td>   </tr>
<tr> <td>User ID <span class="error" >*</span ></td> <td><input type="text" name="userid" required>    </td>   </tr>
<tr><td> Password <span class="error" >*</span ></td> <td><input type="password" name="password" required> </td>   </tr>
<tr><td> Retype Password <span class="error" >*</span ></td> <td><input type="password" name="retypePassword" required> </td>   </tr>
<tr> <td>Address<span class="error" >*</span ></td> <td><input type="text" name="address" required>    </td>   </tr>
<tr> <td>Phone Number <span class="error" >*</span ></td> <td><input type="text" name="phoneNo" required>    </td>   </tr>
<tr> <td>   </td>
 <td> <button type="submit" name="signup"> Signup </button>  </td>   </tr>
</table>

</div>
</form>
    </section>
</main>

<?php include_once "footer.php"; ?>
</body>
</html>
