@extends('layouts.app')

@section('content')
<div id="wrapper">

		<div id="main">

				<div id="content">

						<div class="row">

								<div class="col-lg-8" ></div>
								<!-- //content > row > col-lg-8 -->

								<div class="col-lg-4"></div>
								<!-- //content > row > col-lg-4 -->

						</div>
						<!-- //content > row-->

				</div>
				<!-- //content-->


		</div>
		<!-- //main-->


    {{--menu lateral--}}
    @include('partials.menulat')

		<!-- //nav left menu-->
</div>
<!-- //wrapper-->
@endsection
