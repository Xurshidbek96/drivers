@extends('admin.layouts.layout')

@section('drivers')
active
@endsection

@section('content')

<!-- MAIN -->
		<main>

            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif

			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Haydovchilar</h3>

					</div>
					<table>
						<thead>
							<tr>
								<th>№</th>
								<th>Ismi</th>
                                <th>Rasmi</th>
                                <th>Mashinasi</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							@if (count($drivers) == 0)
					          <tr>
					            <td colspan="5" class="h5 text-center text-muted">Ma'lumot kiritilmagan</td>
					          </tr>
					        @endif
					        @foreach($drivers as $item)
								<tr>
									<td>{{++$loop->index}}</td>
									<td>{{$item->name}}</td>
                                    <td><img src="/files/{{ $item->img }}" alt="" width="100px"></td>
                                    <td>{{$item->car->brand ?? 'bog`lanmagan' }}</td>
									<td>
										<form action="{{ route('admin.drivers.destroy',$item->id) }}" method="POST">

                                            <a class="btn btn-primary" href="{{ route('admin.drivers.show',$item->id) }}"><ion-icon name="eye-outline"></ion-icon></a>
						                    <a class="btn btn-primary" href="{{ route('admin.drivers.edit',$item->id) }}"><ion-icon name="create-outline"></ion-icon></a>

						                    @csrf
						                    @method('DELETE')

						                    <button type="submit" class="btn btn-danger" onclick="return confirm('O`chirmoqchimisiz ?')"><ion-icon name="trash-outline"></ion-icon></button>

					                	</form>
					            	</td>
								</tr>
							@endforeach
						</tbody>
					</table>
					{{$drivers->links()}}
				</div>

			</div>
		</main>
		<!-- MAIN -->

@endsection
