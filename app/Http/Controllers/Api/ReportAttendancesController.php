<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\AttendanceResource;
use App\Model\Attendance;

class ReportAttendancesController extends Controller
{
    public function update(Attendance $attendance)
    {
        $attendance->flag();
        return new AttendanceResource($attendance);
    }
}
