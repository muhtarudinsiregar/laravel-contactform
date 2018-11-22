<?php
namespace MuhtarudinSiregar\Contactform\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use MuhtarudinSiregar\Contactform\Models\ContactForm;

class ContactFormController extends Controller
{
    public function index()
    {
        return view("contactform::index");
    }

    public function store(Request $request)
    {
        ContactForm::create($request->all());

        return redirect()->route('contact')->with(
            [
                'message' => 'Thank you, your mail has been sent successfully.',
                'type' => 'danger'
            ]
        );
    }
}
