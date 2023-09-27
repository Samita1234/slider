<?php
 include "header.php";
 require("../conn.php");

  $query = "SELECT * FROM slider_tbl";
$result = mysqli_query($conn, $query);
$carouselItems = mysqli_fetch_all($result, MYSQLI_ASSOC);
 ?>

 <style>
	

	#contact { 
  -webkit-user-select: none; /* Chrome/Safari */        
  -moz-user-select: none; /* Firefox */
  -ms-user-select: none; /* IE10+ */
  margin: 0em auto;
  width: 15px; 
  height: 15px; 
  line-height: 15px;
  background: teal;
  color: white;
  font-weight: 700;
  text-align: center;
  cursor: pointer;
  border: 1px solid white;
}

#contact:hover { background: #666; }
#contact:active { background: #444; }

#contactForm { 
	visibility: hidden;

  border: 6px solid salmon; 
  padding: 2em;
  width: 400px;
  text-align: center;
  background: #fff;
  position: fixed;
  top:50%;
  left:50%;
  transform: translate(-50%,-50%);
  -webkit-transform: translate(-50%,-50%)
  
}

#contactForm .open{
	visibility: vissible;
}
#contactForm .close{
	visibility: hidden;
}

input, textarea { 
  margin: .8em auto;
  font-family: inherit; 
  text-transform: inherit; 
  font-size: inherit;
  
  display: block; 
  width: 280px; 
  padding: .4em;
}
textarea { height: 80px; resize: none; }

.formBtn { 
  width: 140px;
  display: inline-block;
  
  background: teal;
  color: #fff;
  font-weight: 100;
  font-size: 1.2em;
  border: none;
  height: 30px;
}
      
      
</style>

<div class="content-body">
	<!-- container starts -->
	<div class="container-fluid">
		
		<!-- row -->
		<div class="element-area">
			<div class="demo-view">
				<div class="container-fluid pt-0 ps-0 pe-lg-4 pe-0">
					<div class="row">
						<div class="col-xl-12">
							<div class="card dz-card" id="bootstrap-table2">
								
								<div class="tab-content" id="myTabContent-1">
									<div class="tab-pane fade show active" id="bordered" role="tabpanel" aria-labelledby="home-tab-1">
										<div class="card-body">
											<div class="table-responsive">
												<table class="table table-responsive-md">
													<thead>
														<tr>
															
															<th><strong>Sl No.</strong></th>
															<th><strong>Image</strong></th>
															<th><strong>Caption</strong></th>
															<th><strong>Link</strong></th>
															<th><strong>Status</strong></th>
															<th><strong></strong></th>
														</tr>
													</thead>
													<tbody>
													<?php foreach ($carouselItems as $key => $item): ?>
														<tr <?php echo ($key === 0) ? 'active' : ''; ?>>
															
															<td><strong><?php echo $item['id']; ?></strong></td>
															<td>
																<div style="width:250px">
																
																	<img src="<?php echo $baseURL."/".$item['path']; ?>" class="rounded-lg me-2" width="100%" alt="">
																	
																</div>
															</td>
															<td><?php echo $item['title']; ?></td>
															<td>example@example.com	</td>
															<td><div class="d-flex align-items-center"><i class="fa fa-circle text-success me-1"></i> Visiable</div></td>
															<td>
																<div class="d-flex">
																	<button id="contact" onclick="document.getElementById('contactForm open').innerHTML=image; class="btn btn-primary shadow btn-xs sharp me-1"><i class="fa fa-pencil"></i></button>
																	<a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
																</div>
															</td>
														</tr>

        											<?php endforeach; ?>
													</tbody>
												</table>
											</div>
										</div>
									</div>
									

										<div id="contactForm">

										<h1>Keep in touch!</h1>
										<small>I'll get back to you as quickly as possible</small>
										
										<form action="#">
											<input placeholder="Name" type="text" required />
											<input placeholder="Email" type="email" required />
											<input placeholder="Subject" type="text" required />
											<textarea placeholder="Comment"></textarea>
											<input class="formBtn" type="submit" />
											<input class="formBtn" type="reset" />
										</form>
										</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>			
	</div>
</div>




<script>
$(function() {
  
  // contact form animations
  $('#contact').click(function() {
    $('#contactForm').fadeToggle();
  })
  $(document).mouseup(function (e) {
    var container = $("#contactForm");

    if (!container.is(e.target) // if the target of the click isn't the container...
        && container.has(e.target).length === 0) // ... nor a descendant of the container
    {
        container.fadeOut();
    }
  });
  
});

</script>

<?php
 include "footer.php";
 ?>