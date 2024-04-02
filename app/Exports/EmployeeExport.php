<?php

namespace App\Exports;

use App\Models\EmployeesModels;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;

class EmployeeExport implements FromCollection, WithMapping, WithHeadings, WithEvents
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return EmployeesModels::all();
    }

    public function headings(): array
    {
        return [
            'Name',
            'Email',
            'Telp',
            'Address',
            'Divisi',
            'Position',
        ];
    }

    public function map($EmployeesModels) : array {
        return [
            $EmployeesModels->name,
            $EmployeesModels->email,
            $EmployeesModels->telp,
            $EmployeesModels->address,
            $EmployeesModels->divisi,
            $EmployeesModels->position,
        ];
    }

    public function registerEvents(): array
    { 
        return [
            AfterSheet::class    => function(AfterSheet $event) {
                $cellRange = 'A1:W1'; // All headers
                $event->sheet->getDelegate()->getStyle($cellRange)->getFont()->setSize(12);
            },
        ];
    }
}
