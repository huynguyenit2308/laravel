@extends('dashboard')

@section('content')
    <main class="login-form py-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card shadow-lg rounded-4 mb-4">
                        <div class="card-body">
                            <table class="table table-bordered table-striped text-center align-middle">
                                <thead class="table-dark">
                                    <tr>
                                        <th>ID</th>
                                        <th>Vai trò</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>{{ $role->id }}</td>
                                        <td>{{ $role->name }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

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
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($role->users as $user)
                                        <tr>
                                            <td>{{ $user->id }}</td>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="3" class="text-center">Không có người dùng nào.</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
