<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    //
    public function get_orders()
    {

    }
    public function add_order(Request $Request)
    {
        // Получает данные заказа и добавляет его в таблицу
        // Возвращает ID заказа в ответе
        // Проверка данных, если данные не правильные тогда возвращается ответ со статусом отклонено




        $validator = Validator::make($Request->all(), [
            'name' => 'required|max:100',
            'phone' => 'required|regex:/^[0-9\+]{1,}[0-9\-]{3,15}$/',
            'order' => 'required|json',
        ]);

        if ($validator->fails())
        {
            if ($validator->errors()->has('order'))
            {
                return json_encode('Произошла ошибка. Менеджеры помогут заказать по телефону.');
            }
            return json_encode($validator->errors()->first());
        }

        $order = new Order;
        $order->name = $Request->name;
        $order->phone = $Request->phone;
        $order->order = $Request->order;
        $order->save();

        return json_encode($order->id);
    }

}
