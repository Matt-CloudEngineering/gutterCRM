<script>
function CDelete()
	{
		var PromptC = confirm ('Delete for Sure(y/n)');
		var oForm = document.forms[0];

		if (PromptC=='y') 
		{
			oForm[0].submit();

		} else {
			alert("Returning to Customer List");
			SetTimeout (function() {window.location = "http://[::1]/~matt/gutter2/index.php/custies"},3000);
		}
	}
</script>

<!-- Page Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-12">
        	This customer has <?php echo $count ?> jobs. If you delete them these jobs will be orphaned!

            <?php echo form_open(); 

				echo "<div class='form-group'>";

				echo "<label>Do you want to permanently <span style='color:red;'>DELETE</span><br/>";

				?>
				<br>
				<input type="hidden" name="cust_id" value="<?php echo $custies_item['cust_id'] ?>"/>
				<input class="btn btn-danger" type="submit" name="submit" value="Yes Delete"  />
				<a class='btn btn-default' href='<?php echo site_url()."/custies" ?>'>No Delete</a>

			</div>
        </div>
    </div>
</div>
<!-- /.container -->


