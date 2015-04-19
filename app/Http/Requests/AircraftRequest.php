<?php namespace Motty\Logbook\Http\Requests;

class AircraftRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return \Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'type' => 'string',
            'name' => 'string',
            'weight' => 'integer|min:0',
            'capacity' => 'integer|min:0',
            'engine_type' => 'string',
            'manufacturer' => 'string',
            'registration_number' => 'string',
        ];
    }
}
