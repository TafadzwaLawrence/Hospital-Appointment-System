<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointments;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\URL;
use Illuminate\Database\QueryException;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class AppointmentsController extends Controller
{
    // Doctor Accept Appointment
    public function accept_appointment(Request $request, $id){
        $appointment = Appointments::findOrFail($id);

        try {
            $user = auth()->user();
            $user_id = $user->id;
            //code...
            DB::beginTransaction();
            $appointment->update([
                'booked' => true,
                'doctor' => $user_id,
            ]);

            notify()->success('Appointment Accepted');

            DB::commit();
            return redirect()->back();
        } catch (ModelNotFoundException $e) {
            DB::Rollback();
            Log::error('Model error: ' . $e->getMessage());
            return response()->json([
                'error'         => 'Not Found',
                'message'       => 'No events have been created yet.',
                'description'   => $e->getMessage(),
            ], 404);
        }catch (QueryException $e) {
            DB::Rollback();
            Log::error('Database error: ' . $e->getMessage());
            return response()->json([
                'error' => 'Query Exception',
                'message' => 'Error retrieving events. Please try again later.',
                'description' =>  $e->getMessage()
            ], 503);
        }catch (\Exception $e) {
            DB::Rollback();
            Log::error('Internal Server Error: ' . $e->getMessage());
            return response()->json([
                'error' => 'Internal Server Error',
                'message' =>  'Something went wrong. Please try again later.',
                'description' =>  $e->getMessage()
            ], 500);
        } finally {
            DB::disconnect();
        }
    }
}
