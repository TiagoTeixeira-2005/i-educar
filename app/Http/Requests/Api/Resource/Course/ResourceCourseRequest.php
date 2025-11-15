<?php

namespace App\Http\Requests\Api\Resource\Course;

use App\Http\Requests\Api\Resource\ResourceRequest;

class ResourceCourseRequest extends ResourceRequest
{
    public function rules(): array
    {
        return [
            'institution' => ['required_without_all:school,course', 'nullable', 'integer', 'min:1'],
            'school' => ['nullable', 'integer', 'min:1'],
            'standard_calendar' => ['nullable', 'boolean'],
            'course' => ['nullable', 'integer', 'min:1'],
            'hora_falta' => ['required', 'numeric', 'min:0'],
            'qtd_etapas' => ['nullable', 'integer', 'min:0'],     
            'carga_horaria' => ['nullable', 'numeric', 'min:0'], 
        ];
    }

    public function attributes()
    {
        return [
            'institution' => 'Instituição',
            'school' => 'Escola',
            'standard_calendar' => 'Sem Padrão Escolar',
            'course' => 'Curso',
            'hora_falta' => 'Hora de falta', 
            'qtd_etapas' => 'Quantidade de etapas',
            'carga_horaria' => 'Carga horária',
        ];
    }
}