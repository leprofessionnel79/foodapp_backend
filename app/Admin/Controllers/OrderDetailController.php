<?php

namespace App\Admin\Controllers;

use App\Models\OrderDetail;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

use Encore\Admin\Layout\Content;

class OrderDetailController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'OrderDetail';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new OrderDetail());
        $grid->model()->latest();
        $grid->column('id', __('OredrDetail ID'));
       // $grid->id("Oredr ID");
        $grid->column('order_id', __('OrderID'));
        $grid->column('food_id', __('FoodID'));
        $grid->column('price', __('Price'));
        $grid->column('food_details', __('FoodDetails'));
        $grid->column('quantity', __('Quantity'));
        $grid->column('tax_amount', __('TaxAmount'));
        $grid->column('created_at', __('CreatedAt'));
        $grid->column('updated_at', __('UpdatedAt'));
        $grid->column('test', __('Test'));


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
        $show = new Show(OrderDetail::findOrFail($id));

        $show->field('id', __('OredrDetail ID'));
        $show->field('order_id', __('OrderID'));
        $show->field('food_id', __('FoodID'));
        $show->field('price', __('Price'));
        $show->field('food_details', __('FoodDetails'));
        $show->field('quantity', __('Quantity'));
        $show->field('tax_amount', __('TaxAmount'));
        $show->field('created_at', __('CreatedAt'));
        $show->field('updated_at', __('UpdatedAt'));
        $show->field('test', __('Test'));


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
        $form = new Form(new OrderDetail());


        $form->display('id', __('OredrDetail ID'));
        $form->display('order_id', __('OrderID'));
        $form->display('food_id', __('FoodID'));
        $form->display('price', __('Price'));
        $form->display('food_details', __('FoodDetails'));
        $form->display('quantity', __('Quantity'));
        $form->display('tax_amount', __('TaxAmount'));
        $form->display('created_at', __('CreatedAt'));
        $form->display('updated_at', __('UpdatedAt'));
        $form->display('test', __('Test'));


        // $form->text('name', __('Name'));
        // $form->email('email', __('Email'));
        // $form->datetime('email_verified_at', __('Email verified at'))->default(date('Y-m-d H:i:s'));
        // $form->password('password', __('Password'));
        // $form->text('remember_token', __('Remember token'));

        return $form;
    }
}
