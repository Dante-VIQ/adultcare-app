            <ul class="space-y-2">
    <li>
        <a href="{{ route('analysis') }}"
           class="flex items-center px-3 py-2 rounded hover:bg-purple-700 {{ request()->routeIs('analysis') ? 'bg-purple-700' : '' }}">
            <i class="fas fa-tachometer-alt mr-2"></i> Dashboard
        </a>
    </li>
    <li>
        <a href="{{ route('admin.bookings.index') }}"
           class="flex items-center justify-between px-3 py-2 rounded hover:bg-purple-700 {{ request()->routeIs('admin.bookings.*') ? 'bg-purple-700' : '' }}">
            <span><i class="fas fa-calendar-alt mr-2"></i> Bookings</span>
            <span class="bg-yellow-400 text-black px-2 py-0.5 rounded text-xs">{{ App\Models\Booking::where('status','pending')->count() }}</span>
        </a>
    </li>
        <li>
        <a href="{{ route('admin.view') }}"
           class="flex items-center justify-between px-3 py-2 rounded hover:bg-purple-700 {{ request()->routeIs('admin.view') ? 'bg-purple-700' : '' }}">
            <span><i class="fas fa-calendar-alt mr-2"></i> Employees</span>
      
        </a>
    </li>
        <li>
        <a href="team"
           class="flex items-center justify-between px-3 py-2 rounded hover:bg-purple-700 {{ request()->routeIs('team') ? 'bg-purple-700' : '' }}">
            <span><i class="fas fa-users mr-2"></i>Team</span>
        </a>
    </li>
        <li>
        <a href="admin/head"
           class="flex items-center justify-between px-3 py-2 rounded hover:bg-purple-700 {{ request()->routeIs('admin.head') ? 'bg-purple-700' : '' }}">
            <span><i class="fas fa-calendar-alt mr-2"></i> Images</span>
            <span class="bg-yellow-400 text-black px-2 py-0.5 rounded text-xs">{{ App\Models\Booking::where('status','pending')->count() }}</span>
        </a>
    </li>

        <li>
        <a href="{{ route('qr') }}"
           class="flex items-center justify-between px-3 py-2 rounded hover:bg-purple-700 {{ request()->routeIs('qr') ? 'bg-purple-700' : '' }}">
            <span><i class="fas fa-users mr-2"></i>Qr Code</span>
        </a>
    </li>
    <!-- More links -->
</ul>
