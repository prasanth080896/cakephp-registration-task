<div class="row">
    <div class="col-md-6 offset-md-2">
        <h1 style="text-align:center">REGISTRATION</h1>
        <div class="card-body">
            <?php echo $this->Form->create($posts,['type'=>'file']) ?>
            <div class="row form-group">
                <div class="col-sm-3"><label><b>First Name*</b></label></div>
                <div class="col-sm-9"><?php echo $this->Form->input('fname',['class'=>'form-control','placeholder'=>'First Name'])?></div>
            </div><br>
            <div class="row form-group">
                <div class="col-sm-3"><label><b>Last Name</b></label></div>
                <div class="col-sm-9"><input type="text" name="lname" class="form-control" placeholder="Last Name"/></div>
            </div><br>
            <div class="row form-group">
                <div class="col-sm-3"><label><b>Email*</b></label></div>
                <div class="col-sm-9"><?php echo $this->Form->input('email',['class'=>'form-control','placeholder'=>'Email','type'=>'email'])?></div>
            </div><br>
            <div class="row form-group">
                <div class="col-sm-3"><label><b>Password*</b></label></div>
                <div class="col-sm-9"><?php echo $this->Form->input('pass',['class'=>'form-control','placeholder'=>'Password','type'=>'password'])?></div>
            </div><br>
            <div class="row form-group">
                <div class="col-sm-3"><label><b>Confirm Password*</b></label></div>
                <div class="col-sm-9"><?php echo $this->Form->input('cpass',['class'=>'form-control','placeholder'=>'Password','type'=>'password'])?></div>
            </div><br>
            <div class="row form-group">
                <div class="col-sm-3"><label><b>Date of Birth*</b></label></div>
                <div class="col-sm-9"><?php echo $this->Form->input('dob',['class'=>'form-control','type'=>'date'])?></div>
            </div><br>
            <div class="row form-group">
                <div class="col-sm-3"><label><b>Phone Number</b></label></div>
                <div class="col-sm-9"><?php echo $this->Form->input('phone',['class'=>'form-control','placeholder'=>'Phone Number','type'=>'number','maxlength'=>'10'])?><span>Your phone number won't be disclosed anywhere</span></div>
            </div><br>
            <div class="row form-group">
                <div class="col-sm-3"><label><b>Height*</b></label></div>
                <div class="col-sm-9"><?php echo $this->Form->input('height',['class'=>'form-control','placeholder'=>'Please write your height in centimetres'])?></div>
            </div><br>
            <div class="row form-group">
                <div class="col-sm-3"><label><b>Weight*</b></label></div>
                <div class="col-sm-9"><?php echo $this->Form->input('weight',['class'=>'form-control','placeholder'=>'Please write your weight in kilograms'])?></div>
            </div><br>
            <div class="row form-group">
                <div class="col-sm-3"><label><b>Gender</b></label></div>
                <div class="col-sm-9"><input type="radio" name="gender" value="female"/> Female <input type="radio" name="gender" value="male"/> Male </div>
            </div><br>
            <div class="row form-group">
                <div class="col-sm-3"><label><b>Image</b></label></div>
                <div class="col-sm-9"><?php echo $this->Form->input('image',['class'=>'form-control','type'=>'file']);?></div>
            </div><br>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Register</button>
                <?php echo $this->Html->link('Back',['action'=>'index'],['class'=>'btn btn-success']); ?>
                <?php echo $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>