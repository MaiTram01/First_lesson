<?php

namespace App\Http\Controllers;

use App\Http\Requests\RuleNhapSV;
use Illuminate\Http\Request;

class NameController extends Controller
{
    public function show(Request $request)
    {
        // Lấy danh sách người dùng từ session (nếu có)
        $users = $request->session()->get('users', []);
        return view('name', compact('users'));
    }

    public function displayInfor(RuleNhapSV $request)
    {
        // Lấy dữ liệu mới từ form
        $newUser = [
            'name'    => $request->input("name"),
            'age'     => $request->input("age"),
            'date'    => $request->input("date"),
            'phone'   => $request->input("phone"),
            'web'     => $request->input("web"),
            'address' => $request->input("address")
        ];

        // Lấy danh sách người dùng cũ từ session
        $users = $request->session()->get('users', []);

        // Thêm người dùng mới vào danh sách
        $users[] = $newUser;

        // Lưu lại danh sách người dùng vào session
        $request->session()->put('users', $users);

        // Hiển thị lại view với tất cả người dùng
        return view('name', compact('users'));
    }
}
