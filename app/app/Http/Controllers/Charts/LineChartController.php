<?php


namespace App\Http\Controllers\Charts;


use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class LineChartController extends Controller
{
    public function index(Request $request)
    {
        $chartData = [
            'labels' => ['March', 'April', 'May', 'June'],
            'datasets' => [
                [
                    'label' => 'Sales',
                    'backgroundColor' => '#ed1313',
                    'data' => [rand(0, 3500), rand(0, 2300), rand(0, 2000), rand(0, 4500)]
                ],
                [
                    'label' => 'Sales New',
                    'backgroundColor' => '#3240a8',
                    'data' => [rand(0, 1500), rand(0, 2500), rand(0, 2000), rand(0, 4500)]
                ]
            ]
        ];
        return response()->json($chartData);
    }

}
