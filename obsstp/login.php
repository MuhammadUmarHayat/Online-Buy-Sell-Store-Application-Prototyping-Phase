<?php include_once "header.php"; ?>
<main>
    <section>
    <?php include_once "nav.php"; ?>
    </section>
    
    <section>
    <form method="post" action="login-process.php">
<div>
<table>
<tr> <td>
<input type="radio" name="userType"
<?php if (isset($userType) && $userType=="buyar") echo "checked";?>
 value="buyar">Buyar<br>
 <input type="radio" name="userType"
<?php if (isset($userType) && $userType=="seller") echo "checked";?>
 value="seller">Seller<br>
 </td>   </tr>
<tr> <td>User ID <span class="error" >*</span ></td> <td><input type="text" name="userid" required>    </td>   </tr>
<tr><td>Password <span class="error" >*</span ></td> <td><input type="password" name="password" required> </td>   </tr>

<tr> <td>   </td>
 <td> <button type="submit" name="login"> Login </button>  </td>   </tr>


</table>

</div>
</form>
    </section>
</main>

<?php include_once "footer.php"; ?>
</body>
</html>
