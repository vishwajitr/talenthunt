<?php 
include_once("functions.php");
include('header.php') ?>
<?php
$education_options = array('BSCIT','BE', 'MCA');
$positions_options = array('UI Developer',' Associate Ui Devloper', 'PHP Devloper', 'Graphic Designer');

$displaydata=new DB_conn();

if(isset($_GET['edit']) && !empty($_GET['edit'])){
$datapass['editid'] = $_GET['edit'];    
$data = $displaydata->display_candidate_byid($datapass['editid']);
$data = mysql_fetch_assoc($data);
}
?>
<div class="row">
   <div class="col-md-6">
      <div class="card">
         <div class="card-header">
            <strong>Fill Your Form(Candidate Form)</strong>
         </div>
         <div class="card-block">
            <form action="add_candidate.php" method="post" enctype="multipart/form-data" class="form-horizontal ">
               <div class="form-group row">
                  <label class="col-md-3 form-control-label" for="text-input">First Name</label>
                  <div class="col-md-9">
                     <input type="text" id="firstname" class="form-control" name="first_name" value="<?php if(isset($data['first_name'])&!empty($data['first_name'])){echo $data['first_name']; } ?>">
                     <span class="help-block"></span>
                  </div>
               </div>
               <div class="form-group row">
                  <label class="col-md-3 form-control-label" for="text-input">Middle Name</label>
                  <div class="col-md-9">
                     <input type="text" id="middlename" class="form-control" name="middle_name" value="<?php if(isset($data['middle_name'])&!empty($data['middle_name'])){echo $data['middle_name']; } ?>">
                     <span class="help-block"></span>
                  </div>
               </div>
               <div class="form-group row">
                  <label class="col-md-3 form-control-label" for="text-input">Last Name</label>
                  <div class="col-md-9">
                     <input type="text" id="lastname" class="form-control" name="last_name" value="<?php if(isset($data['last_name'])&!empty($data['last_name'])){echo $data['last_name']; } ?>">
                     <span class="help-block"></span>
                  </div>
               </div>
                <div class="form-group row">
                  <label class="col-md-3 form-control-label" for="email-input">Email</label>
                  <div class="col-md-9">
                     <input type="email" id="email-input" class="form-control" name="email" value="<?php if(isset($data['email'])&!empty($data['email'])){echo $data['email']; } ?>">
                     <span class="help-block"></span>
                  </div>
               </div>

               <div class="form-group row">
                  <label class="col-md-3 form-control-label" for="contact-input">Contact</label>
                  <div class="col-md-9">
                     <input type="text" id="contact-input" class="form-control" name="contact" value="<?php if(isset($data['contact'])&!empty($data['contact'])){echo $data['contact']; } ?>">
                     <span class="help-block"></span>
                  </div>
               </div>
               
              

            <div class="form-group row">
                <label class="col-md-3 form-control-label">Gender</label>
                <div class="col-md-9">
                    <div class="radio">
                        <label class="radio-inline" for="radio1">
                            <input type="radio" id="radio1" name="gender" value="male" 
                            <?php 
                            if(isset($data['gender'])&&!empty($data['gender'])){
                            if($data['gender'] == 'male'){echo 'CHECKED';}  
                            }
                            ?>
                            >Male
                        </label>
                        <label class="radio-inline" for="radio2">
                            <input type="radio" id="radio2" name="gender" value="female" 
                            <?php 
                            if(isset($data['gender'])&&!empty($data['gender'])){
                            if($data['gender'] == 'female'){echo 'CHECKED';}  
                            }
                            ?>
                            >
                            Female
                        </label>
                    </div>
                </div>
            </div>

            <div class="form-group row">
                  <label class="col-md-3 form-control-label" for="text-input">Date of Birth</label>
                  <div class="col-md-9">
                     <input type="date" id="lastname" class="form-control" name="dob" name="last_name" value="<?php if(isset($data['dob'])&!empty($data['dob'])){echo $data['dob']; } ?>">
                     <span class="help-block"></span>
                  </div>
               </div>


              <div class="form-group row">
                  <label class="col-md-3 form-control-label" for="select">Education</label>
                  <div class="col-md-9">
                     <select id="select" class="form-control" size="1" name="education">
                        <?php
                         foreach($education_options as $option){
                                   if($data['education'] == $option){
                                       echo "<option selected='selected' value='$option'>".$option."</option>" ;
                                   }else{
                                       echo "<option value='$option'>".$option."</option>" ;
                                   }
                               }
                           ?>
                     </select>
                  </div>
               </div>


               <div class="form-group row">
                  <label class="col-md-3 form-control-label" for="textarea-input">Experience Description</label>
                  <div class="col-md-9">
                     <textarea id="textarea-input" name="experience_desc" rows="9" class="form-control"><?php if(isset($data['experience_desc'])&!empty($data['experience_desc'])){echo $data['experience_desc']; } ?></textarea>
                  </div>
               </div>
               <div class="form-group row">
                  <label class="col-md-3 form-control-label" for="select">Position Applying for </label>
                  <div class="col-md-9">
                     <select id="select" class="form-control" size="1" name="applying_position">
                        <?php
                         foreach($positions_options as $option){
                                   if($data['education'] == $option){
                                       echo "<option selected='selected' value='$option'>".$option."</option>" ;
                                   }else{
                                       echo "<option value='$option'>".$option."</option>" ;
                                   }
                               }
                           ?>
                     </select>
                  </div>
               </div>
               <div class="form-group row">
                  <label class="col-md-3 form-control-label">More Info</label>
                  <div class="col-md-9">
                     <div class="checkbox">
                        <label for="checkbox1">
                        <input type="checkbox" id="applied_before" name="applied_before" 
                        <?php 
                            if(isset($data['applied_before'])&&!empty($data['applied_before'])){
                            if($data['applied_before'] == '1'){echo 'CHECKED';}  
                            }
                        ?>
                        >
                        &nbsp;Have you applied before Drecti
                        </label>
                     </div>
                  </div>
               </div>
              


<input type="text" id="contact-input" class="form-control" name="edit" value="<?php if(isset($data['cand_id'])&&!empty($data['cand_id'])){ echo $data['cand_id'];} ?>">

                
               
         </div>
         <div class="card-footer">
         <button type="submit" class="btn btn-sm btn-primary" name="submit" value="submit"><i class="fa fa-dot-circle-o"></i> Submit</button>
         <button type="reset" value="reset" class="btn btn-sm btn-danger"><i class="fa fa-ban"></i> Reset</button>
         </div>
         </form>
      </div>
   </div>
</div>
<!--/col-->
</div>
<!--/.row-->
<?php include('footer.php') ?>