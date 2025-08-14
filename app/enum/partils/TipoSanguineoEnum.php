<?php

namespace App\enum\partils;

enum TipoSanguineoEnum: string
{
    case A_POSITIVO = 'A+';
    case A_NEGATIVO = 'A-';
    case B_POSITIVO = 'B+';
    case B_NEGATIVO = 'B-';
    case AB_POSITIVO = 'AB+';
    case AB_NEGATIVO = 'AB-';
    case O_POSITIVO = 'O+';
    case O_NEGATIVO = 'O-';
}
