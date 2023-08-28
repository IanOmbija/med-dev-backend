<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;

class PatientController extends Controller
{
    public function index()
    {
        $patients = Patient::with('gender', 'services')->get();
        return response()->json($patients);
    }

    public function store(Request $request)
    {
        //Log::info('Incoming request data:', $request->all()); // Log the incoming data
        Log::info('Incoming request data:', ['data' => $request->all()]);

        $patientData = $request->except('services'); 
        $patient = Patient::create($patientData); 
    
        if ($request->has('services') && is_array($request->services)) {
            $patient->services()->sync($request->services);

        Log::info('Services array:', $request->services);
        }

        Log::info('Patient data after creation:', $patient->toArray()); // Log the created patient

        return response()->json($patient, 201);
    }

    public function show($id)
    {
        $patient = Patient::with('gender', 'services')->find($id);
        if (!$patient) {
            return response()->json(['message' => 'Patient not found'], 404);
        }
        return response()->json($patient);
    }

    public function update(Request $request, $id)
    {
        $patient = Patient::find($id);
        if (!$patient) {
            return response()->json(['message' => 'Patient not found'], 404);
        }
        $patient->update($request->all());
        return response()->json($patient);
    }

    public function destroy($id)
    {
        $patient = Patient::find($id);
        if (!$patient) {
            return response()->json(['message' => 'Patient not found'], 404);
        }
        $patient->delete();
        return response()->json(null, 204);
    }
}
