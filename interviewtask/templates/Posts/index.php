<div class="row">
    <div class="col-md-6">
        <h3>Registration Task</h3>
    </div>
    <div class="col-md-6" style="text-align:right">
        <?php echo $this->Html->link('Add User',['action'=>'add'],['class'=>'btn btn-primary']) ?>
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
            <th>Image</th>
            <th width="160">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php 
        $sno=1;
        foreach($posts as $post):           
        ?>
        <tr>
            <td><?php echo $sno++; ?></td>
            <td><?php echo $post->fname.' '.$post->lname ?></td>
            <td><?php echo $post->email ?></td>
            <td><?php echo $post->pass ?></td>
            <td><?php echo $post->dob ?></td>
            <td><?php echo $post->phone ?></td>
            <td><?php echo $post->height ?></td>
            <td><?php echo $post->weight ?></td>
            <td><?php echo $post->gender ?></td>
            <td><?php echo $post->create_date ?></td>
            <td><?php echo $this->Html->image('documents/'.$post->image,['width'=>'80','height'=>'80']); ?></td>
            <td>
                <?php echo $this->Html->link('Edit',['action'=>'edit', $post->id],['class'=>'btn btn-warning']) ?>
                <?php echo $this->Form->postLink('Delete',['action'=>'delete',$post->id],['class'=>'btn btn-danger','confirm'=>'Are You Sure to Delete?']) ?>
            </td>
        </tr>
        <?php
        endforeach;
        ?>
    </tbody>
</table>