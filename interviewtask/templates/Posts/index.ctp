<div class="row">
    <div class="col-md-6">
        <h3>Registration Task</h3>
    </div>
    <div class="col-md-6 text right">
        <a href="" class="btn btn-primary">Add User</a>
    </div>
</div>

<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>S.No</th>
            <th>Name</th>
            <th>Email</th>
            <th>Password</th>
            <th>DOB</th>
            <th>Phone</th>
            <th>Height</th>
            <th>Weight</th>
            <th>Gender</th>
            <th>Created Date</th>
            <th width="150">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php 
        foreach($posts as $post):
        ?>
        <tr>
            <td><?php echo $post->id ?></td>
            <td><?php echo $post->fname ?></td>
            <td><?php echo $post->email ?></td>
            <td><?php echo $post->pass ?></td>
            <td><?php echo $post->dob ?></td>
            <td><?php echo $post->phone ?></td>
            <td><?php echo $post->height ?></td>
            <td><?php echo $post->weight ?></td>
            <td><?php echo $post->gender ?></td>
            <td><?php echo $post->create_date ?></td>
            <td>
                <a href="" class="btn btn-warning">Edit</a>
                <a href="" class="btn btn-danger">Delete</a>
            </td>
        </tr>
        <?php
        endforeach;
        ?>
    </tbody>
</table>