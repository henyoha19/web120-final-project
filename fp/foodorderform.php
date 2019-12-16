<?php include 'includes/config.php'?> 
<?php include 'includes/header.php'?> 
        

<form action="" method="post">
    <div class="row"> <br>
        <div class="form-group col-lg-4">
            <label class="text-heading" for="FirstName">First Name</label>
            <input class="form-control" type="text" name="FirstName" id="FirstName" autofocus required />
        </div>
    <br>
       <div class="form-group col-lg-4">
            <label class="text-heading" for="Last_Name">Last Name</label>
            <input class="form-control" type="text" name="Last_Name" id="LastName" required />
        </div>
        <br>
  Extra Enjera:
  <br>
  <input type="radio" name="enjera" value="yes"> Yes<br>
  <input type="radio" name="enjera" value="no"> No <br>

  <br>
Food Menu: 
<br>
<input type="checkbox" name="formDoor[]" value="Monday Special" />Vegi Combo<br />
<input type="checkbox" name="formDoor[]" value="Tesday Special" />Roasted Beef<br />
<input type="checkbox" name="formDoor[]" value="Wednesday Special" />dorowet<br />
<input type="checkbox" name="formDoor[]" value="Tursday Special" />Kitfo<br />
<input type="checkbox" name="formDoor[]" value="Friday Special" />Gored Gored<br />


     <br>
        <div class="form-group col-lg-4">
            <label class="text-heading" for="Email">Email</label>
            <input class="form-control" type="email" name="Email" id="Email" required />
        </div>
    <br>
        <div class="clearfix"></div>
        
       <div class="form-group col-lg-12">
            <label class="text-heading" for="Additional order">Additional order</label>
            <textarea class="form-control" name="Additional order" id="Additional order"></textarea>
        </div>
     <br>   
        <div class="form-group col-lg-12">
            <label class="text-heading" for="Address"> Address</label>
            <textarea class="form-control" name="Address" id="Address"></textarea>
        </div>
        
    <br>
   <div class="g-recaptcha" data-sitekey="<?=$siteKey;?>"></div> 
    <br>
        <div class="form-group col-lg-12">
            <button type="submit" class="btn btn-secondary" >Submit</button>
        </div>
    </div>
    </form>
</section>
<!-- END LEFT COL -->

<!-- START RIGHT COL -->
<aside>
 <h3>Food Order </h3>

 <p>Lollipop ice cream wafer oat cake apple pie jelly beans pie gingerbread candy canes. Pie liquorice biscuit jelly jujubes cheesecake. Tiramisu donut wafer icing macaroon dessert cheesecake. Jujubes gummi bears danish biscuit muffin.Bonbon liquorice halvah ice cream halvah dragée. Jujubes bear claw chocolate bar oat cake jelly chupa chups candy canes oat cake. Biscuit candy gummi bears chocolate. Danish soufflé candy jelly-o biscuit bonbon donut bear claw.</p>
 
</aside>
<!-- END RIGHT COL -->
 
<!-- START Footer -->
<?php include 'includes/footer.php'?>


