<?php

use Illuminate\Database\Seeder;

class RoleSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Bouncer::allow('administrator')->to('users_manage');
        Bouncer::allow('veterinario')->to('crear_cita');
        Bouncer::allow('veterinario')->to('cancelar_cita');
        Bouncer::allow('veterinario')->to('agregar_especie');
        Bouncer::allow('veterinario')->to('eliminar_especie');
        Bouncer::allow('veterinario')->to('agregar_raza');
        Bouncer::allow('veterinario')->to('eliminar_raza');
        Bouncer::allow('cliente')->to('agregar_mascota');
        Bouncer::allow('cliente')->to('eliminar_sesion');

        
    }
}
