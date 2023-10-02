@include('master.app')
@include('master.layouts.navbar')
<div class="p-4 sm:ml-64">
    <div class="p-4  rounded-lg mt-14">
        @yield('content')
    </div>
 </div>
@include('master.layouts.end-body')
