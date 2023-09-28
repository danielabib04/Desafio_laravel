<?php

namespace App\Providers;

use App\Repositories\EloquentOwnerRepository;
use App\Repositories\EloquentAnimalRepository;
use App\Repositories\EloquentAppointmentRepository;
use App\Repositories\AnimalRepository;
use App\Repositories\AppointmentRepository;
use App\Repositories\EloquentEmployeeRepository;
use App\Repositories\EmployeeRepository;
use App\Repositories\OwnerRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryProvider extends ServiceProvider
{
    public array $bindings = [
        OwnerRepository::class => EloquentOwnerRepository::class,
        AnimalRepository::class => EloquentAnimalRepository::class,
        AppointmentRepository::class => EloquentAppointmentRepository::class,
        EmployeeRepository::class => EloquentEmployeeRepository::class,
    ];
}
