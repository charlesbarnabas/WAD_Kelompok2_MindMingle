@extends('instructor.layouts.main')
@section('title', 'My Courses List')
@section('profile')
	<div class="col-xl-12">
		<!-- Card START -->
		<div class="card border bg-transparent rounded-3">
			<!-- Card header START -->
			<div class="card-header bg-transparent border-bottom">
				<h3 class="mb-0">My Courses List</h3>
			</div>
			<!-- Card header END -->

			<!-- Card body START -->
			<div class="card-body">

				<!-- Search and select START -->
				<div class="row g-3 align-items-center justify-content-between mb-4">
					<!-- Search -->
					<div class="col-md-8">
						<form class="rounded position-relative">
							<input class="form-control pe-5 bg-transparent" type="search" placeholder="Search" aria-label="Search">
							<button class="btn bg-transparent px-2 py-0 position-absolute top-50 end-0 translate-middle-y" type="submit"><i
									class="fas fa-search fs-6 "></i></button>
						</form>
					</div>
				</div>
				<!-- Search and select END -->

				<!-- Course list table START -->
				<div class="table-responsive border-0">
					<table class="table table-dark-gray align-middle p-4 mb-0 table-hover">
						<!-- Table head -->
						<thead>
							<tr>
								<th scope="col" class="border-0 rounded-start">Course Title</th>
								<th scope="col" class="border-0">Enrolled</th>
								<th scope="col" class="border-0">Status</th>
								<th scope="col" class="border-0">Price</th>
								<th scope="col" class="border-0 rounded-end">Action</th>
							</tr>
						</thead>

						<!-- Table body START -->
						<tbody>
							<!-- Table item -->
							@foreach($data as $item)
							<tr>
								<!-- Course item -->
								<td>
									<div class="d-flex align-items-center">
										<!-- Image -->
										<div class="w-60px">
											<img src="{{ url('masterclass/thumbnails/'.$item->masterclass_thumbnail) }}" class="rounded" alt="">
										</div>
										<div class="mb-0 ms-2">
											<!-- Title -->
											<h6><a href="#">{{ $item->masterclass_name }}</a></h6>
											<!-- Info -->
											<div class="d-sm-flex">
												<p class="h6 fw-light mb-0 small me-3"><i class="fas fa-table text-orange me-2"></i>18 lectures</p>
												<p class="h6 fw-light mb-0 small"><i class="fas fa-check-circle text-success me-2"></i>6 Completed</p>
											</div>
										</div>
									</div>
								</td>
								<!-- Enrolled item -->
								<td class="text-center text-sm-start">125</td>
								<!-- Status item -->
								<td>
									<div class="badge bg-success bg-opacity-10 text-success">Live</div>
								</td>
								<!-- Price item -->
								@if($item->price_type_id == 2)
								<td>{{ $item->masterclass_price }}</td>
								@else
								<td>Free</td>
								@endif
								<!-- Action item -->
								<td>
									<a href="{{ route('instructor.mycourse.edit', $item->masterclass_id) }}" class="btn btn-sm btn-success-soft btn-round me-1 mb-0"><i class="far fa-fw fa-edit"></i></a>
									<a href="{{ route('instructor.mycourse.delete', $item->masterclass_id) }}" class="btn btn-sm btn-danger-soft btn-round mb-0"><i class="fas fa-fw fa-times"></i></a>
								</td>
							</tr>
							@endforeach
						</tbody>
						<!-- Table body END -->
					</table>
				</div>
				<!-- Course list table END -->

				<!-- Pagination START -->
				<div class="d-sm-flex justify-content-sm-between align-items-sm-center mt-4 mt-sm-3">
					<!-- Content -->
					<p class="mb-0 text-center text-sm-start">Showing 1 to 8 of 20 entries</p>
					<!-- Pagination -->
					<nav class="d-flex justify-content-center mb-0" aria-label="navigation">
						<ul class="pagination pagination-sm pagination-primary-soft d-inline-block d-md-flex rounded mb-0">
							<li class="page-item mb-0"><a class="page-link" href="#" tabindex="-1"><i
										class="fas fa-angle-left"></i></a></li>
							<li class="page-item mb-0"><a class="page-link" href="#">1</a></li>
							<li class="page-item mb-0 active"><a class="page-link" href="#">2</a></li>
							<li class="page-item mb-0"><a class="page-link" href="#">3</a></li>
							<li class="page-item mb-0"><a class="page-link" href="#"><i class="fas fa-angle-right"></i></a></li>
						</ul>
					</nav>
				</div>
				<!-- Pagination END -->
			</div>
			<!-- Card body START -->
		</div>
		<!-- Card END -->
	</div>
@endsection
