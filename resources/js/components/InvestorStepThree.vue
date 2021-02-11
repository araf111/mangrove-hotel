<template>
	<div class="invest-step step-3">
		<h3 class="text-center">
			<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
				<path id="Icon_material-arrow_back" data-name="Icon material-arrow_back" d="M30,16.5H11.745L20.13,8.115,18,6,6,18,18,30l2.115-2.115L11.745,19.5H30Z" transform="translate(-6 -6)"/>
			</svg>
			Share Holder Information
		</h3>

		<div class="row">
			<div class="col-lg-12">
				<div class="invest-box">
					<select class="custom-select">
						<option id="projectname">Select Project Name</option>
						<option id="projectname">Mangrove Eco Resort Kuakata (MERK)</option>
					</select>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<label for="exampleInputEmail1">Grand Total Price <span class="small">Including utility & operational Charges</span></label>
				<div class="form-group">
					<div class="input-group">
						<div class="input-group-prepend">
							<span class="input-group-text">BDT</span>
						</div>
						<input type="text" class="form-control" placeholder="200000">
						<div class="input-group-append">
							<span class="input-group-text">.00</span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<div class="invest-box">
					<input type="text" class="form-control" id="inword" placeholder="In Words">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<label for="inputName">Payment Selection</label>
				<div class="invest-radio">
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" class="custom-control-input" id="customRadio1" name="Cash">
						<label class="custom-control-label" for="customRadio1">Cash</label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" class="custom-control-input" id="customRadio2" name="Bank">
						<label class="custom-control-label" for="customRadio2">Bank</label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" class="custom-control-input" id="customRadio3" name="Online">
						<label class="custom-control-label" for="customRadio3">Online</label>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<div class="invest-box">
					<label for="exampleInputEmail1">Booking Payment</label>
					<div class="invest-box">
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text">BDT</span>
								</div>
								<input type="text" class="form-control" placeholder="5000">
								<div class="input-group-append">
									<span class="input-group-text">.00</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="save-btn">
			<a class="save-btn-in" href="#">
				<svg width="22.933" height="22.933" viewBox="0 0 22.933 22.933">
					<path id="Icon_awesome-save" data-name="Icon awesome-save" d="M22.214,7.264,17.92,2.97a2.457,2.457,0,0,0-1.737-.72H2.457A2.457,2.457,0,0,0,0,4.707V22.726a2.457,2.457,0,0,0,2.457,2.457H20.476a2.457,2.457,0,0,0,2.457-2.457V9a2.457,2.457,0,0,0-.72-1.737ZM11.467,21.907a3.276,3.276,0,1,1,3.276-3.276A3.276,3.276,0,0,1,11.467,21.907ZM16.381,6.319v5.146a.614.614,0,0,1-.614.614H3.89a.614.614,0,0,1-.614-.614V6.14a.614.614,0,0,1,.614-.614h11.7a.614.614,0,0,1,.434.18l.178.178a.614.614,0,0,1,.18.434Z" transform="translate(0 -2.25)" fill="#fff"/>
				</svg>
			</a>
		</div>
	</div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
