<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
   public function getList()
   {
		$user = User::all();
		return view('admin.user.list',['user'=>$user]);
   }

   public function getAdd()
   {
		return view('admin.user.add');
   }

    public function postAdd(Request $request)
   {
   		$this->validate($request,[
    			'name' => 'required|min:3|max:100',
    			'email' => 'email|required|unique:users,email',
    			'password' => 'required|min:3|max:32',
    			'password2' => 'required|same:password',
    		],
            [
                'name.required' => 'Tên người dùng trống',
                'name.min' => 'Tên người dùng ít nhất 3 ký tự và tối đa 100 ký tự',
                'name.max' => 'Tên người dùng ít nhất 3 ký tự và tối đa 100 ký tự',
                'email.required' => 'Địa chỉ email trống',
                'email.unique' => 'Địa chỉ email này đã tồn tại',
                'email.email' => 'Đây không phải định dạng email',
                'password.required' => 'Mật khẩu trống',
                'password.min' => 'Mật khẩu ít nhất 3 ký tự và tối đa 32 ký tự',
                'password.max' => 'Mật khẩu ít nhất 3 ký tự và tối đa 32 ký tự',
                'password2.required' => 'Chưa xác nhận mật khẩu',
                'password2.same' => 'Xác nhận mật khẩu chưa khớp',

            ]);
    	$user = new User;
    	$user->name = $request->name;
    	$user->email = $request->email;
    	$user->password = bcrypt($request->password);
        $user->save();
    	return redirect('admin/user/add')->with('notifi','Đã thêm thành công thành viên');
   }

    public function getEdit($id)
   {
   		$user = User::find($id);

        return view('admin.user.edit',['user'=>$user]);
   }

    public function postEdit(Request $request,$id)
   {
   		$user = User::find($id);
   		if($request->email != $user->email){
   			$this->validate($request,[
    			'email' => 'email|required|unique:users,email',
    		],
            [
                'email.unique' => 'Địa chỉ email này đã tồn tại',
            ]);
   		}
   		$this->validate($request,[
    			'name' => 'required|min:3|max:100',
    			'email' => 'email|required',
    		],
            [
                'name.required' => 'Tên người dùng trống',
                'name.min' => 'Tên người dùng ít nhất 3 ký tự và tối đa 100 ký tự',
                'name.max' => 'Tên người dùng ít nhất 3 ký tự và tối đa 100 ký tự',
                'email.required' => 'Địa chỉ email trống',
                'email.email' => 'Đây không phải định dạng email',
            ]);
    	$user->name = $request->name;
    	$user->email = $request->email;
    	if ($request->ChangePass == "on") {
    		$this->validate($request,[
    			'password' => 'required|min:3|max:32',
    			'password2' => 'required|same:password',
    		],
            [
                'password.required' => 'Mật khẩu trống',
                'password.min' => 'Mật khẩu ít nhất 3 ký tự và tối đa 32 ký tự',
                'password.max' => 'Mật khẩu ít nhất 3 ký tự và tối đa 32 ký tự',
                'password2.required' => 'Chưa xác nhận mật khẩu',
                'password2.same' => 'Xác nhận mật khẩu chưa khớp',

            ]);
            $user->password = bcrypt($request->password);
    	}
        $user->save();
    	return redirect('admin/user/edit/'.$id)->with('notifi','Đã sửa thành công');
   }

    public function getDel($id)
   {
   		$user = User::find($id);
        $user->delete();
        return redirect('admin/user/list')->with('notifi','Đã xóa thành công' );
   }

   public function getLoginAdmin()
   {
      if(Auth::check()){
        return redirect('/admin');
      }
      else {
   		return view('admin.login');
      }
   }

   public function postLoginAdmin(Request $request)
   {
   		$this->validate($request,[
    			'email' => 'required|email',
    			'password' => 'required|min:3|max:32',
    		],
            [
            	'email.required' => 'Địa chỉ email trống',
                'email.email' => 'Định dạng email sai',
                'password.required' => 'Mật khẩu trống',
                'password.min' => 'Độ dài mật khẩu từ 3 đến 100 ký tự',
                'password.max' => 'Độ dài mật khẩu từ 3 đến 100 ký tự',
            ]);
   		if(Auth::attempt(['email'=>$request->email,'password'=>$request->password]))
   			{
   				return redirect('admin/project/list');
   			}
   		else
   		{
   			return redirect('admin/login')->with('notifi','Đăng nhập không thành công');
   		}
   }

   public function getLogoutAdmin()
   {
   		Auth::logout();
   		return redirect('admin/login');
   }


}
