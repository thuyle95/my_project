<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Repositories\CandidateRepository;
use App\Services\CandidateService;
use Illuminate\Http\Request;
use Kjmtrue\VietnamZone\Models\Province;

class CandidateController extends Controller
{
    protected $candidateService;
    protected $candidateRepository;
    public function __construct(CandidateService $candidateService, CandidateRepository $candidateRepository)
    {
        $this->candidateService = $candidateService;
        $this->candidateRepository = $candidateRepository;
    }
    public function index()
    {
        $candidates = $this->candidateService->getAll();
//        return view('candidates.list', compact('candidates'));
        return response()->json($candidates, 200);
    }

    public function create()
    {
        $user = User::all();
        $provinces = Province::all();
        return view('candidates.create', compact('user', 'provinces'));
//        return response()->json($user, 201);
    }

    public function store(Request $request)
    {
        $this->candidateService->store($request);
//        return response()->json("Success",201);
        return redirect('');
    }

    public function detail($id)
    {
        $candidate = $this->candidateService->getById($id);
        return view('candidates.detail', compact('candidate'));
//        return response()->json($candidate, 200);
    }

    public function edit($id)
    {
        $candidate = $this->candidateService->getById($id);
        return view('candidates.update', compact('candidate'));
//        return response()->json($candidate, 200);
    }

    public function update(Request $request, $id)
    {
        $this->candidateService->update($id, $request);
//        return response()->json('success', 200);
        return redirect()->route('candidates.index');
    }

    public function candidateAdmin()
    {
        $candidates = $this->candidateService->getAll();
        return view('backend.candidates.list', compact('candidates'));
    }
    public function candidateDelete($id)
    {
        $this->candidateRepository->deleteById($id);
        return redirect('admin/candidate');
    }
}
