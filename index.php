<html lang="en">
<head>
    <title>PHP Mysql Select2 Autocomplete With Ajax Example</title>
    <script src="js/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="js/bootstrap.bundle.min.js"></script>
    <link href="js/select2.min.css" rel="stylesheet" />
    <script src="js/select2.min.js"></script>
</head>
<body>
    <div class="container">
  		<br />
  		<br />
    	<h1 align="center">Dynamically Add New Option Tag in Select2 using Ajax in PHP</h1>
    	<br />
    	<br />	
      <div class="row">
        <div class="col-md-6 offset-md-3">
          <select name="category" id="category" class="form-control form-control-lg select2" multiple>
            <?php
            foreach($result as $row)
            {
              echo '<option value="'.$row['category_name'].'">'.$row['category_name'].'</option>';
            }
            ?>
          </select>
        </div>
      </div> 
    </div>
  </body>
</html>

<script>

$(document).ready(function(){

  $('.select2').select2({
    placeholder:'Select Category',
    theme:'bootstrap4',
    tags:true,
  }).on('select2:close', function(){
    var element = $(this);
    var new_category = $.trim(element.val());

    if(new_category != '')
    {
      $.ajax({
        url:"add.php",
        method:"POST",
        data:{category_name:new_category},
        success:function(data)
        {
          if(data == 'yes')
          {
            element.append('<option value="'+new_category+'">'+new_category+'</option>').val(new_category);
          }
        }
      })
    }

  });

});

</script>

    
</body>
</html>