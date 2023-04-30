@extends('admin.layouts.layout')

@section('users')
active
@endsection

@section('content')

<!-- MAIN -->
		<main>

			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Adminlar</h3>
						<a class="create__btn" href="{{route('admin.users.create')}}"> <i class='bx bxs-folder-plus'></i>Yaratish</a>

					</div>
					<table>
						<thead>
							<tr>
								<th>№</th>
								<th>Login</th>
                                <th>email</th>
                                <th>Vaqt</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							@if (count($users) == 0)
					          <tr>
					            <td colspan="5" class="h5 text-center text-muted">Ma'lumot kiritilmagan</td>
					          </tr>
					        @endif
					        @foreach($users as $item)
								<tr>
									<td>{{++$loop->index}}</td>
									<td>{{$item->name}}</td>
                                    <td>{{$item->email }}</td>
                                    <td>{{$item->created_at }}</td>
									<td>
										<form action="{{ route('admin.users.destroy',$item->id) }}" method="POST">

						                    <a class="btn btn-primary" href="{{ route('admin.users.edit',$item->id) }}"><ion-icon name="create-outline"></ion-icon></a>

						                    @csrf
						                    @method('DELETE')

						                    <button type="submit" class="btn btn-danger" onclick="return confirm('O`chirmoqchimisiz ?')"><ion-icon name="trash-outline"></ion-icon></button>

					                	</form>
					            	</td>
								</tr>
							@endforeach
						</tbody>
					</table>
					{{$users->links()}}
				</div>

			</div>
		</main>
		<!-- MAIN -->

@endsection
