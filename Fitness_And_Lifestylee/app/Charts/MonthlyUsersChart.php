<?php

namespace App\Charts;

use App\Models\Blog;
use App\Models\Product;
use App\Models\User;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class MonthlyUsersChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\DonutChart
    {
        $classes=Product::all()->count();
        $blog=Blog::all()->count();
        $user=User::all()->count();
        return $this->chart->donutChart()
            ->addData([$classes, $blog, $user])
            ->setLabels(['Classes', 'Blog', 'Account'])
            ->setHeight(280);
    }
}
