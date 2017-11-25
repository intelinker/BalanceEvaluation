<?php

namespace App\Http\Controllers;

use App\Pattern;
use Illuminate\Http\Request;
use Khill\Lavacharts\Lavacharts;

class PatternController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pattern  $pattern
     * @return \Illuminate\Http\Response
     */
    public function show(Pattern $pattern)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pattern  $pattern
     * @return \Illuminate\Http\Response
     */
    public function edit(Pattern $pattern)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pattern  $pattern
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pattern $pattern)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pattern  $pattern
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pattern $pattern)
    {
        //
    }

    public function showChart() {
        $chartjs = new Chart->chartjs
            ->name('lineChartTest')
            ->type('line')
            ->size(['width' => 400, 'height' => 200])
            ->labels(['January', 'February', 'March', 'April', 'May', 'June', 'July'])
            ->datasets([
                [
                    "label" => "My First dataset",
                    'backgroundColor' => "rgba(38, 185, 154, 0.31)",
                    'borderColor' => "rgba(38, 185, 154, 0.7)",
                    "pointBorderColor" => "rgba(38, 185, 154, 0.7)",
                    "pointBackgroundColor" => "rgba(38, 185, 154, 0.7)",
                    "pointHoverBackgroundColor" => "#fff",
                    "pointHoverBorderColor" => "rgba(220,220,220,1)",
                    'data' => [65, 59, 80, 81, 56, 55, 40],
                ],
                [
                    "label" => "My Second dataset",
                    'backgroundColor' => "rgba(38, 185, 154, 0.31)",
                    'borderColor' => "rgba(38, 185, 154, 0.7)",
                    "pointBorderColor" => "rgba(38, 185, 154, 0.7)",
                    "pointBackgroundColor" => "rgba(38, 185, 154, 0.7)",
                    "pointHoverBackgroundColor" => "#fff",
                    "pointHoverBorderColor" => "rgba(220,220,220,1)",
                    'data' => [12, 33, 44, 44, 55, 23, 40],
                ]
            ])
            ->options([]);

        return view('welcome', compact('chartjs'));

        //        $lava = new Lavacharts();
//        $stocksTable = $lava->DataTable();  // Lava::DataTable() if using Laravel
//
//        $stocksTable->addDateColumn('Day of Month')
//            ->addNumberColumn('Projected')
//            ->addNumberColumn('Official');
//
//// Random Data For Example
//        for ($a = 1; $a < 30; $a++) {
//            $stocksTable->addRow([
//                '2015-10-' . $a, rand(800,1000), rand(800,1000)
//            ]);
//        }


//        $lava = new Lavacharts; // See note below for Laravel
//
//        $finances = $lava->DataTable();
//
//        $finances->addDateColumn('Year')
//            ->addNumberColumn('正常状态')
//            ->addNumberColumn('Expenses')
//            ->addNumberColumn('Net Worth')
//            ->addRow(['2009-1-1', 1100, 490, 1324])
//            ->addRow(['2010-1-1', 1000, 400, 1524])
//            ->addRow(['2011-1-1', 1400, 450, 1351])
//            ->addRow(['2012-1-1', 1250, 600, 1243])
//            ->addRow(['2013-1-1', 1100, 550, 1462]);
//
//        $lava->ComboChart('Finances', $finances, [
//            'title' => '平衡能力模型',
//            'titleTextStyle' => [
//                'color'    => 'rgb(123, 65, 89)',
//                'fontSize' => 16
//            ],
//            'legend' => [
//                'position' => 'in'
//            ],
//            'seriesType' => 'bars',
//            'series' => [
//                2 => ['type' => 'line']
//            ]
//        ]);
//        return view('welcome', ['lava' => $lava]);
    }
}
