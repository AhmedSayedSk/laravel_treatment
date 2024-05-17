<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\DrugBook;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function saveDoctorBook(Request $request)
    {
        $data = $request->validate([
            "name"=>"required",
            "email"=>"required|email",
            "phone"=>"required",
            "booking_date"=>"required|date",
            "doctor_id"=>"required",
            "specialty_id"=>"required",
        ]);

        $book = Book::create($data);

        session()->flash("success","Doctor booking has been success created, Your book number: ".$book->id);
        return redirect()->back();
    }

    public function saveDrugBook(Request $request)
    {
        $data = $request->validate([
            "patient_name"=>"required",
            "patient_mobile"=>"required",
            "patient_email"=>"required|email",
            "drug_id"=>"required",
        ]);

        $book = DrugBook::create($data);

        session()->flash("success","Drug booking has been success created, Your book number: ".$book->id);
        return redirect()->back();
    }
}
