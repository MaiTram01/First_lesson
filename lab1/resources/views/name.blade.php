<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap 5 Form Example</title>
    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<style>
    .error-message {
        color: red;
    }
</style>

<body>
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-lg">
                    <div class="card-body">
                        <h4 class="card-title text-center mb-4">User Information Form</h4>
                        <form id="userForm" action="/show" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name">
                                @error('name') <div class="error-message">{{ $message }}</div> @enderror
                            </div>
                            <div class="mb-3">
                                <label for="age" class="form-label">Age</label>
                                <input type="number" class="form-control" id="age" name="age" placeholder="Enter your age">
                                @error('age') <div class="error-message">{{ $message }}</div> @enderror
                            </div>
                            <div class="mb-3">
                                <label for="date" class="form-label">Date</label>
                                <input type="date" class="form-control" name="date" id="date">
                                @error('date') <div class="error-message">{{ $message }}</div> @enderror
                            </div>
                            <div class="mb-3">
                                <label for="phone" class="form-label">Phone</label>
                                <input type="tel" class="form-control" id="phone" name="phone" placeholder="Enter your phone number">
                                @error('phone') <div class="error-message">{{ $message }}</div> @enderror
                            </div>
                            <div class="mb-3">
                                <label for="web" class="form-label">Web</label>
                                <input type="url" class="form-control" id="web" name="web" placeholder="Enter your website">
                                @error('web') <div class="error-message">{{ $message }}</div> @enderror
                            </div>
                            <div class="mb-3">
                                <label for="address" class="form-label">Address</label>
                                <input type="text" class="form-control" id="address" name="address" placeholder="Enter your address">
                                @error('address') <div class="error-message">{{ $message }}</div> @enderror
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">OK</button>
                            </div>
                        </form>
                        <hr>
                        @if(session()->has('users'))
                        <form action="/clear" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-danger">Xóa tất cả người dùng</button>
                        </form>
                        @endif

                        <div id="displayInfo" class="mt-3">
                            @if(isset($users) && count($users) > 0)
                            <h5 class="text-center">Danh sách người dùng:</h5>
                            @foreach($users as $index => $user)
                            <div class="border p-3 mb-3 shadow-sm">
                                <p><strong>Người {{ $index + 1 }}:</strong></p>
                                <p>Tên: {{ $user['name'] }}</p>
                                <p>Tuổi: {{ $user['age'] }}</p>
                                <p>Ngày: {{ $user['date'] }}</p>
                                <p>Điện thoại: {{ $user['phone'] }}</p>
                                <p>Website: {{ $user['web'] }}</p>
                                <p>Địa chỉ: {{ $user['address'] }}</p>
                            </div>
                            @endforeach
                            @else
                            <p class="text-center text-muted">Chưa có thông tin người dùng nào.</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap 5 JS + Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

    <!-- JavaScript để hiển