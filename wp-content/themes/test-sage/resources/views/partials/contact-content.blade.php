<div class="container-fluid">
	<div class="row mt-3 mb-3">
		<div class="col-sm-12">
			<h2>{!! ContactUsPage::title() !!}</h2>
			<p>
				{!! ContactUsPage::contact() !!}
			</p>
		</div>
	</div>
	<div class="row mt-3">
		<div class="col-sm-12">
			<h4 class="mt-2 mb-2">Send Message</h4>
		</div>
	</div>
	<div class="row mb-3">
		<div class="col-sm-6 text-right">
			<button id="contact-btn-count" type="button" class="btn btn-primary">Send</button>
		</div>
		<div class="col-sm-6 text-left">
			<span id="contact-count" class="align-middle">0</span>
		</div>
	</div>
</div>
