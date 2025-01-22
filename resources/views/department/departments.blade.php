<x-layout-app page-title="Departments">

    <div class="w-100 p-4">

        <h3>Departments</h3>
    
        <hr>

        @if($departments->count() === 0)
            
            <div class="text-center my-5">
                <p>No departments found.</p>
                <a href="{{ route('departments.new-department') }}" class="btn btn-primary">Create a new department</a>
            </div>

        @else
        
            <div class="mb-3">
                <a href="{{ route('departments.new-department') }}" class="btn btn-primary">Create a new department</a>
            </div>
        
            <table class="table" id="table">
                <thead class="table-dark">
                    <th>Departments</th>
                    <th></th>
                </thead>
                <tbody>

                    @foreach ($departments as $department)
                        
                        <tr>
                            <td>{{ $department->name }}</td>
                            <td>

                                <div class="d-flex gap-3 justify-content-end">
                                    @if(in_array($department->id, [1,2]))
                                        <i class="fa-solid fa-lock"></i>
                                    @else
                                        <a href="{{ route('departments.edit-department', ['id' => $department->id]) }}" class="btn btn-sm btn-outline-dark ms-3"><i class="fa-regular fa-pen-to-square me-2"></i>Edit</a>
                                        <a href="{{ route('departments.delete-department', ['id' => $department->id])}}" class="btn btn-sm btn-outline-dark ms-3"><i class="fa-regular fa-trash-can me-2"></i>Delete</a>
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
