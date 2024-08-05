<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointments;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\URL;
use Illuminate\Database\QueryException;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class AppointmentsController extends Controller
{
    // store Patient appointment
    public function store_appointment(Request $request){
        try {
            $validation = $request->validate([
                'first_name'        => 'required|string',
                'last_name'         =>  'required|string',
                'date_of_birth'     => 'required|date',
                'phone'             => 'required|string',
                'address'           => 'required|string',
                'reason_of_visit'   => 'required|string',
                'emergency_contact' => 'required|string',
                'email'             =>  'required|email'
            ]);

            DB::beginTransaction();
            $appointment = Appointments::create([
                'user_id'           => auth()->id(),
                'first_name'        => $validation['first_name'],
                'last_name'         => $validation['last_name'],
                'date_of_birth'     => $validation['date_of_birth'],
                'phone'             => $validation['phone'],
                'address'           => $validation['address'],
                'reason_of_visit'   => $validation['reason_of_visit'],
                'emergency_contact' => $validation['emergency_contact'],
                'email'             => $validation['email']
            ]);
            DB::commit();

            notify()->success('Appointment Requested');
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
    // Doctor Accept Appointment
    public function accept_appointment(Request $request, $id, $date){
        $appointment = Appointments::findOrFail($id);

        try {
            $user = auth()->user();
            $user_id = $user->id;
            //code...
            DB::beginTransaction();
            $appointment->update([
                'booked' => true,
                'doctor' => $user_id,
                'date_of_appointment'   =>  $date
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
