<?php
/*
Template Name: RegForm
*/
get_header();
// $theme_path = get_stylesheet_directory_uri();

//   $user_id = get_current_user_id(); 
//   $user_info = get_userdata($user_id);
//   $mailadresje = $user_info->user_email;

?>

<div style="margin: 200px;">

  <div id="msg"></div>
  <form id="myForm" >
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" id="name" name="name">
    </div>
    <div class="form-group">
      <label for="address">Address:</label>
      <input type="text" id="address" name="address" required>
    </div>
    <div class="form-group">
      <label for="postalcode">Postal Code:</label>
      <input type="text" id="postalcode" name="postalcode" required>
    </div>
    <!-- <input type="submit" name="submitReg" value="Submit"> -->
    <div>
      <a href="javascript:void(0)" class="btn_submit2">submit</a>
    </div>
  </form>
</div>

<script>
  // document.getElementById('myForm').addEventListener('submit', function(event) {
  // event.preventDefault(); 
  // })
  jQuery(".btn_submit2").click(function(){
    var name =jQuery("input[name='name']").val();
    var address =jQuery("input[name='address']").val();
    var postalcode =jQuery("input[name='postalcode']").val();

    if(name == "" || address=="" || postalcode == ""){
      jQuery("#msg").show().html("<div class='alert alert-danger'>All fields are required</div>");
      setTimeout(function(){
        jQuery("#msg").hide();
      }, 4000)
    }else{
      // alert("Insert");
      // jQuery("form")[0].reset();

      var formData = new FormData(jQuery("#myForm")[0]);

      jQuery.ajax({
        url: "<?php echo get_stylesheet_directory_uri(); ?>/custome-templates/process/insert.php",
        method: "post",
        data: formData,
        contentType:false,
        processData: false,
        success:function(data){
          console.log(data);
          jQuery("#msg").show().html(data);
          setTimeout(function(){
            jQuery("#msg").hide();
          }, 4000)
        }

      })
    }

  })
</script>
<?php 
get_footer('en');
?>


