<x-layout-app page-title="Home">

    <div class="w-100 p-4">

        <h3>Home</h3>

        <hr>

        <div class="d-flex">
            <x-info-title-value item-title="Total colaborators" :item-value="$data['total_colaborators']" />
            <x-info-title-value item-title="Total deleted colaborators" :item-value="$data['total_colaborators_deleted']" />
            <x-info-title-value item-title="Total salary" :item-value="$data['total_salary']" />
        </div>

        <hr>

        <div class="d-flex">
            <x-info-title-collection item-title="Colaborators by department" :collection="$data['total_colaborators_per_department']" />
            <x-info-title-collection item-title="Total salary by department" :collection="$data['total_salary_by_department']" />
        </div>

    </div>

</x-layout-app>