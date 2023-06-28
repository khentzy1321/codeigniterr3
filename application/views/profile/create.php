<div class="container">
    <div class="form">
        <form action="<?php echo base_url('profiles/store');?>" method="post">
        <input type="text" name="fname" placeholder="First Name"  required> <br><br>
        <input type="text" name="lname" placeholder="Last Name"   required> <br><br>
        <input type="text" name="address"  placeholder="Address"  required> <br><br>
        <input type="date" name="date"  placeholder="Date"  required> <br><br>

        <input type="submit" class="submit" value="submit">
        <a class="a" href="<?php echo base_url('profiles');?>">back</a>
    </form>
    </div>
</div>
