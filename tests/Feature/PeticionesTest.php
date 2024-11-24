<?php

namespace Tests\Feature;

use App\Models\Mascota;
use App\Models\User;
use App\Models\Vacuna;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PeticionesTest extends TestCase
{
    /** @test */
    public function usuario_consulta_ruta_asegura_200_muestra_texto(): void
    {
        $mascota = Mascota::factory()->create();

        $user = User::factory()->create();
        $this->actingAs($user);

        $response = $this->get('/mascota');
        
        $response->assertSee($mascota->nombre);
        
        $response->assertStatus(200);
    }

    /** @test */
    public function usuario_asegura_creacion_de_registro_y_redireccionamiento():void{
        $user = User::factory()->create();

        $vacunas = Vacuna::factory()->count(3)->create();

        $mascota = Mascota::factory()->make(['user_id' => $user->id]);

        $response = $this->actingAs($user)
            ->post(
                route('mascota.store'),
                $mascota->toArray() + ['vacunas' => $vacunas->pluck('id')->toArray()]
            );

        $response->assertRedirect('/mascota');

        $this->assertDatabaseHas('mascotas', $mascota->toArray());
    }

    /** @test */
    public function usuario_envia_informacion_incorrecta_asegura_error_en_validacion():void{
        $user = User::factory()->create();

        $vacunas = Vacuna::factory()->count(3)->create();

        $mascota = [
            'user_id' => $user->id,
            'nombre' => '',
            'tipo' => 'Perro',
            'sexo' => 'Macho',
            'edad' => '5 años',
            'padecimientos' => '',
        ];

        $response = $this->actingAs($user)
            ->post(
                route('mascota.store'),
                $mascota + ['vacunas' => $vacunas->pluck('id')->toArray()]
            );
        
        $response->assertInvalid(['nombre', 'padecimientos']);

        $this->assertDatabaseMissing('mascotas', [
            'nombre' => '',
            'padecimientos' => '',
        ]);
    }

    /** @test */
    public function usuario_elimina_registro_y_es_redireccionado():void{
        $user = User::factory()->create();

        $mascota = Mascota::factory()->create(['user_id' => $user->id]);

        $response = $this->actingAs($user)
            ->delete(route('mascota.destroy', $mascota->id));

        $response->assertRedirect('/mascota');

        $this->assertSoftDeleted('mascotas', $mascota->toArray());

    }
}
