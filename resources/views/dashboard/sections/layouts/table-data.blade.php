@section('content')
				<!-- row opened -->
				<div class="row row-sm">
					<div class="col-xl-12">
						<div class="card">
							<div class="card-header pb-0">
								<div class="d-flex justify-content-between">
									<!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                        {{ trans('sections_trans.add_sections') }}
                                    </button>
								</div>
							</div>
							<div class="card-body">
								<div class="table-responsive">
									<table class="table text-md-nowrap" id="example1">
										<thead>
											<tr>
												<th class="wd-15p border-bottom-0">#</th>
												<th class="wd-15p border-bottom-0">{{ trans('sections_trans.name_sections') }}</th>
                                                <th class="wd-20p border-bottom-0">{{ trans('sections_trans.Processes') }}</th>
												<th class="wd-15p border-bottom-0">{{ trans('sections_trans.created_at') }}</th>
											</tr>
										</thead>
										<tbody>
											@foreach ($sections as $section)
                                            <tr>
												<td>{{ $section->id }}</td>
												<td>{{ $section->name }}</td>
												<td>{{ $section->created_at->diffForHumans() }}</td>
                                                <td>
                                                    <a class="modal-effect btn btn-sm btn-info" data-effect="effect-scale"  data-toggle="modal" href="#edit{{$section->id}}"><i class="las la-pen"></i></a>
                                                    <a class="modal-effect btn btn-sm btn-danger" data-effect="effect-scale"  data-toggle="modal" href="#delete{{$section->id}}"><i class="las la-trash"></i></a>
                                                </td>
											</tr>
                                            @include('dashboard.sections.layouts.edit-section')
                                            @include('dashboard.sections.layouts.delete-section')
                                            @endforeach
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
					<!--/div-->
				</div>

                @include('dashboard.sections.layouts.add-section')
				<!-- /row -->
			</div>
			<!-- Container closed -->
		</div>
		<!-- main-content closed -->
@endsection
