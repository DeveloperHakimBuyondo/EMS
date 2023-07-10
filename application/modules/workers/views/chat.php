
<div id="chatWidget" class="mb-5">
<div class="card">
<div class="card-body">
	<div class="row">



		<div class="col-xl-4">
			<div class="card">
				<div class="card-header bg-none fw-bold d-flex align-items-center"> Workers </div>
				<div class="card-body bg-white bg-opacity-15" data-scrollbar="true" data-height="450px">
					<div class="widget-chat">

                        <!-- with image -->
                        <?php foreach($get_workers->result() as $workers): ?>
                        <a href="<?php echo base_url();?>workers/chat/chat_room/<?php echo $workers->employee_id;?>" class="list-group-item list-group-item-action d-flex align-items-center text-white">
                            <div class="w-40px h-40px d-flex align-items-center justify-content-center ms-n1">
                            <img src="<?php echo base_url(); ?>assets/assets/images/employee_images/uploads/<?php echo $workers->emp_image; ?>" class="ms-100 mh-100 rounded-circle" />
                            </div>
                            <div class="flex-fill ps-3">
                            <div class="fw-bold"> <?php echo $workers->emp_name; ?> <span class="fa fa-circle text-success fs-9px ms-2"></span> </div>
                            </div>
                        </a>
                        <?php endforeach; ?>
                    
					</div>
				</div>
				<div class="card-arrow">
					<div class="card-arrow-top-left"></div>
					<div class="card-arrow-top-right"></div>
					<div class="card-arrow-bottom-left"></div>
					<div class="card-arrow-bottom-right"></div>
				</div>
			</div>
		</div>


		<div class="col-xl-8">
			<div class="card">
				<div class="card-header bg-none fw-bold d-flex align-items-center"> <?php //echo $workers->emp_name; ?> &nbsp </div>
				<div class="card-body bg-white bg-opacity-15" data-scrollbar="true" data-height="450px">
					<div class="widget-chat">

                        <?php //foreach($get_messages->result() as $messages): ?>
                            <!-- <div class="widget-chat-item reply">
                                <div class="widget-chat-content">
                                    <div class="widget-chat-message last"> Cool </div>
                                    <div class="widget-chat-status"><b>Read</b> 16:26</div>
                                </div>
                            </div> -->
                        <?php //endforeach; ?>

					</div>
				</div>
				<div class="card-arrow">
					<div class="card-arrow-top-left"></div>
					<div class="card-arrow-top-right"></div>
					<div class="card-arrow-bottom-left"></div>
					<div class="card-arrow-bottom-right"></div>
				</div>
			</div>
		</div>





	</div>
</div>

<div class="card-arrow">
	<div class="card-arrow-top-left"></div>
	<div class="card-arrow-top-right"></div>
	<div class="card-arrow-bottom-left"></div>
	<div class="card-arrow-bottom-right"></div>
</div>