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


        $grid->column('food_details', __('FoodDetails'))->width(300);
        //$grid->column('food_details');
        //$grid->column('food_details')->editable();
       // $grid->column('food_details')->color('#ffff00');
        $grid->column('quantity', __('Quantity'));
        $grid->column('tax_amount', __('TaxAmount'));
        $grid->column('created_at', __('CreatedAt'));

        $grid->column('updated_at', __('UpdatedAt'));
        $grid->column('test', __('Test'));





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




        return $form;
    }
}
