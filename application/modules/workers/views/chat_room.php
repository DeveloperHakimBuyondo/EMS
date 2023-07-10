

<div id="chatWidget" class="mb-5">
<!-- <div class="card">
<div class="card-body"> -->
	<div class="row">



		<!-- <div class="col-xl-4">
			<div class="card">
				<div class="card-header bg-none fw-bold d-flex align-items-center"> Workers </div>
				<div class="card-body bg-white bg-opacity-15" data-scrollbar="true" data-height="450px">
					<div class="widget-chat"> -->

                        <!-- with image -->
                        <?php foreach($get_workers->result() as $workers): ?>
                        <!-- <a href="<?php echo base_url();?>workers/chat/chat_room/<?php echo $workers->employee_id;?>" class="list-group-item list-group-item-action d-flex align-items-center text-white">
                            <div class="w-40px h-40px d-flex align-items-center justify-content-center ms-n1">
                            <img src="<?php echo base_url(); ?>assets/assets/images/employee_images/uploads/<?php echo $workers->emp_image; ?>" class="ms-100 mh-100 rounded-circle" />
                            </div>
                            <div class="flex-fill ps-3">
                            <div class="fw-bold"> <?php echo $workers->emp_name; ?> <span class="fa fa-circle text-success fs-9px ms-2"></span> </div>
                            </div>
                        </a> -->
                        <?php endforeach; ?>
                    
					<!-- </div>
				</div>
				<div class="card-arrow">
					<div class="card-arrow-top-left"></div>
					<div class="card-arrow-top-right"></div>
					<div class="card-arrow-bottom-left"></div>
					<div class="card-arrow-bottom-right"></div>
				</div>
			</div>
		</div> -->


		<div class="col-xl-12">
			<div class="card">
				<div class="card-header bg-none fw-bold d-flex align-items-center"><img src="<?php echo base_url(); ?>assets/assets/images/employee_images/uploads/<?php echo $get_employees['emp_image']; ?>" alt="" style="width: 40px; height: 40px; border-radius: 50%; padding: 7px;"/> <?php echo $get_employees['emp_name'] = "You"; ?> <strong class="text text-warning" style="padding-left: 16px;"> (<?php echo $count_workers; ?>)  <small> Users </small></strong> <strong class="text text-theme" style="padding-left: 16px;"> (<?php echo $count_active_workers-1; ?>)  <small> Online </small></strong> <small id="type" style="padding-left: 20px;"><b> </b></small> </div>
				<div class="card-body bg-white bg-opacity-15" data-scrollbar="true" data-height="390px">
					<div class="widget-chat">

                        <?php foreach($messages->result() as $message): ?>

								<?php //if($this->session->userdata('employee_id') === $message->sender_id){ ?>
									<?php if($message->sender_id === $this->session->userdata('employee_id')){?>
									<div class="widget-chat-item reply">
									<?php }else{?>
										<div class="widget-chat-item">
									<?php } ?>
									<?php if($message->is_audio < 1){ ?>
										<div class="widget-chat-media"><img src="<?php echo base_url(); ?><?php if($message->sender_id != $this->session->userdata('employee_id')){ echo "assets/assets/images/employee_images/uploads/";}?><?php echo $message->emp_image; ?>" alt="" /></div>
											<div class="widget-chat-content">
												<div class="widget-chat-name"><?php if($message->sender_id === $this->session->userdata('employee_id')){echo $message->emp_name = "You";}else{ if($message->chat_status == 1){echo $message->emp_name.'<span class="fa fa-circle text-success fs-9px ms-2" style="padding-left: 10px;"></span>';}else{echo $message->emp_name.'<span class="fa fa-circle text-danger fs-9px ms-2" style="padding-left: 10px;"></span>';}} ?></div>
												<div class="widget-chat-message last">
													<ul class="nav">
														<li class="nav-item me-1 dropdown">
															<a class="nav-link dropdown-toggle text-dark" style="padding: 0px;" data-bs-toggle="dropdown"></a>
															<div class="dropdown-menu">
																<?php if($message->sender_id === $this->session->userdata('employee_id')){ ?>
																	<a href="<?php echo base_url(); ?>workers/chat/delete_message/<?php echo $message->workers_chat_id; ?>" class="dropdown-item">Delete Message</a>
																<?php }else{ ?>
																	<a href="#!" class="dropdown-item">Reply</a>
																<?php } ?>
															</div> 
														</li>
													</ul>
													<?php echo $message->message; ?>
												<div class="widget-chat-status"> <small class="text text-dark float-right" style="float: right; padding-top: 4px;"><?php echo $message->message_time; ?></small>  </div>
											</div>
										</div>
									</div>
								<?php }else{ ?>
									<div class="widget-chat-media"><img src="<?php echo base_url(); ?><?php if($message->sender_id != $this->session->userdata('employee_id')){ echo "assets/assets/images/employee_images/uploads/";}?><?php echo $message->emp_image; ?>" alt="" /></div>
											<div class="widget-chat-content">
												<div class="widget-chat-name"><?php if($message->sender_id === $this->session->userdata('employee_id')){echo $message->emp_name = "You";}else{ if($message->chat_status == 1){echo $message->emp_name.'<span class="fa fa-circle text-success fs-9px ms-2" style="padding-left: 10px;"></span>';}else{echo $message->emp_name.'<span class="fa fa-circle text-danger fs-9px ms-2" style="padding-left: 10px;"></span>';}} ?></div>
												<div class="widget-chat-message last">
													<ul class="nav">
														<li class="nav-item me-1 dropdown">
															<a class="nav-link dropdown-toggle text-dark" style="padding: 0px;" data-bs-toggle="dropdown"></a>
															<div class="dropdown-menu">
																<?php if($message->sender_id === $this->session->userdata('employee_id')){ ?>
																	<a href="<?php echo base_url(); ?>workers/chat/delete_message/<?php echo $message->workers_chat_id; ?>" class="dropdown-item">Delete Message</a>
																<?php }else{ ?>
																	<a href="#!" class="dropdown-item">Reply</a>
																<?php } ?>
															</div> 
														</li>
													</ul>
													<audio controls src="<?php echo base_url(); ?>assets/assets/chat/employees/employee_chat_files/<?php echo $message->message; ?>"> </audio>
												<div class="widget-chat-status"> <small class="text text-dark float-right" style="float: right; padding-top: 4px;"><?php echo $message->message_time; ?></small>  </div>
											</div>
										</div>
									</div>
								<?php } ?>



								<?php //}else{ ?>
								<?php //} ?>

                        <?php endforeach; ?>

					</div>
				</div>
				<div class="card-footer bg-none">
                    <form method="post" action="<?php echo base_url();?>workers/chat/send_message/<?php echo $get_employees['employee_id']; ?> " class="was-validated" enctype="multipart/form-data">
                        <div class="input-group"> 
                            	<input id="message" type="text" name="message" class="form-control" placeholder="Type a Message ...">
                            	<input style="display: none;" name="userfile" id="recorder" accept="audio/*" type="file" class="form-control">
								<audio disabled class="form-control form-control-sm" id="player" controls  style="display: none;"></audio>
                            	<a id="record_audio" class="btn btn-outline-default"><i class="fa fa-microphone text-muted"></i></a>
                            <button class="btn btn-outline-success" type="submit"><i class="fa fa-paper-plane text-muted"></i></button>
                        </div>
                    </form>
				</div>
				<div class="card-arrow">
					<div class="card-arrow-top-left"></div>
					<div class="card-arrow-top-right"></div>
					<div class="card-arrow-bottom-left"></div>
					<div class="card-arrow-bottom-right"></div>
				</div>
			</div>
		</div>





	<!-- </div>
</div>

<div class="card-arrow">
	<div class="card-arrow-top-left"></div>
	<div class="card-arrow-top-right"></div>
	<div class="card-arrow-bottom-left"></div>
	<div class="card-arrow-bottom-right"></div>
</div> -->

<script>

	document.addEventListener('DOMContentLoaded', function(){
		const record_audio = document.getElementById('record_audio');
		const message = document.getElementById('message');
		const recorder = document.getElementById('recorder');
		const player = document.getElementById('player');
	});


		message.onkeydown = function(){

		var values = message.value;
		if(values === ""){
			record_audio.style.display = "unset";
		}else{
			record_audio.style.display = "none";
		}

		}


		record_audio.onclick = function(){
			recorder.click();
		}

		recorder.addEventListener('change', function(e){

			const file = e.target.files[0];
			const url = URL.createObjectURL(file);
			player.src = url;

			if(url === ""){
				message.style.display = "unset";
				player.style.display = "none";
				record_audio.style.display = "unset";
			}else{
				message.style.display = "none";
				record_audio.style.display = "unset";
				player.style.display = "unset";
			}

		});

		</script>


<script>

	// document.addEventListener('DOMContentLoaded', function(){
	// 	var message = document.getElementById('message');
	// 	var type = document.getElementById('type');
	// });
	
	// message.onkeydown = function(){

	// 	type.innerHTML = "typing..."

	// }
	// message.onkeyup = function(){

	// type.innerHTML = ""

	// }

</script>