<div class="container">
    <div class="form">
        <form action="<?php echo base_url('profiles/update/' . $profile->id);?>" method="post">
        <input type="text" name="fname" value="<?php echo $profile->fname ;?>" required> <br><br>
        <input type="text" name="lname" value="<?php echo $profile->lname ;?>" required> <br><br>
        <input type="text" name="address" value="<?php echo $profile->address ;?>" required> <br><br>
        <input type="text" name="date" value="<?php echo $profile->date ;?>" required> <br><br>
        <input type="submit" class="submit" value="submit">
    </form>
    </div>
</div>

