@extends('admin.layouts.layout')

@section('cars')
active
@endsection

@section('content')

<!-- MAIN -->
		<main>

			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Yuk mashinalari</h3>
						<a class="create__btn" href="{{route('admin.cars.create')}}"> <i class='bx bxs-folder-plus'></i>Yaratish</a>


					</div>
					<table>
						<thead>
							<tr>
								<th>№</th>
								<th>Mashina</th>
                                <th>Haydovchi</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							@if (count($cars) == 0)
					          <tr>
					            <td colspan="5" class="h5 text-center text-muted">Ma'lumot kiritilmagan</td>
					          </tr>
					        @endif
					        @foreach($cars as $item)
								<tr>
									<td>{{++$loop->index}}</td>
									<td>{{$item->brand}}</td>
                                    
                                    <td>{{$item->driver->name ?? 'biriktirilmagan' }}</td>
									<td>
										<form action="{{ route('admin.cars.destroy',$item->id) }}" method="POST">

                                            <a class="btn btn-primary" href="{{ route('admin.cars.show',$item->id) }}"><ion-icon name="eye-outline"></ion-icon></a>
						                    <a class="btn btn-primary" href="{{ route('admin.cars.edit',$item->id) }}"><ion-icon name="create-outline"></ion-icon></a>

						                    @csrf
						                    @method('DELETE')

						                    <button type="submit" class="btn btn-danger" onclick="return confirm('O`chirmoqchimisiz ?')"><ion-icon name="trash-outline"></ion-icon></button>

					                	</form>
					            	</td>
								</tr>
							@endforeach
						</tbody>
					</table>
					{{$cars->links()}}
				</div>

			</div>
		</main>
		<!-- MAIN -->

@endsection
