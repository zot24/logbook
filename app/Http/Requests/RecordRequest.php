<?php namespace Motty\Logbook\Http\Requests;

class RecordRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'start_time' => 'required|date',
            'stop_time' => 'required|date',
            'num_landings' => 'required|integer|min:0',
            'num_dec_landings' => 'required|integer|min:0',
            'num_instrumental_approach' => 'required|integer|min:0'
        ];
    }
}
