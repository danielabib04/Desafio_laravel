<?php

namespace App\Http\Requests;

use App\Models\Appointment;
use Illuminate\Foundation\Http\FormRequest;

class AppointmentsFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules()
{
    return [
        'user_id' => ['required'],
        'animal_id' => ['required'],
        'startTime' => ['required'],
        'endTime' => [
            'required',
            function ($attribute, $value, $fail) {
            $data = $this->all();
            $appointments = Appointment::all();
            $data['startTime'] = date("Y-m-d H:i:s", strtotime($data['startTime']));
            $data['endTime'] = date("Y-m-d H:i:s", strtotime($data['endTime']));
                foreach ($appointments as $appointment) {
                    if (
                        (($data['user_id'] == $appointment->user_id) || ($data['animal_id'] == $appointment->animal_id)) &&
                        (($data['startTime'] >= $appointment->startTime && $data['startTime'] < $appointment->endTime) ||
                        ($data['endTime'] > $appointment->startTime && $data['endTime'] <= $appointment->endTime))
                    ) {
                        $fail('O horário da consulta coincide com outra consulta existente.');
                        return;
                    }
                }
            },
        ],
    ];
}

}
