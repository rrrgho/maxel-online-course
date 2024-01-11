<div class="card">
    <div class="card-header p-4">
        <img src="{{asset('assets/images/logo/logo.png')}}" alt="Logo">
    </div>
    <div class="card-body p-0">
        <div class="list-group rounded-0">
            <a href="{{route('admin-classes')}}" class="list-group-item list-group-item-action border-0 border-bottom {{Route::currentRouteName() === 'admin-classes' ? 'bg-warning' : ''}}"
                aria-current="true">
                <div class="d-flex w-100 justify-content-between">
                    <h6 class="mb-1">Classes</h6>
                </div>
            </a>
            <a href="{{route('admin-master-class-category')}}" class="list-group-item list-group-item-action border-0 border-bottom {{Route::currentRouteName() === 'admin-master-class-category' ? 'bg-warning' : ''}}" aria-current="true">
                <div class="d-flex w-100 justify-content-between">
                    <h6 class="mb-1">Class Category</h6>
                </div>
            </a>
            <a href="{{route('admin-basic-class-pricelist')}}" class="list-group-item list-group-item-action border-0 border-bottom {{Route::currentRouteName() === 'admin-basic-class-pricelist' ? 'bg-warning' : ''}}" aria-current="true">
                <div class="d-flex w-100 justify-content-between">
                    <h6 class="mb-1">Basic Class Price List</h6>
                </div>
            </a>
            <a href="{{route('admin-subscriber-special-class')}}" class="list-group-item list-group-item-action border-0 border-bottom {{Route::currentRouteName() === 'admin-subscriber-special-class' ? 'bg-warning' : ''}}" aria-current="true">
                <div class="d-flex w-100 justify-content-between">
                    <h6 class="mb-1">Special Subscribers</h6>
                </div>
            </a>
            <a href="{{route('admin-subscriber-basic-class')}}" class="list-group-item list-group-item-action border-0 border-bottom {{Route::currentRouteName() === 'admin-subscriber-basic-class' ? 'bg-warning' : ''}}" aria-current="true">
                <div class="d-flex w-100 justify-content-between">
                    <h6 class="mb-1">Basic Subscribers</h6>
                </div>
            </a>
            <a href="{{route('admin-logout')}}" class="list-group-item list-group-item-action border-0 border-bottom" aria-current="true">
                <div class="d-flex w-100 justify-content-between">
                    <h6 class="mb-1">Logout</h6>
                </div>
            </a>
        </div>
    </div>
</div>
