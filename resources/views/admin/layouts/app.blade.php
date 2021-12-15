<!DOCTYPE html>
<html lang="en">
	@include('admin.includes.head')

<body class="hold-transition sidebar-mini layout-fixed rtl">
	<div class="wrapper">
		@include('admin.includes.header')

		@include('admin.includes.sidebar')

		<div class="content-wrapper">
			@yield('content')
		</div>

		@include('admin.includes.footer')
		
		@yield('js')
	</div>
</body>
</html>