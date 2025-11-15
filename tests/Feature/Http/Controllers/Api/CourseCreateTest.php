<?php

namespace Tests\Feature\Http\Controllers\Api;

use Tests\TestCase;
use App\Http\Requests\Api\Resource\Course\ResourceCourseRequest;
use Illuminate\Support\Facades\Validator;

class CourseCreateTest extends TestCase
{
    public function test_nao_deve_permitir_hora_falta_negativa(): void
    {
        $data = ['hora_falta' => -30];
        $request = new ResourceCourseRequest();
        $validator = Validator::make($data, $request->rules());

        $this->assertTrue($validator->fails());
        $this->assertArrayHasKey('hora_falta', $validator->errors()->messages());
    }

    public function test_nao_deve_permitir_qtd_etapas_negativa(): void
    {
        $data = ['qtd_etapas' => -5];
        $request = new ResourceCourseRequest();
        $validator = Validator::make($data, $request->rules());

        $this->assertTrue($validator->fails());
        $this->assertArrayHasKey('qtd_etapas', $validator->errors()->messages());
    }

    public function test_nao_deve_permitir_carga_horaria_negativa(): void
    {
        $data = ['carga_horaria' => -10];
        $request = new ResourceCourseRequest();
        $validator = Validator::make($data, $request->rules());

        $this->assertTrue($validator->fails());
        $this->assertArrayHasKey('carga_horaria', $validator->errors()->messages());
    }
}
