<?php

namespace App\Enums;

enum TaskStatus: string
{
    case Pending = 'PENDING';
    case InProgress = 'INPROGRESS';
    case Completed = 'COMPLETED';
}
