<x-layout-app page-title="Human resources">

    <div class="w-100 p-4">

        <h3>Human Resources Colaborators</h3>
    
        <hr>

        @if($colaborators->count() === 0)
            
            <div class="text-center my-5">
                <p>No colaborators found.</p>
                <a href="{{ route('colaborators.rh.new-colaborator') }}" class="btn btn-primary">Create a new colaborator</a>
            </div>

        @else
        
            <div class="mb-3">
                <a href="{{ route('colaborators.rh.new-colaborator') }}" class="btn btn-primary">Create a new colaborator</a>
            </div>
        
            <table class="table" id="table">
                <thead class="table-dark">
                    <th>Name</th>
                    <th>Email</th>
                    <th>Active</th>
                    <th>Department</th>
                    <th>Role</th>
                    <th>Admisssion date</th>
                    <th>Salary</th>
                    <th></th>
                </thead>
                <tbody>

                    @foreach ($colaborators as $colaborator)
                        
                        <tr>
                            <td>{{ $colaborator->name }}</td>
                            <td>{{ $colaborator->email }}</td>
                            <td>
                                @empty($colaborator->email_verified_at)
                                    <span class="badge bg-danger">No</span>
                                @else
                                    <span class="badge bg-success">Yes</span>
                                @endif
                            </td>

                            <td>{{ $colaborator->department->name ?? "-" }}</td>
                            <td>{{ $colaborator->role }}</td>
                            <td>{{ $colaborator->detail->admission_date }}</td>
                            <td>{{ $colaborator->detail->salary }} $</td>

                            <td>
                                
                                <div class="d-flex gap-3 justify-content-end">
                                    @empty($colaborator->deleted_at)
                                        <a href="{{ route('colaborators.rh.edit-colaborator', ['id' => $colaborator->id]) }}" class="btn btn-sm btn-outline-dark ms-3"><i class="fa-regular fa-pen-to-square me-2"></i>Edit</a>
                                        <a href="{{ route('colaborators.rh.delete-colaborator', ['id' => $colaborator->id]) }}" class="btn btn-sm btn-outline-dark ms-3"><i class="fa-regular fa-trash-can me-2"></i>Delete</a>
                                    @else
                                        <a href="{{ route('colaborators.rh.restore', ['id' => $colaborator->id]) }}" class="btn btn-sm btn-outline-dark ms-3"><i class="fa-solid fa-trash-arrow-up me-2"></i>Restore</a>
                                    @endif
                                </div>

                            </td>
                        </tr>

                    @endforeach

                </tbody>
            </table>

        @endif
    
    </div>

</x-layout-app>
