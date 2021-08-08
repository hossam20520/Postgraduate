<?php

namespace App\Http\Controllers\Admin;

use LaravelDaily\LaravelCharts\Classes\LaravelChart;

class HomeController
{
    public function index()
    {
        $settings1 = [
            'chart_title'        => 'Users',
            'chart_type'         => 'pie',
            'report_type'        => 'group_by_string',
            'model'              => 'App\Models\Role',
            'group_by_field'     => 'title',
            'aggregate_function' => 'count',
            'filter_field'       => 'created_at',
            'filter_period'      => 'year',
            'column_class'       => 'col-md-3',
            'entries_number'     => '5',
            'translation_key'    => 'role',
        ];

        $chart1 = new LaravelChart($settings1);

        return view('home', compact('chart1'));
    }
}
