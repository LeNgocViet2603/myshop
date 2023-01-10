<!-- head -->
@include("admin.inc.head")

<body class="ec-header-fixed ec-sidebar-fixed ec-sidebar-light ec-header-light" id="body">

	<!--  WRAPPER  -->
	<div class="wrapper">
		
		<!-- LEFT MAIN SIDEBAR -->
		@include("admin.inc.sidebar")

		<!--  PAGE WRAPPER -->
		<div class="ec-page-wrapper">

			<!-- Header -->
			@include("admin.inc.header");

			<!-- CONTENT WRAPPER -->
			<div class="ec-content-wrapper">				
				<div class="content">
					@yield('content')
				</div> <!-- End Content -->
			</div> <!-- End Content Wrapper -->

			<!-- Footer -->
			@include("admin.inc.footer")

		</div> <!-- End Page Wrapper -->
	</div> <!-- End Wrapper -->

	<!-- common Javascript -->
	@include("admin.inc.scriptJs")
	<!-- custom js for page -->
	@yield('customJs')
</body>

</html>