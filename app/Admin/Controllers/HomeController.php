<?php

namespace App\Admin\Controllers;

use App\Models\User;
use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;

class HomeController extends AdminController
{
    protected $title = 'Users';

    protected function grid()
    {
        $grid = new Grid(new User());

        $grid->column('id', __('Id'));
        $grid->column('name', __('Name'));
        $grid->column('email', __('Email'));
        $grid->column('password', __('Password'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

        return $grid;
    }

    protected function detail($id)
    {
        $show = new Show(User::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('email', __('Email'));
        $show->field('password', __('Password'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    protected function former()
    {
        $form = new Form(new User());

        // $form->textarea('name', __('Name'));
        // $form->textarea('email', __('Email'));
        // $form->textarea('password', __('Password'));

        // return $form;
        // $form = new Form();

        $form->action('example');

        $form->email('email')->default('qwe@aweq.com');
        $form->password('password');
        $form->text('name');
        $form->url('url');
        $form->color('color');
        $form->map('lat', 'lng');
        $form->date('date');
        $form->json('val');
        $form->dateRange('created_at', 'updated_at');

        echo $form->render();
    }
}
