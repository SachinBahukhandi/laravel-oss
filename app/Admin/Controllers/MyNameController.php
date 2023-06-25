<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\Name;

class MyNameController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Name';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Name());

        $grid->column('id', __('Id'));
        $grid->column('small_description', __('Small description'));
        $grid->column('videolink', __('Videolink'));
        $grid->column('titledata', __('Titledata'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

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
        $show = new Show(Name::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('small_description', __('Small description'));
        $show->field('videolink', __('Videolink'));
        $show->field('titledata', __('Titledata'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Name());

        $form->text('small_description', __('Small description'));
        $form->text('videolink', __('Videolink'));
        $form->text('titledata', __('Titledata'));

        return $form;
    }
}
