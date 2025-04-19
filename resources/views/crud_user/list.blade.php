@extends('dashboard')

@section('content')
    <main class="login-form py-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="card shadow-lg rounded-4">
                        <div class="card-header bg-primary text-white text-center">
                            <h4>Danh sách người dùng</h4>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-striped text-center align-middle">
                                <thead class="table-dark">
                                    <tr>
                                        <th>ID</th>
                                        <th>Tên</th>
                                        <th>Email</th>
                                        <th>Role</th>
                                        <th>Hành động</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                        <tr>
                                            <td>{{ $user->id }}</td>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>
                                                @foreach($user->roles as $role)
                                                    <a href="{{ route('user.role', ['id' => $role->id]) }}">
                                                        {{ $role->name . '-' }}
                                                    </a>
                                                @endforeach
                                                </td>
                                            <td>
                                                <a href="{{ route('user.readUser', ['id' => $user->id]) }}"
                                                    class="btn btn-sm btn-info">Xem</a>
                                                <a href="{{ route('user.updateUser', ['id' => $user->id]) }}"
                                                    class="btn btn-sm btn-warning">Sửa</a>
                                                <a href="{{ route('user.deleteUser', ['id' => $user->id]) }}"
                                                    class="btn btn-sm btn-danger"
                                                    onclick="return confirm('Bạn có chắc chắn muốn xóa?')">Xóa</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {!! $users->withQueryString()->links('pagination::bootstrap-5') !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
