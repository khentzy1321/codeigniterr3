<div class="container">
    <div class="header">All Profiles</div>
    <div class="create">
        <a class="a" href="<?php echo base_url('profiles/create');?>">Create</a>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Address</th>
                <th>Date</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($profiles as $profile){ ?>
                <tr>
                    <td><?php echo $profile->fname ;?></td>
                    <td><?php echo $profile->lname ;?></td>
                    <td><?php echo $profile->address ;?></td>
                    <td><?php echo $profile->date ;?></td>
                    <td>
                        <a href="<?php echo base_url('profiles/edit/'. $profile->id);?>">Edit</a>
                        <a href="<?php echo base_url('profiles/delete/'. $profile->id);?>">Delete</a>
                    </td>
                </tr>
              <?php }?>
        </tbody>
    </table>
</div>

