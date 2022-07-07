<?php

namespace App\Admin\Controllers;

use App\Models\Order;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

use Encore\Admin\Layout\Content;

class OrderController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Order';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Order());
        $grid->model()->latest();
        $grid->column('id', __('Oredr ID'));
       // $grid->id("Oredr ID");
        $grid->column('user_id', __('UserID'));
        $grid->column('order_amount', __('Amount'));
        $grid->column('payment_status', __('PaymentStatus'));
        $grid->payment_method('PaymentMethod')->display(function($PaymentMethod){
            return $PaymentMethod==null?"cash":"paypal";
        });
        //$grid->column('payment_method', __('PaymentMethod'));
        $grid->column('transaction_reference', __('TransactionRef'));
        $grid->column('order_status', __('OrderStatus'));
        $grid->column('confirmed', __('Confirmed'));
        $grid->column('accepted', __('Accepted'));
        $grid->column('scheduled', __('Scheduled'));
        $grid->column('processing', __('Processing'));
        $grid->column('handover', __('Handover'));
        $grid->column('failed', __('Failed'));
        $grid->column('scheduled_at', __('Scheduled_At'));
        $grid->column('delivery_address_id', __('DeliveryAddressID'));
        $grid->column('order_note', __('OrderNote'));
        $grid->column('order_type', __('OrderType'));
        $grid->column('created_at', __('CreatedAt'));
        $grid->column('updated_at', __('UpdatedAt'));
        $grid->column('delivery_charge', __('DeliveryCharge'));
        $grid->column('delivery_address', __('DeliveryAddress'));
        $grid->column('otp', __('OTP'));
        $grid->column('pending', __('Pending'));
        $grid->column('picked_up', __('PickedUp'));
        $grid->column('delivered', __('Delivered'));
        $grid->column('canceled', __('Canceled'));

        // //$grid->column('email_verified_at', __('Email verified at'));
        // $grid->email_verified_at("Verified")->display(function($verified){
        //     return $verified?"Yes":"No";
        // });
        // // $grid->column('password', __('Password'));
        // // $grid->column('remember_token', __('Remember token'));
        // $grid->column('created_at', __('Created at'));
        // $grid->column('updated_at', __('Updated at'));

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Order::findOrFail($id));

        $show->field('id', __('Oredr ID'));
        $show->field('user_id', __('UserID'));
        $show->field('order_amount', __('Amount'));
        $show->field('payment_status', __('PaymentStatus'));
        $show->field('payment_method', __('PaymentMethod'));
        $show->field('transaction_reference', __('TransactionRef'));
        $show->field('order_status', __('OrderStatus'));
        $show->field('confirmed', __('Confirmed'));
        $show->field('accepted', __('Accepted'));
        $show->field('scheduled', __('Scheduled'));
        $show->field('processing', __('Processing'));
        $show->field('handover', __('Handover'));
        $show->field('failed', __('Failed'));
        $show->field('scheduled_at', __('Scheduled_At'));
        $show->field('delivery_address_id', __('DeliveryAddressID'));
        $show->field('order_note', __('OrderNote'));
        $show->field('order_type', __('OrderType'));
        $show->field('created_at', __('CreatedAt'));
        $show->field('updated_at', __('UpdatedAt'));
        $show->field('delivery_charge', __('DeliveryCharge'));
        $show->field('delivery_address', __('DeliveryAddress'));
        $show->field('otp', __('OTP'));
        $show->field('pending', __('Pending'));
        $show->field('picked_up', __('PickedUp'));
        $show->field('delivered', __('Delivered'));
        $show->field('canceled', __('Canceled'));

        // $show->field('id', __('Id'));
        // $show->field('name', __('Name'));
        // $show->field('email', __('Email'));
        // $show->field('email_verified_at', __('Email verified at'));
        // $show->field('password', __('Password'));
        // $show->field('remember_token', __('Remember token'));
        // $show->field('created_at', __('Created at'));
        // $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Order());


        $form->display('id', __('Oredr ID'));
        $form->display('user_id', __('UserID'));
        $form->display('order_amount', __('Amount'));
        $form->display('payment_status', __('PaymentStatus'));
        $form->display('payment_method', __('PaymentMethod'));
        $form->display('transaction_reference', __('TransactionRef'));
        $form->display('order_status', __('OrderStatus'));
        $form->display('confirmed', __('Confirmed'));
        $form->display('accepted', __('Accepted'));
        $form->display('scheduled', __('Scheduled'));
        $form->display('processing', __('Processing'));
        $form->display('handover', __('Handover'));
        $form->display('failed', __('Failed'));
        $form->display('scheduled_at', __('Scheduled_At'));
        $form->display('delivery_address_id', __('DeliveryAddressID'));
        $form->display('order_note', __('OrderNote'));
        $form->display('order_type', __('OrderType'));
        $form->display('created_at', __('CreatedAt'));
        $form->display('updated_at', __('UpdatedAt'));
        $form->display('delivery_charge', __('DeliveryCharge'));
        $form->display('delivery_address', __('DeliveryAddress'));
        $form->display('otp', __('OTP'));
        $form->display('pending', __('Pending'));
        $form->display('picked_up', __('PickedUp'));
        $form->display('delivered', __('Delivered'));
        $form->display('canceled', __('Canceled'));

        // $form->text('name', __('Name'));
        // $form->email('email', __('Email'));
        // $form->datetime('email_verified_at', __('Email verified at'))->default(date('Y-m-d H:i:s'));
        // $form->password('password', __('Password'));
        // $form->text('remember_token', __('Remember token'));

        return $form;
    }
}
