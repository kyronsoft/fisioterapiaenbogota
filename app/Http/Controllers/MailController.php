<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function basic_email(Request $request)
    {
        $datos = array(
            "nombre" => $request->input("nombre"),
            "telefono" => $request->input("telefono"),
            "email" => $request->input("email"),
            "mensaje" => $request->input("mensaje"),
            "pregunta1" => $request->input("pregunta1"),
            "pregunta2" => $request->input("pregunta2"),
            "pregunta3" => $request->input("pregunta3"),
            "pregunta4" => $request->input("pregunta4"),
            "pregunta5" => $request->input("pregunta5")
        );

        $to_name = $datos["nombre"];
        $to_email = $datos["email"];
        $data = array(
            'name' => 'Adriana Lucía Ramírez Bonilla',
            "nombre" => $datos["nombre"],
            "mensaje" => $datos["mensaje"],
            "telefono" => $datos["telefono"],
            "pregunta1" => $datos["pregunta1"],
            "pregunta2" => $datos["pregunta2"],
            "pregunta3" => $datos["pregunta3"],
            "pregunta4" => $datos["pregunta4"],
            "pregunta5" => $datos["pregunta5"]
        );

        Mail::send(['html' => 'emails.mail'], $data, function ($message) use ($to_name, $to_email) {
            $message->to($to_email, $to_name)
                ->subject('Solicitud de Información');
            $message->from('info@fisioterapiaenbogota.com', 'Fisioterapia en Bogotá');
        });

        return redirect("/contactanos")->with("respuesta", "");
    }

    public function basic_email_en(Request $request)
    {
        $datos = array(
            "nombre" => $request->input("nombre"),
            "telefono" => $request->input("telefono"),
            "email" => $request->input("email"),
            "mensaje" => $request->input("mensaje"),
            "pregunta1" => $request->input("pregunta1"),
            "pregunta2" => $request->input("pregunta2"),
            "pregunta3" => $request->input("pregunta3"),
            "pregunta4" => $request->input("pregunta4"),
            "pregunta5" => $request->input("pregunta5")
        );

        $to_name = $datos["nombre"];
        $to_email = $datos["email"];
        $data = array(
            'name' => 'Adriana Lucía Ramírez Bonilla',
            "nombre" => $datos["nombre"],
            "mensaje" => $datos["mensaje"],
            "telefono" => $datos["telefono"],
            "pregunta1" => $datos["pregunta1"],
            "pregunta2" => $datos["pregunta2"],
            "pregunta3" => $datos["pregunta3"],
            "pregunta4" => $datos["pregunta4"],
            "pregunta5" => $datos["pregunta5"]
        );

        Mail::send(['html' => 'emails.mail_en'], $data, function ($message) use ($to_name, $to_email) {
            $message->to($to_email, $to_name)
                ->subject('Information Request');
            $message->from('info@fisioterapiaenbogota.com', 'Physiotherapy in Bogotá');
        });

        return redirect("/contact_us")->with("response", "");
    }

    public function basic_email_agenda(Request $request)
    {
        $datos = array(
            "nombre" => $request->input("nombre"),
            "telefono" => $request->input("telefono"),
            "email" => $request->input("email"),
            "mensaje" => $request->input("mensaje"),
            "hora" => $request->input("hora")
        );

        $to_name = $datos["nombre"];
        $to_email = $datos["email"];
        $data = array(
            'name' => 'Adriana Lucía Ramírez Bonilla',
            "nombre" => $datos["nombre"],
            "mensaje" => $datos["mensaje"],
            "telefono" => $datos["telefono"],
            "hora" => $datos["hora"]
        );

        Mail::send(['html' => 'emails.mail_agenda'], $data, function ($message) use ($to_name, $to_email) {
            $message->to($to_email, $to_name)
                ->subject('Agendar Consulta Gratis');
            $message->from('info@fisioterapiaenbogota.com', 'Fisioterapia en Bogotá');
        });

        return redirect("/screening")->with("respuesta", "");
    }

    public function basic_email_agenda_en(Request $request)
    {
        $datos = array(
            "nombre" => $request->input("nombre"),
            "telefono" => $request->input("telefono"),
            "email" => $request->input("email"),
            "mensaje" => $request->input("mensaje"),
            "hora" => $request->input("hora")
        );

        $to_name = $datos["nombre"];
        $to_email = $datos["email"];
        $data = array(
            'name' => 'Adriana Lucía Ramírez Bonilla',
            "nombre" => $datos["nombre"],
            "mensaje" => $datos["mensaje"],
            "telefono" => $datos["telefono"],
            "hora" => $datos["hora"]
        );

        Mail::send(['html' => 'emails.mail_agenda'], $data, function ($message) use ($to_name, $to_email) {
            $message->to($to_email, $to_name)
                ->subject('Book My Free Consultation');
            $message->from('info@fisioterapiaenbogota.com', 'Physiotherapy in Bogotá');
        });

        return redirect("/screening_en")->with("respuesta", "");
    }
}
