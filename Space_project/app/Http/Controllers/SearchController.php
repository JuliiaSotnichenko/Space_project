<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    
   public function index()
   {
   return view('/search');
   }

   public function search(Request $request)
   {

   $output="";
   $allFligth=DB::table('flights')->where('itinerary','LIKE','%'.$request->search."%")->get();

   if($allFligth)
   {
      // foreach ($allFligth as $key => $fligth) {
         // $output.='<tr>'.
         // '<td>'.$fligth->id.'</td>'.
         // '<td>'.$fligth->itinerary.'</td>'.
         // '<td>'.$fligth->description.'</td>'.
         // '<td>'.$fligth->price.'</td>'.
         // '</tr>';

      

      // foreach ($products as $key => $product) {
      //    $output.='<tr>'.
      //    '<td>'.$product->id.'</td>'.
      //    '<td>'.$product->itinerary.'</td>'.
      //    '<td>'.$product->description.'</td>'.
      //    '<td>'.$product->price.'</td>'.
      //    '</tr>';


    
      return view('FrontOffice.booking.searchBooking', ['allFligth'=>$allFligth]);
   }

}
}





