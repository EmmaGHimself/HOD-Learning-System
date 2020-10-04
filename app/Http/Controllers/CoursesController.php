<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CoursesController extends Controller
{
    public function getMenAndWomenWear()
    {
        return view('course-men-and-women-wear');
    }
    public function getSelectedWomenWearAndDraping()
    {
        return view('course-selected-womenwear-draping');
    }
    public function getSelectedWomenWearAndBridal()
    {
        return view('course-selected-womenwear-and-bridal');
    }
    public function getCourtesyAndBraMaking()
    {
        return view('course-courtesy-and-bra-making');
    }
    public function getDressesOnStretchAndFabric()
    {
        return view('course-dresses-on-strech-fabric');
    }
    public function getWomenTopsAndBlouses()
    {
        return view('course-women-tops-and-blouses');
    }

    public function getLadiesSuitJackets()
    {
        return view('course-ladies-suit-jackets');
    }
    public function getWomenwearAndSkirts()
    {
        return view('course-womenwear-and-skirts');
    }

    public function getMenWearsOnPants()
    {
        return view('course-men-wear-on-pants');
    }
    public function getMenShirt()
    {
        return view('course-men-shirt');
    }
    public function getMenAndWomenwearDraping()
    {
        return view('course-men-and-women-draping');
    }
}
