<template>    
	<form action="/inquiry" v-on:submit.prevent="onSubmit" @keydown="delete errors[$event.target.name];">
		<div v-if="success" class="alert alert-success mt-3">
            We received your inquiry and get back to you shortly.! <button v-on:click.self.prevent="download">Download Brochure</button><button vv-on:click.self.prevent="success=true">Cancel</button>
    	</div>	
    	<div v-if="!success">
			<div class="mobile-form">
				<div class="formIn">
					<div class="row">
						<div class="col-lg-12">
							<input class="banner-filed" type="text" name="name" id="name" v-model="fields.name" placeholder="Your Name">
							<span class="help text-danger is-danger" v-if="errors && errors.name">{{ errors.name[0] }}</span>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6">
							<input class="banner-filed" type="text" name="mobile" id="mobile" v-model="fields.mobile" placeholder="Mobile No">
							<span v-if="errors && errors.mobile" class="text-danger">{{ errors.mobile[0] }}</span>
						</div>
						<div class="col-lg-6">
							<input class="banner-filed w-100" type="text" name="email" id="email" v-model="fields.email" placeholder="Email Address">
							<span v-if="errors && errors.email" class="text-danger">{{ errors.email[0] }}</span>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12 text-center">
							<button class="call" type="submit">
								<span class="send-text">Send </span>
								<span class="request-text">request a call back </span>
							</button>
						</div>
					</div>
				</div>

				<div class="callform">
					<a href="javascript:;">Request a call back</a>
				</div>
			</div>
			<div class="bosure">
				<button class="w-100 download-area" type="submit" :disabled="Object.keys(this.errors).length > 0">
					Download Brochure
				</button>
			</div>
			
		</div>
	</form>

</template>
<script>
import InquiryFormMixin from '../scripts/InquiryFormMixin';
export default {
  mixins: [ InquiryFormMixin ],
  data() {
    return {
      'action': '/inquiry',
    }
  }
}
</script>