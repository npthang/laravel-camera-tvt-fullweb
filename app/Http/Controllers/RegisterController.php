<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Client_Register;


class RegisterController extends Controller
{
    public function getRegister()
    {
    	return view('form.register');
    }

    public function postRegister(Request $request)
    {
    	/*$client_register = new Client_Register;
    	$client_register->name =  $request->name;
    	$client_register->phone =  $request->phone;
    	$client_register->email =  $request->email;
    	$client_register->content =  $request->content;
    	$client_register->color =  $request->color;
    	$client_register->imagination =  $request->imagination;
    	$client_register->expense =  $request->expense;
    	$client_register->save();
        */
    	//$colors = array("#524fa0","#FF5159", "#33CB80", "#FF9800","#8E33CB","#FFDB00");
        $channel  = '#general';
        $message  = 'Novaio.com.vn - Khách hàng mới';
        $attachments = array([
            'color'    => $request->color,
            'fields'   => array(
                [
                    'title' => 'Tên khách hàng:',
                    'value' => $request->name,
                ],
                [
                    'title' => 'Số điện thoại:',
                    'value' => $request->phone,
                ],
                [
                    'title' => 'Địa chỉ email:',
                    'value' => $request->email,
                ],
                [
                    'title' => 'Nội dung website hướng tới:',
                    'value' => $request->content,
                ],
                [
                    'title' => 'Màu sắc:',
                    'value' => $request->color,
                ],
                [
                    'title' => 'Mô tả về website:',
                    'value' => $request->imagination,
                ],
                [
                    'title' => 'Dự kiến ngân sách:',
                    'value' => $request->expense,
                ]
            )
        ]);
        // dd($attachments);
        $data = array(
            'channel'     => $channel,
            'text'        => $message,
            'attachments' => $attachments
        );
        $data_string = json_encode($data);
        $ch = curl_init('https://hooks.slack.com/services/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');
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
            curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                'Content-Type: application/json',
                'Content-Length: ' . strlen($data_string))
            );
        $result = curl_exec($ch);
        return redirect('dang-ky')->with('notifi','Cảm ơn bạn đã quan tâm đến dịch vụ của Novaio, chúng tôi sẽ liên lạc và báo giá ngay cho bạn.');

    }

    public function getList()
    {
        $Client_Register = Client_Register::all();
        return view('admin.client.list',['Client_Register'=>$Client_Register]);
    }

    public function getDetail($id)
    {
        $Client_Register = Client_Register::find($id);
        return view('admin.client.detail',['Client_Register'=>$Client_Register]);
    }

     public function getDel($id)
    {
        $Client_Register = Client_Register::find($id);
        $Client_Register->delete();

        return redirect('admin/client/list')->with('notifi','Đã xóa thành công' );
    }
}
