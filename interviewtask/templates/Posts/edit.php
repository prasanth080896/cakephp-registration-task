<div class="row">
    <div class="col-md-6 offset-md-2">
        <h1 style="text-align:center">REGISTRATION</h1>
        <div class="card-body">
            <?php echo $this->Form->create($posts) ?>
            <div class="row form-group">
                <div class="col-sm-3"><label><b>First Name</b></label></div>
                <div class="col-sm-9"><?php echo $this->Form->input('fname',['value'=>$fname, 'class'=>'form-control']); ?></div>
            </div><br>
            <div class="row form-group">
                <div class="col-sm-3"><label><b>Last Name</b></label></div>
                <div class="col-sm-9"><?php echo $this->Form->input('lname',['value'=>$lname, 'class'=>'form-control']); ?></div>
            </div><br>
            <div class="row form-group">
                <div class="col-sm-3"><label><b>Email*</b></label></div>
                <div class="col-sm-9"><?php echo $this->Form->input('email',['value'=>$email, 'class'=>'form-control']); ?></div>
            </div><br>
            <div class="row form-group">
                <div class="col-sm-3"><label><b>Password*</b></label></div>
                <div class="col-sm-9"><?php echo $this->Form->input('pass',['value'=>$pass, 'class'=>'form-control']); ?></div>
            </div><br>
            <div class="row form-group">
                <div class="col-sm-3"><label><b>Date of Birth*</b></label></div>
                <div class="col-sm-9"><?php echo $this->Form->input('dob',['selected'=>$dob, 'class'=>'form-control', 'type'=>'date']); ?></div>
            </div><br>
            <div class="row form-group">
                <div class="col-sm-3"><label><b>Phone Number</b></label></div>
                <div class="col-sm-9"><?php echo $this->Form->input('phone',['value'=>$phone, 'class'=>'form-control', 'type'=>'number','maxlength'=>'10']); ?></div>
            </div><br>
            <div class="row form-group">
                <div class="col-sm-3"><label><b>Height*</b></label></div>
                <div class="col-sm-9"><?php echo $this->Form->input('height',['value'=>$height, 'class'=>'form-control']); ?></div>
            </div><br>
            <div class="row form-group">
                <div class="col-sm-3"><label><b>Weight*</b></label></div>
                <div class="col-sm-9"><?php echo $this->Form->input('weight',['value'=>$weight, 'class'=>'form-control']); ?></div>
            </div><br>
            <div class="row form-group">
                <div class="col-sm-3"><label><b>Gender</b></label></div>
                <div class="col-sm-9">
                    <?php 
                        $options2 = array(
                                        'female' => 'Female',
                                        'male' => 'Male',
                                    );
                                    $attributes2 = array(
                                        'legend' => false, 
                                        'value' => $gender,
                                    );
                        echo $this->Form->radio('gender', $options2, $attributes2); 
                    ?>
                </div>
            </div><br>
            <div class="form-group">
                <?php echo $this->Form->button('Update',['class'=>'btn btn-warning']); ?>
                <?php echo $this->Html->link('Back',['action'=>'index'],['class'=>'btn btn-success']); ?>
                <?php echo $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>