<div class="form-group">
    <div id="dec" class="col-lg-12 col-md-12">
        
   
    <?php 
    include SHARED.'_motor_declaration_template.php';
    ?>

    <div class="form-group row">
            <div class="col-lg-6">
                Signed: 
                <span id="signed">
                    
                </span>
            </div>
        </div>
    </div>
    <div class="form-group  col-lg-4">
        <label for="agreeDeclare" class="purpose-radio-label">
            <span class="label-text">Agree and continue</span>
        </label>
        <input type="checkbox" name="agreeDeclare" id="agreeDeclare" class="agreeDeclare" onclick="toggleAgree('agreeDeclare', '.bootbox-accept')" class="purpose-radio-input agree" value="agree" >
    </div>
</div>
<script>
    $('span#signed').html('')
    console.log($('#fullname').val())
    $('span#signed').append($('#fullname').val())
</script>
