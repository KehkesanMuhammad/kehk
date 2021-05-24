<title>CI Inputs</title>
<?php include 'include/top_links.php'; ?>



<br><br> <br><br><br>
<style type="text/css">
	
	body {
		background-color: #B8A270;
	}

.inputs_fields {
	font-family: montserrat,Comic Sans MS,Helvetica,Georgia;

}

.inp_fields {
	width: 30%;
	border-radius: 5px;
	border: none;
}
.text_ar {
	margin-left: 23px;
	width: 100%;
}
.butn button {
	border: none;
	border-radius: 25px;
	padding: 10px 20px;
	margin-left: 40px;
}

@media only screen and (max-width: 600px) {
 
	
.inp_fields {
	width: 70%;
	border-radius: 5px;
	border: none;
}
}

</style>

<div class="container">

		<div class="inputs_fields" style="text-align: center;">


			Date: <input type="date" class="inp_fields" name=""> <br> <br>
			Time: <input type="datetime-local" class="inp_fields" name=""><br> <br>
			<div class="text_ar">
			<textarea class="inp_fields" rows="8" placeholder="Address" ></textarea>
			</div>
			<br>
			<div class="butn">
				<button type="button" data-toggle="modal" data-target="#myModal" class="btn-info">SUBMIT</button>
				
			</div>

			</div>




			
</div>

<!-- Modal -->
  <!-- Modal -->
<div class="modal fade" id="basicExampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>



<script type="text/javascript">
	
	  $(function() {
    $('#basicExampleModal').modal('show');
});




</script>



<?php include 'include/bottom_links.php'; ?>